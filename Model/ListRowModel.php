<?php

namespace Io\AdminCrudGeneratorBundle\Model;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * Un ListModel contiene ListRowModel
 */
class ListRowModel
{
    //array di ListFieldModel dove vengono definiti i campi da visualizzare nell'elenco
    protected $fields;    
    //file/classe Collection backbone.js
    protected $backboneModel;
    
    public function __construct() {
        $this->fields = new ArrayCollection;
    }

}