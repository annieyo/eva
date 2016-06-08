<?php

class ldap
{
    private $server = "imlinkoo.de";
    private $ldap = "";

    public function __construct()
    {
        $this->ldap = ldap_connect($this->server);
    }

    public function proveTeacher($username, $password){
        if($bind=ldap_bind($this->ldap, "uid=".$username.",ou=lehrer,ou=benutzer,dc=gso-neu", $password)){return true;}
    else {return false;}}
}