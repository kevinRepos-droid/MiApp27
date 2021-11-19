@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Acción</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                         
                                
                                <form 
                                    action="{{url('/users/'.$usuario->id)}}"
                                    method="POST"
                                    class="d-inline"
                                >
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button 
                                        type="submit" 
                                        onclick="return confirm('¿Estas seguro?')"
                                        value="delete"
                                        class="btn btn-danger"
                                    >Borrar
                                    </button>

    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection