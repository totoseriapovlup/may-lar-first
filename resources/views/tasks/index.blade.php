@extends('layouts.app')
@section('content')
    <h2>All tasks</h2>
    <a href="{{ route('task.create') }}">Create new task</a>
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Tasks
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{ $task->id }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>
                            <td>
                                <!-- TODO: Кнопка Удалить -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection