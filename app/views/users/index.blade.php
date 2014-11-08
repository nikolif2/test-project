<!doctype html>
<html lang="en">
<head>
	
</head>
<body>
		All users are: <br> 
<!-- How to link a database field to a specific page:

		@foreach ($users as $user) 
			<li>{{link_to("/users/{$user->username}", $user->username)}}</li>
		@endforeach

routes.php:

	Route::get('users', function() {

	$users= User::all();
	
	return View::make('users/index')->with('users', $users);

	});

	Route::get('users/{username', function($username) {

		$user = User::whereUsername($username)->first();

		return View::make('users/show', ['user' => $user]);
	});


-->
		@foreach ($users as $user) 
			<li>{{link_to("/users/{$user->username}", $user->username)}}</li>
		@endforeach
</body>
</html>
