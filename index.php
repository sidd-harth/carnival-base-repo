<html>
<title>GitOps - Flux - Demo</title>

<body style="background: darkblue;">

<?php
echo "<div style='height: 100vh;
			display: flex;
            justify-content: center;
            align-items: center;'>

		<p style='font-size: 72px; 
		          color: white;
				  font-weight: bold;'>
			pod name : " . getenv("MY_POD_NAME") . "<br> 
			pod ip   : " . getenv("MY_POD_IP") . " <br> 
			version  : 11.0.0  
		</p>
	  </div>
	  <div id='presentDate' 
           style='font-size: 72px; 
		          color: white;
			      font-weight: bold;display: flex;
				  justify-content: center;
                  align-items: center;'>";       
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
