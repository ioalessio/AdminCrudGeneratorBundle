<?php

namespace Io\AdminCrudGeneratorBundle\Model;

    
class ListFieldModel {

    protected $attribute;
    
    protected $label;
    
    protected $value;
    
    protected $sortable;
    
    protected $editable;
    
    protected $url;
    
    protected $json;
    
    public function getAttribute() {
        return $this->attribute;
    }

    public function setAttribute($attribute) {
        $this->attribute = $attribute;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getSortable() {
        return $this->sortable;
    }

    public function setSortable($sortable) {
        $this->sortable = $sortable;
    }

    public function getEditable() {
        return $this->editable;
    }

    public function setEditable($editable) {
        $this->editable = $editable;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getJson() {
        return $this->json;
    }

    public function setJson($json) {
        $this->json = $json;
    }
   
}

?>