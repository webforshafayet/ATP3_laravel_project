<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit  Product</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/product.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>Edit  Product</h1>


    <form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Edit Product</legend>
			<table>
				<tr>
					<td>Product name</td>
					<td><input type="text" id="username" name="productname" value="{{$user['productname']}}" onkeyup="f5()"></td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Catagory</td>
					<td><input type="text" id="catagory" name="catagory" value="{{ $user['catagory'] }}" onkeyup="f51()"></td>
                    <td><p id="Catagory" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Unit price</td>
					<td><input type="text" id="unitprice" name="unitprice" value="{{ $user['unitprice'] }}" onkeyup="f53()"></td>
                    <td><p id="Unitprice" class="form-forget"> </p></td>
				</tr>
                <tr>
					<td>details</td>
					<td><input type="text" id="details" name="details" value="{{ $user['details'] }}" onkeyup="f54()"></td>
                    <td><p id="Details" class="form-forget"> </p></td>
				</tr>



                <tr>

					<td>status</td>
					<td>
						<select name='status'>
							<option value="exist" @if($user['status'] == 'exist') selected @endif > Exist </option>
							<option value="Upcoming"  @if($user['status'] == 'Upcoming') selected @endif > Upcoming </option>
						</select>
					</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
    @foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach
<a href="/home/productlist"> Back</a>
</center>
<script type="text/javascript" src="{{asset('js/resposive_script.js')}}"></script>
</body>
</html>
