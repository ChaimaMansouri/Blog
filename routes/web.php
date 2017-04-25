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
Route::get('/profil','UserController@profil');
Route::post('/approve','ApproveController@store');
Route::post('/photo_delete','ArticalController@delete_photo');
Route::get('/user/{id}','ArticalController@userProfil');
Route::post('/delartical','ArticalController@destroy');
Route::get('/login','ArticalController@show');
Route::post('/delcomment','CommentController@destroy');
Route::post('/updateCom','CommentController@update');
Route::post('/upardata','ArticalController@updateData');
Route::post('/updateartical','ArticalController@updateArtical');