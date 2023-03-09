@extends("layout")
@section("contenido")
    <a href="{{route("alumno.create")}}">Nuevo Alumno</a>
    <table class="table-auto border-separate">
        <caption>Listado de alumnos</caption>
        <tr class="border">
            <th class="border-2">Nombre</th>
            <th class="border-2">telefono</th>
            <th class="border-2">direccion</th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr class="border">
                <td class="border">{{$alumno->nombre}}</td>
                <td class="border">{{$alumno->telefono}}</td>
                <td class="border">{{$alumno->direccion}}</td>
                </td>
                <td class="border">
                    <a href="{{route("alumno.edit", $alumno->id)}}">Editar</a>
                </td>
                <td>
                <form action="{{route("alumno.destroy", $alumno->id)}}" method="post">
                    @csrf {{-- por seguridad--}}
                    @method("delete") {{-- Se pone aqui aunque no tenga sentido porque no se puede poner arriba--}}
                    <input type="submit" value="Borrar">
                </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
