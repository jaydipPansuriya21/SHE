<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<style>
		body, html {
  height: 100%;
}
body{
  margin:10px;
  padding: 0%;
}
img{
  display: inline-block;
}
nav{
  font-size: 17px;
  position: relative;
  border-radius: 30px;
}
nav>a{
  color: darkblue;
  font-weight: bold;
  background-color: rgba(192,192,192,0.5);
  text-decoration: none;
  padding: 1%;
  display: inline-block;

}
#dash{
  padding-right: 50px;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}
#abo{
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
}
a:hover, a:focus{
  color: rgba(51, 51, 51, 1);
  background-color: grey;
}

	</style>
</head>
<body>
  </br>
	<img src="SHE logo.jpeg" alt="logo" height="50px" width="59.78px" style="float: left">
    <nav style="width: 90%; float: right;">
        
        <a href="#dashboard" id="dash" style="width: 60%; font-family: Helvetica, sans-serif, Arial;">Emergency</a>
        <a href="#map" style="width: 5%; font-family: Helvetica;">Map</a>
        <a href="view_profile.php" style="width: 5%; font-family: Helvetica;">Users</a>
        <a href="#about" id="abo" style="width: 5%; font-family: Helvetica;">About</a>
    </nav>

</body>
</html>