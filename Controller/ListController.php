<?php

namespace Io\AdminCrudGeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

use Io\AdminCrudGeneratorBundle\Model\ListModel;

abstract class ListController extends Controller
{    
    /**
     * A questo metodo va fatto l'override e definita la regola di routing
     */
    public function indexAction() {
        
        
        $listModel = new ListModel();
        $listModel->setFilters();
        $listModel->setFields();
        return $listModel->render();
    }
    
    

}