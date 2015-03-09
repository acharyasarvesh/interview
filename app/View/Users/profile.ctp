<?php echo $this->Session->flash('auth');?>
<article class="fit-full color-scheme--grey">
  <article class="fit-fixed">
    <div class="grid-row">
      <div class="grid-col-6 grid-col--center grid-col--align-center grid-col--extra-margin-top">
        <div class="avatar
   avatar--large
  ">
	<?php if($current_user['Userdetail']['profilepic']) {
	 echo $this->Html->image($current_user['Userdetail']['profilepic'], array('alt' => $current_user['Userdetail']['firstname']));
	}
	else {
	?>
    <img alt="D2b43ea7360f8d9df1c77c3b28594f64?s=140&amp;d=retro" src="http://www.gravatar.com/avatar/d2b43ea7360f8d9df1c77c3b28594f64?s=140&amp;d=retro">
	<?php } ?>
</div>

        <p>
          </p><h3>
		  <?php if($current_user['Userdetail']['firstname'] != "")
		  
				echo $current_user['Userdetail']['firstname'];
		  else
				echo $current_user['username'];
		  ?>
          </h3>
        <p></p>
          <p>
            <span class="new-cc-icon icon--"></span>
				<?php echo $current_user['Userdetail']['location']; ?>, India
          </p>
        <p>
         PPCChamp is a full service organic search engine marketing company dedicated to understanding our customers’ businesses, identifying the appropriate online marketing strategies, and implementing the right, customized solution.
        </p>

      </div>
    </div>
  </article>
</article>
<article class="fit-full color-scheme--white">
  <div class="fit-fixed">

    <div class="grid-row">
      <div class="grid-col-12 grid-col--center">
        <div class="grid-row">
          <div class="color-scheme--white columns
            ">
  <div class="fit-fixed grid-row">
      <article class="grid-col-4 grid-col--align-center grid-col--no-margin column">
        <article class="grid-col-12 grid-col--align-center">
          <h3>320</h3>
        </article>
        <article class="grid-col-12 grid-col--align-center">
          <p>Test Attampted</p>
        </article>

      </article>
      <article class="grid-col-4 grid-col--align-center grid-col--no-margin column">
        <article class="grid-col-12 grid-col--align-center">
          <h3>210</h3>
        </article>
        <article class="grid-col-12 grid-col--align-center">
          <p>Passed</p>
        </article>

      </article>
      <article class="grid-col-4 grid-col--align-center grid-col--no-margin column">
        <article class="grid-col-12 grid-col--align-center">
          <h3>10</h3>
        </article>
        <article class="grid-col-12 grid-col--align-center">
          <p><span class="translation_missing" title="translation missing: en.views.profile.groups">Failed</span></p>
        </article>

      </article>
  </div>
</div>

<div class="grid-col-6 grid-col--align-right">
    Edit your profile <a href="/webtech/edit/" class="create-account secondary cta js-nav-sign-in">Edit</a>
  </div>

        </div>
      </div>
    </div>
  </div>
</article>





  <div class="color-scheme--grey">
    <div class="fit-fixed grid-row">
      <article class="grid-col-12 grid-row grid-col--no-spacing margin-bottom--3">
            <article class="grid-col-4 grid-col--align-center grid-col--center">
              <h4 class="">Take a new Test</h4>
              <a href="/codebits?codebit%5Bsource%5D%5Btype%5D=FromScratch" class="button button--secondary" data-method="post" rel="nofollow">Take a Test</a>
            </article>
      </article>
    </div>
  </div>