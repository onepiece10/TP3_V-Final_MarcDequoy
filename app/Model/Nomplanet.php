<?php
App::uses('AppModel', 'Model');
/**
 * Nomplanet Model
 *
 */
class Nomplanet extends AppModel {
    
    public function getNomPlanets ($term = null) {
      if(!empty($term)) {
        $nomplanets = $this->find('list', array(
          'conditions' => array(
            'name LIKE' => trim($term) . '%'
          )
        ));
        return $nomplanets;
      }
      return false;
    }
}
