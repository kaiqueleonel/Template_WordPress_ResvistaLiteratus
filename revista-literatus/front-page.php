<?php

    $estiloPagina = 'home.css';

    require_once 'header.php';
    if(have_posts()):
?>
    <main class="conteiner-principal">
        <?php
        while(have_posts()): the_post();
       the_content();
    endwhile;
    ?>
    </main>


<?php
    endif;
    require_once 'page-footer.php';

?>