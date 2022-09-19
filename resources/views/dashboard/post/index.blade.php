<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/>app.css")}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


</head>
<body>
    @include('dashboard.partials.nav-header-main')

    <!-- login-box -->
    <div class="" style="">
        <a class="btn btn-primary" href={{route('post.create')}}>
        Crear
    </a>

    <br>
    <br>
    <br>

    <table class="table">
        <thead>
            <tbody>
                <tr>
                    <td>
                        Id
    </td>
                    <td>
                        Titulo
    </td>

                    <td>
                        Ruta
    </td>

                    <td>
                        Creacion
    </td>

                    <td>
                        Actualizado
    </td>

    <td>
                        Acciones
    </td>
    </tr>
    </tbody>

    @foreach($posts as $post)
        <tr>
            <td>
                {{$post->id}}
    </td>

            <td>
                {{$post->title}}
    </td>

            <td>
                {{$post->slug}}
    </td>

            <td>
                {{$post->created_at->format('d-m-Y')}}
    </td>

            <td>
                {{$post->updated_at->format('d-m-Y')}}
    </td>

            <td>
                <a href="{{route('post.show', $post->id)}}" class="btn btn-primary">
                    Ver
                </a>

                <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">
                    Actualizar
                </a>

                <form method="POST" action="{{route('post.destroy', $post->id)}}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Borrar</button>
                </form>
</td>
    </tr>
    @endforeach

    </thead>
    {{$posts->links()}}
    </table>

    </div> 

</body>
</html>