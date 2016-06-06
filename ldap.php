<?php

$ds = ldap_connect("ldap-master.gso");  // must be a valid LDAP server!
var_dump($ds);

if ($ds) {

    $sr=ldap_search($ds, "ou=klassen", "cn=*");

    var_dump($sr);

    echo "Closing connection";
    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}