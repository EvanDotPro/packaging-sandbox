<?php
namespace Package\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Console\Request as ConsoleRequest;

class Install extends AbstractActionController
{
    public function installAction()
    {
        $request = $this->getRequest();

        if (!$request instanceof ConsoleRequest){
            throw new \RuntimeException('You can only use this action from a console!');
        }

        $package = $request->getParam('package');

        echo $package;
    }
}
