<?php

interface Db{
    public function connect($server, $name, $user, $pass);
}

Class MySql implements Db{
    public function connect($server, $name, $user, $pass)
    {
        echo 'conecta com mysql';
    }
}

Class Connection{
    function __construct($server, $name, $user, $pass){
        $this->server = $server;
        $this->name = $name;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect(Db $db){
        $db->connect(
            $this->server,
            $this->name,
            $this->user,
            $this->pass);
    }
}

$conn = new Connection('localhots','estudo_solid','root','123');
$conn->connect(new MySql);
