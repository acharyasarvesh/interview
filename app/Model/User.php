<?php

class User extends AppModel {

	public $name = 'User';
	/*public $hasOne = array(
        'Userdetail' => array(
            'className' => 'Userdetail',
            'foreignKey' => 'user_id',
            'dependent' => true
        )
    );*/
    public $validate = array(
        'first_name' => array(
            'Plese enter your First name' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a your First name.'
            )
        ),
        'last_name' => array(
            'Plese enter your name' => array(
                'rule' => 'notEmpty',
                'message' => 'Plese enter your Last name.'
            ),
        ),
        'email_id' => array(
            'Valid email' => array(
                'rule' => array('email'),
                'message' => 'Please Enter a valid email address'
            ),
        ),
        'password' => array(
            'Not empty' => array(
                'rule' => 'notEmpty',
                'message' => 'Plese enter your password'
            )
        )        
    );
	
    public function beforeSave($options = array()) {
        if (isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        return true;
    }

	public function findByUsername($name) {
        $users = $this->find('first', array(
            'fields' => 'User.*',
			'conditions'=> array(
				'User.username' => $name
			)
        ));
        return $users;
    }
	
	public function getUsers() {
        $users = $this->find('all', array(
            'fields' => 'User.*',
			'conditions'=> array(
				'User.status' => 1
			)
        ));
        return $users;
    }

}
