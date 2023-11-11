<?php
    $estiloPagina = 'integrantes.css';
    require_once 'header.php';
?>
    <main class="container-principal-integrantes">
        <?php
            
            $args = array(
                'post_type'=> 'participantes'
                
            );

            $query = new WP_Query($args);

            if($query->have_posts()):
                while($query->have_posts()): $query->the_post();
                echo '<div class="container-participante">';
                the_post_thumbnail();
                the_content();
                echo'</div>';
                endwhile;
            endif;
        ?>
    </main>

<?php
    require_once 'page-footer.php';
?>