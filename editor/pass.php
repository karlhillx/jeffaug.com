<html> 
<header> 
<title>.htpasswd-Eintr&auml;ge erstellen</title> 
<style> 
<!-- 
body {font-family:arial,helvetica} 
//--> 
</style> 
<body> 
 
<form action="" method="post"> 
<table cellspacing="0" cellpadding="0" border="0"> 
<tr bgcolor="Gray"><td colspan="2"><b>.htpasswd-Generator</b></td></tr> 
<tr bgcolor="#dddddd"><td><font color="#000000" face="arial, helvetica" size="2">Pfad zum zu schützenden Verzeichnis.</font></td><td><input type="text" name="pfad" size="20" value="<?php echo $DOCUMENT_ROOT; ?>"></td></tr> 
<tr bgcolor="#dddddd"><td><font color="#000000" face="arial, helvetica" size="2">name</font></td><td><input type="text" value="<? echo $user ?>" name="user"></td></tr> 
<tr bgcolor="#dddddd"><td><font color="#000000" face="arial, helvetica" size="2">pass</font></td><td><input type="text" value="<? echo $password ?>" name="password"></td></tr> 
<tr bgcolor="#dddddd" align="center"><td colspan="2"><input type="submit" style="background-color:transparent;font-size:10px" value="Passwort generieren"></td></tr> 
 
</table> 
</form> 
 
<?php 
if (!$user) 
{ 
  if (!$password) 
  { 
    echo "<p>So kann das ja nix werden! :)</p>\n"; 
    echo "<p>Sie müssen schon *beide* Felder ausfüllen!</p>\n"; 
  } 
} 
 
if ($password != ''){ 
    $pass = crypt ($password); 
    echo "<p>Bitte fügen Sie folgende Zeile in Ihre Passwort-Datei ein:<</p>\n"; 
    echo "<p>",$user,":",$pass,"</p>\n"; 
    echo "<font face=\"arial, helvetica\" size=2>Um Ihren Passwortschutz fertigzustellen, erstellen Sie bitte zuerst eine Datei mit dem Namen .htaccess in der folgendes steht:<<br><font color=\"red\">AuthUserFile $pfad/.htpasswd<br>AuthName &quot;Passwortgeschuetzter Bereich:&quot;<br>AuthType Basic<br>require valid-user</font><p>Erstellen Sie nun eine Datei mit dem Namen .htpasswd in der folgendes steht:<<br><font color=\"red\">$user:$pass</font><p>Nachdem Sie die Dateien in das Verzeichnis $pfad kopiert haben, ist der Passwortschutz aktiv.</font>"; 
} 
 
?> 
</body> 
</html> 

