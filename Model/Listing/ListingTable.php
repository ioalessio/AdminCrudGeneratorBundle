<?php

namespace Io\AdminCrudGeneratorBundle\Model\Listing;

use Doctrine\Common\Collections\ArrayCollection;

class ListingTable {
    
    protected $rows;
    
    protected $columns;

    protected $actions;
    protected $globalActions;
    
    protected $id;
    protected $class;
    protected $attr;
    
    function __construct() {
        $this->rows = new ArrayCollection;
        $this->columns = new ArrayCollection;
        $this->actions = new ArrayCollection;
                
        $this->globalActions = new ArrayCollection;
        $this->attr = array();
        
    }
    public function getActions() {
        return $this->actions;
    }

    public function setActions($actions) {
        $this->actions = $actions;
    }

    public function getGlobalActions() {
        return $this->globalActions;
    }

    public function setGlobalActions($globalActions) {
        $this->globalActions = $globalActions;
    }

    
    public function getRows() {
        return $this->rows;
    }

    public function setRows($rows) {
        $this->rows = $rows;
    }

    public function getColumns() {
        return $this->columns;
    }

    public function setColumns($columns) {
        $this->columns = $columns;
    }
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getClass() {
        return $this->class;
    }

    public function setClass($class) {
        $this->class = $class;
    }

    public function getAttr() {
        return $this->attr;
    }

    public function setAttr($attr) {
        $this->attr = $attr;
    }



}
