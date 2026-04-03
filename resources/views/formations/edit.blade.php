@extends('base', ['title' => 'Modifier une formation'])

@section('content')
<div class="pd-20 card-box mb-30">
    @include('formations._form', ['route' => route('formations.update', $formation), 'isUpdate' => true])
</div>
@endsection
