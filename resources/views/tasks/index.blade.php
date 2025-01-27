@extends('layouts.app')

@section('title', 'Proiecte')

@section('content')
<div class="row">
    <h4>Proiecte</h4>
</div>
<div class="row">
    <div class="col-md-10">
        <a href="{{ route('tasks.create') }}" class="btn btn-sm btn-dark mb-3">Adauga</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nume</th>
                    <th>Descriere</th>
                    <th>Status</th>
                    <th>Data de incepere</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>
                    <div class="row">
                            <a href="{{route('tasks.edit' , ['task'=>$task -> id])}}" class="btn btn-sm btn-warning col-4 ms-3">Editeaza</a>
                            <form class="col-4 " action="{{ route('tasks.destroy', ['task' => $task]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" {{ route('tasks.destroy', ['task' => $task]) }}>Sterge</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">NU exista proiecte</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection