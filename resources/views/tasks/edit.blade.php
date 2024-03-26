@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form action="/tasks/{{$task -> id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description"  name="description" value="{{$task->description}}">
    </div>
    <div class="mb-3">
    <label for="description" class="form-label">Status</label>
        <select class="form-select" name="status" id="status">
        <option value="La inceput">La inceput</option>
            <option value="In Progres">In Progres</option>
            <option value="Terminat">Terminat</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection