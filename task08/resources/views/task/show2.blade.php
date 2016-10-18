<html>
<body>

@if(count($result)>0)
@foreach($result as $task)
{{$task->taskname}}<br>
@endforeach
@else
task does not exist
@endif
</body>
</html>