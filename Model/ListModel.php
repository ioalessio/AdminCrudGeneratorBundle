<?php

namespace Io\AdminCrudGeneratorBundle\Model;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraint as Assert;

use Symfony\Component\Templating\EngineInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

use Io\AdminCrudGeneratorBundle\Model\ListFieldModel;
use Symfony\Component\HttpFoundation\Response;
use Io\AdminCrudGeneratorBundle\Model\Listing;
use Symfony\Component\Form\FormFactoryInterface;

/**
 * Dovrei gestirlo come un servizio
 * 
 * - PK: 
 * - Entity
 * - Method
 * - Route (mi serve per i filtri -> potrebbe andare quindi sull'oggetto ListingFilter o ListingPage)
 * 
 * - PAGE
 *      - breadcrumb
 *      - links
 *      - formFilter
 *      - pagination
 *      - table
 *          - globalActions
 *          - columns
 *          - row
 *              - cells
 *              - rowActions
 */
class ListModel
{
    protected $pk;
    //Entità da elaborare
    protected $entity;
    //Metodo da eseguire
    protected $method = "findAll";    
    //filtri da effettuare per estrapolare i dati
    protected $filters = null;

    //ListingPage
    protected $page;
    //EntityManager
    protected $doctrine;
    //TemplateEngine
    protected $engine;
    //Response
    protected $response;
    //form component    
    protected $formFactory;
    
    public function __construct(RegistryInterface $doctrine, EngineInterface $engine, FormFactoryInterface $formFactory) {
        $this->setDoctrine($doctrine);
        $this->setEngine($engine);
        $this->setFormFactory($formFactory);
        
        $this->setPage(new Listing\ListingPage());
        $this->getPage()->setTable(new Listing\ListingTable());


        $this->setPk("id");
        
    }

    public function addAction($label, $route = "", $icon = "") {
        $action = new Listing\ListingRowAction;
        $action->setLabel($label);
        $action->setRoute($route);
        $action->setIcon($icon);
        
        $this->getPage()->getTable()->getActions()->add($action);
    }
    public function addField($attribute, $label = null ) {
        $field = new Listing\ListingColumn();
        $field->setAttribute($attribute);
        $field->setLabel($label);
        $this->getPage()->getTable()->getColumns()->add($field);
    }
    
    /**
     * 
     * @param ArrayCollection $results
     * @return \Io\AdminCrudGeneratorBundle\Model\Listing\ListingPage
     */
    public function generatePage($results) {

        //creo la tabella di valori
        $i = 0;
        foreach($results as $res) {
            //creo la riga
            $row = new Listing\ListingRow();
            $row->setTable($this->getPage()->getTable());
            //numero di riga
            $row->setIdentifier($i);
            //definisco la chiave primaria
            $method = "get".ucfirst($this->getPk());
            $row->setPk($res->$method());

            //per ogni riga creo le colonne
            foreach($this->getPage()->getTable()->getColumns() as $field) {
                //metodo da visualizzare
                $method = "get".ucfirst($field->getAttribute());
                //creo TabelCell
                $cell = new Listing\ListingCell();
                $cell->setValue($res->$method());
                $cell->setRow($row);
                //assign TableCell to TableRow
                $row->getColumns()->add($cell);
            }
            //definisco le azioni disponibili per ogni singola riga
            
            $this->getPage()->getTable()->getRows()->add($row);            
            $i++;
        }
        return $this->getPage();
    }
    
    /**
     * @return string
     */
    public function render() {

        $results = $this->executeResults();
        
        $vars = array(
          'page' => $this->generatePage($results)
        );
        
        return $this->getEngine()->render( $this->getPage()->getTemplate(), $vars );

    }
    
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function renderResponse() {
        return new Response( $this->render() );        
    }

    /**
     * Estrapolazione dati
     * @return ArrayCollection
     */
    public function executeResults(){
        //$method = $this->method;        
        
        $repo = $this->getDoctrine()->getManager()->getRepository( $this->getEntity() );
        return $repo->findAll();
        //return call_user_func(array($repo, $this->method), array( $this->getFilters() ));
        return $repo->$method($this->getFilters() );        
    }
    
    public function getEntity() {
        return $this->entity;
    }

    public function setEntity($entity) {
        $this->entity = $entity;
    }

    public function getMethod() {
        return $this->method;
    }

    public function setMethod($method) {
        $this->method = $method;
    }

    public function getFilters() {
        return $this->filters;
    }

    /**
     * Oggetto FilterInterface
     * @param type $filters
     */
    public function setFilters($filters) {
        $this->filters = $filters;
    }

    public function getDoctrine() {
        return $this->doctrine;
    }

    public function setDoctrine(RegistryInterface $doctrine) {
        $this->doctrine = $doctrine;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function setEngine(EngineInterface $engine) {
        $this->engine = $engine;
    }

    public function getResponse() {
        return $this->response;
    }

    public function setResponse($response) {
        $this->response = $response;
    }
    public function getPk() {
        return $this->pk;
    }

    public function setPk($pk) {
        $this->pk = $pk;
    }

    public function getPage() {
        return $this->page;
    }

    public function setPage(Listing\ListingPage $page) {
        $this->page = $page;
    }

    public function getFormFactory() {
        return $this->formFactory;
    }

    public function setFormFactory($formFactory) {
        $this->formFactory = $formFactory;
    }

    
    /**
     * Creates and returns a Form instance from the type of the form.
     *
     * @param string|FormTypeInterface $type    The built type of the form
     * @param mixed                    $data    The initial data for the form
     * @param array                    $options Options for the form
     *
     * @return Form
     */
    public function createForm($type, $data = null, array $options = array())
    {
        return $this->getFormFactory()->create($type, $data, $options);
    }    


}