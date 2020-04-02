
<?php 

if(isset($_POST['nombor']))
{
$pertama = $_POST['pertama'];
$kedua = $_POST['kedua'];
$operasi = $_POST['operasi'];
$hasil = $_POST['hasil'];

 switch ($operasi) {
    case 'tambah':
     $hasil = $pertama + $kedua;
    break;
   
   case 'tolak':
    $hasil = $pertama - $kedua;
   break;
   
   case 'darab':
    $hasil = $pertama * $kedua;
   break;
	
   case 'bahagi':
    $hasil = $pertama / $kedua;
   }
}
 ?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>KALKULATOR</title>
<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
   
</script>
  <link href="style.css" rel="stylesheet" type="text/css">
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
  background-color:  #ff5286;
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
	  <li><a href="index.php">Laman Utama</a></li>
  <li><a class="active"href="kira.php">Kalkulator</a></li>
  <li><a href="logout.php">Log Keluar</a></li>
</ul>

  <center>
  <p>note: Anda boleh menukar operasi matematik yang anda inginkan</p>
 <div class="kalkulator">
  <h3>SISTEM KALKULATOR</h3>
  <form action="" action="" method="post">
    
   <input class="number" type="number" name="pertama" placeholder="Nombor Pertama"><br>
   <br>
   <input class="number" type="number" name="kedua" placeholder=" Nombor Kedua"><br>
   <br>
   operasi : <select class="option" name="operasi">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali">x</option>
<option value="bagi">/</option>
   </select>
   <br><br>
   <input type="submit" name="nombor" class="tombol" value="Pengiraan"><br>
   <br>
  </form>


  
  <?php if(isset($_POST['nombor'])){  ?>
  <input type="text" value="<?php echo $hasil; ?>" class="number">
  <?php }else{ ?>
   <input type="text" value="" class="number">
  <?php } ?> 
  <br>

</div></center>
</center>
 </body>
 </html>

