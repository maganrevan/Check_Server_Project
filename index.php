<!DOCTYPE html>
<?php
require_once 'classes/class.main.php';
$oMain = new main();
$oFilehandler = $oMain->fctGetFilehandler('include/domain.xml');
$aDomain = $oFilehandler->fctGetDomains();
$oDomain = $oMain->fctGetDomain();
?>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Domaincheck" />
  <meta name="author" conten="Magnus Kruschwitz" />
  <title>Domaincheck</title>
  <link href="include/styles/main.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <?php
      foreach($aDomain as $domains){
          if($oDomain->fctCheckDomain($domains['url']) != -1){
              $state = 'on';
          }
          else{
              $state = 'off';
          }
  ?>
    <div class='row'>
        <?php echo"<div class='state ".$state."'></div>" ?>
        <div class='name'><?php echo'<a href="http://'.$domains['url'].'" title="'.$domains['name'].'" target="_blank">'.$domains['url'].'</a>' ?></div>
    </div>
  <?php
      }
  ?>
</body>
</html>
