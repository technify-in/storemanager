<?php
$date = new DateTime();
echo "<input type='hidden' class='server_time' value='" . date_format($date, 'd/m/Y H:i:s') . "' </input>";

?>

<div class="clock trans_10 center">
<div id="Date"></div>

<ul class="time">
	<li id="hours"> </li>
    <li id="point">:</li>
    <li id="min"> </li>
    <li id="point">:</li>
    <li id="sec"> </li>
</ul>

</div>
