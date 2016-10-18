@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div><table>
<td><h3>Task</h3></td><td><h4><a href="{{url('/task/create')}}">addtask</a></h4></td>
</table>
{{Form::open(['url'=>'task2'])}}
<input type = "text" name="taskname">
<input type = "submit" value = "search" >
{{Form::close()}}

@foreach($task as $task)
<table>
{{Form::open(['url'=>'task1'])}}
<td><input type ="checkbox"   onClick = "this.form.submit()" {{$task->done ? "checked":""}}>
<input type = "hidden" name ="id" value="{{$task->id}}"></td>
{{Form::close()}}
<td><a href="{{url('/task',$task->id)}}"><h2>{{$task->taskname}}</h2></a></td>
<td><a href="{{ url('/task',$task->id.'/edit')}}" class="btn btn-primary">edit</a></td>
<td><a href="{{url('/delete',$task->id)}}">delete</a></td>
</table>
@endforeach
<a href="/task3">taskdone</a>
@endsection