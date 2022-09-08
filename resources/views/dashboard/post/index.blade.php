<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/>app.css")}}">

    <script src="{{asset("js/>app.js")}}"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>


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
</a>    </td>
    </tr>
    @endforeach

    </thead>
    {{$posts->links()}}
    </table>

    </div> 

</body>
</html>