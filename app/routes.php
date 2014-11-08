<?php
/*
//Write routes (direct the user to pages)
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/about/me', 'PagesController@me');
*/

/*
//Get data from users database
Route::get('users', function()
{
//Return all users

	$users = User::all(); //Same as: selsct * from  users
	OR
	$user= DB::table('users')->get();
	return $user;
//Find user with ID 

	Route::get('/', function() {
	$user= DB::table('users')->find(1);
	dd($user); //die(var_dump($user));
});
//return one field by id eg:

	Route::get('/', function() 
	$user= DB::table('users')->find(2)
	return $user->username; 
	OR 
	$user = User::find(1);
});
//Return where username != filip eg:

	Route::get('/', function() {
	$users = DB::table('users')->where('username', '!=', 'filip')->get();
	OR
	$users = User::where('username', '!=', 'filip')->get();
	return $users;
});
//Create a new user

	$user = new User;
	$user->username = 'NewUser';
	$user->pass = Hash::make('pass'); //encrypt pass
	$user->save();

	OR 
	//Mass Assigned **but user model needs to be set, fillable 
	User::create([
		'usernam)e' => 'AnotherUser';
		'pass' => Hash::make('pass');
	]);
//Update the user by id
	$user = User::find(1);
	$user->username = 'Filip';
	$user->save();

//Delete user
	$user = User::find(1);
	$user->delete();

//Order the username alphabeticaly
	return User::orderBy('username', 'asc')->get();
	//take first 2 eg:
	return User::orderBy('username', 'asc')->take(2)->get();
*/
Route::get('/', 'PagesController@home');

Route::get('users', function() {

	$users= User::all();
	
	return View::make('users/index')->with('users', $users);

});

Route::get('users/{username}', function($username) {

	$user = User::whereUsername($username)->first();

	return View::make('users/show')->with('user', $user);
});

?>