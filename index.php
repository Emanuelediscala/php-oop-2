<?php

// INCLUDING FILES

require __DIR__ . "/modals/categories.php";
require_once __DIR__ . "/modals/products.php";
require_once __DIR__ . "/modals/food.php";
require_once __DIR__ . "/modals/animals_bed.php";
require_once __DIR__ . "/modals/game.php";
require __DIR__ . "/db.php";

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
                        <img id="img_card" src="<?= $dogfood->imageURL ?>" class="card-img-top m-auto " alt="...">
                        <div class="card-body text-black">
                            <h5 class="card-title">
                                <?php echo $dogfood->name ?>
                            </h5>
                            <p>
                                <?php echo $dogfood->description ?>
                            </p>
                            <span class="d-block">
                                <?php try {
                                    echo $dogfood->getPrice();
                                } catch (RangeException $e) {
                                    echo "Prezzo non disponibile: " . $e->getMessage();
                                } catch (Exception $e) {
                                    echo "Prezzo non disponibile: " . $e->getMessage();
                                } ?>
                            </span>
                            <p>Peso:
                                <?php echo $dogfood->getWeight() ?>
                            </p>
                            <p>Prodotto di tipo: <?php echo $dogfood->getClassName()  ?></p>
                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4">
                <h3 class="text-center">Dogs'Game</h3>
                <?php foreach ($generaldogGame as $index => $doggame) { ?>
                    <div class="card text-center bg-light my-2 ">
                        <img id="img_card" src="<?= $doggame->imageURL ?>" class="card-img-top m-auto " alt="...">
                        <div class="card-body text-black">
                            <h5 class="card-title">
                                <?php echo $doggame->name ?>
                            </h5>
                            <p>
                                <?php echo $doggame->description ?>
                            </p>
                            <span class="d-block">
                                <?php try {
                                    echo $doggame->getPrice();
                                } catch (RangeException $e) {
                                    echo "Prezzo non disponibile: " . $e->getMessage();
                                } catch (Exception $e) {
                                    echo "Prezzo non disponibile: " . $e->getMessage();
                                } ?>
                            </span>
                            <p>Peso:
                                <?php echo $doggame->getWeight() ?>
                            </p>
                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4">
                <h3 class="text-center">Dog's Bed</h3>
                <?php foreach ($generaldogBed as $index => $dogbed) { ?>
                    <div class="card text-center bg-light my-2 ">
                        <img id="img_card" src="<?= $dogbed->imageURL ?>" class="card-img-top m-auto " alt="...">
                        <div class="card-body text-black">
                            <h5 class="card-title">
                                <?php echo $dogbed->name ?>
                            </h5>
                            <p>
                                <?php echo $dogbed->description ?>
                            </p>
                            <span class="d-block">
                                <?php try {
                                    echo $dogbed->getPrice();
                                } catch (RangeException $e) {
                                    echo "Prezzo non disponibile: " . $e->getMessage();
                                } catch (Exception $e) {
                                    echo "Prezzo non disponibile: " . $e->getMessage();
                                } ?>
                            </span>
                            <p>Peso:
                                <?php echo $dogbed->getWeight() ?>
                            </p>
                            <button type="submit" class="btn btn-primary" name="add_to_cart">Add to Cart</button>
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