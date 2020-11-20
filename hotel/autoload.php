<?php
function autoloadFunction($class)
{
    if (file_exists('controllers/' . $class . ".php"))
        require("controllers/" . $class . ".php");
    else
        require("models/" . $class . ".php");
}

spl_autoload_register("autoloadFunction");