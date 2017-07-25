<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{



  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function index()
  {

  $tasks = Task::all();

  // passe en param la variable $users avec la methode compact()
  //  return view('helloworld',compact('tasks'));
  return view('tasks.index',['tabTasks'=>$tasks]);

  }


  public function create()
  {
    return view('tasks.create');
  }




  public function store(Request $request)
  {
    //validation des entree du formulaire
    $this->validate($request, [
      'title'=> 'required|max:20'
    ]);

    $task = new Task();

    $task->title = $request->input('title');
    $task->confirmed = 0;

    $task->save();

    return redirect('/tasks');

  }



  public function gettask($id)
  {

    // $taskId = $_GET['id'];
    // $taskId =  intval($id);

    $task = Task::find($id);

    return view('tasks.showtask',['task'=>$task]);

  }

  public function update(Request $request, $id)
  {

    $task = Task::find($id);

    //validation des entree du formulaire
    $this->validate($request, [
      'title'=> 'required|max:20'
    ]);


    $task->title = $request->input('title');
    // $task->confirmed = 1;


    //update : on refait un save
    $task->save();

    return redirect('/tasks');

  }



  public function delete(Request $request, $id)
  {

    $task = Task::find($id);

    $task->delete();
    // $task->forceDelete();

    return redirect('/tasks');

  }


  public function deleteTask(Request $request)
  {

    $id = $request->input('id');

    $task = Task::find($id);

    $task->delete();

    return redirect('/tasks');

  }


 public function changeTaskStatus(Request $request, $id)
 {
   $task = Task::find($id);

   if($task->confirmed)
   {
     $task->confirmed = 0;
   }
   else
   {
     $task->confirmed = 1;
   }

   $task->save();

   return redirect('/tasks');
 }




}
