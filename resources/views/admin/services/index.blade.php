@extends('admin.template')

@section('contenu')
<div class="container pt-5">
    <div class="row">
        <div class="col-lg-6 col-12">
            <h1>Nos services</h1>
        </div>
        <div class="col-lg-6 col-12">
            <a href='{{ route('services.create') }}' class='btn btn-info float-lg-right'>Enregistrer un nouveau service</a>
        </div>
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Service parent</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
        
                    @foreach ($services as $service)
                        <tr>
                            <td scope="row">
                                {{$service->id}}
                            </td>
                            <td>
                                {{ $service->title }}
                            </td>
                            <td>
                                @if ($service->parent_id)
                                    <span class="badge badge-info">{{$service->parent_id}}</span>
                                @else
                                <span class="badge badge-success">parent</span>
                                @endif
                                
                            </td>
        
                            <td>
                                <a href="{{ route('services.show', [$service->id]) }}" class="btn-sm btn btn-success"
                                    title="Afficher"><i class="far fa-info-circle"></i></a>
                                <a href="{{ route('services.edit', [$service->id]) }}" class="btn btn-info btn-sm" title="Modifier"><i
                                        class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
        
                </tbody>
            </table>
            {{ $services->links() }}
        </div>
    </div>
</div>
@endsection
