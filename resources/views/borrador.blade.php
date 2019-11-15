<!DOCTYPE html>

<html lang="en">
<head>
    <title>Laravel DataTable - Bootstrap 4 style</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <link  href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="container py-4">
    <h2>Laravel DataTable - Bootstrap 4 style</h2>
    <table class="table table-hover table-bordered" id="laravel_datatable">
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
</div>
<script>
    $(document).ready( function () {
        $.fn.dataTable.ext.errMode = 'throw';
        $('#laravel_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('users-list') }}",
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json" //Aqui se podria cargar localmente
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' }
            ]
        });
    });
</script>
</body>
</html>

