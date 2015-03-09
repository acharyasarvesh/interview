<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title_for_layout; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <?php
        echo $this->Html->css(array(
            'style',
            'bootstrap',
            'bootstrap-responsive',
            'jquery.bxslider',
            'bootstrap-datetimepicker.min',
            'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css',
            'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
            'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,900,700italic,900italic'
        ));
        ?>
        <link href='' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <header>
            <div class="container">
                <div class="row-fluid">
                    <div class="span2">
                        <div class="logo">
                            <?php
                            echo $this->Html->image('logo.png', array(
                                'alt' => 'logo',
                                'url' => '/'
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="span9 pull-right">
                        <div class="login_signup_main"> 
                            <?php
                            if ($logged_in) :
                                echo $this->Html->link('Dashboard', '/dashboard');
                                echo $this->Html->link('Logout', '/logout');
                            else:
                                echo $this->Html->link('Login', '/login');
                                echo $this->Html->link('Sign Up Free', '/signup');
                            endif;
                            ?>
                        </div>
                        <?php if ($this->request->here == $this->request->webroot) : ?>
                            <div class="navbar navbar-inverse ">
                                <div class="navbar-inner">
                                    <div class="container">
                                        <div data-target=".nav-collapse" data-toggle="collapse" class="pull-left menu_text hidden-desktop">Menu </div>
                                        <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar collapsed" type="button"> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                        </button>
                                        <div class="nav-collapse collapse" style="height: 0px;">
                                            <ul class="nav">
                                                <li > <a class="current" href="index.html">Home<span>Active interview</span></a> </li>
                                                <li> <a href="#how_it_work">How it Works<span>Screenshot Tour</span></a> </li>
                                                <li> <a href="#features">Features<span>Features of Interview</span></a> </li>
                                                <li> <a href="#pricing">Pricing <span>Read our posts</span></a> </li>
                                                <li> <a href="#faq">FAQ<span>Read our </span></a> </li>
                                                <li> <a href="#contact">Contact <span>Contact us today!</span></a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>


    <footer>
        <div class="footer_bottom">
            <p>© 2014 Interview - Video Interviewing & Phone Screening Solutions |<a href="#"> Privacy Policy</a> |<a href="#"> Terms of Service</a></p>
        </div>
    </footer>
    <?php
    echo $this->Html->script(array(
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js',
        'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js',
        'jquery.bxslider.min',
        'bootstrap-datetimepicker.min'
    ));
    ?>
<!--    <script type="text/javascript" src="js/jquery.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.bxslider.min.js"></script> -->
    <script>
        $(document).ready(function() {

            $('.slider3').bxSlider({
                slideWidth: 1170,
                minSlides: 1,
                maxSlides: 1,
                slideMargin: 10
            });
        });
    </script> 
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
        $(function() {
            $('#datetimepicker1').datetimepicker();
            $('#datetimepicker2').datetimepicker();
            $("#datetimepicker1").on("dp.change", function(e) {
                $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker2").on("dp.change", function(e) {
                $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var iCnt = 0;
            // CREATE A "DIV" ELEMENT AND DESIGN IT USING JQUERY ".css()" CLASS.
            var container = $(document.createElement('div')).css({
                padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
                borderTopColor: '#999', borderBottomColor: '#999',
                borderLeftColor: '#999', borderRightColor: '#999'
            });

            $('#btAdd').click(function() {
                if (iCnt <= 19) {
                    iCnt = iCnt + 1;
                    // ADD TEXTBOX.
                    $(container).append('<input type=text class="input" id=tb' + iCnt + ' ' +
                            'value="Text Element ' + iCnt + '" />');

                    if (iCnt == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
                        var divSubmit = $(document.createElement('div'));
                        $(divSubmit).append('<input type=button class="bt" onclick="GetTextValue()"' +
                                'id=btSubmit value=Submit />');
                    }

                    $('#main').after(container, divSubmit);   // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
                }
                else {      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
                    $(container).append('<label>Reached the limit</label>');
                    $('#btAdd').attr('class', 'bt-disable');
                    $('#btAdd').attr('disabled', 'disabled');

                }
            });

            $('#btRemove').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
                if (iCnt != 0) {
                    $('#tb' + iCnt).remove();
                    iCnt = iCnt - 1;
                }

                if (iCnt == 0) {
                    $(container).empty();

                    $(container).remove();
                    $('#btSubmit').remove();
                    $('#btAdd').removeAttr('disabled');
                    $('#btAdd').attr('class', 'bt')

                }
            });

            $('#btRemoveAll').click(function() {    // REMOVE ALL THE ELEMENTS IN THE CONTAINER.

                $(container).empty();
                $(container).remove();
                $('#btSubmit').remove();
                iCnt = 0;
                $('#btAdd').removeAttr('disabled');
                $('#btAdd').attr('class', 'bt');

            });
        });

        // PICK THE VALUES FROM EACH TEXTBOX WHEN "SUBMIT" BUTTON IS CLICKED.
        var divValue, values = '';

        function GetTextValue() {

            $(divValue).empty();
            $(divValue).remove();
            values = '';

            $('.input').each(function() {
                divValue = $(document.createElement('div')).css({
                    padding: '5px', width: '200px'
                });
                values += this.value + '<br />'
            });

            $(divValue).append('<p><b>Your selected values</b></p>' + values);
            $('body').append(divValue);

        }
    </script>
</body>
</html>