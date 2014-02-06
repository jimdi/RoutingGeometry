<?php

require('RoutingGeometry.php'); 

$RoutingGeometry = new RoutingGeometry();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>RoutingGeometry – A simple PHP decode compressed route geometry Class</title>
<meta charset="utf-8" />

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
<?php var_dump($RoutingGeometry->_decode('usswhBkrbq{Bod@gb@uzE_dWp}H_eHqzDisUjqMcfKhlAoeAfnI}{MedJqzV')); ?>
</body>
</html>