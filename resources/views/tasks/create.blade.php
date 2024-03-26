@extends('layouts.app')

@section('title', 'Create')

@section('content')

<form action="{{route('tasks.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nume</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descriere</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
    <label for="description" class="form-label">Status</label>
        <select class="form-select" name="status" id="status">
            <option value="La inceput">La inceput</option>
            <option value="In Progres">In Progres</option>
            <option value="Terminat">Terminat</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salveaza</button>

</form>

@endsection