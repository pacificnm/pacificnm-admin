<?php
namespace Admin\Controller;

use Zend\View\Model\ViewModel;
use Application\Controller\AbstractApplicationController;

class IndexController extends AbstractApplicationController
{
    /**
     * 
     */
    public function __construct()
    {
        
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Application\Controller\AbstractApplicationController::indexAction()
     */
    public function indexAction()
    {
        return new ViewModel(array(
            
        ));
    }
}
