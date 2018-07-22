<?php

interface Passaro{
    public function anda();
}

interface PassaroQueNada extends Passaro{
    public function nada();
}

interface PassaroQueVoa extends Passaro{
    public function voa();
}

Class Andorinha implements PassaroQueVoa{
    public function anda()
    {
        //
    }

    public function voa()
    {
        //
    }
}

Class Pinguim implements PassaroQueNada{
    public function anda()
    {
        //
    }

    public function nada()
    {
        //
    }
}

/*
 * Interface Segregation
 *
 * Nenhum cliente deve ser forçado a depender de métodos que ele não use.
 */