<div class="laranja-footer">
    <footer class="container">
        <div class="row">
            <div class="col-md-12">
                <?php do_action ( 'mostra_area_de_widget' ); ?>
                <?php //wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
                <div class="col-md-5 hidden-xs hidden-sm">
                    <div class="filtro">
                        <img src="<?php bloginfo('template_url'); ?>/images/rodape.png" alt="" class="a">
                        <img src="<?php bloginfo('template_url'); ?>/images/rodape.png" alt="" class="b">
                    </div>
                </div>  

                <p class="reservados">2015, Lojas Logo. Todos os direitos reservados.</p>
            </div>

            <div class="mkt-assinatura">
                <img src="<?php bloginfo('template_url'); ?>/images/assinatura.png" alt="">
            </div>
        </div>
    </footer>
</div>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTe8D0ZCRNHLoQosl2JkAgdwBCay_ampc&callback=initMap"></script>


<?php wp_footer(); ?>

</body>
</html>
