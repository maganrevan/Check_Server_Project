<?php

require_once 'class.domain.php';
require_once 'class.filehandler.php';

class main{
  public function __construct(){
  }

  public function __destruct(){

  }

  public function fctGetFilehandler($sFile){
      $filehandler = new filehandler($sFile);
      return $filehandler;
  }

  public function fctGetDomain(){
    $domain = new domain();
    return $domain;
  }
}

?>
