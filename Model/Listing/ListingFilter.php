<?php

namespace Io\AdminCrudGeneratorBundle\Model\Listing;

    
class ListingFilterModel {

    protected $page;
    
    //instance of ListColumn?
    protected $order;
    
    protected $orderType;
    
    protected $limit;
    
    protected $offset;
    
    public function getPage() {
        return $this->page;
    }

    public function setPage($page) {
        $this->page = $page;
    }

    public function getOrder() {
        return $this->order;
    }

    public function setOrder($order) {
        $this->order = $order;
    }

    public function getOrderType() {
        return $this->orderType;
    }

    public function setOrderType($orderType) {
        $this->orderType = $orderType;
    }

    public function getLimit() {
        return $this->limit;
    }

    public function setLimit($limit) {
        $this->limit = $limit;
    }

    public function getOffset() {
        return $this->offset;
    }

    public function setOffset($offset) {
        $this->offset = $offset;
    }

    
}

?>