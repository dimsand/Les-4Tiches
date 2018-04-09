@extends('layouts.layout')

@section('title', 'Contact')

@section('content')
<!-- First Parallax Section -->
<div class="jumbotron paral paralsec2 mt-5">
    <h1 class="display-3">Formulaire de contact</h1>
</div>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                {!! Form::open(['route'=>'contact.store']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Nom complet']) !!}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                    {!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Sujet']) !!}
                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                </div>

                <div class="form-group {{ $errors->has('body_message') ? 'has-error' : '' }}">
                    {!! Form::textarea('body_message', old('body_message'), ['class'=>'form-control', 'placeholder'=>'Message']) !!}
                    <span class="text-danger">{{ $errors->first('body_message') }}</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-black">Envoyer</button>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</section>
@endsection