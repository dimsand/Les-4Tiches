@extends('layouts.layout')

@section('title', 'Contact')

@section('content')

<div class="jumbotron paral paralsec2 mt-5">
    <h1 class="display-3">Formulaire de contact</h1>
</div>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                    <div class="alert alert-info">
                        Pour toute demande de renseigements, veuillez nous contacter via le formulaire ci-dessous ou via notre adresse email : <a href="mailto:contact@les4tiches.fr">contact@les4tiches.fr</a>.
                    </div>

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

            <div class="col-lg-4">
                <div class="facebook-responsive2">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLes4Tiches%2F&tabs=messages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection