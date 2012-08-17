#!/usr/bin/env php
<?php
chdir(__DIR__);
include 'init_autoloader.php';
Zend\Mvc\Application::init(include 'config/config.php')->run();
