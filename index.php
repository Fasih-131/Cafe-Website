<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café De Monte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body class="d-flex flex-column min-vh-100 body">
    <?php include('navbar.php'); ?>

    <div class="container flex-grow-1 mt-3">
        <h1>Welcome to Café De Monte</h1>
        <p>Your cozy corner for delightful coffee and pastries.</p>
        <br><br>
        <h3 class="specials">Take a Look at Today's Specials</h3> <br>

        <!-- Cards for Today's Specials -->
        <!-- <div class="row row-cols-3 row-cols-md-3 g-4 cards_special">
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/chickenRoulade.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Chicken Roulade</h5>
                        <p class="card-text">Succulent chicken breast rolled with a savory filling, often including spinach, cheese, and herbs, then seared and baked to perfection. Served with a creamy sauce.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/duckConfit.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Duck Confit</h5>
                        <p class="card-text">Traditional French dish where duck legs are slow-cooked in their own fat until tender, resulting in crispy skin and richly flavored meat. Served with roasted potatoes.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/escargot.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Escargot</h5>
                        <p class="card-text">A classic French delicacy featuring tender snails baked in garlic butter, parsley, and white wine. Often served in their shells with a side of crusty bread.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/filetMignon.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Filet Magnon</h5>
                        <p class="card-text">A premium cut of beef tenderloin, known for its tenderness and rich flavor. Grilled to perfection, it's often served with a side of vegetables or a rich sauce.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/grilledOctupus.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Grilled Octupus</h5>
                        <p class="card-text">Mediterranean-inspired dish featuring tender octopus, marinated and chargrilled to achieve a perfect balance of smoky flavor and tenderness. Served with lemon and herbs.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/lobsterThermidor.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Lobster Thermidor</h5>
                        <p class="card-text">A luxurious French dish with lobster meat cooked in a creamy mustard sauce, topped with cheese, and baked in the lobster shell. Served with a side of rice or vegetables.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- second batch -->
        <div class="row row-cols-3 row-cols-md-3 g-4 cards_special">
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/ossoBocu.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Osso Bocu</h5>
                        <p class="card-text">An Italian specialty of slow-braised veal shanks cooked in a rich tomato and white wine sauce. Traditionally served with gremolata and a side of risotto or polenta.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/rackOfLamb.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Rack of Lamb</h5>
                        <p class="card-text">A show-stopping dish of tender lamb ribs, seasoned with herbs and roasted to perfection. Served with a side of vegetables and a rich jus or mint sauce.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/seafoodPaella.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Seafood Paella</h5>
                        <p class="card-text">A vibrant Spanish rice dish brimming with a variety of seafood, including shrimp, mussels, and clams, infused with saffron and a medley of spices. Served in a large pan.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/swordfishSteak.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Swordfish Steak</h5>
                        <p class="card-text">Thick, meaty swordfish fillet grilled to perfection, with a firm texture and a mild flavor. Often served with a citrus-based sauce and seasonal vegetables.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/truffleRisoto.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Truffle Risoto</h5>
                        <p class="card-text">A decadent Italian dish of creamy Arborio rice cooked with truffle oil, mushrooms, and Parmesan cheese. Rich in flavor and earthy aroma.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Specials/vealMarsala.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Veal Marsala</h5>
                        <p class="card-text">Tender veal cutlets sautéed and simmered in a rich Marsala wine sauce with mushrooms. Served with a side of pasta or mashed potatoes.</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

    </div>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>