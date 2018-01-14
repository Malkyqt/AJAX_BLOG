<html>
<head>
<?php 
	include('header.php');

	$text = "Welcome to the website,Pick a topic from the navigation menu on top !!";		
	

?>
</head>

<body>
	<div id='wrapper' class='container'>
		<nav id='nav' class="navbar">
		  <div class="container-fluid">
		    <ul>
		        <li><a href="#">values</a></li>
		        <li><a href="#">ideas</a></li>
		        <li><a href="#">feelings</a></li>		
		    </ul>
		  </div>
		</nav>

		<button id="modal_btn">Post Smth</button>

		<!-- The Modal -->
		<div id="modal" class="modal">
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <p>Some text in the Modal..</p>
		  </div>

		</div>
		<img id='main_image' src="images/space.jpg">	
		<div id='post_wrapper'>
			<div class='post'>
				<span><?php echo $text; ?></span>
			</div>
		</div>
	</div>
</body>
</html>