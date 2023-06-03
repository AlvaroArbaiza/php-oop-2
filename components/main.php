<?php 
    include_once __DIR__ . '/../models/category.php';
    include_once __DIR__ . '/../models/singleProduct.php';
    include_once __DIR__ . '/../models/products.php';

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
            'Scobby House', 
            new Products(
                'cuccia', 
                '100€', 
                'https://images.unsplash.com/photo-1595886578982-a9de564a984e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=415&q=80'
            ) 
        ),
        new SingleProduct(
            'gatti',
            'https://images.unsplash.com/photo-1615897232510-bea8a87666a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80',
            'Imperial Cat', 
            new Products(
                'cuccia', 
                '150€', 
                'https://images.unsplash.com/photo-1661005446093-df1f9a9e43d1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            ) 
        ),
        new SingleProduct(
            'roditori',
            'https://images.unsplash.com/photo-1548767797-d8c844163c4c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80',
            'Tiny House',
            new Products(
                'cuccia',
                '80€',
                'https://images.unsplash.com/photo-1657399621130-67f3e1bd8da7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            )
        ),
        new SingleProduct(
            'uccelli',
            'https://images.unsplash.com/photo-1538440367084-0a21cb983cee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1105&q=80',
            'Fly House',
            new Products(
                'cuccia',
                '120€',
                'https://images.unsplash.com/photo-1640150923626-309f9606f7c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            )
        ),
        new SingleProduct(
            'serpenti',
            'https://images.unsplash.com/photo-1585095595274-aeffce35511a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'Python House',
            new Products(
                'cuccia',
                '120€',
                'https://images.unsplash.com/photo-1587847659387-829e7f9f38ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80'
            )
        ),
        new SingleProduct(
            'pesci',
            'https://images.unsplash.com/photo-1520990269335-9271441e202f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1148&q=80',
            'Aqua',
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
            new Products(
                'cuccia',
                '1000€',
                'https://images.unsplash.com/photo-1583495872473-56b9fb679d25?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80'
            )
        ),
        new SingleProduct(
            'iguane',
            'https://images.unsplash.com/photo-1590418270220-243198c900cc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80',
            'IguaHouse',
            new Products(
                'cuccia',
                '120€',
                'https://images.unsplash.com/photo-1630042625493-ef1884876f89?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80'
            )
        ),
        new SingleProduct(
            'cavalli',
            'https://images.unsplash.com/photo-1606107869722-d5cbadabe2f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'Unicorn House',
            new Products(
                'cuccia',
                '1500€',
                'https://images.unsplash.com/photo-1541600593739-1d4c5177aae2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            )
        ),
        new SingleProduct(
            'pecore',
            'https://images.unsplash.com/photo-1484557985045-edf25e08da73?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1073&q=80',
            'Meee House',
            new Products(
                'cuccia',
                '2000€',
                'https://images.unsplash.com/photo-1523281407698-d23331543d99?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
            )
        ),
        new SingleProduct(
            'bovini',
            'https://images.unsplash.com/photo-1596733430284-f7437764b1a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'Toretto House',
            new Products(
                'cuccia',
                '3000€',
                'https://images.unsplash.com/photo-1678773879468-a4f21907e480?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1325&q=80'
            )
        )
    ];
 

    
?>
<main>
    <div class="container d-flex mt-5">

        <!-- left side -->
        <div class="container left">
            <div class="row row-gap-4">
    
                <!-- foreach di arrayProdotti -->
                <?php foreach($arrayCategory as $key => $elements) {?>
                    <div class="col-6">
    
                        <!-- card -->
                        <div class="card w-100">
                        
                            <!-- card-img-top -->
                            <img src="<?php echo $elements->image ?>" class="card-img-top object-fit-cover" alt="<?php echo $elements->genre ?>">
            
                            
                            <h5 class="card-title text-uppercase text-center pt-1"><?php echo $elements->genre ?></h5>                           
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- right -->
        <div class="container right">
            <div class="row row-gap-4">
        
                <!-- foreach di arrayProdotti -->
                <?php foreach($arrayProducts as $key => $elements) {?>
                    <div class="col-6">

                        <!-- card -->
                        <div class="card w-100">
                        
                            <!-- card-img-top -->
                            <img src="<?php echo $elements->image ?>" class="card-img-top object-fit-cover" alt="<?php echo $elements->genre ?>">

                            <div class="card-body">
                                <h5 class="card-title text-uppercase"><?php echo $elements->genre ?></h5>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>