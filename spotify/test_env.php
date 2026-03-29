<?php
header("Content-Type: text/plain");
echo "Prepend: " . ini_get("auto_prepend_file") . "\n";
echo "Append: " . ini_get("auto_append_file") . "\n";
echo "Self: " . $_SERVER['PHP_SELF'] . "\n";
?>
