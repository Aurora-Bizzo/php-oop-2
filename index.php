<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include __DIR__.'/database/database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product){ ?>
                <div class="col-sm-4">
                    <div class="card my-4" style="width: 18rem;">
                        <img class="card-img-top p-2" src="<?php echo $product->image; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php
                                    echo $product->name;
                                ?>
                            </h5>
                            <p>
                                Prezzo: € 
                                <?php
                                   echo $product->price;
                                ?>
                            </p>
                            <p>
                                <?php
                                    if(isset ($product->weight)){
                                        echo $product->weight;
                                    }
                                    if(isset ($product->material)){
                                        echo $product->material;
                                    }
                                    if(isset ($product->characteristics)){
                                        echo $product->characteristics;
                                    }
                                ?>
                            </p>
                            <p>
                                <?php
                                    if(isset ($product->ingredients)){
                                        echo $product->ingredients;
                                    }
                                    if(isset ($product->size)){
                                        echo $product->size;
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <script src="/js/script.js"></script>
    </div>
</body>
</html>