<!DOCTYPE html>
<html>
<head>
	<title>Machine Problem 4</title>
	<script language="javascript" type="text/javascript">
	function getGrade(){
		var retVal=prompt("Enter your grade...", "your Grade Here");
		if(retVal>=50 && retVal <=100 ){
			document.write("Passed!")
		} else if (retVal <=49 && retVal >=0) {
			document.write("Failed!")
		} else if (retVal >= 101) {
			document.write("Invalid!")
		}
		 
		setTimeout(function(){
   			window.location.reload(1); 
			}, 2000);
	}

	</script>
</head>
<body>
<input type="button" onclick="getGrade()" value="Grading Result" />
</body>
</html>