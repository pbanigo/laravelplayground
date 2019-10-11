@extends('base')
 
@section('main')
<h2 style="margin-top: 12px;" class="text-center">Task</a></h2>
<br>
 
<form action="{{ route('tasks.update', $task->id) }}" method="POST" name="update_task">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <input type="" class="form-control" col="4" name="name" placeholder="Enter Description" value="{{ $task->name }}" >{{ $task->description }}</input>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection