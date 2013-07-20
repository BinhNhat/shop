<?php

namespace Home;

use Admin\Model\User;

use Zend\Db\TableGateway\TableGateway;

use Zend\Db\ResultSet\ResultSet;

use Admin\Model\Content;

use Admin\Model\ContentTable;

use Zend\Authentication\Storage;
use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Adapter\DbTable as DbTableAuthAdapter;

use Admin\Model\UserTable;
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
	

}