<?php namespace core\tdd;

    require_once 'bootstrap.php';
    /**/
    use core\scopeMod as scopeMod;
    use PHPUnit_Framework_TestCase as tddFramework;
    /**/
    class ScopeModTest extends tddFramework
    {
        protected $scopeModTest;
        
        /**
        *@var $scopeModTest \core\scopeMod
        */

        public function setUp()
        {
            $this->scopeModTest = new scopeMod();
        }

        public function testCoreIntstance()
        {
            $this->assertInstanceOf('\core\scopeMod', $this->scopeModTest);
        }
    }