@extends('cinema.home')
@section('title','Show more')
@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Информация за филм</h2><br>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ url('/movies') }}"> Назад</a>

            </div>

        </div>

    </div>


<h1>Преглеждате {{ $movie->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $movie->title }}</h2>
         <p><strong>Постер :</strong><center><img src="{{ url('/posters/'.$movie->id.'/'.$movie->poster) }}" title="album-name" class="img-responsive" alt="poster" width="180px" height="280px" /></center></p>
        <p><strong>Трейлър:</strong><br>
        <iframe width="560" height="315" src="{{ $movie->trailer }}" frameborder="0" allowfullscreen></iframe>
        </p>
        <p>
            <strong>Описание:</strong> {{ $movie->description }}<br>
            <p><strong>Продуцент :</strong> {{ $movie->director }}</p>
             <p><strong>Години годен :</strong> {{ $movie->age_rate }} + </p>
              <p><strong>Държава :</strong> {{ $movie->country }}</p>
            <p><strong>Превод :</strong> {{ $movie->translation }}</p>
            <p><strong>Формат :</strong> {{ $movie->video_format }}</p>
            <p><strong>Добавен от :</strong> {{ $movie->created_by }}</p>
            <p><strong>Добавен на:</strong> {{ $movie->created_at }}</p>
            <p><strong>Променен:</strong> {{ $movie->updated_at }}</p>
            <p><strong>Премиера :</strong> {{ $movie->bg_premiere }}</p>
            <p><strong>Започва от :</strong> {{ $movie->start_date }}</p>
            <p><strong>Свършва на :</strong> {{ $movie->end_date }}</p>
        </p>
    </div>
@endsection