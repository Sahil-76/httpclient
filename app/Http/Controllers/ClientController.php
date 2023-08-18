<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    
 public function index()
 {
       $response= Http::get('127.0.0.1:8000/api/students_api');
      // dd($response->collect());
      $data = json_decode($response, true);
      // dd($data);
      return view('students.index', ['students' => $data['students']]);
 }   


public function store()
{
   //
} 
public function edit()
{
   //
}

public function update()
{
   //
}

public function delete()
{
   //
}
}