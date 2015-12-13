<?php /*
// works dont touch *view
if(isset($result_msg)) {
    echo "<div class='alert alert-danger'>";
    echo $result_msg;
    echo "</div>";


}
 */?>


<!-- Lets try and submit using AJAX -->
<div id="formContainer" class="container"> <!-- Start #formContainer -->
    <form id ="contact_form" class="form-horizontal" method="post" action="<?php echo site_url('contact/process'); ?>">
        <div id="loginbox" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <?php 
            if(isset($email_form_validation_success)){
                echo '<div id="success" class="alert alert-success">';
                echo $email_form_validation_success;
                echo '</div>';
            }
        ?>
        <?php 
            if(isset($send_email_success)){
                echo '<div id="success" class="alert alert-success">';
                echo $send_email_success;
                echo '</div>';
            }    
        ?>
        <?php 
            if(isset($email_form_validation_errors)){
                echo '<div id="error" class="alert alert-danger">';
                echo $email_form_validation_errors;
                echo '</div>';
            }
        ?>
        <?php 
            if(isset($send_email_error)){
                echo '<div id="error" class="alert alert-danger">';
                echo $send_email_error;
                echo '</div>';
            }
        ?>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <div id="register_title" class="form_title">Contact Form</div>
                </div> <!-- .panel-heading -->
                <div class="panel-body">
                    <div id="name" class="form-group"> <!-- Start of #name-->
                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-user"></i>
                            <input type="text" name="name" id="name" value="" class="form-control" placeholder="Name" data-required />
                        </div>
                        <!-- Form Error for name -->
                        <?php echo form_error('name', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?> 
                    </div> <!-- End of #name -->

                    <div id="email" class="form-group"> <!-- Start of #email -->
                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-user"></i>
                            <input type="text" name="email" id="email" value="" class="form-control" placeholder="Email" />
                        </div>

                        <!-- Form Error for email -->
                        <?php echo form_error('email', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
                    </div><!-- End of #email -->

                    <div id="subject" class="form-group"> <!-- Start of #subject-->
                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-home"></i>
                            <input type="text" name="subject" id="subject" value="" class="form-control" placeholder="Subject" />
                        </div>
                        
                        <!-- Form Error for subject -->
                        <?php echo form_error('subject', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
                    </div><!-- End of #subject-->

                    <div id="message" class="form-group"> <!-- Start of #message-->
                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            <input type="text" name="message" id="message" value="" data-validate="required" class="form-control" placeholder="Message" />
                        </div>
                        
                        <!-- Form Error for message -->
                        <?php echo form_error('message', '<div id="has-error has-feedback" class="alert alert-danger contact-warning">','</div>'); ?>
                    </div><!-- End of #message -->
                    <div id="contactgroup" class="form-group">
                        <div id="contactcontrol" class="col-sm-12 controls">
                            <button id='contact_button' class="btn btn-primary center-block" type="submit">Contact Us</button>
                        </div>
                    </div>
                </div> <!-- End of #panel-body -->
            </div> <!-- End of .panel panel-info -->
        </div> <!-- End of #loginbox -->
    </form> <!-- End of #contact_form -->
</div> <!-- End of #formContainer -->
</div>




