<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class studentController extends Controller
{
    //get data from table student
    public function getData(){
    	$data = DB::table('student')->where('studentStatus','=','1')->get();
    	return view('listStudent')->with('data',$data);
    }

    //create student
    public function addStudent(Request $request){
    	if($request->isMethod('POST')){
    		$studentName = $request->input('studentName');
    		DB::table('student')->insert(
    			['studentName' => $studentName, 'studentStatus' => '1']	
    		);
    		return redirect('listStudent');
    	}
    }
}
