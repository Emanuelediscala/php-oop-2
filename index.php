<?php

// INCLUDING FILES

require __DIR__ . "/modals/categories.php";
require __DIR__ . "/modals/products.php";
require __DIR__ . "/modals/food.php";
require __DIR__ . "/modals/animals_bed.php";
require __DIR__ . "/modals/game.php";




// CATEGORIES
$dog = new categories("dog", "https://cdn-icons-png.flaticon.com/512/91/91544.png");
$cat = new categories("cat", "https://cdn-icons-png.flaticon.com/512/30/30209.png");

// Dogs food
$dogFood_one = new food("Chicken Croquet", 10, "delicius and balanced chinken ball", $dog, "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRodZT3gUfPcKy2rmFOGBxIQY_OIn-YnZCh4eyjGuicd-m8ya1CO2pojoZR3A-uOWHFwLaw9GM3bUNthHDFPKm7x52aP3oEsy2dGSJIbchQvjNq4ZVmNI28QH26-iPs2EM9vA&usqp=CAc");
$dogFood_two = new food("NaturalPet Tuna", 13, "gorgeous tuna fillet", $dog, "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTI20VHbGk_H-BQwA_hRNnuBz2BPgaxQSxqSr66U45TkYBRTy80Oz3Uk92u7KKhJQx92xxkzvb2Nf8uvyJgDUXVAqJgzNRECBmTeucG_Wllk-4b5mNq8ZBgKCsmRjL21wxRW2g&usqp=CAc");

// Dogs GAME
$dogGame_one = new game("Dog Chewing Dino", 22, "Sponge Dinosaur", $dog, "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTgqf5tk88IpxWU8ohmfuqNAMltgYdgg4yfdjOmA7afcKVbLA7_Yq9ejR42-CjoXdXxpknTn6_X42hCltWD12ZIzoUHZ3G1UDQrJySLIa-NbFgge9crQm0x40HqRSRNLJRTzllF&usqp=CAc");
$dogGame_two = new game("Cow", 15, "classic Cow", $dog, "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcThBmuR3xSCNEWj55IPWC0GqeZqA36zFeA3MyGJUBdea9Ls_lPUMuqscPDA_quP0dUA_E3v-NJUDnYmzPLkSHw3eJP7g0TBjci0R219Mc0uQZu8zxfCVJeFu04mFMhH0F2uriU&usqp=CAc");

// Dogs Bed
$dogBed_one = new animals_bed("Basic Bed ", 60, "Soft Materass", $dog, "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcS4TZu_0_T-dc_rd4i1zeyKa3vxr51Ek-ibi5HIugHqYBV5j5XU0JRDojDo_c9ypWruiTIBi5nkVemjJzw3an1n-DVwmpKcHs8M0UaH-EJ73vQqoyQXP3zERc5k9LEGDXVYO0Y&usqp=CAc");
$dogBed_two = new animals_bed("Wood house", 55, "Wood garden House", $dog, "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQx0l_KsXB3u1exo48yiVEAWIYrnTPrcXaqxxymPjxAVsySJZQQyqVYxvKZFk49PFok-zUM6CpzG3jzKk6YVZYCA89hlKr9_RNZDgFlw9Jmr5aqoJP0E2nZ2BbHEy6Gu2cGdQ&usqp=CAc");


// Cats Food
$catFood_one = new food("Dry Anchiovies", 14, "balcanic light Anchiovies", $cat, "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRfFw-dsUJPxxy6pGtk7aHjFhScspLBTzp_QBO-t1HDh-VokhqDXSK-7IIzf2_MrBT_H035DfrwfWtlUGIhImrGs7kD_WLvKeFp1ccjodCuT7aWvMJOvm2Q5J7m3RDKZqT2Mg&usqp=CAc");
$catFood_two = new food("FishCroquettes", 12, "delicius and balanced fish ball", $cat, "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTTeFZATvgYZmbPXo-ZYGJ28HVUWk18Htm81Hg4aRPtQCvGkMxE8OLNSfiq8gIaG-HtlMz7vFPAwaFL_NSke4LJh7FY5wfYZcXL_bdGZevU6QGyJdByF6YQ1WkHcr8kBQ0QhII&usqp=CAc");

