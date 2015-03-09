<div class="content">
    <div role="tabpanel">
        <div class="bora_fakkusoglu_header">
            <div class="container">
                <h1>Bora Fakkusoglu's Group</h1>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Overview" aria-controls="Overview" role="tab" data-toggle="tab"><img src="images/notbook_icon.png">&nbsp; Overview</a></li>
                    <li role="presentation"><a href="#Questionnaires" aria-controls="Questionnaires" role="tab" data-toggle="tab"><img src="images/list-icon.png">&nbsp;    Questionnaires </a></li>
                    <li role="presentation"><a href="#Reviewers" aria-controls="Reviewers" role="tab" data-toggle="tab"><img src="images/other-people.png">&nbsp; Reviewers  </a></li>
                    <li role="presentation"><a href="#Administration" aria-controls="Administration" role="tab" data-toggle="tab"><img src="images/setting_icon.png"> &nbsp;Administration</a></li>
                </ul>
            </div>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="Overview">
                <div class="container">
                    <div class="questionnaire_form">
                        <div class="row-fluid">
                            <div class="span8">
                                <div class="overview_left_box">
                                    <h3>What would you like to do next?</h3>
                                    <div class="row-fluid overview_left_text">
                                        <div class="span8"> 
                                            <img src="images/list-icon.png">
                                            <p>Would you like to create a questionnaire (a list of interview questons for candidates to answer)?</p>
                                        </div>
                                        <div class="span4">
                                            <button class="btn overview_large_btn" type="button" onclick="window.location.href = '<?php echo Router::url(array('controller' => 'questions', 'action' => 'addquestion')) ?>'"> Create a<br>
                                                questionnaire </button>
                                        </div>
                                    </div>
                                    <div class="row-fluid overview_left_text">
                                        <div class="span8"> 
                                            <img src="images/candidates.png">
                                            <p>Once you create a questionnaire, Active Interview will help you to invite candidates.</p>
                                        </div>
                                        <div class="span4">
                                            <button class="btn overview_large_btn" type="button"> Invite<br>
                                                candidates </button>
                                        </div>
                                    </div>
                                    <div class="row-fluid overview_left_text">
                                        <div class="span8"> <img src="images/other-people.png">
                                            <p>Assing reviewers allows you to evaluate candidates with other people.</p>
                                        </div>
                                        <div class="span4">
                                            <button class="btn overview_large_btn" type="button">Add reviewers to this <br>
                                                group </button>
                                        </div>
                                    </div>
                                    <div class="row-fluid overview_left_text">
                                        <div class="span8"> <img src="images/comment.png">
                                            <p>After you receive responses from candidates, you can view, score and comment on responses.</p>
                                        </div>
                                        <div class="span4">
                                            <button class="btn overview_large_btn" type="button"> View & score<br>
                                                responses </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="overview_right_text">
                                    <h3>Questionnaires <span>in this Group</span></h3>
                                    <p>Create your fist questionnaire</p>
                                </div>
                                <div class="overview_right_text">
                                    <h3>Reviewers <span>in this Group</span></h3>
                                    <p>Create your fist questionnaire <span> [owner]</span></p>
                                    <hr>
                                    <img src="images/other-people.png">
                                    <a href="#">Invite your peers to help review candidates</a>
                                    <hr>
                                </div>
                                <div class="overview_right_text">
                                    <h3>Quick Stats </h3>
                                    <p>0 &nbsp; questionnaire </p>
                                    <hr>
                                    <p>0 &nbsp; Invitations </p>
                                    <hr>
                                    <p>0 &nbsp; candidates </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
            <div role="tabpanel" class="tab-pane" id="Questionnaires">...</div>
            <div role="tabpanel" class="tab-pane" id="Reviewers">...</div>
            <div role="tabpanel" class="tab-pane" id="Administration">...</div>
        </div>

    </div>






    <script>
        $('#myTab a').click(function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
</div>