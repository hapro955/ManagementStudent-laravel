<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
//display list student
Route::get('listStudent','studentController@getData');

Route::get('addStudent',function(){
	return view('addStudent');
});
//add student
Route::post('addStudent','studentController@addStudent');

Route::get('editStudent/{id}',function($id){
	$data = DB::table('student')->where('studentId', $id)->get();
	return view('editStudent')->with('data',$data);
});
//edit student
Route::post('editStudent/{id}',function($id, Request $request){
	if($request->isMethod('POST')){
		$name = $request->input('studentName');
		DB::table('student')
			->where('studentId',$id)
			->update(['studentName' => $name]);
		return redirect('listStudent');
	}
});
//delete student
Route::get('deleteStudent/{id}',function($id){
	DB::table('student')
		->where('studentId',$id)
		->update(['studentStatus' => 0]);
	return redirect('listStudent');
});