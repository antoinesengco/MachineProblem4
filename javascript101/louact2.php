<!DOCTYPE html>
<html>
<head>
	<title>Activity 7</title>
	<script language="javascript" type="text/javascript">
		function over(){
			document.write("<div onmouseout='out()'>Mouse Over</div>")
		}
		function out(){
			location.reload(true)
		}
	</script>
</head>
<body>
 <p>Bring your mouse cursor inside div element</p>
 	<div onmouseover="over()">
 		Inside of div element
 	</div>
</body>
</html>
<!-- mouse over -->