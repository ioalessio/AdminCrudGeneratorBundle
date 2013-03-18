<?php

namespace Io\AdminCrudGeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

use Io\AdminCrudGeneratorBundle\Model\EditModel;

abstract class EditController extends Controller
{
    protected function edit(EditModel $model) {

        //validate
        
        //save
        
        //callback?
        
        return true;
    }
}