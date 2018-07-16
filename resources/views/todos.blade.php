@extends('layout')
@section('content')

<div class="row">
    <form action="/create/todos" method="post">
        {{ csrf_field() }}
        <div class="form-group">
        <input type="text" name="todo" class="form-control">
    </div>
     <div class="form-group">
        <input type="submit" value="Create" class="btn btn-success">
        </div>

    </form>
</div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Todo</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($todos as $todo)
                            <tr>
                                <td>{{ $todo->id }}</td>
                                <td>{{ $todo->todos }}</td>
                                <td>
                                    <a href="{{ route('update.todo', ['id' => $todo->id]) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('delete.todo', ['id' => $todo->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @stop
                