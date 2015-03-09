<div class="content">
    <div class="container">
        <?php echo $this->Session->flash('auth'); ?>
        <div class="form">
            <h2>Login</h2>
            <?php
            echo $this->Form->create('', array(
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
                <div class="right_button">
                    <?php echo $this->Form->submit('Login', array('class' => 'btn btn-success')); ?>
                </div>
            </div>
            <div class="row-fluid control-group">
                <div class="control-group">
                    <small>
                        <?php echo "Don't have an account?" . $this->Html->link('Sign up', '/signup'); ?>
                    </small>

                    <small style="float: right">
                        <?php echo $this->Html->link('Forgot your password?', '/forgotpassword'); ?>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>