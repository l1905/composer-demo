<?php
/**
 * Author: litong@smzdm.com
 * Date: 2019/1/15 下午12:34
 */

require_once __DIR__ . "/../vendor/autoload.php";
$mainClient = new \litong\composer_demo\MainClient();

echo $mainClient->testMethod();
