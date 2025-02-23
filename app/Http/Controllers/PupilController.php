<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PupilController extends Controller
{
    public function index() {
        $pupils = User::where('user_type', 'pupil')->get();
        return view('pupils.index', ['pupils' => $pupils]);
        //return view('pupils.index');
    }
}
