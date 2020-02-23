<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends AdminController
{
    function index()
    {
        $data  = Professor::all();
        return view("_admin\professor\listprofessor");
    }
    function create()
    {
        return view("_admin.professor.createprofessor");
    }
    function add(Request $request)
    {
        $request->validate([
            'professor_name' => 'required',
            'professor_university' => 'required',
            'professor_email' => 'required',
            'professor_phone' => 'required',
            'professor_researchinterest' => 'required',
            'professor_disciplines' => 'required',
            'professor_subdisciplines' => 'required'
        ]);
        $my_professor =  new Professor();
        $my_professor->professor_name = $request->professor_name;;
        $my_professor->professor_university = $request->professor_university;
        $my_professor->professor_email = $request->professor_email;
        $my_professor->professor_phone = $request->professor_phone;
        $my_professor->professor_researchinterest = $request->professor_researchinterest;
        $my_professor->professor_disciplines = $request->professor_disciplines;
        $my_professor->professor_subdisciplines = $request->professor_subdisciplines;
        $my_professor->save();
        return redirect()->route('admin.professor.create')
        ->with('success','Professor Added Successfully.');
    }
    function update(Request $request, Professor $professor)
    {
        $request->validate([
            'professor_name' => 'required',
            'professor_university' => 'required',
            'professor_email' => 'required',
            'professor_phone' => 'required',
            'professor_researchinterest' => 'required',
            'professor_disciplines' => 'required',
            'professor_subdisciplines' => 'required'
        ]);
        $professor->update($request->all());
        return redirect()->route('admin.professor.list')
                        ->with('success','Professor updated successfully');    }
    function edit(Professor $professor)
    {
        return view('_admin.professor.editprofessor',compact('professor'));
    }
    function delete(Professor $professor)
    {
        $professor->delete();

        return redirect()->route('admin.professor.list')
                        ->with('success','Professor deleted successfully');
    }
    function list()
    {
        $data  = Professor::all();
        return view("_admin\professor\listprofessor")->with(compact('data'));
    }
}
