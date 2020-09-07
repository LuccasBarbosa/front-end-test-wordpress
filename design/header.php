<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset=”UTF-8”>

    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,400;1,800&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPJpjD-qcR_yIxJnS8maR5W9KB0E3EzYI&callback=initMap&libraries=&v=weekly" defer ></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <?php wp_head(); ?>
</head>


<body>

    <body <?php body_class(); ?>>

        <div class="laranja hidden-xs ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 ">
                    

                    <div class="col-xs-10 col-md-9">
                        <?php wp_nav_menu(array('theme_location' => 'top-header')); ?>
                    </div>    
                        

                    <div class="col-xs-2 col-md-3">  
                      <form role="search" method="get" id="searchform" action="" >
                        <input type="text"  name="s" id="s" placeholder="Busca"/>
                        <button id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>



                    

                </div>
            </div>
        </div>
        </div>


        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="./">
                            <?php echo get_custom_logo(); ?>     
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </ul>
                </div>
            </div>
        </nav>


      
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

         
      
      <ol class="carousel-indicators">

        <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 4)); ?>
        <?php $count = 0; ?>
        <?php foreach($slider as $slide): ?>
        <li data-target="#carousel-example-generic" data-slide-to="0" class="<?php echo ($count == 0) ? 'active' : ''; ?>"></li>
        

        <?php $count++; ?>
        <?php endforeach; ?>
      </ol>

      <div class="carousel-inner" role="listbox">
      <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 4)); ?>
        <?php $count = 0; ?>
        <?php foreach($slider as $slide): ?>
        <div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-responsive"/>
        </div>
        <?php $count++; ?>
      <?php endforeach; ?>
      </div>

      
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
