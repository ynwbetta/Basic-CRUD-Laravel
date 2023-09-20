<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller {
   public function accessSessionData(Request $request) {
      if($request->session()->has('firstname'))
         echo $request->session()->get('firstname');
      else
      $data = Student::all();
      return view('student.index', ['data'=>$data]);
   }
   public function storeSessionData(Request $request) {
      $request->session()->put('firstnane','Fawas');
      echo "Data has been added to session";
   }  
   public function deleteSessionData(Request $request) {
      $request->session()->forget('firstname');
      echo "Data has been removed from session.";

      $request->session()->put('key', 'value');
      echo $request;
   }
}