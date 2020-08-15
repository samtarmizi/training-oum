<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        // query from db all trainings
        $trainings = Training::with('user')->get();

        // return all trainings in json
        return response()->json([
            'success' => true,
            'data' => $trainings,
            'message' => 'Successfully fetching trainings in the DB'
        ]);
    }

    public function show(Training $training)
    {
        return response()->json([
            'success' => true,
            'data' => $training,
            'message' => 'Successfully fetch'
        ]);
    }
}
