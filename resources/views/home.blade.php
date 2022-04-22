@extends('adminlte::page')

@section('title', 'Doctores')

{{-- INGRESANDO UN PLUGIN PARA LA HOJA --}}
{{-- @Section('plugins.Datatables', true) --}}
@Section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Doctores</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="cart-title">Doctores</h1>
        </div>
        <div class="card-body">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nam? Iure nemo doloribus dolores assumenda libero quisquam fuga ipsam amet, unde totam. Error dolorem porro id repudiandae minus maxime. Labore!</p>
        </div>
    </div>
    
 @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    {{-- <script>
        Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
)
    </script> --}}
    
@stop