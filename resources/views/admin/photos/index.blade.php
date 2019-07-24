@extends('layouts.admin')

@section('title', 'Liste des albums')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste des albums</h4>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date de création</th>
                            <th>Actif</th>
                            <th>Ajouter des images</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($albums as $a)
                                <tr>
                                    <td>{{ $a->title }}</td>
                                    <td>{{ $a->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        @if($a->actived)
                                        <label class="badge badge-success">Oui</label>
                                        @else
                                            <label class="badge badge-danger">Non</label>
                                        @endif
                                    </td>
                                    <td><a class="btn btn-primary" href="{{route('admin_add_images', [$a->id])}}">Ajouter</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection