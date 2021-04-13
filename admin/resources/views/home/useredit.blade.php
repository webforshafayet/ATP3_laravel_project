<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/usertable.css')}}">
    <title>Edit User</title>
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>Edit User</h1>


    <form method="post">
    	@csrf
		<fieldset>
			<legend>Edit</legend>
			<table>
                <tr>
					<td>Full Name</td>
					<td><input type="text" id="name" name="fullname" value="{{ $user['fullname'] }}" onkeyup="f1()"></td>
                    <td><p id="head" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" value="{{$user['username']}}" onkeyup="f5()"></td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="email" id="email" name="email" value="{{$user['email']}}" onkeyup="f4()"></td>
                    <td><p id="emailjs" id="username" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" id="password" name="password" value="{{ $user['password'] }}" onkeyup="f3()"></td>
                    <td><p id="passwordjs" class="form-forget"> </p></td>
				</tr>
                <tr>
					<td>Nationality</td>
					<td><input type="text" id="nationality" name="nationality" value="{{ $user['nationality'] }}" onkeyup="f52()"></td>
                    <td><p id="Nationality" class="form-forget"> </p></td>
				</tr>



                {{-- <tr>

					<td>Type</td>
					<td>
						<select name='type'>
							<option value="admin" @if($user['type'] == 'admin') selected @endif > ADMIN </option>
							<option value="user"  @if($user['type'] == 'user') selected @endif > USER </option>
						</select>
					</td>
				</tr> --}}
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
    <a href="/home/userlist">Back</a> |
    @foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach
</center>

<script type="text/javascript" src="{{asset('js/resposive_script.js')}}"></script>
</body>
</html>
