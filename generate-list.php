<?php

$files = new DirectoryIterator(__DIR__ . '/famfamfam_silk_icons_v013/icons');
$i = 0;
foreach($files as $file)
{
    if(false === $file->isDot())
    {
        echo "<pre>";
        var_dump(str_replace('_', '-', $file->getBasename('.png')));
        echo "</pre>" . PHP_EOL;
        $i++;
    }
}
echo "<pre>";
var_dump($i);
echo "</pre>" . PHP_EOL;