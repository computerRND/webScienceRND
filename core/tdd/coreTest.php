<?php namespace core\tdd;

    require_once 'bootstrap.php';
    /**/
    use core\core as core;
    use PHPUnit_Framework_TestCase as tddFramework;
    use PHPUnit_Framework_Contraint_ClassHasStaticAttribute as tddStaticAttrib;
    /**/
    class coreTest extends tddFramework
    {
        /*start test for base class - propterties & scope*/
        protected $coreTest;
        protected $staticAttrib;
        
        /**
        *@var $coreTest \core\core
        */

        public function setUp()
        {
            $this->coreTest = new core();
        }
        public function test_CoreIntstance()
        {
            $this->assertInstanceOf('\core\core', $this->coreTest);
        }
        //------------------------------------------------------------
        /* test array defaults/NULL - Values & private static scope */
        public function test_usrAccountSet_array()
        {
            //$this->assertThat($this->coreTest);
            $this->assertArrayHasKey('usrHost', $this->coreTest->usrAccountSet);
            $this->assertArrayHasKey('usrLogin', $this->coreTest->usrAccountSet);
            $this->assertArrayHasKey('usrPassWord', $this->coreTest->usrAccountSet);
            $this->assertArrayHasKey('usrDB', $this->coreTest->usrAccountSet);
        }
        /**/
        public function test_stackSet_array()
        {
            $this->assertArrayHasKey('usrTokin1', $this->coreTest->stackSet);
            $this->assertArrayHasKey('usrTokin2', $this->coreTest->stackSet);
            $this->assertArrayHasKey('usrTokin3', $this->coreTest->stackSet);
            $this->assertArrayHasKey('usrTokin4', $this->coreTest->stackSet);
        }
        /**/
        public function test_vLibSet_array()
        {
            $this->assertArrayHasKey('setVar', $this->coreTest->vLibSet);
            $this->assertArrayHasKey('getVar', $this->coreTest->vLibSet);
            $this->assertArrayHasKey('postVar', $this->coreTest->vLibSet);
            $this->assertArrayHasKey('trackVar', $this->coreTest->vLibSet);
        }
        //-------------------------------------------------------------
        /* test array defaults - dynamic values, public scope & globel state */
        public function test_UsrAccount_array()
        {
            $this->assertArrayHasKey('usrHost', $this->coreTest->usrAccount);
            $this->assertArrayHasKey('usrLogin', $this->coreTest->usrAccount);
            $this->assertArrayHasKey('usrPassWord', $this->coreTest->usrAccount);
            $this->assertArrayHasKey('usrDB', $this->coreTest->usrAccount);
        }
        /**/
        public function test_stack_array()
        {
            $this->assertArrayHasKey('usrTokin1', $this->coreTest->stack);
            $this->assertArrayHasKey('usrTokin2', $this->coreTest->stack);
            $this->assertArrayHasKey('usrTokin3', $this->coreTest->stack);
            $this->assertArrayHasKey('usrTokin4', $this->coreTest->stack);
        }
        /**/
        public function test_vLib_array()
        {
            $this->assertArrayHasKey('setVar', $this->coreTest->vLib);
            $this->assertArrayHasKey('getVar', $this->coreTest->vLib);
            $this->assertArrayHasKey('postVar', $this->coreTest->vLib);
            $this->assertArrayHasKey('trackVar', $this->coreTest->vLib);
        }
        //-------------------------------------------------------------
        /* test lazy init functionality - dynamic & static values, private, public & globel states */
    }