<?php
    //Include
    require get_template_directory().'/includes/setup.php';

    //Hooks
    add_action('wp_enqueue_scripts', 'tb_theme_styles');
    add_action('after_setup_theme', 'tb_after_setup')
?>