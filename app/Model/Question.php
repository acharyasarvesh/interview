<?php

class Question extends AppModel {

    var $name = 'Question';
    var $validate = array(
        'question_title' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'This field cannot be empty.'
            )
        ),
        'category_selected' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'allowEmpty' => false,
                'message' => 'Select atleast one category.'
            )
        ),
        'option_one' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'This field cannot be empty.'
            )
        ),
        'option_two' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'This field cannot be empty.'
            )
        ),
        'option_three' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'This field cannot be empty.'
            )
        ),
        'option_four' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'This field cannot be empty.'
            )
        ),
        'answer' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Select answer.'
            )
        ),
        'question_level' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Select level of this question'
            )
        ),
    );

    public function getQuestions() {
        $questions = $this->find('all', array(
            'fields' => 'Question.*',
        ));
        return $questions;
    }

    public function getQuestionDetail($id) {
        $data = $this->find('first', array(
            'fields' => 'Question.*',
            'conditions' => array('Question.id' => $id)
        ));

        return $data;
    }
	
	public function getQuestionCount($cat_id){
		$data = $this->find('all',array(
			'conditions' => array(
					'Question.category_selected' => $cat_id,
					'Question.question_level'	=> 'Biggner'
				)
		));
		$cdata = sizeof($data);
		return $cdata;
	}

}

?>
