<?php echo $this->Session->flash('auth');?>

<article class="fit-fixed">
  <div class="grid-row edit_form">
    <div class="grid-row grid-col-8 grid-col--center grid-col--no-spacing margin-top--2 margin-bottom--5">

      <h1 class="margin-left--half">Edit Account</h1>


       

        <div class="grid-col-12 grid-row grid-col--no-margin grid-col--no-padding">
          <div id='flash_messages'>
</div>

        </div>

        <div id="basic_info" class="color-scheme--white grid-col-12 grid-row">
          <div class="grid-col-8 grid-col--no-spacing">
      
		<?php echo $this->Form->create('Userdetail',array(
			'enctype' => 'multipart/form-data',
			'inputDefaults' => array('label' => false,'div'=> false ))); 
		?>
              <h3>Basic Information</h3>
              
			  <?php echo $this->Form->input('firstname',array(
			'placeholder'=>'First Name',
			'style'=>'border: 1px solid; width:100%; margin-bottom: 2%; padding: 16px 0 16px 10px;'
			)); ?>
			  

			  <?php echo $this->Form->input('lastname',array(
			'placeholder'=>'Last Name',
			'style'=>'border: 1px solid; width:100%; margin-bottom: 2%; padding: 16px 0 16px 10px;'
			)); ?>
			
              <?php echo $this->Form->input('mobile',array(
			'placeholder'=>'Mobile Number',
			'style'=>'border: 1px solid; width:100%; margin-bottom: 2%; padding: 16px 0 16px 10px;'
			)); ?>

              <?php echo $this->Form->input('location',array(
			'placeholder'=>'Location',
			'style'=>'border: 1px solid; width:100%; margin-bottom: 2%; padding: 16px 0 16px 10px;'
			)); ?>

              <?php echo $this->Form->input('aboutme',array(
			'placeholder'=>'About Me',
			'style'=>'border: 1px solid; width:100%; margin-bottom: 2%; padding: 16px 0 16px 10px;'
			)); ?>
			
			
              <?php echo $this->Form->input('websiteurl',array(
			'placeholder'=>'Website Url',
			'style'=>'border: 1px solid; width:100%; margin-bottom: 2%; padding: 16px 0 16px 10px;'
			)); ?>


              <?php echo $this->Form->input('facebookurl',array(
			'placeholder'=>'Facebook Url',
			'style'=>'border: 1px solid; width:100%; margin-bottom: 2%; padding: 16px 0 16px 10px;'
			)); ?>

              <?php echo $this->Form->input('twitterurl',array(
			'placeholder'=>'Twitter Url',
			'style'=>'border: 1px solid; width:100%; margin-bottom: 2%; padding: 16px 0 16px 10px;'
			)); ?>

			
			<?php echo $this->Form->input('linkedinurl',array(
			'placeholder'=>'LinkedIn Url',
			'style'=>'border: 1px solid; width:100%; margin-bottom: 2%; padding: 16px 0 16px 10px;'
			)); ?>
          
              <div class="margin-bottom--1">
                Profile Picture
                <div class="field field--image">
				<?php if($current_user['Userdetail']['profilepic']) {
					echo $this->Html->image($current_user['Userdetail']['profilepic'], array('alt' => $current_user['Userdetail']['firstname'], 'width'=>'140px', 'height'=>'140px'));
					}
					else {
					?>
					<img alt="D2b43ea7360f8d9df1c77c3b28594f64?s=140&amp;d=retro" src="http://www.gravatar.com/avatar/d2b43ea7360f8d9df1c77c3b28594f64?s=140&amp;d=retro" />
					<?php } ?>
				<?php echo $this->Form->file('Document.submittedfile'); ?>
</div>

              </div>

            

              <?php echo $this->Form->end(__('Update Profile')); ?>         </div>
        </div>
    </div>
  </div>
</article>