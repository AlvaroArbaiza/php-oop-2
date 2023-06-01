<?php 
    include_once __DIR__ . '/../models/prodotti.php';

    // array
    $arrayProdotti = [
        new Prodotti(
            'cani', 
            'https://images.unsplash.com/photo-1543466835-00a7907e9de1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80'),
        new Prodotti(
            'gatti',
            'https://images.unsplash.com/photo-1533738363-b7f9aef128ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80'
        ),
        new Prodotti(
            'roditori',
            'https://images.unsplash.com/photo-1548767797-d8c844163c4c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80'
        ),
        new Prodotti(
            'uccelli',
            'https://images.unsplash.com/photo-1612024782955-49fae79e42bb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80'
        ),
        new Prodotti(
            'serpenti',
            'https://images.unsplash.com/photo-1585095595274-aeffce35511a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        ),
        new Prodotti(
            'pesci',
            'https://images.unsplash.com/photo-1520990269335-9271441e202f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1148&q=80'
        ),
        new Prodotti(
            'tartarughe',
            'https://images.unsplash.com/photo-1604984938695-709c41f45cf1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=509&q=80'
        ),
        new Prodotti(
            'iguane',
            'https://images.unsplash.com/photo-1590418270220-243198c900cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80'
        ),
        new Prodotti(
            'cavalli',
            'https://images.unsplash.com/photo-1606107869722-d5cbadabe2f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        ),
        new Prodotti(
            'pecore',
            'https://images.unsplash.com/photo-1484557985045-edf25e08da73?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1073&q=80'
        ),
        new Prodotti(
            'bovini',
            'https://images.unsplash.com/photo-1596733430284-f7437764b1a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
        )
    ]

?>
<main>
    <div class="container">
        <div class="row">

            <!-- foreach di arrayProdotti -->
            <?php foreach($arrayProdotti as $elements) {?>
                <div class="col-3">

                    <div class="card">
                    
                        <img src="<?php echo $elements->image ?>" class="card-img-top" alt="<?php echo $elements->genre ?>">
        
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $elements->genre ?></h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>