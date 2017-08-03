<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 13:00
 */

/** @var string $name */
$name = './counter.txt';

$fp = fopen($name, 'c+');
flock($fp, LOCK_EX);

$size = filesize($name);
$counter = ($size) ? (int)fread($fp, $size) : 0;

ftruncate($fp, 0);
fseek($fp, 0);

fwrite($fp, ++$counter);

flock($fp, LOCK_UN);
fclose($fp);

echo $counter;
