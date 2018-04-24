@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste des news</h4>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Titre
                            </th>
                            <th>
                                Auteur
                            </th>
                            <th>
                                Date de création
                            </th>
                            <th>
                                Catégorie
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $n)
                                <tr>
                                    <td>{{ $n->title }}</td>
                                    <td>{{ $n->title }} ---  {{ $n->content }}</td>
                                    <td>{{ $n->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <label class="badge badge-danger"><td>{{ $n->category_id }}</td></label>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection