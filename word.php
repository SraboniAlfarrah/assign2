<html>
<head>
	<style>
		.textbox{
			width: 800px;
			height: 150px;
			margin-left: 275px;
			
		}
		.btn{
			width: 100px;
			height: 35px;
			border-radius: 7px;
			background-color: #0080ff;
			margin-left: 45%;

		}
	</style>
</head>
<body>
	<form action="wordshow.php" method="post">
		<h1 style="text-align: center;">Character Frequency Counter</h1> 
		<textarea class="textbox" name="name" > </textarea>
		<br /> <br />
		<input type="submit" value="submit" class="btn">
	</form>
	
</body>
</html>
