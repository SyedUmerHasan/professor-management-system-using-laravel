<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function UserHome()
    {
        return view('userHome');
    }
    public function professorlist()
    {        
        $data  = Professor::all();
        return view("_user.professor.listprofessor")->with(compact('data'));
    }


}
