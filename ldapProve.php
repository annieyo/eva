<?php
$username = "ds";
$password = "12345";

//ldap-Port wird beim Bind automatisch geadded
$ldap = ldap_connect("imlinkoo.de");
//geht nur bei Lehrerkürzeln. Pfad für Schüler ist anders.
if($bind=ldap_bind($ldap, "uid=".$username.",ou=lehrer,ou=benutzer,dc=gso-neu", $password)){echo "klappt";}
else echo "nö";
?>