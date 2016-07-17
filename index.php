<!DOCTYPE html>

<html>
	<head>
		<title>Page Saver</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script>
			function submit_form(){
				$("#status").html("loading...");
				
				var url = $("#text").val();
				
				$.ajax({
					url: "save.php",
					type: "POST",
					data: "url="+url+"&submit=Submit",
					success: function(data){
						if(data == "12"){
							$("#status").html("Error!");
						} else {
							$("#status").html("Finished! <a href='pages.php?id="+data+"'>Click Here</a>");
						}
					}					
				});
			}
		</script>
	</head>
	<body>
		<P>View saved pages <a href='list.php'>here</a>.
		<br><br>
		URL: <input id="text" type="text" name="url">
		<bl>
		<input type="submit" name="submit" onClick=submit_form()>
		<bl>
		<div id="status"></div>
	</body>
</html>