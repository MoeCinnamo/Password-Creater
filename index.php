<?php @session_start();?>
<title>Encryption Script</title>
<br><br><br><br><br><br>
<form name="LoginForm" method="post">
<center>
<h1>Encryption Script</h1><br>
<p>
<label for="pass"><font size="6">Your input: </font></label>
<input id="pass" name="pass" type="text" autocomplete="off" style="width:60%;height:10%"/>
<input type="submit" name="submit" value="Encryption" style="font-size:22;background:blue;width:20%;height:10%"/>
</center>
<p/>
</form>
<?php
if($_POST['submit'] == "Encryption"){$pass = htmlspecialchars($_POST['pass']);}

function password($value)
{
    $value = sha1('blog_') . md5($value) . md5('_encrypt') . sha1($value);
    return sha1($value);
}

echo "<center>"."original: ".$pass."</center>";

echo "<br>";
echo "<center>"."MD5: ".MD5($pass)."</center>";

echo "<br>";
echo "<center>"."SHA1: ".sha1($pass)."</center>";

echo "<br>";
echo "<center>"."CRYPT: ".crypt($pass)."</center>";

echo "<br>";
echo "<center>"."PASSWORD: ".password($pass)."</center>";
?>
