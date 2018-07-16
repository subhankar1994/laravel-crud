@extends('layout')
@section('content')

<div class="row">
    <form action="{{ route('save.todos', ['id' => $todo->id]) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
        <input type="text" name="todo" value="{{ $todo->todos }}" class="form-control">
    </div>
     <div class="form-group">
        <input type="submit" value="Create" class="btn btn-success">
        </div>

    </form>
</div>
@stop