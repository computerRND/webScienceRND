<?php namespace core; 

require_once 'bootstrap.php';

use core\i_scopeMod\i_scopeMod as i_scopeMod;
use core\t_scopeMod\t_scopeMod as t_scopeMod;

//build application resource pool
class scopeMod implements i_scopeMod
{
public function __construct()
        {
        echo "hello from the scopeMod class!".'<br />';
        }
}

