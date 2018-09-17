<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
    This assignment is based on one from the Web Programming Step by Step textbook by Marty Stepp.
-->
	<head>
		<title>My CSCV 337 Internet Movie Database (MyMDb)</title>
		
		

		<met http-equiv="Content-tR BY `year` DESC";ype" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en-us" />

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">			

		<link rel="shortcut icon" href="http://u.arizona.edu/~milazzom/cscv337sp14/hw7/images/mymdb_icon.gif" type="image/gif" />
		<link rel="stylesheet" href="mymdb.css" type="text/css" />

		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
		<script src="http://u.arizona.edu/~milazzom/cscv337sp14/hw7/js/prototype.js" type="text/javascript"></script>
		<script src="http://u.arizona.edu/~milazzom/cscv337sp14/hw7/js/scriptaculous.js" type="text/javascript"></script>
		

	
	</head>

	<body>
			<script type = "text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.j
s" ></script>
		<script src="mymdb.js" type="text/javascript"></script>

		<div id="bannerarea">
            <a href="mymdb.php"><h2>CSCV337 Homework 6</h2></a>
		</div>

		
			<fieldset>
				<span class="label">Actor's first/last name: </span>
				<input id="first_Name" type="text" name="first_name" size="10" /> 
				<input id="last_Name" type="text" name="last_name" size="10" /> 
				<input id ="button"  type="submit" value="go" />
			</fieldset>

		
		<div id="main">

			<!-- a place to inject the results from actors.php -->
			<div id="matches"></div>

			<h1>The One Degree of Kevin Bacon</h1>

			<p>
				Type in an actor's name to see if he/she was ever in a movie with Kevin Bacon!
			</p>

			<p>
				<img src="http://u.arizona.edu/~milazzom/cscv337sp14/hw7/images/kevin_bacon.jpg" alt="Kevin Bacon" />
			</p>

		</div>
		<div class = "row">
		<div class = "col-md-4"><H3>Movies Actor Has Appeared In</H3></div>
		<div class = "col-md-4"><H3>Movies Actor Has Appeared With Kevin Bacon In</H3></div>
		</div>
		<div class = "row">
		<div id = "Returned1" class = "col-md-4" >
		<table id = "T1"  class = "table table-bordered" style = "visibility:hidden;">
			<tr style = "background-color:#4EE9FA;">
			<th><H3>ID</H3></th>
			<th><H3>Movie Title</H3></th>
			<th><H3>Year</H3></th>
			</tr>
		</table>	
		</div>
		<div id = "Returned2"  class = "col-md-4">
		 <table id = "T2"  class = "table table-bordered" style = "visibility:hidden;">
                        <tr style = "background-color:#4EE9FA;">
                        <th><H3>ID</H3></th>
                        <th><H3>Movie Title</H3></th>
                        <th><H3>Year</H3></th>
                        </tr>
                </table>
                </div>
		<div class = "col-md-4"></div>	
		</div>
		</br></br></br>
		<div id="footer">
			<p>
				Copyright &copy; 1990-2008 Internet Movie Database Inc. <br />
				An Amazon.com company.
			</p>
		</div>

		
	</body>
	
</html>


