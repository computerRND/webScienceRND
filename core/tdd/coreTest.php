<?php namespace core\tdd;

    require_once 'bootstrap.php';
    /**/
    use core\core as core;
    use PHPUnit_Framework_TestCase as tddFramework;
    /**/
    class coreTest extends tddFramework
    {
        protected $coreTest;
        
        /**
        *@var $coreTest \core\core
        */

        public function setUp()
        {
            $this->coreTest = new core();
        }

        public function testCoreIntstance()
        {
            $this->assertInstanceOf('\core\core', $this->coreTest);
        }
    }