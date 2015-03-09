<div class="container">
<div role="tabpanel">
<div class="bora_fakkusoglu_header">
  <div class="container">
  <h1>Bora Fakkusoglu's Group</h1>
 
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#Overview" aria-controls="Overview" role="tab" data-toggle="tab"><img src="images/notbook_icon.png">&nbsp; Overview</a></li>
    <li role="presentation" class="active"><a href="#Questionnaires" aria-controls="Questionnaires" role="tab" data-toggle="tab"><img src="images/list-icon.png">&nbsp;    Questionnaires </a></li>
    <li role="presentation"><a href="#Reviewers" aria-controls="Reviewers" role="tab" data-toggle="tab"><img src="images/other-people.png">&nbsp; Reviewers  </a></li>
    <li role="presentation"><a href="#Administration" aria-controls="Administration" role="tab" data-toggle="tab"><img src="images/setting_icon.png"> &nbsp;Administration</a></li>
  </ul>
 </div>
  </div>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="Overview">...</div>
  <div role="tabpanel" class="tab-pane active" id="Questionnaires"><div class="container">

  <div class="questionnaire_form">
    <h2>Create a new Questionnaire</h2>
    <button class="btn" type="button" onclick="window.location.href='/interview/dashboard'"><img src="images/Button_cancel.png">Cancel</button>
	<?php
		echo $this->Form->create('', array(
		'id' => 'questionnaire_form',
		'inputDefaults' => array(
		'label' => false
		)
		));
	?>
    <div class="row-fluid control-group">
      <div class="span3">
        <label class="label_text">Name Your Questionnaire *</label>
        <p>(job title or other unique name) </p>
      </div>
    
	  <?php
		echo $this->Form->input('questionnaire_title', array(
		'id' => 'questionnaire_title',
		'class' => 'span9',
		'placeholder' => 'HR Head & Recruitment'
		));
	  ?>
    </div>
    <div class="row-fluid control-group">
      <div class="span3">
        <label class="label_text">Introduction For Candidates</label>
        <p>(Optional-will be included on the questionnaire into page before candidate take the questionnaire) </p>
      </div>
      <div class="span9" style="margin:0px;">
        <p>Hint: This field is HTML enabled..Basic tags are allowed:br p of ul ll </p>
    <?php
			echo $this->Form->input('questionnaire_introduction', array(
			'type' => 'textarea',
			'id' => 'questionnaire_introduction',
			'class' => 'textarea_box',
			'rows' => 3,
			'placeholder' => 'Please reply the question naturaly and give your best answer.Try to be yourself and dont manipolate yours answers.'
			));
		?>
      </div>
    </div>
    <div class="row-fluid control-group">
      <div class="span3">
        <label class="label_text">Conclusion for Candidates</label>
        <p>(optional- wil be shown to the candidate after completing the questionnaire)</p>
      </div>
      <div class="span9" style="margin:0px;">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
    <?php
			echo $this->Form->input('questionnaire_conclusion', array(
			'type' => 'textarea',
			'id' => 'questionnaire_conclusion',
			'class' => 'textarea_box',
			'rows' => 3,
			'placeholder' => 'Many thanks for your attendies.We will check your interview and let your now about the results within the two weeks.'
			));
		?>
      </div>
    </div>
    <h3> Optional Settings </h3>
    <div class="row-fluid control-group">
      <div class="span4">
    <?php
		echo $this->Form->input('public_link', array(
		'type' => 'checkbox',
		'id' => 'public_link',
		'class' => 'check_box',
		'div' => false
		));
	  ?>
        <label class="label_text">Public link for this  qustionnaire </label>
      </div>
      <div class="span8" >
        <p>Check this box if you want a public link for your questionnaire.With a public links candidates can invite themselves to take this questionnaire.Share this link on job boards in emails etc.</p>
      </div>
    </div>
    <div class="row-fluid control-group">
      <div class="span4">
    <?php
		echo $this->Form->input('attach_resume', array(
		'type' => 'checkbox',
		'id' => 'attach_resume',
		'class' => 'check_box',
		'div' => false
		));
	  ?>
        <label class="label_text">Allow candidates to attach a resume</label>
      </div>
      <div class="span8" >
        <p>Candidate can upload resumes in PDF,DOC/RTF(Word),or TXT formats</p>
      </div>
    </div>
    <div class="row-fluid control-group">
      <div class="span2">
        <label class="label_text">begin date/time</label>
      </div>
      <div class="span2">
        <input type="text" class="text_box_smal" placeholder="">
        <img class="date_img" src="images/dt.png"> </div>
      <div class="span2">
        <select class="select_box_time">
          <option>9:00am</option>
          <option>10:00am</option>
          <option>11:00am</option>
          <option>12:00am</option>
          <option>1:00am</option>
        </select>
        <label class="label_text">EST</label>
      </div>
      <div class="span6">
        <p>This questionnaire will not be avilable until this date/time.Leave blanks to publish immediately.</p>
      </div>
    </div>
    <div class="row-fluid control-group">
      <div class="span2">
        <label class="label_text">End date/time</label>
      </div>
      <div class="span2">
        <input type="text" class="text_box_smal" placeholder="">
        <img class="date_img" src="images/dt.png"> </div>
      <div class="span2">
        <select class="select_box_time">
          <option>9:00am</option>
          <option>10:00am</option>
          <option>11:00am</option>
          <option>12:00am</option>
          <option>1:00am</option>
        </select>
        <label class="label_text">EST</label>
      </div>
      <div class="span6">
        <p>This questionnaire will expire at  this date/time.Leave blanks if there is no expiration date.</p>
      </div>
    </div>
    <div class="row-fluid control-group">
      <div class="span4">
        <label class="label_text">Maximam recording time for each question<small>(seconds)</small></label>
      </div>
      <div class="span2">
        <?php
		echo $this->Form->input('record_time', array(
		'id' => 'record_time',
		'class' => 'text_box_smal'
		));
	  ?>
      </div>
	  
      <div class="span6">
        <p>Leaving blank will default to the maximam 300 sec. </p>
      </div>
    </div>
    <div class="row-fluid control-group allow_takes">
      <div class="span4">
    <?php
		echo $this->Form->input('allow_retakes', array(
		'type' => 'checkbox',
		'id' => 'allow_retakes',
		'class' => 'check_box',
		'div' => false
		));
	  ?>
        <label class="label_text">Allow re-takes</label>
      </div>
      <div class="span8">
        <p>We recommened leaving this checked(allowing re-takes)so candidates can re-record if they encounter technical difficulties.Un checking this means candidate will only get one chance at each question. </p>
      </div>
    </div>
    <h3> Questions</h3>
    <div class="control-group">
      <p class="note">Note:Changing question after invitation are sent can cause question/answer mis,match cause confusion when scoring.</p>
      <p> hint,grab and drag <img src="images/icon.png">to change the order of the questions</p>
    </div>
    <div class="row-fluid control-group">
      <div class="span2">
        <label class="label_text">Default Question:</label>
      </div>
      <div class="span10" style="margin:0px;">
        <p>Please provide your First and Lastname</p>
      </div>
    </div>
    <button class="btn btn-mini" type="button"><img src="images/add-icon.png" >Add a question</button>
    <div class="clearfix"></div>
    <div class="right_button">
      <button class="btn btn-success" type="button">Save and Continu Editing</button>
      <button class="btn btn-success" type="submit">Save Questionnaire</button>
    </div>
  </div>
  </div></div>
    <div role="tabpanel" class="tab-pane" id="Reviewers">...</div>
    <div role="tabpanel" class="tab-pane" id="Administration">...</div>
  </div>

</div>
     
</div>