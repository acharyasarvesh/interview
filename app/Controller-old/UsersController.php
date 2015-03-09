<?php

App::uses('Sanitize', 'Utility');
App::uses('Validation', 'Utility');
App::uses('CakeEmail', 'Network/Email');

//App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class UsersController extends AppController {

    //var $components = array('RequestHandler');
    public $name = 'Users';

    public function signup() {
        $this->set('title_for_layout', 'Sign Up');
        if ($this->request->is('post')):
            $hash = sha1($this->request->data['User']['first_name'] . rand(0, 100));
            $this->request->data['User']['token_hash'] = $hash;
            if ($this->User->validates()):
                $this->request->data['User']['username'] = strtolower($this->request->data['User']['first_name'] . $this->request->data['User']['last_name'] . rand(0, 1000));

                if ($this->User->save($this->request->data)):

                    $ms = "";
                    $ms.='http://recovid.indiascores.com/interview/users/verify/t:' . $hash . '/n:' . $this->request->data['User']['emailid'] . '';

                    $ms = wordwrap($ms, 70);

                    $Email = new CakeEmail();
                    $Email->template('users_signup_email')
                            ->emailFormat('html')
                            ->from(array('noreply@recovid.com' => 'Recovid'))
                            ->to($this->request->data['User']['emailid'])
                            ->subject('Confirm Registration for Recovid')
                            ->viewVars(array('name' => $this->request->data['User']['first_name'],
                                'email' => $this->request->data['User']['emailid'],
                                'confirm_code' => $ms
                            ))
                            ->send();
                    $this->redirect(array(
                        'controller' => 'users', 'action' => 'emailconfirmation', '?' => array(
                            'email' => base64_encode($this->request->data['User']['emailid'])
                        ))
                    );
                endif;
            endif;
        endif;
        $this->render('signup');
    }

    public function verify() {
        if (!empty($this->passedArgs['n']) && !empty($this->passedArgs['t'])) {
            $args = $this->passedArgs['n'];
            $tokenhash = $this->passedArgs['t'];
            $results = $this->User->findByEmail($args);
            //check if the user is already activated
            if ($results['User']['status'] == 0) {
                //check the token
                if ($results['User']['token_hash'] == $tokenhash) {
                    //Set user status to 1
                    $email = $results['User']['email'];
                    $status = 1;
                    //Save the data
                    $this->User->updateAll(
                            array('status' => $status), array('email' => $email)
                    );
                    $this->Session->setFlash('Your registration is complete');
                    $this->redirect('/login');
                } else {
                    $this->Session->setFlash('Your registration failed please try again');
                    $this->redirect('/signup');
                }
            }
        }
    }

    public function login() {
        $this->set('title_for_layout', 'Login');
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                if ($this->Auth->user('status') == 1) {
                    $this->redirect($this->Auth->redirect());
                } else {
                    $this->Session->setFlash('Your account is not activated');
                }
            } else {
                $this->Session->setFlash('Your Username/Password combination was incorrect');
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function forgotpassword() {
        $this->set('title_for_layout', 'Forgot Password');
        if ($this->request->is('post')):
            if (!empty($this->request->data)):
                $user_email = htmlspecialchars(stripslashes($this->request->data['User']['emailid']));
                $getemail = $this->User->find('all', array(
                    'fields' => 'emailid',
                    'conditions' => array('emailid' => $user_email)
                ));
                if (!$getemail):
                    $email_incorrect = "Email you entered does not exist";
                    $this->set('email_incorrect', $email_incorrect);
                else:
                    //Generate a RANDOM MD5 Hash for a password
                    $random_password = md5(uniqid(rand()));
                    //Take the first 8 digits and use them as the password we intend to email the user
                    $emailpassword = substr($random_password, 0, 8);
                    //Encrypt $emailpassword in MD5 format for the database
                    $unique_password = md5($emailpassword);
                    $update_password = array(
                        'temp_pass_key' => "'$unique_password'"
                    );
                    $this->User->updateAll($update_password, array('emailid' => $getemail[0]['User']['emailid']));
                    //Send Email Containing New Password
                    $Email = new CakeEmail();
                    $Email->template('forgotpassword_user_email')
                            ->emailFormat('html')
                            ->from(array('noreply@recovid.com' => 'Recovid'))
                            ->to($this->request->data['User']['emailid'])
                            ->subject('Reset Password')
                            ->viewVars(array('password' => $emailpassword
                            ))
                            ->send();
                endif;
            endif;
        endif;
        $this->render('forgotpassword');
    }

    public function profile() {
        $this->set('title_for_layout', 'Profile');
        $this->layout = "dashboard";
        $this->render('profile');
    }

    public function emailconfirmation() {
        $this->set('title_for_layout', 'Email Confirmation');
        $email = base64_decode($_GET['email']);
        $this->set('email', $email);
        $this->render('emailconfirmation');
    }

    public function edit() {
        $this->set('title_for_layout', 'Edit Profile');
        if ($this->Auth->loggedIn()) {
            $user = $this->User->findById($this->Auth->user('id'));
            $id = $this->Auth->user('id');
            if ($this->request->is(array('post', 'put'))) {
                $file = $this->request->data['Document']['submittedfile'];
                move_uploaded_file($this->data['Document']['submittedfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/webtech/app/webroot/img/uploads/users/' . $this->data['Document']['submittedfile']['name']);
                $this->request->data['Userdetail']['profilepic'] = '/img/uploads/users/' . $this->data['Document']['submittedfile']['name'];
                $profilepic = $this->request->data['Userdetail']['profilepic'];
                $data = $this->request->data;
                $update = array(
                    'mobile' => "'" . $data['Userdetail']['mobile'] . "'",
                    'location' => "'" . $data['Userdetail']['location'] . "'",
                    'aboutme' => "'" . $data['Userdetail']['aboutme'] . "'",
                    'websiteurl' => "'" . $data['Userdetail']['websiteurl'] . "'",
                    'facebookurl' => "'" . $data['Userdetail']['facebookurl'] . "'",
                    'twitterurl' => "'" . $data['Userdetail']['twitterurl'] . "'",
                    'linkedinurl' => "'" . $data['Userdetail']['linkedinurl'] . "'",
                    'profilepic' => "'" . $profilepic . "'",
                );
                $this->loadModel('Userdetail');
                if ($this->Userdetail->updateAll($update, array('Userdetail.user_id' => $id))) {
                    $this->Session->setFlash(__('Your Profile has been updated.'));
                    $this->redirect('/profile');
                }
                $this->Session->setFlash(__('Unable to update your profile.'));
            }
            if (!$this->request->data) {
                $this->request->data = $user;
            }
        }
        $this->layout = "dashboard";
        $this->render('edit');
    }

    public function dashboard() {
        $this->set('title_for_layout', 'Dashboard');
        //$this->layout = "dashboard";
        $this->render('dashboard');
    }

}
