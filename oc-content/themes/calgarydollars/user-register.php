<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2012 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */

    osc_enqueue_script('jquery-validate');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
    </head>
    <body>
        <?php UserForm::js_validation(); ?>

		<!-- custom fields validation -->
		<script>
		    $(document).ready(function(){
				$("#s_name").rules("add", {required: true, minlength: 5, messages: { required: "First and Last Name: this field is required" }});
				$("#countryId").rules("add", {required: true, messages: { required: "Country: this field is required" }});
		        $("#regionId").rules("add", {required: true, messages: { required: "Province: this field is required" }});
		        $("#cityId").rules("add", {required: true, messages: { required: "City: This field is required" }});
				$("#address").rules("add", {required: true, messages: { required: "Address: this field is required" }});
				$("#cityArea").rules("add", {required: true, minlength: 5, messages: { required: "Zip Code: this field is required" }});
				$("#s_phone_land").rules("add", {required: true, minLength: 7, messages: { required: "Phone Number: this field is required" }});
		    }); 
		</script>
				
        <?php osc_current_web_theme_path('header.php'); ?>
		
        <div class="content user_forms">
            <div class="inner">
                <h1><?php _e('Register for a Free Online Listings Account', 'modern'); ?></h1>
				
				<div id="join-steps" class="register-box">
					
					<p><strong>First:</strong> Create an account below</p>
					
					<ul>
						<li>Watch the overview video below</li>
						<li>Fill out the form below</li>
						<li>Activate your account via email</li>						
					</ul>
					
					<p><strong>Next:</strong> Follow the email instructions and we'll send you 20 C$ (Calgary Dollars) for free!</p>
					
					<ul>
						<li>Post a Listing on this site</li>
						<li>Fill out an <a href="http://www.surveymonkey.com/s/calgarydollars2012intake">Intake Survey</a></li>
						<li><strong>We'll mail you 20 C$</strong></li>
					</ul>
					
					<p><em>Don't worry we'll remind you of the steps to earn 20 C$ in an email after you fill out the form below</em></p>
					
				</div>
				
				<div class="register-box">
				<h2>Overview Video</h2>
				<object width="640" height="360"><param name="movie" value="http://www.youtube.com/v/JpqaXgSv7dk&hl=en_US&feature=player_embedded&version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.youtube.com/v/JpqaXgSv7dk&hl=en_US&feature=player_embedded&version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360"></embed></object>
				</div>

                <ul id="error_list"></ul>
                <form name="register" id="register" action="<?php echo osc_base_url(true); ?>" method="post" >
                    <input type="hidden" name="page" value="register" />
                    <input type="hidden" name="action" value="register_post" />

                    <fieldset>
                        <label for="name"><?php _e('First and Last Name', 'modern'); ?></label> <?php UserForm::name_text(); ?><br />
                        <label for="email"><?php _e('E-mail', 'modern'); ?></label> <?php UserForm::email_text(); ?><br />
                        <label for="password"><?php _e('Password', 'modern'); ?></label> <?php UserForm::password_text(); ?><br />
                        <label for="password"><?php _e('Re-type password', 'modern'); ?></label> <?php UserForm::check_password_text(); ?><br />
                        <p id="password-error" style="display:none;">
                            <?php _e('Passwords don\'t match', 'modern'); ?>.
                        </p>
                        <?php osc_run_hook('user_register_form'); ?>
                        <?php osc_show_recaptcha('register'); ?>
                        <button type="submit"><?php _e('Create', 'modern'); ?></button>
                    </fieldset>
                </form>
            </div>
        </div>
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>