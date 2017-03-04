 <?php


Route::get('/','ArticalController@show');
Route::get('/comment/{id}','CommentController@index');
Route::get('/approve/{id}','ApproveController@index');
Route::get('form',function(){
	return view('form');
});
Route::post('/form','UserController@store');
Route::get('sign','UserController@sign');
Route::post('/comment/{id}/com','CommentController@addComm');


