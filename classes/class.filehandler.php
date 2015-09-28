<?php

class filehandler{
  private $fFile;
  private $aDomains;

  public function __construct($sFile){
      if(file_exists($sFile)){
          $this->fFile = simplexml_load_file($sFile);
          $this->aDomains = array();
      }
      else{
        exit('Die Datei existiert nicht oder ist beschädigt.');
      }
  }

  public function fctGetDomains(){
      foreach($this->fFile as $aXML){
          $this->aDomains[] = array('url' => $aXML->url, 'name' => $aXML->name);
      }
      return $this->aDomains;
  }

  public function __destruct(){

  }
}

?>
