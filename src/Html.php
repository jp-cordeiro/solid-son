<?php


namespace Solid;

class Html
{
    public function __call($name, $arguments)
    {
        $class = 'Solid\\Tag\\'.ucfirst($name);

        return call_user_func_array([new $class, 'render'],$arguments);
    }
}