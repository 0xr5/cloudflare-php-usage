<?php
$realip = $_SERVER["HTTP_CF_CONNECTING_IP"]; // Zeigt die echte IP-Adresse des Nutzers.
$ipcountry = $_SERVER["HTTP_CF_IPCOUNTRY"]; // Zeigt das Land, welches über die IP-Adresse herausgefunden wird.

echo "Meine echte IP-Adresse lautet ".$realip." und ich komme aus ".$ipcountry.
?>
