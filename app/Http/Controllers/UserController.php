<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {
        // fetch all trainings from db using model with pagination 5 per page
        $users = User::paginate(5);
        //dd($trainings);

        // return to view with all trainings
        return view('users.index', compact('users')); // resources/views/trainings/index.blade.php
    }
}
