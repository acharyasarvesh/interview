<div class="content">
    <div class="container">
        <div class="form">
            <div class="row-fluid control-group">
                <h2 style="width: 66%">Sign up</h2>
                <div class="grid-col-6 grid-col--align-right">
                    <small>
                        <?php echo "Already have an account?" . $this->Html->link('Login', '/login'); ?>
                    </small>
                </div>
                <div id='flash_messages'></div>
            </div>
            <?php
            echo $this->Form->create('', array(
                'inputDefaults' => array('label' => false, 'div' => false)));
            ?>
            <div class="row-fluid control-group">
                <div class="span3">
                    <label class="label_text">First Name *</label>
                </div>
                <?php
                echo $this->Form->input('first_name', array(
                    'placeholder' => 'First Name',
                    'style' => 'margin:0px;',
                    'class' => 'span9'
                ));
                ?>
            </div>

            <div class="row-fluid control-group">
                <div class="span3">
                    <label class="label_text">Last Name *</label>
                </div>
                <?php
                echo $this->Form->input('last_name', array(
                    'placeholder' => 'Last Name',
                    'style' => 'margin:0px;',
                    'class' => 'span9'
                ));
                ?>
            </div>

            <div class="row-fluid control-group">
                <div class="span3">
                    <label class="label_text">Email Id *</label>
                </div>
                <?php
                echo $this->Form->input('emailid', array(
                    'placeholder' => 'Email Id',
                    'style' => 'margin:0px;',
                    'class' => 'span9'
                ));
                ?>
            </div>

            <div class="row-fluid control-group">
                <div class="span3">
                    <label class="label_text">Password *</label>
                </div>
                <?php
                echo $this->Form->input('password', array(
                    'placeholder' => 'Password',
                    'style' => 'margin:0px;',
                    'class' => 'span9'
                ));
                ?>
            </div>

            <div class="row-fluid control-group">
                <div class="span3">
                    <label class="label_text">URL</label>
                </div>
                <?php
                echo $this->Form->input('url', array(
                    'placeholder' => 'URL',
                    'style' => 'margin:0px;',
                    'class' => 'span9'
                ));
                ?>
            </div>

            <div class="row-fluid control-group">
                <div class="span3">
                    <label class="label_text">Plan *</label>
                </div>
                <?php
                echo $this->Form->input('plan_id', array(
                    'empty' => true,
                    'options' => array('Free (2 interviews total)', 'Team', 'Unlimited'),
                    'style' => 'margin:0px;',
                    'class' => 'span9'
                ));
                ?>
            </div>
            <div class="row-fluid control-group">
                <div class="grid-col-12 grid-col--no-padding grid-col--extra-margin-bottom">
                    <small>
                        <?php echo "By signing up, you agree to our" . $this->Html->link('Terms of service', '/terms'); ?>
                    </small>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="right_button">
                <?php echo $this->Form->submit('Get started!', array('class' => 'btn btn-success')); ?>
            </div>
        </div>
    </div>
</div>