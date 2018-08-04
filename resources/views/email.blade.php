<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="{{route('sendemail')}}" method="post">
		@csrf
			<input type="" name="title"> <br>
		<textarea name="content"></textarea>
		<input type="submit" name="">
	</form>

</body>
</html>