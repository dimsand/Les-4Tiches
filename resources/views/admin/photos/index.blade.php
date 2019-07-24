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
                            <th>Actions</th>
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
                                            <label class="badge badge-warning">Non</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{route('admin_add_images', [$a->id])}}">Ajouter images</a>
                                        <form method="POST" action="{{route('admin_delete_album', [$a->id])}}" style="display: inline-flex;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-danger delete-album" value="Supprimer album">
                                            </div>
                                        </form>
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

@section('javascript')
<script>
    $('.delete-album').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Etes-vous sûr de vouloir supprimer l\'album ?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
@endsection