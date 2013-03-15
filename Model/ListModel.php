<?php

namespace Io\AdminCrudGeneratorBundle\Model;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * Dovrei gestirlo come un servizio?
 */
class ListModel
{
    protected $entity;
    protected $method;    
    //potrei usare direttamente l'oggetto QueryBuilder
    protected $qb;
    //filtri da effettuare per estrapolare i dati
    protected $filters;
    
    //array di ListFieldModel dove vengono definiti i campi da visualizzare nell'elenco
    protected $fields;    
    
    //url di base della paginazione
    protected $url;
    //url per chiamate in ajax/json?
    protected $json_url; 

    //azioni per ogni singola riga (es: vedi - modifica)
    protected $actions;

    //azioni per ogni singola riga (es: elimina selezionati)
    protected $multipleActions;
    
    //azioni globali (es: crea)
    protected $globalActions;
    
    //localizzazione, posso prenderla tramite DependencyInjection
    protected $_locale;
    
    //sessione 
    protected $session;
    
    //entity manager, posso prenderla tramite DependencyInjection
    protected $em;
    
    //file template da renderizzare
    protected $template;

    //file template da estendere
    protected $templateExtend;
    
    //file/classe Collection backbone.js
    protected $backboneCollection;
    protected $backboneModel;
    
    public function __construct() {
        $this->fields = new ArrayCollection;
    }

    
    public function render() {
        return "";
    }

    /**
     * Estrapolazione dati
     * @return ArrayCollection
     */
    public function getResult(){
        $method = $this->method;        
        //$results = call_user_func(array($repo, $method), array($this->filters));
        $repo = $this->getDoctrine()->getManager()->getRepository($this->repository);
        return $repo->$method($this->filters);        
    }
}