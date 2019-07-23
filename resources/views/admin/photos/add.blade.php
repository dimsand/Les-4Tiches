@extends('layouts.admin')

@section('title', 'Photos')

@section('content')


    {!! Form::model($album, ['route' => 'admin_store_albums', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description de l\'album') !!}
        {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('actived', 'Publié') !!}
        {!! Form::checkbox('actived', 0, false) !!}
    </div>

    <button class="btn btn-success" type="submit">Publier l'album!</button>

    {!! Form::close() !!}


@endsection