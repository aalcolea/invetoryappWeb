<?php
namespace App\Http\Controllers\Portal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory\Producto;
use App\Models\Inventory\Stock;
use App\Models\Inventory\MovimientosStock;
use App\Models\Inventory\Category;
use App\Http\Resources\ProductoResource;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Producto::all();
            return response()->json($products);
        }
        $products = Producto::all();

        return view('Portal.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('Portal.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
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
            'codigo_barras.unique' => 'El código de barras ya está registrado',
            'descripcion.string' => 'La descripción debe ser un texto',
            'category_id.integer' => 'El ID de la categoría debe ser un número entero',
        ]);

        try {
            $producto = Producto::create($validatedData);
            
            Stock::create([
                'producto_id' => $producto->id,
                'cantidad' => 1,
                'estado' => 'disponible'
            ]);

            MovimientosStock::create([
                'producto_id' => $producto->id,
                'cantidad' => 1,
                'tipo_movimiento' => 'alta',
                'usuario_id' => auth()->id()
            ]);

            return redirect()->route('products.index')
                           ->with('success', 'Producto creado exitosamente');

        } catch(\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Error al crear el producto: ' . $e->getMessage())
                           ->withInput();
        }
    }

    public function edit($id)
    {
        $producto = Producto::with('stock')->findOrFail($id);
        $categories = Category::all();
        return view('Portal.products.edit', compact('producto', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'codigo_barras' => 'required|unique:productos,codigo_barras,' . $id,
            'descripcion' => 'nullable|string',
            'category_id' => 'required|integer',
            'cant' => 'nullable|integer'
        ]);

        try {
            $producto = Producto::findOrFail($id);
            $cant = $request->input('cant');

            $stock = Stock::where('producto_id', $producto->id)->first();
            if(!$stock) {
                $stock = Stock::create([
                    'producto_id' => $producto->id,
                    'cantidad' => 0,
                    'estado' => 'disponible'
                ]);
            }

            if($cant) {
                $stock->cantidad = $cant;
                $stock->save();

                MovimientosStock::create([
                    'producto_id' => $producto->id,
                    'cantidad' => $cant,
                    'tipo_movimiento' => 'ajuste',
                    'usuario_id' => auth()->id()
                ]);
            }

            $producto->update($validatedData);

            return redirect()->route('products.index')
                           ->with('success', 'Producto actualizado exitosamente');

        } catch(\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Error al actualizar el producto: ' . $e->getMessage())
                           ->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $producto = Producto::findOrFail($id);
            $producto->delete();
            
            return redirect()->route('products.index')
                           ->with('success', 'Producto eliminado exitosamente');
        } catch(\Exception $e) {
            return redirect()->back()
                           ->with('error', 'Error al eliminar el producto');
        }
    }
    public function testFly(){
        $products = Producto::all();
        return response()->json(['message' => 'Procutos dev', 'products' => $products], 201);
    }
}