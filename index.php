<html>
<title>GitOps - Flux - Demo</title>

<body style="background: red;">

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
			version  : 9.1.0  
		</p>";
echo "</div>";
?>
</body>
</html>
