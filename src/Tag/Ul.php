<?php


namespace Solid\Tag;


class Ul
{
    public function render($content){
        return '<ul>'.$content.'</ul>';
    }
}