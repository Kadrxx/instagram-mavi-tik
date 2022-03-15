<?php

    include("ayar.php");
    session_start();
    if(!isset($_SESSION["login"])){
    echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
    header("Refresh: 1; url=index.php");
   }else{
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <title>Z-Panel Dashboard</title>
</head>
<style>
    html { 
    background: url(https://i.hizliresim.com/r3em7is.png) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.admindiv {
    width:300px;
    height:360px;
    background-color: #ffffff;
    border-radius:15px;
    border:1px solid grey;
    margin-top:-400px;
    font-family: 'Outfit', Sans-Serif;
    transition: 1s;
}
.admindiv2 {
    margin-top:80px;
}
.admindiv h3 {
    font-size: 33px;
}
.inputs {
    width:250px;
    height:50px;
    border-radius: 20px;
    background-color: #EBEBEB;
    border:1px solid #E3E3E3;
    transition: 0.5s;
    padding-left:10px;
}
.inputs::placeholder {
    font-family: 'Outfit', Sans-Serif;
}
.inputs:hover {
    border:1px solid #000;
}
.inputs:hover::placeholder {
    color:#000;
}
.btn {
    width:230px;
    height:40px;
    border-radius: 20px;
    border:1px solid #E1E1E1;
    font-family: 'Outfit', Sans-Serif;
    font-size: 14px;
    font-weight:600;
    color:#8B8B8B;
    background-color: #ebebeb;
    transition: 0.5s;
}

.btn:hover {
    border:1px solid #000;
    background:linear-gradient(90deg,#003DFF,#00DBFF);
    color:white;
}

.admindiv p {
    font-size: 12px;
    font-weight: 600;
    padding:0 20 0 20px;
    color:grey;
}
.admindiv h4 > a {
    color:red;
}
</style>
<body>
    <center>
      <div class="admindiv" id="admindiv">
      <h3>  <font color="red">Hello</font></h3> <h3>Admin</h3>
          <p> Bir Buton'a Tıkla.</p> <br>
          <a href="src/all.php">
              <input type="button" class="btn" value="Hepsi">
          </a>
          </a> <br>
          <br>
          <h4>EDİT BY <a href="https://www.instagram.com/clor.py/">
              CloR
          </a></h4>
      </div>  
    </center>
    <script>
        window.onload=function(){
    document.getElementById('admindiv').classList.add('admindiv2');
}
    </script>
</body>
</html>