<?php
$directory = ".";
$files = scandir($directory);

foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        echo $file . "<br>";
    }
}
?>
