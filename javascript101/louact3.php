<!DOCTYPE html>
<html>
<head>
	<title>Activity 7</title>
	<script language="javascript" type="text/javascript">
		function countdown(){
			var retValTime= prompt("Enter a number: ", "your number in milliseconds")

			for (var i = retValTime;i >= 0; i--) {
				document.write("<br>" +i); 
		}
		setTimeout("location.reload(true);", retValTime);
		function timer(){
			var retVal = prompt("Enter a number: ", "your number in milliseconds")
		}	
		}
	</script>
</head>
<body>
	<input type="button" value="Start Timer" onclick="countdown()" /><br>
	<input type="button" value="Timer Start" onclick="timer()" />
</body>
</html>
<!-- countdown to refresh -->