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
        // $data = Http::get("https://jsonplaceholder.typicode.com/posts");
        $data = Student::all();
        return view('viewall', ["data" => json_decode($data)]);
        // return json_decode($data);
    }

    function register()
    {
        return view('registerStudent');
    }

    function getStudentById($id)
    {
        // echo $id;
        $data = Student::find($id);
        return $data;
    }
    function registerStudent(Request $req)
    {
        $firstName = $req->input('fnm');
        $lastName = $req->input('lnm');
        $mail = $req->input('mail');
        $pwd = $req->input('pwd');
        // echo $firstName . " " . $lastName . " " . $mail . " " . $pwd;

        $stu = new Student();
        $stu->FirstName = $firstName;
        $stu->LastName = $lastName;
        $stu->Email = $mail;
        $stu->password = $pwd;
        // $stu->id
        $stu->save();
        redirect('viewall');
    }
}
