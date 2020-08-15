<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // fetch all trainings from db using model with pagination 5 per page
        $trainings = auth()->user()->trainings()->paginate(5);
        //dd($trainings);

        // return to view with all trainings
        return view('trainings.index', compact('trainings')); // resources/views/trainings/index.blade.php
    }

    public function create()
    {
        // show training create form
        return view('trainings.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        // store all input into the trainings table db

        // METHOD 1
//        $training = new Training();
//        $training->title = $request->title;
//        $training->description = $request->description;
//        $training->trainer = $request->trainer;
//        $training->user_id = Auth::id();
//        $training->save();

        // validate the input from user
        // - title min 5
        // - description 10
        // - trainer required
        $request->validate([
            'title' => 'min:5',
            'description' => 'min:10',
            'trainer' =>'required'
        ]);

        // METHOD 2
        $user = auth()->user();
        $training = $user->trainings()->create($request->only('title', 'description', 'trainer'));

        return redirect()->route('training.index');
    }

    public function show(Training $training)
    {
        return view('trainings.show', compact('training'));
    }

    public function edit(Training $training)
    {
        return view('trainings.edit', compact('training'));
    }

    public function update(Training $training, Request $request)
    {
        $training->update($request->only('title', 'description', 'trainer'));

        return redirect('/trainings');

    }

    public function delete(Training $training)
    {
        $training->delete();

        return redirect()->route('training.index');
    }


}
