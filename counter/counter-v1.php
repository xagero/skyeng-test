<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 13:26
 */

$name = './counter.txt';
if (false === file_exists($name)) {
    file_put_contents($name, 0);
}

file_put_contents($name,  intval(file_get_contents($name) + 1), LOCK_EX);