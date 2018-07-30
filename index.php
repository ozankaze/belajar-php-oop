<?php
require_once('Kucing.php');
require_once('IbuKucing.php');

$kucing = new IbuKucing('ngik ngik', 20);
echo $kucing->get_suara();


?>