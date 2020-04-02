
<!DOCTYPE html>
<html>
<head>
	<title>SISTEM KALKULATOR</title>
	<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
   
</script>
	<style>
	.button {
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #3B7A57;} /* Sea Green */
.button2 {background-color: #ADD8E6;} /* Light Blue */
.button3 {background-color: #008000;} /* Green */ 
.button4 {background-color: #FFC0CB;} /* Pink */ 
.button5 {background-color: #9B870C;} /* Lawn Green */
	
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #808000;
}

.active {
  background-color: #ff5286 ;
}
div {
  background-color: white;
  width: 300px;
  border: 15px grey;
  padding: 50px;
  margin: 20px;
}
</style>
<hr></hr>
<center><p> Choose Your Favourite Colour</p>
<hr></hr>
<button class="button button1" onclick="changeBodyBg('#3B7A57');">SEA GREEN</button>
<button class="button button2" onclick="changeBodyBg('#ADD8E6');">LIGHT BLUE</button>
<button class="button button3" onclick="changeBodyBg('#008000');">GREEN</button>
<button class="button button4" onclick="changeBodyBg('#FFC0CB');">PINK</button>
<button class="button button5" onclick="changeBodyBg('#9B870C');">LAWN GREEN</button>
<script type="text/javascript"><?php echo $bgimage_session."();"; ?></script>
</center>
<hr></hr>
</head>
 <body>
 	<ul>
  <li><a class="active" href="logout.php">Log Keluar</a></li>
</ul>
<br>
<br>
<center>
<?php
session_start();
session_destroy();
echo "Anda sudah log keluar!<br>
<br>
<a href=\"index.php\">Laman Utama</a>";
?>
<br>
<br>
</center>
</body>
</html>

