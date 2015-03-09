<?php

class QuestionsController extends AppController {

    var $name = "Questions";

    public function display() {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }
        $this->set(compact('page', 'subpage', 'title_for_layout'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingViewException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }

    public function addquestion() {
        $this->set('title_for_layout', 'Add Question');

        # Checking if logged in user session exist or not.
        # if not then redirect to signin Page.
        if ($this->request->is('post')):
            
			$options = array(
			
				'public_link'=>$this->request->data['Question']['public_link'],
				'attach_resume'=>$this->request->data['Question']['attach_resume'],
				'record_time'=>$this->request->data['Question']['record_time'],
				'allow_retakes'=>$this->request->data['Question']['allow_retakes']
			
			);
			
			$questions = array(
			
				'default_question'=>'Please provide your First and Lastname',
			
			);
			
			$user = $this->Session->read("Auth.User");
			
			$data = array(
				
				'user_id'=>$user['id'],
				'title'=>$this->request->data['Question']['questionnaire_title'],
				'introduction'=>$this->request->data['Question']['questionnaire_introduction'],
				'conclusion'=>$this->request->data['Question']['questionnaire_conclusion'],
				'optional_settings'=>serialize($options),
				'questions'=>serialize($questions),
			);
			
            if($this->Question->validates()):
				if ($this->Question->save($data)):
					$this->Session->setFlash(__('Questionnaire has been saved', true));
					$this->redirect('/addquestion');
				endif;	
			endif;
		 endif;

        # Assigning and Rendering the Layout and view
        $this->render('addquestion');
    }

    public function edit_question($id = null) {
	
        $this->set('title_for_layout', 'Edit Question');

        $green = $this->Session->read('adminloggedin');
        if ($green !== 'yes'):
            $this->redirect("/adminsignin/");
        endif;
		
		$id = base64_decode($_GET['qid']);
		
        $this->loadModel('Course');
        $courses = $this->Course->getCourselists();
        $this->set('courses', $courses);
        //echo $id;
        $question = $this->Question->findById($id);
		$this->set('question', $question);
		
        if ($this->request->is(array('post', 'put'))) {
            $this->Question->id = $id;
            if ($this->Question->save($this->request->data)) {
                $this->Session->setFlash(__('Your Question has been updated.'));
                $this->redirect('/questions');
            }
            $this->Session->setFlash(__('Unable to update your Question.'));
        }
        if (!$this->request->data) {
            $this->request->data = $question;
        }

        # Assigning and Rendering the Layout and view
        $this->layout = "admin_layouts/dashboard";
        $this->render('edit_question');
    }
	
	public function delete($b_id){
	
	$id = base64_decode($b_id);
	if(!empty($id)){
	if($this->Question->delete($id)):
	$this->Session->setFlash(__('Question has been Deleted Successfully.'));
	else:
	$this->Session->setFlash(__('Question cannot be Deleted.'));
	endif;
    $this->redirect('/questions');
	}
	
	}

}
