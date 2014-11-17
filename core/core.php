<?php namespace core; 

require_once 'bootstrap.php';
use core\i_scopeMod\i_scopeMod as i_scopeMod;

class core extends scopeMod implements i_scopeMod
{
    //start building  signletons for object-pool
    
  public static // set private properties
  $usrAccountSet = array("usrHost"=>"NULL", "usrLogin"=>"NULL", "usrPassWord"=>"NULL", "usrDB"=>"NULL"),
  $stackSet = array("usrTokin1"=>"NULL", "usrTokin2"=>"NULL", "usrTokin3"=>"NULL", "usrTokin4"=>"NULL"),
  $vLibSet = array("setVar"=>"NULL", "getVar"=>"NULL", "postVar"=>"NULL", "trackVar" => "NULL");
    
  public //instances
  $usrAccount = array("usrHost"=>"35", "usrLogin"=>"37", "usrPassWord"=>"43", "usrDB"=>"43"),        
  $stack = array("usrTokin1"=>"35", "usrTokin2"=>"37", "usrTokin3"=>"43", "usrTokin4"=>"43"),
  $vLib = array("setVar"=>"44", "getVar"=>"50", "postVar"=>"43", "trackVar" => "50");
   
  // build static getInstande methed
  /*
   * build: 
   * -static function 
   * -lazy init 
   */      
  
  // build construct method
  
  /* build:
   * -check/validate Clientside input
   * -call traits (decorator patterns)
   * -populate/overide scopemod Data-Provider tables
   * -call router\driver class for methods to/from router\fs & router\form classes)
   */
  
   /* next jobs to in line as of 11/15/14*/
  //start build protected JSON API from ScopeMod tables
  //start testing (using stubs and mocks) input/output procs  
   

    
    
}