// Cats Game
$catGame_one = new game("Tricky Stick", 13, "Wood Stick", $cat, "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRfFw-dsUJPxxy6pGtk7aHjFhScspLBTzp_QBO-t1HDh-VokhqDXSK-7IIzf2_MrBT_H035DfrwfWtlUGIhImrGs7kD_WLvKeFp1ccjodCuT7aWvMJOvm2Q5J7m3RDKZqT2Mg&usqp=CAc");
$catGame_two = new game("Three toy", 8, "Three toy", $cat, "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRfFw-dsUJPxxy6pGtk7aHjFhScspLBTzp_QBO-t1HDh-VokhqDXSK-7IIzf2_MrBT_H035DfrwfWtlUGIhImrGs7kD_WLvKeFp1ccjodCuT7aWvMJOvm2Q5J7m3RDKZqT2Mg&usqp=CAc");

//Cats Bed 
$catBed_one = new animals_bed("Cats Nest", 15, "leather beds", $cat, "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRfFw-dsUJPxxy6pGtk7aHjFhScspLBTzp_QBO-t1HDh-VokhqDXSK-7IIzf2_MrBT_H035DfrwfWtlUGIhImrGs7kD_WLvKeFp1ccjodCuT7aWvMJOvm2Q5J7m3RDKZqT2Mg&usqp=CAc");
$catBed_two = new animals_bed("Dreaming House", 26, "stunning cats house", $cat, "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRfFw-dsUJPxxy6pGtk7aHjFhScspLBTzp_QBO-t1HDh-VokhqDXSK-7IIzf2_MrBT_H035DfrwfWtlUGIhImrGs7kD_WLvKeFp1ccjodCuT7aWvMJOvm2Q5J7m3RDKZqT2Mg&usqp=CAc");

$generaldogFood = [$dogFood_one, $dogFood_two];
$generaldogGame = [$dogGame_one, $dogGame_two];
$generaldogBed = [$dogBed_one, $dogBed_two];

$generalcatFood = [$catFood_one, $catFood_two];
$generalcatGame = [$catGame_one, $catGame_two];
$generalcatbed = [$catBed_one, $catBed_two];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
    <div class="d-flex justify-content-around align-items-center ">
        <h1>Pet World</h1>
        <button class="btn btn-primary p-0">Shop</button>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center">Dog's Food</h3>
            <?php foreach ($generaldogFood as $index => $dogfood) { ?>
                <div class="card m-2  text-center">
                    <img id="img_card" src="<?= $dogfood->imageURL ?>" class="card-img-top m-auto "  alt="...">
                    <div class="card-body text-black">
                        <h5 class="card-title">
                            <?php echo $dogfood->name ?>
                        </h5>
                        <p>
                            <?php echo $dogfood->description ?>
                        </p>
                        <span class="d-block"><?php echo $dogfood->price ?></span>
                        <form method="post" action="./modals/add_to_cart.php">
                            <input type="hidden" name="product_id" value="<?= $index ?>">
                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-4">
            <h3 class="text-center">Dogs'Game</h3>
            <?php foreach ($generaldogGame as $index => $doggame) { ?>
                <div class="card text-center bg-light my-2 ">
                    <img id="img_card" src="<?= $doggame->imageURL ?>" class="card-img-top m-auto "  alt="...">
                    <div class="card-body text-black">
                        <h5 class="card-title">
                            <?php echo $doggame->name ?>
                        </h5>
                        <p>
                            <?php echo $doggame->description ?>
                        </p>
                        <span class="d-block"><?php echo $doggame->price ?></span>
                        <form method="post" action="add_to_cart.php">
                            <input type="hidden" name="product_id" value="<?= $index ?>">
                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-4">
            <h3 class="text-center">Dog's Bed</h3>
            <?php foreach ($generaldogBed as $index => $dogbed) { ?>
                <div class="card text-center bg-light my-2 ">
                    <img id="img_card" src="<?= $dogbed->imageURL ?>" class="card-img-top m-auto "  alt="...">
                    <div class="card-body text-black">
                        <h5 class="card-title">
                            <?php echo $dogbed->name ?>
                        </h5>
                        <p>
                            <?php echo $dogbed->description ?>
                        </p>
                        <span class="d-block"><?php echo $dogbed->price ?></span>
                        <form method="post" action="add_to_cart.php">
                            <input type="hidden" name="product_id" value="<?= $index ?>">
                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>