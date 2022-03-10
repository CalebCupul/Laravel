@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Puerto Vallarta Suburbs</h1>
@stop

@section('content')

<!-- <a href="/usuarios/create" role="button" class="btn btn-primary">Registrar usuario</a> -->

    <div class="card p-3 mt-3">
        <table class="table table-striped mt-4" id="suburbs">
            <thead class="text-center">
                <tr>
                    <th>State</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>Suburb</th>
                    <th>Actions</th>
                </tr>
            </thead>
    
            <tbody class="text-center">
                @foreach ($suburbs as $suburb)
                    <tr>
                        <td class="align-middle">{{ $suburb->state }}</td>
                        <td class="align-middle">{{ $suburb->city }}</td>
                        <td class="align-middle">{{ $suburb->zipCode }}</td>
                        <td class="align-middle">{{ $suburb->suburb }}</td>
                        <td class="align-middle"><a href="{{ route('suburb.show', $suburb->id) }}" role="button" class="btn btn-info">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('#suburbs').DataTable();
    </script>
    @stop
