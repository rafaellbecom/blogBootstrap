<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <?php wp_head()?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <?php
            if(has_custom_logo()){
                the_custom_logo();
            }
        ?>
        <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>

        <?php
            if(has_nav_menu('primary')){
                wp_nav_menu(array(
                    'theme_location' => 'primary', //Requisita o menu definido como primary
                    'fallback_cb' => false, //Caso não tenha menu registrado ele não irá colocar um padrão
                    'container_class' => 'collapse navbar-collapse', //Determina as classes do container que vai envolver o menu
                    'container_id' => 'navBarResponsive', //Determina o id do container que vai envolver o menu
                    'menu_class' => 'navbar-nav ml-auto' //Determina as classes do menu (<ul></ul>)
                ));
            }
        ?>
      </div>
    </nav>