@extends('layout.app')

@section('content')

    <h2>Laravel DataTable - Bootstrap 4 style</h2>
    <table class="table table-hover table-bordered responsive" id="laravel_datatable" style="width: 100%">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created at</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created at</th>
        </tr>
        </tfoot>
    </table>

    @stop

@push('script')
    <script>
        $(document).ready( function () {
            $.fn.dataTable.ext.errMode = 'throw'; // Para mostrar errores en la consola
            $('#laravel_datatable').DataTable({ //Inicializamos el datatable
                processing: true,
                serverSide: true,
                "scrollX": true,

                ajax: "{{ url('users-list') }}", //Ruta de la peticion de la data
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json" //Aqui se podria cargar localmente
                },
                columns: [ //Columnas que deben ir acorde a las columnas existentes en la BD y dentro del Thead
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' }
                ]
            });
        });

    </script>
@endpush


