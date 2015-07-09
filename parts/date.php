<?php
$date = new DateTime();
echo "<input type='hidden' class='server_time' value='" . date_format($date, 'd/m/Y H:i:s') . "' </input>";

?>
