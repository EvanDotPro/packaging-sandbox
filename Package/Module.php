<?php
namespace Package;

class Module
{
    public function getConfig()
    {
        return array(
            'controllers' => array(
                'invokables' => array(
                    'Install' => 'Package\Controller\Install'
                )
            ),
            'console' => array(
                'router' => array(
                    'routes' => array(
                        'install' => array(
                            'options' => array(
                                'route'    => 'install <package>',
                                'defaults' => array(
                                    'controller' => 'Install',
                                    'action'     => 'install'
                                )
                            )
                        )
                    )
                )
            )
        );
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__
                )
            )
        );
    }
}
