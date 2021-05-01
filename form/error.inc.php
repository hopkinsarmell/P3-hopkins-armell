<style type="text/css">
* {
  margin:0;
  padding: 0;
  border: 0;
	font-family: sans-serif;
	font-size: 18px;
	color: white;
}

body {
  background-color: #a57e69;
}

h1 {
  font: 36px lato, sans-serif;
  color: #fcb6ca;
}

p {
  font: bold 18px lato, sans-serif;
  color: white;
}

.container {
  max-width: 900px;
  margin: 0 auto;
}

.error-container {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
  padding: 150px 0;
}

/*=======================================

Header Styling

=========================================*/

header {
  padding: 10px;
  background-color: #88634f;
  border-bottom: 5px solid #ab846f;
}

header .container {
  max-width: 1000px;
  margin: 0 auto;
}

header nav {
  display: inline-block;
  width: 65%;
  color: white;
  position: relative;
  top: -35px;
  padding-left: 45px;
}

header nav li{
  display: inline-block;
  margin: 0 15px;
  font: bolder 16px termina, sans-serif;
  color: white;
  text-transform: uppercase;
  text-decoration: none;
}

nav li a:hover {
  color: #fcb6ca;
}

nav li a {
  color: #ffffff;
  text-decoration: none;
}

.logo-container {
  display: inline-block;
  width: 30%;
  position: relative;
}

.bolt {
  position: absolute;
  left: 134px;
  top: 5px;
}

</style>

<body>
  <header>
    <div class="container">
      <div class="logo-container">
        <img src="images/logo.png" class="logo animate__animated animate__zoomInDown" alt="Melzitup Logo" />
        <img src="images/bolt.png" class="bolt animate__animated animate__heartBeat" alt="lightning bolt" />
      </div>

      <nav>
        <ul>
          <li><a href="index.html">The Model</a></li>
          <li><a href="index.html">The Rapper</a></li>
          <li><a href="index.html">The Chef</a></li>
          <li><a href="index.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

<div class="error-container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
