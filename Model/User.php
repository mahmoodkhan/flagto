<?php
// app/Model/User.php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'role' => array(
        	'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'fullname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A fullname is required'
            )
        ),
        'phone' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A phone number is required'
            )
        ),
    );
    
    public function beforeSave($options = array()) {
    	if (isset($this->data[$this->alias]['password'])) {
        	$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    	}
    	return true;
	}
}



?>