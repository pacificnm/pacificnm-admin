<?php
namespace Admin\Controller\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Admin\Controller\IndexController;

class IndexControllerFactory
{

    /**
     *
     * @param ServiceLocatorInterface $serviceLocator            
     * @return \Admin\Controller\IndexController
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        
        return new IndexController();
    }
}