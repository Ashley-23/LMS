@extends('base', ['title' => 'Liste des questions'])

@section('content')

    <!-- Simple Datatable start -->
    <div class="card-box mb-30"> 
        <div class="pb-20">
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Nom</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($questions as $question)
                        <tr>
                            <td class="table-plus">{{ $question->name }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="{{ route('questions.show', $question) }}"><i class="dw dw-eye"></i> Voir</a>
                                        <a class="dropdown-item" href="{{ route('questions.edit', $question) }}"><i class="dw dw-edit2"></i> Modifier</a>
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); deleteQuestion('{{ route('questions.destroy', $question) }}');"><i class="dw dw-delete-3"></i> Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Aucune question disponible.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
<form id="delete-form">
    @csrf
    @method('DELETE')
</form>
@endsection


@section('_scripts')
    <script> 
        async function deleteQuestion(url) {
                let form = document.getElementById('delete-form');
                    form.action = url;
                    form.submit();
                    console.log('test::', form);
            await swal({ 
                title: 'Êtes-vous sûr?',
                text: "Vous ne pourrez pas annuler ceci!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimer!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let form = document.getElementById('delete-form');
                    form.action = url;
                    form.submit();
                    console.log('test::', form);
                }
            });
        }
    </script> 
@endsection

