<?php

namespace Io\AdminCrudGeneratorBundle\Model\Listing;

use Doctrine\Common\Collections\ArrayCollection;

class ListingRowAction {
    
    protected $label;
    protected $icon;
    protected $route;
    protected $pkLabel;
    protected $routeParameter;
    
    function __construct() {
        $this->pkLabel = "id";
    }

    public function getPkLabel() {
        return $this->pkLabel;
    }

    public function setPkLabel($pkLabel) {
        $this->pkLabel = $pkLabel;
    }

        public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function setIcon($icon) {
        $this->icon = $icon;
    }

    public function getRoute() {
        return $this->route;
    }

    public function setRoute($route) {
        $this->route = $route;
    }

    public function getRouteParameter() {
        return $this->routeParameter;
    }

    public function setRouteParameter($routeParameter) {
        $this->routeParameter = $routeParameter;
    }


}
