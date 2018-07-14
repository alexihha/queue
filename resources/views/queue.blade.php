@extends ('layouts.base')


@section('content')


    <div class="row">
        <h1>Очередь</h1>
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

            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->created_at }}</td>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->status }}</td>
                </tr>
            @endforeach

        </table>


    </div>


@endsection