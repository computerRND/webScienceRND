<?php namespace core\tdd;

    require_once 'bootstrap.php';
    /**/
    use core\index as index;
    use PHPUnit_Framework_TestCase as tddFramework;
    /**/
    class indexTest extends tddFramework
    {
        protected $indexTest;
        
        /**
        *@var $indexTest \core\index
        */

        public function setUp()
        {
            $this->indexTest = new index();
        }

        public function testIntstance()
        {
            $this->assertInstanceOf('\core\index', $this->indexTest);
        }
    }
