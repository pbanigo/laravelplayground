@extends('base')

@section('main')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="card panel-default">
                <div class="card-header">
                    New Task
                </div>

                <div class="card-body">
                     <!-- Display Validation Errorsc -->
                    @include('common.errors')
                    
                    <!-- New Task Form -->
                    <form action="{{ route('tasks.store') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="card panel-default">
                    <div class="card-header">
                        Current Tasks
                    </div>

                    <div class="card-body">
                        <table class="table table-dark">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text">
                                    
                                            <div><label><input type="checkbox" value="" name="status"></label>  {{ $task->name }}</div></td>

                                        <!-- Task Edit Button -->
                                        <td>
                <a href="{{ route('tasks.edit',$task->id)}}" class="btn btn-primary">Edit</a>
                                         </td>
                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    <div class="col-sm-12"><?// Gets the success message from then controller to display?>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection