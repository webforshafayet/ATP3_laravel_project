<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Verified Specialist</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/verified.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>Create Verified Specialist</h1>


    <form method="post">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
                <tr>
                    <td>Full Name</td>
					<td><input type="text" id="name" name="fullname" value="{{old('fullname')}}" onkeyup="f1()"></td>
                    <td><p id="head" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Username</td>

					<td><input type="text" id="username" name="username" value="{{old('username')}}" onkeyup="f5()"> </td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Password</td>

					<td><input type="text" id="password" name="password" value="{{old('password')}}" onkeyup="f3()"></td>
                    <td><p id="passwordjs" class="form-forget"> </p></td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="email" id="email" name="email" value="{{old('email')}}" onkeyup="f4()"></td>
                    <td><p id="emailjs" class="form-forget"> </p></td>
				</tr>

				<tr>
					<td>Nationality</td>
					<td><input type="text" id="nationality" name="nationality" value="{{old('nationality')}}" onkeyup="f52()"></td>
                    <td><p id="Nationality" class="form-forget"> </p></td>
				</tr>

                <tr>
					<td>Address</td>
					<td><input type="text" id="nid" name="address" value="{{old('address')}}" onkeyup="f7()"> </td>
                  <td><p id="nidjs" class="form-forget"> </p></td>
				</tr>


                <tr>
					<td>Experience</td>
					<td><input type="text" id="experience" name="experience" value="{{old('experience')}}" onkeyup="f78()"></td>
                    <td><p id="Experience" class="form-forget"> </p></td>
				</tr>

                <tr>
					<td>Education</td>
					<td><input type="text" id="education" name="education" value="{{old('education')}}" onkeyup="f79()"></td>
                    <td><p id="Education" class="form-forget"> </p></td>
				</tr>


                <tr>
					<td>Nid</td>
					<td><input type="text" id="nids" name="nid" value="{{old('nid')}}" onkeyup="f77()"></td>
                    <td><p id="nidjss" class="form-forget"> </p></td>
				</tr>


				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>
    @foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach
<a href="/home/V_specialist">Back</a> |
</center>
<script type="text/javascript" src="{{asset('js/resposive_script.js')}}"></script>
</body>
</html>
