<?php 
    include_once __DIR__ . '/../models/category.php';
    include_once __DIR__ . '/../models/singleProduct.php';
    include_once __DIR__ . '/../models/products.php';
    include_once __DIR__ . '/../models/sales.php';

    // array category
    $arrayCategory = [
        
        new Category(
            'cani', 
            'https://images.unsplash.com/photo-1543466835-00a7907e9de1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80'
        ),
        new Category(
            'gatti',
            'https://images.unsplash.com/photo-1615897232510-bea8a87666a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80'
        ),
        new Category(
            'roditori',
            'https://images.unsplash.com/photo-1548767797-d8c844163c4c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80'
        ),
        new Category(
            'uccelli',
            'https://images.unsplash.com/photo-1538440367084-0a21cb983cee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1105&q=80'
        ),
        new Category(
            'serpenti',
            'https://images.unsplash.com/photo-1585095595274-aeffce35511a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        ),
        new Category(
            'pesci',
            'https://images.unsplash.com/photo-1520990269335-9271441e202f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1148&q=80'
        ),
        new Category(
            'tartarughe',
            'https://images.unsplash.com/photo-1604984938695-709c41f45cf1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=509&q=80'
        ),
        new Category(
            'iguane',
            'https://images.unsplash.com/photo-1590418270220-243198c900cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80'
        ),
        new Category(
            'cavalli',
            'https://images.unsplash.com/photo-1606107869722-d5cbadabe2f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        ),
        new Category(
            'pecore',
            'https://images.unsplash.com/photo-1484557985045-edf25e08da73?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1073&q=80'
        ),
        new Category(
            'bovini',
            'https://images.unsplash.com/photo-1596733430284-f7437764b1a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
        )
    ];

    // array
    $arrayProducts = [
        
        new SingleProduct(
            'cani', 
            'https://images.unsplash.com/photo-1543466835-00a7907e9de1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80',
            'Scobby Foods',
            null, 
            new Products(
                'cibo', 
                '10€', 
                'https://images.unsplash.com/photo-1597843786411-a7fa8ad44a95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            ) 
        ),
        new SingleProduct(
            'gatti',
            'https://images.unsplash.com/photo-1615897232510-bea8a87666a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80',
            'Imperial Cat',
            null, 
            new Products(
                'cuccia', 
                '150€', 
                'https://images.unsplash.com/photo-1661005446093-df1f9a9e43d1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            ) 
        ),
        new SingleProduct(
            'roditori',
            'https://images.unsplash.com/photo-1548767797-d8c844163c4c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80',
            'Topis Roulant',
            null,
            new Products(
                'gioco',
                '30€',
                'https://images.unsplash.com/photo-1657076761228-bdb21cf0bc7c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            )
        ),
        new SingleProduct(
            'uccelli',
            'https://images.unsplash.com/photo-1538440367084-0a21cb983cee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1105&q=80',
            'Fly House',
            null,
            new Products(
                'cuccia',
                '120€',
                'https://images.unsplash.com/photo-1640150923626-309f9606f7c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            )
        ),
        new SingleProduct(
            'serpenti',
            'https://images.unsplash.com/photo-1585095595274-aeffce35511a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'Pytho Transport',
            null,
            new Products(
                'transportino',
                '50€',
                'https://images.unsplash.com/photo-1552584924-5631323f8895?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            )
        ),
        new SingleProduct(
            'pesci',
            'https://images.unsplash.com/photo-1520990269335-9271441e202f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1148&q=80',
            'Aqua',
            null,
            new Products(
                'cuccia',
                '200€',
                'https://images.unsplash.com/photo-1520301255226-bf5f144451c1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80'
            )
        ),
        new SingleProduct(
            'tartarughe',
            'https://images.unsplash.com/photo-1604984938695-709c41f45cf1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=509&q=80',
            'Slow Motion',
            null,
            new Products(
                'copertina',
                '20€',
                'https://images.unsplash.com/photo-1608692691730-af21815a8359?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=464&q=80'
            )
        ),
        new SingleProduct(
            'iguane',
            'https://images.unsplash.com/photo-1590418270220-243198c900cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80',
            'Worms',
            null,
            new Products(
                'cibo',
                '120€',
                'https://images.unsplash.com/photo-1656870648496-bdec7ee0c818?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=578&q=80'
            )
        ),
        new SingleProduct(
            'cavalli',
            'https://images.unsplash.com/photo-1606107869722-d5cbadabe2f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'Ferri di Cavallo',
            null,
            new Products(
                'Giochi',
                '500€',
                'https://images.unsplash.com/photo-1616162205583-e9a75b8da695?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80'
            )
        ),
        new SingleProduct(
            'pecore',
            'https://images.unsplash.com/photo-1484557985045-edf25e08da73?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1073&q=80',
            'Meee House',
            null,
            new Products(
                'cuccia',
                '2000€',
                'https://images.unsplash.com/photo-1523281407698-d23331543d99?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            )
        ),
        new SingleProduct(
            'bovini',
            'https://images.unsplash.com/photo-1596733430284-f7437764b1a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'Toretto Pullover',
            null,
            new Products(
                'abbigliamento',
                '500€',
                'https://images.unsplash.com/photo-1545468800-85cc9bc6ecf7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1915&q=80'
            )
        )
    ];
    
    // if (isset($_POST['index'])) {
    //     $index = $_POST['index'];
    //     echo $index;
    // }

    // var_dump($arrayProducts);
?>
<main>
    <div class="container mt-4">

        <!-- header -->
        <div class="row header justify-content-between row-gap-3">

            <!-- foreach di arrayProdotti -->
            <?php foreach($arrayCategory as $elements) {?>
                <div class="col-2">

                    <!-- card -->
                    <div class="card w-100">
                    
                        <!-- card-img-top -->
                        <img src="<?php echo $elements->getImage(); ?>" class="card-img-top object-fit-cover" alt="<?php echo $elements->getGenres(); ?>">            
                        
                        <h6 class="card-title text-uppercase text-center pt-1"><?php echo $elements->getGenres(); ?></h6>                           
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- body -->
        <div class="row body row-gap-4 mt-4">
    
            <!-- foreach di arrayProdotti -->
            <?php foreach($arrayProducts as $key => $elements) {?>
                <div class="col-3">

                    <!-- card -->
                    <div class="card w-100">

                        <!-- card-img-top -->
                        <img src="<?php echo $elements->typeProduct->imageProduct; ?>" class="card-img-top object-fit-cover" alt="<?php echo $elements->getProduct(); ?>" onclick="getIndex(<?php echo $key; ?>)">

                        <div class="card-body pt-2">

                            <!-- nome -->
                            <h5 class="card-title text-center mb-3">
                                <?php echo $elements->getProduct(); ?>                                
                            </h5>
                            <!-- prezzo -->
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Prezzo: 
                                <?php echo $elements->typeProduct->getPrice(); ?>
                            </h6>
                            <!-- categoria -->
                            <span class="badge text-bg-primary">
                                <?php echo $elements->getGenres(); ?>
                            </span>
                            <!-- tipologia prodotto -->
                            <span class="badge text-bg-success">
                                <?php echo $elements->typeProduct->getType(); ?>                                
                            </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>