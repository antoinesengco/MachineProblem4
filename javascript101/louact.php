<!DOCTYPE html>
<html>
<head>
	<title>activity 5</title>
	<script language="javascript" type="text/javascript">

	function getConfirmation(){
		var retVal=confirm("Do you want to Confrim?")
		
		if (retVal==true) {
			document.write("You may proceed")
			return true
		}
	else{
		document.write("See you next time!")
		return false 
	}
} 
	</script>
</head>
<body>
<input type="button" value="Click Me!!!!" onclick="getConfirmation()"/>
</body>
</html>

<!-- confirmation -->