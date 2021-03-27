<table class="align-middle mb-0 table table-borderless table-striped table-hover">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Projets</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($data['projects'] as $project)
        <tr>
            <td class="text-center text-muted">{{$project['id']}}</td>
            <td>
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left flex2">
                            <div class="widget-heading">{{$project['name']}}</div>
                            <div class="widget-subheading opacity-7">{{$project['desc']}}</div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="badge badge-{{ $project['archived'] ? 'danger' : 'success'}}">
                    {{ $project['archived'] ? 'Archivé' : 'Actif'}}
                </div>
            </td>
            <td>
                <button class="btn-sm btn btn-success">Afficher</button>
                <button type="button" id="PopoverCustomT-1"
                    class="btn btn-primary btn-sm">Modifier</button>
                <button class="mr-2 btn-sm btn-icon btn-icon-only btn btn-danger"><i
                class="pe-7s-trash btn-icon-wrapper"> </i></button>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>