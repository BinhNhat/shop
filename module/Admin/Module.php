<?php

namespace Admin;

use Admin\Model\AdminTable;
use Admin\Model\Admin;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
	public function getAutoloaderConfig()
	{
		return array(
				'Zend\Loader\ClassMapAutoloader' => array(
						__DIR__.'/autoload_classmap.php',
				),
				'Zend\Loader\StandardAutoloader' => array(
						'namespaces' => array(
								__NAMESPACE__ => __DIR__.'/src/'.__NAMESPACE__,
						),
				),
			);
	}
	
	public function getConfig()
	{
		return include __DIR__.'/config/module.config.php';
	}
	
    public function getServiceConfig()
    {
        return array(
            'factories'=> array(
                'Admin\Model\AdminTable'=> function($sm)
                {
                    $tbGateway= $sm->get('AdminTableGateway');
                    return new AdminTable($tbGateway);
                },
                'AdminTableGateway'=> function($sm)
                {
                    $dbAdapter= $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype= new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Admin());
                    return new TableGateway('user',$dbAdapter, null, $resultSetPrototype);
                }
            ),
        );
    }
}