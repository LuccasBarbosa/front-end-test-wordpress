<?php /* Template Name: home */ ?>

<?php get_header(); ?>

<section class="container blog">
    

    <div class="row">

    <?php 
            $posts_query = new WP_Query( array(
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'category_name' => 'adesao',
                'order' => 'desc'
            ) );
            
    ?>
   

        <div class="col-xs-12 col-sm-12 col-md-4 adesao">

            <?php if ( $posts_query->have_posts() ) : ?>
            <?php while ( $posts_query->have_posts() ) : $posts_query->the_post();  ?>

                    <article class="post overflow-adesao">
                         <a href="<?php the_permalink() ?>">
                            

                            <?php
                                        if ( has_post_thumbnail() ) { 
                                            the_post_thumbnail( 'adesao' ); 
                                        }

                                    ?>


                            <p class="title-post"><?php the_title(); ?></p>
                         </a>
                    </article>


            <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e('Desculpe, nenhum artigo encontrado'); ?></p>
            <?php endif; ?>  

        </div>

   
        
        <?php 
            $posts_query = new WP_Query( array(
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'category_name' => 'beleza',
                'order' => 'asc',
                'offset' => 0
            ) );
            
        ?>

        <div class="col-xs-12 col-sm-12 col-md-8 post-blog">

                <div class="col-xs-12 col-sm-6 col-md-6">   
                <?php if ( $posts_query->have_posts() ) : ?>
                <?php while ( $posts_query->have_posts() ) : $posts_query->the_post();  ?>


                            <article class="post box1">
                                
                                    

                                    <?php
                                        if ( has_post_thumbnail() ) { 
                                            the_post_thumbnail( 'image-post' ); 
                                        }

                                    ?>
                                    
                                      
                                      <div class="pos-text">
                                        <?php 
                                            foreach((get_the_category()) as $category){
                                                echo '<p class="categoria">'.$category->name.'</p>';
                                            }
                                        ?>

                                        <h1 class="title-post"><?php the_title(); ?></h1>

                                        <span class="resumo">
                                            <?php the_excerpt(); ?>
                                        </span>

                                        <button class="btn btn-blog">Saiba Mais</button>

                                      </div>
                                        
                                        <a href="<?php the_permalink() ?>"> </a>

                                    

                                    
                            </article>
                      
                            <?php endwhile; ?>
                            <?php else : ?>
                                <p><?php _e('Desculpe, nenhum artigo encontrado'); ?></p>
                            <?php endif; ?>  
                </div>


                <?php 
                    $posts_query = new WP_Query( array(
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'category_name' => 'promocao',
                        'order' => 'asc'
                    ) );
                    
                ?>

                <div class="col-xs-12 col-sm-6 col-md-6">   
                <?php if ( $posts_query->have_posts() ) : ?>
                <?php while ( $posts_query->have_posts() ) : $posts_query->the_post();  ?>
                    
                            <article class="post box2">

                            <?php
                                        if ( has_post_thumbnail() ) { 
                                            the_post_thumbnail( 'image-post' ); 
                                        }

                                    ?>
                                
                                    
                                    
                                    <div class="pos-text">
                                    <a href="<?php the_permalink() ?>">    
                                        <p class="title-post"><?php the_title(); ?></p>
                                    </a>    

                                        <span class="resumo">
                                            <?php the_excerpt(); ?>
                                        </span>

                                        <button class="btn btn-blog">Continue Lendo</button>
                                    </div>    
                                        
                                    

                                    
                            </article>
                       
                            <?php endwhile; ?>
                            <?php else : ?>
                                <p><?php _e('Desculpe, nenhum artigo encontrado'); ?></p>
                            <?php endif; ?> 

                </div>

                <div class="clearfix hidden-xs hidden-sm" style="margin-bottom:18px;"></div>




                <?php 
                    $posts_query = new WP_Query( array(
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'category_name' => 'moda',
                        'order' => 'asc'
                    ) );
                    
                ?>

                <div class="col-xs-12 col-sm-6 col-md-6">   
                    <?php if ( $posts_query->have_posts() ) : ?>
                    <?php while ( $posts_query->have_posts() ) : $posts_query->the_post();  ?>
                            <article class="post box3">
                                
                                    

                                    <?php
                                        if ( has_post_thumbnail() ) { 
                                            the_post_thumbnail( 'image-post' ); 
                                        }

                                    ?>

                                    <div class="pos-text">
                                        <?php 
                                            foreach((get_the_category()) as $category){
                                                echo '<p class="categoria">'.$category->name.'</p>';
                                            }
                                        ?>

                                        <h1 class="title-post"><?php the_title(); ?></h1>

                                        <span class="resumo">
                                            <?php the_excerpt(); ?>
                                        </span>

                                        <button class="btn btn-blog">Saiba Mais</button>

                                      </div>
                            
                            </article>

                            <?php endwhile; ?>
                            <?php else : ?>
                                <p><?php _e('Desculpe, nenhum artigo encontrado'); ?></p>
                            <?php endif; ?> 
                </div>



                <?php 
                    $posts_query = new WP_Query( array(
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'category_name' => 'beleza',
                        'order' => 'asc',
                        'offset' => 1
                    ) );
                    
                ?>


                <div class="col-xs-12 col-sm-6 col-md-6">   
                    <?php if ( $posts_query->have_posts() ) : ?>
                    <?php while ( $posts_query->have_posts() ) : $posts_query->the_post();  ?>

                            <article class="post box4">
                                
                                    
                                    <?php
                                        if ( has_post_thumbnail() ) { 
                                            the_post_thumbnail( 'image-post' ); 
                                        }

                                    ?>

                                    <div class="pos-text">
                                        <?php 
                                            foreach((get_the_category()) as $category){
                                                echo '<p class="categoria">'.$category->name.'</p>';
                                            }
                                        ?>

                                        <h1 class="title-post"><?php the_title(); ?></h1>

                                        <span class="resumo">
                                            <?php the_excerpt(); ?>
                                        </span>

                                        <button class="btn btn-blog">Saiba Mais</button>

                                      </div>
                            </article>
                        
                            <?php endwhile; ?>
                            <?php else : ?>
                                <p><?php _e('Desculpe, nenhum artigo encontrado'); ?></p>
                            <?php endif; ?> 

                </div>

        </div>   
        
        
        

    </div>
