<?php

namespace litong\composer_demo;
/**
 * Author: litong@smzdm.com
 * Date: 2019/1/15 上午11:52
 */

class MainClient {
    function __construct()
    {
        echo "main client init";
    }

    function testMethod()
    {
        echo "testMethod----echo".PHP_EOL;
    }

    /**
     * Author: litong@smzdm.com
     * Date: 2019/1/15 下午1:23
     * version : 0.1.2
     */
    function testMethod02()
    {
        echo "testMethod----echo".PHP_EOL;
    }

    /**
     * Author: litong@smzdm.com
     * Date: 2019/1/15 下午1:23
     * version : 1.1.2
     */
    function testMethod03()
    {
        echo "testMethod----echo".PHP_EOL;
    }

}