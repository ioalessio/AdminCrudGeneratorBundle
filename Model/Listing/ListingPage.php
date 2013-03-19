<?php

namespace Io\AdminCrudGeneratorBundle\Model\Listing;

use Doctrine\Common\Collections\ArrayCollection;

class ListingPage {
    
    protected $template;
    protected $route;
    protected $table;
    protected $pagination;
    protected $breadcrumb;
    protected $filters;
    protected $links;
    protected $title;
    protected $class;
    protected $attr;
    
    function __construct() {
        $this->setTemplate("IoAdminCrudGeneratorBundle:List:index.html.twig");
    }
    
    public function getTable() {
        return $this->table;
    }

    public function setTable($table) {
        $this->table = $table;
    }

    public function getPagination() {
        return $this->pagination;
    }

    public function setPagination($pagination) {
        $this->pagination = $pagination;
    }

    public function getFilters() {
        return $this->filters;
    }

    public function setFilters($filters) {
        $this->filters = $filters;
    }

    public function getLinks() {
        return $this->links;
    }

    public function setLinks($links) {
        $this->links = $links;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
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
    
    public function getTemplate() {
        return $this->template;
    }

    public function setTemplate($template) {
        $this->template = $template;
    }

    public function getRoute() {
        return $this->route;
    }

    public function setRoute($route) {
        $this->route = $route;
    }

    public function getBreadcrumb() {
        return $this->breadcrumb;
    }

    public function setBreadcrumb($breadcrumb) {
        $this->breadcrumb = $breadcrumb;
    }





}
