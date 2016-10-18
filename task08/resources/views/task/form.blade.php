<div class="form-group">
{!!Form::label('taskname','Taskname')!!}
{!!Form::text('taskname',null,['class' => 'form-control'])!!}
</div>
<div class="form-group">
{!!Form::label('taskdescirption','Taskdescription:')!!}
{!!Form::textarea('taskdescirption',null,['class' => 'form-control'])!!}
</div>
</div>
<div class="form-group">
{!!Form::submit($submitbutton,['class' => 'form-control'])!!} 
</div>