</section>





<section class="container-fluid mapa">
    <div class="row">
        <div class="col-md-12 p-0">

        

        <div class="box-map">
            <div class="row">
                  
                <div class="col-md-offset-6 col-md-6 digite">
                    <p>digite o cep de onde você está</p>     
                </div>    
            </div>
            

            <div class="col-md-5 "> 
                           
                <div class="btn-automatico" onclick="getLocation()">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div class="divisao"></div>
                    <p>achar minha localização automaticamente</p>    
                </div>
            </div>

           
            
            <p class="ou">OU</p>

            <div class="col-md-6">  

                <div id="box-cep">

                    

                    <form action="#">
                        <input class="cep" type="textbox" placeholder="CEP">
                        <input id="submit" type="button" value="PROCURAR">
                    </form>

                </div> 
            </div>             
        
        </div>
            

            <div id="map"></div>
        </div>
    </div>
</section>


<section class="container news">
    <div class="row">
        
    
        <div class="col-md-4 col-news">
                <h1 class="title">Assine a newsletter do logo</h1>


                <form action="#">
                    <input type="text" placeholder="Seu e-mail">
                    <input type="submit" value="Enviar">
                </form>

        </div>

        <div class="col-md-offset-2 col-md-6 col-redes">
            <h1 class="title">Siga lojas logo nas redes sociais</h1>

            <div class="redes-sociais">

            <?php 
                $posts_query = new WP_Query( array( 
                    'page' => 'home',
                
                ) );

            
             ?>
   

        <?php if ( $posts_query->have_posts() ) : ?>
        <?php while ( $posts_query->have_posts() ) : $posts_query->the_post();  ?>

                <ul>
                    <li class="social-icons">
                        
                        <a href="<?php echo get_post_meta(get_the_ID(), 'Facebook', true) ?>">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a> 
                    </li>

                    <li class="social-icons">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'Youtube', true) ?>" target="_blank">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li class="social-icons">
                        <a href="<?php echo get_post_meta(get_the_ID(), 'Instagram', true) ?>" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>    



                <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e('Desculpe, nenhuma rede social encontrada'); ?></p>
                <?php endif; ?>


            </div>
        </div>


    </div>


</section>


<?php get_footer(); ?>