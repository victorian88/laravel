@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="{{ route('tasks.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="task-title" class="col-md-4 col-form-label text-md-right">Task title</label>
                                    <div class="col-md-6">
                                  
                                        <input type="text" class="form-control{‌{ $errors->has('title') ? ' is-invalid' : '' }}" id="task-title" name="title" value="{{ old('title') }}" required autofocus>
                                       @if ($errors->has('title'))
                                           <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                           </span>
                                       @endif 
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        @if(!empty($tasks))
        <section class="row justify-content-center">
<div class="col-md-8">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Task</th>
            <th scope="col">Actions</th>
           
          </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
          <tr>
          
            <td>{{ $task->title }}</td>

            <td style="display:flex; ">
<a class="btn btn-info" href="{{ route('tasks.edit_view',[$task->id]) }}" style="margin-right: 5px">
Edit
</a>

                <form action="{{ route('tasks.destroy', [$task->id]) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
        </section>
        
          @endif
          
    </div>
    
@endsection