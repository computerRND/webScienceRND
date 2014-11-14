<?php namespace core; 
/* start server output class/methods */
require_once 'bootstrap.php';

use core\scopeMod as scopeNod;
use core\i_core\i_core as i_core;
use core\router\memoryHandler as memoryHandler;

class index extends core implements i_core
{

}
?>
<!-- start client output DOM/markup -->
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Lazy init 101</title>
    </head>
    <body>
        <?php
        echo 'hello world!!'.'<br />'; 
        $output = new scopeMod();
        ?>
    </body>
</html>
