@extends('base', ['title' => 'Liste des formations'])

@section('content')

    <!-- Simple Datatable start -->
    <div class="card-box mb-30"> 
        <div class="pb-20">
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Nom</th>
                        <th>Description</th>
                        <th>Niveau</th>
                        <th>Durée</th>
                        <th>Créé par</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($formations as $formation)
                        <tr>
                            <td class="table-plus">{{ $formation->name }}</td>
                            <td>{{ $formation->description->limit(20) }}</td>
                            <td>{{ $formation->level->displayName() }}</td>
                            <td>{{ $formation->duration }} {{ Str::plural('heure', $formation->duration) }}</td>
                            <td>{{ $formation->user?->name ?? 'N/A' }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="{{ route('formations.show', $formation) }}"><i class="dw dw-eye"></i> Voir</a>
                                        <a class="dropdown-item" href="{{ route('formations.edit', $formation) }}"><i class="dw dw-edit2"></i> Modifier</a>
                                        <form method="POST" action="{{ route('formations.destroy', $formation) }}" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"><i class="dw dw-delete-3"></i> Supprimer</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Aucune formation disponible.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection