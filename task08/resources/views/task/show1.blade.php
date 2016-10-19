<html>
<body>
@foreach($task as $task)
{{Form::open(['url'=>'task1'])}}
<table>
<td><input type ="checkbox"   onClick = "this.form.submit()" {{$task->done ? "checked":""}}>
<input type = "hidden" name ="id" value="{{$task->id}}"></td>
{{Form::close()}}
<td>{{$task->taskname}}</td>
</table>
@endforeach
</body>
</html>
