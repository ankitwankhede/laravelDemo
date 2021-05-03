<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function getAll()
    {
        $data = Http::get("https://jsonplaceholder.typicode.com/posts");
        // $data = Student::all();
        return view('viewall', ["data" => json_decode($data)]);
        // return json_decode($data);
    }

    function register()
    {
        return view('registerStudent');
    }
}
