<div class="content">
    <div class="container">
        <div class="form">
            <article class="fit-full">
                <div class="fit-fixed grid-row">
                    <div class="grid-col-8 grid-col--align-center grid-col--center">
                        <div class="grid-row">
                            <h2 class="grid-col-12">
                                Forgot your password?
                            </h2>
                        </div>
                        <div id="flash_messages">
                        </div>

                        <?php
                        echo $this->Form->create('User', array(
                            'inputDefaults' => array('label' => false)));
                        ?>

                        <div class="row-fluid control-group">
                            <div class="span3">
                                <label class="label_text">Email *</label>
                            </div>
                            <?php
                            echo $this->Form->input('emailid', array(
                                'placeholder' => 'Email',
                                'style' => 'margin:0px;',
                                'class' => 'span9'
                            ));
                            ?>
                        </div>

                        <div class="row-fluid control-group">
                            <div class="right_button">
                                <?php echo $this->Form->submit('Reset password', array('class' => 'btn btn-success')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>