<?php




namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(){
    $data = array();
    $students[] = array("npm"=>212310018, "name"=>"Fathur Babi", "gender"=>"M", "alamat"=>"Unitex");
    $students[] = array("npm"=>212310022, "name"=>"Raynaldi", "gender"=>"M", "alamat"=>"Jauhh");
    $students[] = array("npm"=>212310011, "name"=>"Fauzan", "gender"=>"M", "alamat"=>"Ciomas");
    $students[] = array("npm"=>212310015, "name"=>"Dyas", "gender"=>"M", "alamat"=>"Ciawi");
    $students[] = array("npm"=>212310006, "name"=>"Mahesa", "gender"=>"M", "alamat"=>"Cilebut");
    $data['students'] = $students;
    return view('home')->with("data",$data);
    }
}

