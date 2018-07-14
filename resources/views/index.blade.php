<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>


<div class="container">

    <div class="row">
        <h1>Электронная очередь</h1>
    </div>

    <div class="row">


        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>counter</th>
            </tr>
            </thead>
            <form method="post" action="{{url('counter')}}" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                @foreach ($articles as $article)

                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->name }}</td>
                        <td>Counter: {{ $article->counter }}
                            <button type="button" class="btn btn-primary btn-sm">+</button>
                        </td>
                    </tr>
                @endforeach
            </form>


        </table>


    </div>
</div>


</body>
</html>