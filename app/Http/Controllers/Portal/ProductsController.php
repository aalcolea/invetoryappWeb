<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory\Producto;
use App\Http\Resources\ProductoResource;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        // Verifica si la solicitud es AJAX (para Tabulator)
        if ($request->ajax()) {
            $products = Producto::all(); // O aplica paginación si es necesario
            return response()->json($products);
        }
        $products = Producto::all();

        // Si no es AJAX, retorna la vista normal
        return view('Portal.products.index', compact('products'));
    }
    public function create() {
        return view('Portal.products.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'codigo_barras' => 'required|unique:productos,codigo_barras',
            'descripcion' => 'nullable|string',
            'category_id' => 'nullable|integer',
        ], 
        [
            'nombre.required' => 'El nombre del producto es obligatorio',
            'precio.required' => 'El precio es obligatorio',
            'precio.numeric' => 'El precio debe ser un número',
            'codigo_barras.required' => 'El código de barras es obligatorio',
            'codigo_barras.unique' => 'El código de barras ya está registrado, debe ser único',
            'descripcion.string' => 'La descripción debe ser un texto',
            'category_id.integer' => 'El ID de la categoría debe ser un número entero',
        ]);

        try {
            $producto = Producto::create($validatedData);
            $stock = Stock::where('producto_id', $producto->id)->first();
            if ($stock) {
                $stock->increment('cantidad', 1);
            } else {
                Stock::create([
                    'producto_id' => $producto->id,
                    'cantidad' => 1,
                    'estado' => 'disponible'
                ]);
            }
            MovimientosStock::create([
                'producto_id' => $producto->id,
                'cantidad' => 1,
                'tipo_movimiento' => 'alta',
                'usuario_id' => auth()->user()->id ?? null
            ]);
            return redirect()->route('products.index')
                ->with('success', 'Producto creado y stock actualizado exitosamente');

        } catch (\Exception $e) {
            return redirect()->route('products.index')
                ->with('error', 'Error al crear el producto: ' . $e->getMessage());
        }
    }
}
