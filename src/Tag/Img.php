<?php


namespace Solid\Tag;


class Img
{
    public function render($src){
        return '<img src="'.$src.'"/>';
    }
}