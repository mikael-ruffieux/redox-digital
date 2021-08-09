@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-lg-6 col-12">
            <h1><b>Nos clients</b> [{{sizeof($clients)}}]</h1>
        </div>
        <div class="col-lg-6 col-12">
            <a href='{{ route('clients.create') }}' class='btn btn-info float-lg-right'>Enregistrer un nouveau client</a>
        </div>
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Lien</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
        
                    @foreach ($clients as $client)
                        <tr>
                            <td>
                                {{ $client->name }}
                            </td>
                            <td>
                                <a href="{{ $client->link }}" target="_blank" rel="noopener noreferrer">{{ $client->link }}</a>
                            </td>
        
                            <td>
                                <a href="{{ route('clients.show', [$client->id]) }}" class="btn-sm btn btn-success"
                                    title="Afficher"><i class="far fa-info-circle"></i></a>
                                <a href="{{ route('clients.edit', [$client->id]) }}" class="btn btn-info btn-sm" title="Modifier"><i
                                        class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
        
                </tbody>
            </table>
            {{ $clients->links() }}
        </div>
    </div>
</div>
@endsection
