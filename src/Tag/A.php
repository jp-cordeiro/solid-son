<?php


namespace Solid\Tag;


class A
{
    public function render($href, $anchor){
        return '<a href="'.$href.'">'.$anchor.'</a>';
    }
}