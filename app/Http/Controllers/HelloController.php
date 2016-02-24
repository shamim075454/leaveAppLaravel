<?php 
namespace App\Http\Controllers;

/*
HelloController class 
*/
class HelloController extends Controller{
    public function index(){
       return view('welcome');
    }
 }
?>