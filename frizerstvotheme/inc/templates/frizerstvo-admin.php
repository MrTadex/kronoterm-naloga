<h1>Frizerstvo Theme Options</h1>
<?php echo 'bloginfo: '; bloginfo('name'); ?>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields( 'frizerstvo-settings-group' ); ?>
    <?php do_settings_sections( 'kronoterm_frizerstvo' ); ?>
    <?php submit_button(); ?>
</form>
