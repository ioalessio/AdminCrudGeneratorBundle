<?php

namespace Io\AdminCrudGeneratorBundle\Model\Listing;

class ListingCell {
    
    /**
     * La configurazione della colonna è nell'oggetto ListingColumn
     * @var type 
     */
    protected $column;
    protected $attr;    
    protected $value;    
    protected $class;    
    protected $id; 
    //riga di riferimento
    protected $row;    
    
    function __construct() {
        $this->attr = array();
    }

    public function getAttr() {
        return $this->attr;
    }

    public function setAttr($attr) {
        $this->attr = $attr;
    }

        public function getColumn() {
        return $this->column;
    }

    public function setColumn(ListingColumn $column) {
        $this->column = $column;
    }

    
    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getClass() {
        return $this->class;
    }

    public function setClass($class) {
        $this->class = $class;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getRow() {
        return $this->row;
    }

    public function setRow($row) {
        $this->row = $row;
    }




}
