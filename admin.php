<html>
<head>
<?php 
	include('header.php');
	include('connect.php');

?>
</head>

<body>
	<div id='wrapper' class='container'>
		<form action='#' method=''>
			
			<select name="post_topic" id="post_topic">
			  <option value="values">Values</option>
			  <option value="ideas">Ideas</option>
			  <option value="feelings">Feelings</option>
			</select>

			<br>
			<textarea name='post_body' id='post_body' cols='30' rows='10'></textarea>
		
			<input type="submit" name='submit' id='submit' class="btn btn-primary">
		</form>
		
	</div>
</body>
</html>