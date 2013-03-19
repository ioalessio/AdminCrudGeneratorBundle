<?php

namespace Io\AdminCrudGeneratorBundle\Model\Listing;

use Doctrine\Common\Collections\ArrayCollection;

class ListingRow {
    

    protected $pk;
    protected $columns;
    protected $actions;
    protected $selectable;
    
    protected $class;
    protected $id;
    
    protected $attr;
    
    protected $identifier;
    protected $table;
    
    function __construct() {
        $this->columns = new ArrayCollection;
        $this->actions = new ArrayCollection;
        $this->selectable = true;
        $this->attr = array();
    }

    public function getIdentifier() {
        return $this->identifier;
    }

    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
    }

    public function getTable() {
        return $this->table;
    }

    public function setTable($table) {
        $this->table = $table;
    }

        public function getColumns() {
        return $this->columns;
    }

    public function setColumns(ArrayCollection $columns) {
        $this->columns = $columns;
    }

    public function getClass() {
        return $this->class;
    }

    public function setClass($class) {
        $this->class = $class;
    }

    public function getActions() {
        return $this->actions;
    }

    public function setActions($actions) {
        $this->actions = $actions;
    }

    public function getSelectable() {
        return $this->selectable;
    }

    public function setSelectable($selectable) {
        $this->selectable = $selectable;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAttr() {
        return $this->attr;
    }

    public function setAttr($attr) {
        $this->attr = $attr;
    }

    public function getPk() {
        return $this->pk;
    }

    public function setPk($pk) {
        $this->pk = $pk;
    }


}
