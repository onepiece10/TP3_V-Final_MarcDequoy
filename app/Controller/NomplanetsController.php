<?php
App::uses('AppController', 'Controller');
/**
 * Nomplanets Controller
 *
 * @property Nomplanet $Nomplanet
 * @property PaginatorComponent $Paginator
 */
class NomplanetsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
            if ($this->request->is('ajax')) {
              $term = $this->request->query('term');
              $nomPlanet = $this->Nomplanet->getNomPlanets($term);
              $this->set(compact('nomPlanet'));
              $this->set('_serialize', 'nomPlanet');
            }
    }
  }