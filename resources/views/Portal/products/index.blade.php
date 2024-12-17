@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<link href="https://unpkg.com/tabulator-tables@5.4.4/dist/css/tabulator.min.css" rel="stylesheet">
<script src="https://unpkg.com/tabulator-tables@5.4.4/dist/js/tabulator.min.js"></script>

 <!-- Start::page-header -->
 <div class="md:flex block items-center justify-between my-6 page-header-breadcrumb">
    <div>
        <h4 class="mb-0 text-defaulttextcolor font-medium">Productos</h4>
        <p class="-mt-[0.2rem] mb-0 text-textmuted">Lista de productos</p>
    </div>
  
</div>
<!-- End::page-header -->

<!-- Start::row-1 -->
<div class="grid grid-cols-12 gap-6">
<div class="col-span-12">
    <div class="box">
    <div class="box-header">
        <h5 class="box-title">Basic datatable</h5>
    </div>
    <div class="box-body">
        <div class="overflow-auto table-bordered">
            <div id="basic-table"></div>
        </div>
    </div>
    </div>
</div>
</div>
<!-- End::row-1 -->

<!-- Start::row-3 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Reactivity DataTable</h5>
                <!-- Barra de búsqueda -->
            </div>
            <div class="box-body space-y-3">
                <div class="reactivity-data">
                    <button type="button" class="ti-btn ti-btn-primary" id="reactivity-add">Add New Row</button>
                    <button type="button" class="ti-btn ti-btn-primary" id="reactivity-delete">Remove Row</button>
                    <button type="button" class="ti-btn ti-btn-primary" id="clear">Empty the table</button>
                    <button type="button" class="ti-btn ti-btn-primary" id="reset">Reset</button>
                    <input 
                    type="text" 
                    id="search-bar" 
                    class="ti-input ti-border" 
                    placeholder="Buscar..." 
                    style="margin-left: 20px; width: 200px;">
                </div>
                <div class="overflow-hidden table-bordered">
                    <div id="reactivity-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End::row-3 -->

<!-- Start::row-3 -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Reactivity DataTable</h5>
                <!-- Barra de búsqueda -->
            </div>
            <div class="box-body space-y-3">
                <div class="reactivity-data">
                    <table id="reactivity-table2" class="ti-custom-table ti-striped-table ti-custom-table-hover" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Categoria</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->nombre }}</td>
                                    <td>{{ $product->precio }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">Editar</a> {{-- {{ route('products.edit', $product->id) }} --}}
                                        <form  method="POST" style="display:inline;"> {{-- action="{{ route('products.destroy', $product->id) }}" --}}
                                            @csrf
                                            {{-- @method('DELETE') --}}
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <input 
                    type="text" 
                    id="search-bar" 
                    class="ti-input ti-border" 
                    placeholder="Buscar..." 
                    style="margin-left: 20px; width: 200px;">
                </div>
                <div class="overflow-hidden table-bordered">
                    <div id="reactivity-table2" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End::row-3 -->

<script>
    $(document).ready(function () {
        $('#reactivity-table2').DataTable({
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
            }
        });
    });
</script>

{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Inicializa Tabulator
        var table = new Tabulator("#reactivity-table2", {
            ajaxURL: "{{ route('products.index') }}", // URL generada por Laravel
            ajaxConfig: "GET", // Tipo de petición HTTP
            layout: "fitColumns", // Ajustar las columnas al contenedor
            pagination: "local", // Paginación local
            paginationSize: 10, // Filas por página
            paginationSizeSelector: [5, 10, 20], // Selector de tamaño de página
            columns: [
                { title: "ID", field: "id", sorter: "number", width: 50 },
                { title: "Nombre", field: "nombre", sorter: "string", width: 200 },
                { title: "Precio", field: "precio", sorter: "number", width: 100 },
                { title: "Categoria", field: "category_id", sorter: "string", width: 100 },
                {
                    title: "Acciones",
                    formatter: function (cell, formatterParams) {
                        // Botones personalizados
                        var id = cell.getRow().getData().id;
                        return `
                            <a href="/products/${id}/edit" class="btn btn-sm btn-primary">Editar</a>
                            <form method="POST" action="/products/${id}" style="display:inline;" onsubmit="return confirm('¿Estás seguro?');">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>`;
                    },
                },
            ],
        });
        var searchBar = document.getElementById("search-bar");
        searchBar.addEventListener("keyup", function () {
            var query = searchBar.value.toLowerCase();
            if (query) {
                // Aplica filtros si hay un texto ingresado
                table.setFilter([
                    { field: "nombre", type: "like", value: query },
                    { field: "precio", type: "like", value: query },
                    { field: "category_id", type: "like", value: query },
                ]);
            } else {
                // Limpia los filtros si el campo está vacío
                table.clearFilter();
            }
        });
    });
</script> --}}
<!-- SCRIPTS -->
           
<!-- END SCRIPTS -->

@endsection