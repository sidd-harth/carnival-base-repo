<html>
<title>GitOps - Flux - Demo</title>

<body style="background: darkblue;">
	  <div id='presentDate' 
           style='font-size: 32px; 
		          color: white;
			      font-weight: bold;display: flex;
				  justify-content: center;
                  align-items: center;'>
	  </div>
<?php
echo "<div style='height: 100vh;
			display: flex;
            justify-content: center;
            align-items: center;'>

		<p style='font-size: 32px; 
		          color: white;
				  font-weight: bold;'>
			pod name : " . getenv("MY_POD_NAME") . "<br> 
			pod ip   : " . getenv("MY_POD_IP") . " <br> 
			version  : 12.0.0  
		</p>";       
echo  "</div>";
?>
</body>
<script>
	function getDate() {
	let presentDate = document.getElementById('presentDate');
	let present = new Date();
	presentDate.innerHTML = `${present}`;
	}

	setInterval(getDate, 1000);
</script>
</html>
