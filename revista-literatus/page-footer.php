        <footer class="container-footer">
            <?php

                 $args = array(
                     'pagename' => 'footer'
                  );

                 $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        the_content();
                     endwhile;
                endif;
             ?>
        </footer>
    </body>
    <?php wp_footer(); ?>

</html>