<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function names($name){
        return view('name',["name" => $name]);
   }
   public function dates($date){
        return view('date',["date" => $date]);
   }
   public function ages($age){
        return view('age',["age" => $age]);
   }
   public function get_name(){
        static $students=array(0=>"Dauren",1=>"Talgat",2=>"Maksat");
        return $students;
   }
   public function get_date($id){
        return view('date')->with("dates",$id);
   }
   public function get_age($id){
        return view('age',compact('id'));
   }

   public function show($id){
        $students=$this->get_name();
        return view("name",["name"=>$students[$id]]);
   }
}
