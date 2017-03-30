 <?php


Route::get('/','ArticalController@show')->name('home');
Route::get('/comment/{id}','CommentController@index');
Route::get('/approve/{id}','ApproveController@index');
Route::get('/form','UserController@create');
Route::post('/form','UserController@store');
Route::get('/sign','UserController@index');
Route::post('/sign','UserController@sign');
Route::post('/comment/{id}','CommentController@addComm');
Route::get('/logout','UserController@destroy');
Route::post('/article','ArticalController@upload_image');
Route::post('/article/store','ArticalController@store');


