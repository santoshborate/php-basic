<?php
echo $d = date("d-m-Y");  // 29-09-2018
$dd = new \DateTime($d);

echo "<br>\n", $dd->format("d-M-Y h:i:s"); // 29-Sep-2018 12:00:00
echo "<br>\n", (new DateTime('now'))->format('d-m-Y h:i:s'); // 29-09-2018 08:23:08