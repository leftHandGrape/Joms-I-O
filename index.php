<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css" type="text/css">
	<link rel="stylesheet" href="normalize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Quicksand&display=swap" rel="stylesheet">
	<script src="processing.js"></script>
	<script src="jom.js"></script>
	<script src="script.js"></script>
	<title>Jom's I/O</title>
	<!-- add icon link -->
    <link rel="icon" href="https://icons8.com/icon/47607/product" type="image/x-icon">
</head>

<body class="d-flex flex-column min-vh-100">

<div class="jumbotron text-center">
  <h1>Jom's I/O</h1>
  <p>
	Hi! Welcome to Jom's.
	We're here to show you what we have found on the web.
  </p>
</div>

<div class="container">
  <div class="row">
  
    <div class="col-sm-4 first">
      <h3 class="programming">Programming</h3>
	  <img src="images/programming.jpg">
	  
		<ul class="list-group prog_list hide_programming">
			<li class="list-group-item"><a href="https://www.php.net/docs.php">PHP</a></li>
			<li class="list-group-item"><a href="https://developer.mozilla.org/en-US/docs/Web/HTML">HTML</a></li>
			<li class="list-group-item"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">CSS</a></li>
			<li class="list-group-item"><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript">JavaScript</a></li>
			<li class="list-group-item"><a href="https://teamtreehouse.com/">TeamTreehouse</a></li>
			<li class="list-group-item"><a href="https://www.codecademy.com/">Codecademy</a></li>
			<li class="list-group-item"><a href="https://www.learn-c.org/">C</a></li>
			<li class="list-group-item"><a href="https://www.w3schools.com/bootstrap4/">Boostrap 4</a></li>
			<li class="list-group-item"><a href="https://www.tldp.org/LDP/Bash-Beginners-Guide/Bash-Beginners-Guide.pdf">Bash</a></li>
			<li class="list-group-item"><a href="https://ocw.mit.edu/courses/intro-programming/">Intro to Programming (MIT)</a></li>
			<li class="list-group-item"><a href="https://en.wikibooks.org/wiki/Windows_Batch_Scripting">Batch scripting</a></li>
		</ul>
		<button class="first_reset" id="reset_prog">Reset</button>
	</div>
	
	<div class="col-sm-4 second">
      <h3 class="electronics">Electronics + Circuitry</h3>
      <img src="images/electronics.jpg">
	  
        <ul class="list-group elec_list hide_electronics">
			<li class="list-group-item"><a href="https://www.elegoo.com/">Elegoo</a></li>
			<li class="list-group-item"><a href="https://www.arduino.cc/en/Guide/HomePage">Arduino</a></li>
			<li class="list-group-item"><a href="https://learn.sparkfun.com/tutorials/what-is-a-circuit/all">Sparkfun</a></li>
			<li class="list-group-item"><a href="https://www.allaboutcircuits.com/">All about circuits</a></li>
			<li class="list-group-item"><a href="http://www.autoshop101.com/">Autoshop 101</a></li>
			<li class="list-group-item"><a href="https://brilliant.org/wiki/simple-circuits/">Brilliant!</a></li>
		</ul>
		<button class="second_reset" id="reset_elec">Reset</button>
	</div>
	
    <div class="col-sm-4 third">
      <h3 class="compsci">Computer Science!</h3> 
	  <img src="images/computer_science.jpg">
	  
	  <ul class="list-group sci_list hide_compsci">
		<li class="list-group-item"><a href="https://regex101.com/">Regex</a></li>
		<li class="list-group-item"><a href="https://en.wikiversity.org/wiki/Introduction_to_Computers">Intro to Computers</a></li>
		<li class="list-group-item"><a href="https://en.wikiversity.org/wiki/Introduction_to_Computer_Science">Intro to CompSci</a></li>
		<li class="list-group-item"><a href="https://edu.gcfglobal.org/en/computerbasics/">Basics</a></li>
		<li class="list-group-item"><a href="https://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-002-circuits-and-electronics-spring-2007/">Engineering and Computer Science</a></li>
		<li class="list-group-item"><a href="https://www.techsoup.org/support/articles-and-how-tos/networking-101-concepts-and-definitions">Computer Networks</a></li>
	  
	  </ul>
	  <button class="third_reset" id="reset_compsci">Reset</button>
	</div>
  </div>
  
  <div class="disclaimer mt-auto" id="disclaimer">
	<p>Jom's is currently is early development. We thank you for being patient and we hope you like the early content we provide!</p>
  </div>
  <div id="jom">
	<a href="https://www.linkedin.com/in/jordan-howlett-95100a1b3">
		<img src="images/Jom.png">
	</a>
  </div>
  <div class="container-fluid linkedIn">
		
		<a href="https://www.linkedin.com/in/jordan-howlett-95100a1b3">
			<p>Check out my LinkedIn!</p>
		</a>

  </div>
</div>

<footer class="container-fluid mt-auto">Joms! &copy </footer>
  
</body>
</html>


<!--

-->  