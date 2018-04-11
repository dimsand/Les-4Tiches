@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')


    {!! Form::model($news, ['route' => 'admin_store_news', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Titre') !!}
        {!! Form::text('title', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Contenu') !!}
        {!! Form::textarea('content', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('item', 'Catégorie') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Image') !!}
        {!! Form::file('image', null) !!}
    </div>

    <button class="btn btn-success" type="submit">Publier!</button>

    {!! Form::close() !!}


@endsection