<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.femtosh.com
 * @since      1.0.0
 *
 * @package    Wp_Loftysms
 * @subpackage Wp_Loftysms/admin/partials
 */


?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
    <div class="col-md-8 col-md-offset-2">
        <?php
        settings_errors();
        ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <?php echo esc_html(get_admin_page_title()); ?>
            </div>
            <div class="panel-body">
                <form method="post" name="loftysms_options" action="options.php">

                    <?php
                    settings_fields($this->plugin_name);
                    do_settings_sections($this->plugin_name);
                    ?>

                    <br>
                    <div class="form-group">
                        <label
                            for="<?php echo $this->plugin_name; ?>-loftysms_username"><?php esc_attr_e('Registered Email on loftysms.com', $this->plugin_name) ?></label>
                        <input type="email" class="form-control"
                               id="<?php echo $this->plugin_name; ?>-loftysms_username"
                               name="<?php echo $this->plugin_name; ?>[loftysms_username]"
                               value="<?php echo $username ?>"
                               required/>
                        <p class="help">
                            <?php _e('Not created an account yet?.', $this->plugin_name); ?>
                            <a target="_blank"
                               href="https://www.loftysms.com/register"><?php _e('Sign Up here.', $this->plugin_name); ?></a>
                        </p>
                    </div>
                    <br>
                    <div class="form-group">
                        <label
                            for="<?php echo $this->plugin_name; ?>-loftysms_password"><?php esc_attr_e('Password on loftysms.com', $this->plugin_name) ?></label>
                        <input type="text" class="form-control" id="<?php echo $this->plugin_name; ?>-loftysms_password"
                               name="<?php echo $this->plugin_name; ?>[loftysms_password]"
                               value="<?php echo $password ?>"
                               required/>

                        <p class="help">
                            <?php _e('Forgot your Password?.', $this->plugin_name); ?>
                            <a target="_blank"
                               href="https://www.loftysms.com/password/reset"><?php _e('Reset Password.', $this->plugin_name); ?></a>
                        </p>
                    </div>
                    <?php submit_button(__('Save Settings', 'primary', 'submit', TRUE)); ?>

                </form>
            </div>
        </div>


    </div>
</div>