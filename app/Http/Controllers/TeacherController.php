<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function inicio(){
        return view ("formulario");

    }
     public function store(request $request){
        $teacher = new teacher();
        $teacher->nombre=$request->nombre;
        $teacher->cedula=$request->cedula;
        $teacher->direccion=$request->direccion;
        $teacher->telefono=$request->telefono;
        $teacher->save();
        return redirect()->route('profesores.index');

    }
    public function index(){
        $teachers = Teacher::all();
        return view('index', compact('teachers'));
    }
    public function show($id){
        $teacher = Teacher::find($id);
        if (!$teacher) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }
        return view('show', compact('teacher'));
    }
    public function update(Request $request, $id){
        $teacher = Teacher::find($id);
        if (!$teacher) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }

        $teacher->nombre = $request->nombre ?? $teacher->nombre;
        $teacher->cedula = $request->cedula ?? $teacher->cedula;
        $teacher->direccion = $request->direccion ?? $teacher->direccion;
        $teacher->telefono = $request->telefono ?? $teacher->telefono;
        $teacher->save();

        return redirect()->route('profesores.index');
    }
    public function destroy($id){
        $teacher = Teacher::find($id);
        if (!$teacher) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }
        $teacher->delete();
        return redirect()->route('profesores.index');
    }
    public function edit($id) {
        $teacher = Teacher::find($id);
        if (!$teacher) {
            return response()->json(['message' => 'Teacher not found'], 404);
        }
        return view('edit', compact('teacher'));
    }
}
