<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    // Carga la lista de estudiantes
    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        // Ejecuta esto para mostrar la captura de datos en vivo (Tema 10.3)
        //dd($request->all()); 

        $file = $request->file('picture'); 
        
        if($file) {
            $path = Storage::disk('public')->put('Avatars', $file); 
        } else {
            $path = 'https://picsum.photos/200/300'; 
        }

        Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'picture' => $path, 
            'description' => $request->description
        ]);

        return redirect()->route('student.index');
    }

    public function show($id) {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function destroy($id) {
        $student = Student::findOrFail($id);
        Storage::disk('public')->delete($student->picture); 
        $student->delete(); 
        return back();
    }
}