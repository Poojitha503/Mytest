<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\task;
use Illuminate\Support\Facades\Input;
class taskcontroller extends Controller
{
  public function index()
  {
    if (Auth::guest())
    {
     return redirect('login');
    }
    if(Auth::user()->id=='4')
    {
       $task =task::latest('taskname')->get();
    }
    else
    {
    //$task =task::select('user_id','taskname','id')->where('user_id',Auth::user()->id)->get();
      $task =task::latest('user_id','taskname','id')->where('user_id',Auth::user()->id)->get();
    }
   //dd($task);
    return view('task.index',compact('task'));
   }
   public function index1(request $request)
   {

   //dd($request->all());
    $id = input::get('id');
    //dd($id);
    $task=task::findorFail($id);

    //return 
    //$task->mark();
    $done = $task->done? '0' : '1' ;
    $task->done = $done;
    $task->save();
   return redirect('task');
    /*$done=$this->done? 'false':'true';
    dd($done);*/
    /*$this->done=$done;
    $this->save();*/
   }
   
   public function index2(request $request)
   {
     $task = new task();
     $task->taskname=$request->taskname;
     $result=task::select('taskname')->where('taskname','like', "%".$task->taskname."%")->get();
     //dd($result);
     //dd($result);
     /*$task= task::select('taskname','taskdescirption')->where('id', $id)->first();*/
     //return view('task.show2',compact('result'));
     if($result)
     {
     return view('task.show2',compact('result'));
     }
     
   }
   public function show($id)
   {
   	 $task = task::findOrFail($id);
     //dd($task);
   	 
   	 //$task= task::select('taskname','taskdescirption')->where('taskid', $id )->first();
    return view('task.show',compact('task'));
   }
   public function show1()
   {
     $task=task::select('taskname','id')->where('done','1' )->get();
     //dd($task);
     //return $task->taskname;
     //dd($task);
     return view('task.show1',compact('task'));
   }
   public function store(request $request)
   {
   	$task = new task($request->all());
   	//dd(Auth::user());
   	Auth::user()->task()->save($task);
   	return redirect('task');

   }
   public function create()
   {
    if (Auth::guest())
    {
         return redirect('login');
    }
    return view('task.create');
   }
   public function edit($id)
   {
    if (Auth::guest())
    {
         return redirect('login');
    }
   	//$task= task::select('taskname','taskdescirption')->where('taskid', $id )->first();
    $task = task::findOrFail($id);
    //return view('articles.edit',compact('article'));
   	return view('task.edit',compact('task'));

   }
   public function update($id,request $request)
   {
     $task = task::findOrFail($id);
   	$task->update($request->all());
   	return redirect('task'); 
   }
   public function delete($id,request $request)
   {
   $task = task::findOrFail($id);
   //dd($task);
   //dd($request->all());
   $task->delete($request->all());
   return redirect('task'); 
   }
}
