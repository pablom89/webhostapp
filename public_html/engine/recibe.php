<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>
</head>
<body>

<script>

 var socket = io.connect("https://parkingnow.herokuapp.com/");
 socket.on("new_order", function (data){
	
		console.log(data);

  })
</script>
</body>
</html>