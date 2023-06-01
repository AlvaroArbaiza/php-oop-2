<?php 
    include_once __DIR__ . '/../models/prodotti.php';

    $prodotti = new Prodotti('cani', 'gatti');

?>
<main>
    <div class="container">
        <div class="row">
            <?php echo $prodotti->cani ?>
        </div>
    </div>
</main>