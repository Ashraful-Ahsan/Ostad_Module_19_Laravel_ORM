<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    function index(){
        // return Task::limit(2)->get();

        // return Task::whereStatus('completed')->count();

        // return Task::findOrFail(78);

        // return Task::orderBy('id','desc')->get();

        return Task::all();
    }
    function doSomething(){
        // Task::create([
        //     'title'=>"This is a sample task",
        //     'description'=>"This is a sample description",

        //     'due_date'=>'2022-01-01'
        // ]);

        // Task::create([
        //     'title'=>fake()->sentence(10),
        //     'description'=>fake()->sentence(30),

        //     'due_date'=>now()->addDays(rand(1,7))
        // ]);

        Task::insert([
            [
                'title'=>fake()->sentence(10),
            'description'=>fake()->sentence(20),

            'due_date'=>now()->addDays(rand(1,7))
            ],
            [
                'title'=>fake()->sentence(10),
            'description'=>fake()->sentence(20),

            'due_date'=>now()->addDays(rand(1,7))
            ]
        ]);


        // Task::find(1)->update([
        //     'status'=>'completed'
        // ]);

        return "Done";
    }

    // function show(Request $request, $id){
    //     return Task::find($id);
    // }
    function show(Request $request, Task $Task){
        return $Task;
    }
}
