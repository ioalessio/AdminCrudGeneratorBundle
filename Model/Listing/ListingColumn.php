<?php

namespace Io\AdminCrudGeneratorBundle\Model\Listing;

    
class ListingColumn {

    
    protected $label;

    protected $attribute;
        
    protected $sortable;
    
    protected $editable;
    
    protected $url;
    
    protected $json;
    
    public function getAttribute() {
        return $this->attribute;
    }

    public function setAttribute($attribute) {
        $this->attribute = $attribute;
        return $this;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function getSortable() {
        return $this->sortable;
    }

    public function setSortable($sortable) {
        $this->sortable = $sortable;
    }

    public function getEditable() {
        return $this->editable;
        return $this;
    }

    public function setEditable($editable) {
        $this->editable = $editable;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    public function getJson() {
        return $this->json;
    }

    public function setJson($json) {
        $this->json = $json;
        return $this;
    }
   
}

?>