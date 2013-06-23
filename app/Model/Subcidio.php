<?php
App::uses('AppModel', 'Model');
/**
 * Subcidio Model
 *
 * @property Presupuesto $Presupuesto
 */
class Subcidio extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Federal';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Presupuesto' => array(
			'className' => 'Presupuesto',
			'foreignKey' => 'subcidio_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
