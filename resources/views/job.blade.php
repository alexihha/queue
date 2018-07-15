@extends ('layouts.base')


@section('content')


    <div class="row">
        <h1>Принять в работу</h1>
    </div>


    <div class="row">

        <a href="add-job">Подтверждаю</a>


        @if ($status = 1)
            {{ $$status }}
        @endif

        @if ($status = 0)
            {{ $$status }}
        @endif

    </div>


@endsection

