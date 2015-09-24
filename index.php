<!doctype>
<?php

require_once 'classes/class.main.php';
$main = new main();
$domain = $main->fctGetDomain();
$status = $domain->fctCheckDomain('www.google.de');
echo $status;

?>
<html>
<head>
  <title>Domaincheck</title>
</head>
<body>

</body>
</html>
