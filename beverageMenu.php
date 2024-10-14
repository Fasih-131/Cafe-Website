<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beverages Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body class="body data-bs-spy:scroll">
    <?php include('navbar.php'); ?>

    <h1 style="text-align: center; margin-top: 1rem; padding-bottom: 1rem; border-bottom: 3px solid black;">Beverages (<a href="#hot">Hot</a>, <a href="#cold">Cold</a>)</h1><br>
    <div class="container-fluid px-3 menu">
        <h1 id="hot" style="text-align: center; margin-top: 1rem; padding-bottom: 1rem; border-bottom: 3px solid black;">Hot Beverages</h1>
        <div class="row row-cols-4 row-cols-md- g-4">
            <div class="col mb-4 mt-4">

                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/americano.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Americano</h5>
                        <p class="card-text">A simple yet robust coffee made by diluting a shot of espresso with hot water. It has a smooth and rich flavor, similar to drip coffee. Perfect for those who enjoy a bold, straightforward coffee.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/chamomileTea.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Chamomile Tea</h5>
                        <p class="card-text">A soothing herbal tea made from dried chamomile flowers, known for its calming properties. Naturally caffeine-free with a light, floral flavor. Ideal for winding down and promoting relaxation.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/earlGreyTea.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Earl Grey Tea</h5>
                        <p class="card-text">A classic black tea infused with the distinctive flavor of bergamot orange. Aromatic and slightly citrusy, it's a refined choice for tea lovers. Often enjoyed with a splash of milk or lemon.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/espresso.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Espresso</h5>
                        <p class="card-text">A concentrated coffee brewed by forcing hot water through finely-ground coffee beans. Rich, intense, and full-bodied, it’s the base for many coffee drinks. Perfect for a quick and strong caffeine boost.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/herbalTea.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Herbal Tea</h5>
                        <p class="card-text">A caffeine-free beverage made from a blend of herbs, flowers, and spices. Available in a variety of flavors, each offering unique health benefits. A comforting and flavorful alternative to traditional tea.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/hotChocolate.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Hot Chocolate</h5>
                        <p class="card-text">A creamy, indulgent drink made by mixing cocoa powder or melted chocolate with hot milk. Often topped with whipped cream or marshmallows. Perfect for warming up on a cold day.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/hotLemonWater.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Hot Lemon Water</h5>
                        <p class="card-text">A simple yet refreshing drink made by adding fresh lemon juice to hot water. Light, zesty, and soothing, it’s often enjoyed as a morning detox or a remedy for colds. A healthy, hydrating choice.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/irishCoffee.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Irish Coffee</h5>
                        <p class="card-text">A rich and warming cocktail made with hot coffee, Irish whiskey, sugar, and topped with cream. Perfect for a cozy evening or an after-dinner treat. A delightful blend of coffee and spirits.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/machiato.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Machiato</h5>
                        <p class="card-text">An espresso-based coffee drink with a small amount of steamed milk or foam. Strong and bold, with just a touch of creaminess. Perfect for those who prefer their coffee with a hint of milk.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/masalaChai.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Masala Chai</h5>
                        <p class="card-text">A spiced tea from India, brewed with black tea, milk, and a mix of aromatic spices like cinnamon, cardamom, and ginger. Rich, warming, and full of flavor. A comforting beverage enjoyed worldwide.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/mocha.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Mocha</h5>
                        <p class="card-text">A delightful blend of espresso, steamed milk, and chocolate syrup, often topped with whipped cream. Sweet, rich, and indulgent, it’s the perfect coffee for chocolate lovers. Ideal for a morning treat.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/hot/turmericLatte.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Turmeric Latte</h5>
                        <p class="card-text">A vibrant and healthy beverage made with turmeric, steamed milk, and spices like cinnamon and ginger. Often referred to as “golden milk,” it’s creamy, warming, and full of anti-inflammatory benefits.</p>
                    </div>
                </div>
            </div>
        </div>

        <h1 id="cold" style="text-align: center; margin-top: 1rem; padding-bottom: 1rem; border-bottom: 3px solid black;">Cold Beverages</h1>
        <div class="row row-cols-4 row-cols-md- g-4">
            <div class="col mb-4 mt-4">

                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/bloodyMary.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Bloody Mary</h5>
                        <p class="card-text">A bold cocktail made with vodka, tomato juice, and a mix of spices and flavorings, including Worcestershire sauce and hot sauce. Often garnished with celery and olives. A popular brunch drink, especially for its reputed hangover-curing properties.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/cocktail.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Cocktail</h5>
                        <p class="card-text">A mixed drink made from a combination of spirits, liqueurs, and other ingredients like fruit juice, syrups, or soda. Available in endless varieties, each with its unique flavor profile. Perfect for social occasions and celebrations.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/coldBrew.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Cold Brew</h5>
                        <p class="card-text">A smooth and refreshing coffee brewed slowly with cold water, resulting in a less acidic and milder flavor. Often served over ice and enjoyed with milk or sweeteners. Perfect for a cool, caffeinated pick-me-up.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4 mt-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/icedCaramelLatte.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Iced Caramel Latte</h5>
                        <p class="card-text">A chilled espresso drink mixed with milk and caramel syrup, served over ice. Sweet, creamy, and refreshing, it’s a delightful treat for hot days. Perfect for caramel lovers who enjoy their coffee cold.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/icedChaiLatte.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Iced Chai Latte</h5>
                        <p class="card-text">A cool and spicy drink made from chai tea concentrate mixed with milk and poured over ice. Sweet, creamy, and aromatic, it’s a refreshing take on the traditional hot masala chai. Perfect for summer.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/icedCoffee.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Iced Coffee</h5>
                        <p class="card-text">A cool and spicy drink made from chai tea concentrate mixed with milk and poured over ice. Sweet, creamy, and aromatic, it’s a refreshing take on the traditional hot masala chai. Perfect for summer.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/icedLemonTea.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Iced Lemon Tea</h5>
                        <p class="card-text">A cool and spicy drink made from chai tea concentrate mixed with milk and poured over ice. Sweet, creamy, and aromatic, it’s a refreshing take on the traditional hot masala chai. Perfect for summer.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/icedRaspberryTea.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Iced Raspberry Tea</h5>
                        <p class="card-text">A fruity twist on iced tea, infused with raspberry flavor and served over ice. Sweet, tangy, and refreshing, it’s a delightful drink for berry lovers. Perfect for a summer refreshment.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/milkshake.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Milkshake</h5>
                        <p class="card-text">A thick, creamy drink made by blending milk, ice cream, and flavorings like chocolate or fruit. Sweet, indulgent, and often topped with whipped cream. A fun treat for any time of the day.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/mocktail.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Mocktail</h5>
                        <p class="card-text">A non-alcoholic cocktail made from a mix of fruit juices, sodas, and syrups. Vibrant, flavorful, and refreshing, it’s perfect for those who want a sophisticated drink without the alcohol. Ideal for any occasion.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/orangeJuice.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Orange Juice</h5>
                        <p class="card-text">A bright, tangy juice squeezed from fresh oranges. Packed with vitamin C and bursting with flavor, it’s a classic and refreshing drink. Perfect for breakfast or any time of the day.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="img/Beverage Menu/cold/sparklingWater.png" class="card-img-top" alt="..." style="height: 350px; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Sparkling Water</h5>
                        <p class="card-text">Carbonated water with a crisp, fizzy texture, often enjoyed plain or with a slice of lemon or lime. Light, refreshing, and a great alternative to sugary drinks. Ideal for staying hydrated with a bit of sparkle.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>