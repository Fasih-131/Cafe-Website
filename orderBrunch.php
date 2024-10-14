<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Order Your Brunch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body class="body">
    <?php include('navbar.php'); ?>

    <div class="container my-5">
        <h2 class="text-center mb-4">Place Your Brunch Order</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" placeholder="you@example.com">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" placeholder="(+92)300-0000000">
            </div>

            <div class="mb-3">
                <label for="orderType" class="form-label">
                    <select class="form-select" id="orderType">
                        <option value="" selected disabled>Select Order</option>
                        <option value="acaiBowl">Acai Bowl</option>
                        <option value="bacon_waffles">Bacon and Waffles</option>
                        <option value="beefWellington">Beef Wellington</option>
                        <option value="breakfastFajitas">Breakfast Fajitas</option>
                        <option value="breakfastPizza">Breakfast Pizza</option>
                        <option value="brunchBurger">Brunch Burger</option>
                        <option value="bruschetta">Bruschetta</option>
                        <option value="crepes">Crepes</option>
                        <option value="croqueMadame">Croque Madame</option>
                        <option value="empanadas">Empanadas</option>
                        <option value="frittata">Frittata</option>
                        <option value="granolaParfait">Granola Parfait</option>
                        <option value="grilledCheese">Grilled Cheese</option>
                        <option value="halloumiSalad">Halloumi Salad</option>
                        <option value="nachos">Nachos</option>
                        <option value="poutine">Poutine</option>
                        <option value="quiche">Quiche</option>
                        <option value="ratatoullie">Ratatoullie</option>
                        <option value="salmonPlatter">Salmon Platter</option>
                        <option value="sausagePlatter">Sausage Platter</option>
                        <option value="scone">Scones</option>
                        <option value="shrimp_grit">Shrimp and Grit</option>
                        <option value="skillet">Skillet</option>
                        <option value="sushiBowl">Sushi Bowl</option>
                    </select>
                </label>
            </div>

            <div class="mb-3">
                <label for="beverageHot" class="form-label">
                    <select class="form-select" id="orderType">
                        <option value="" selected disabled>Select Beverage (Hot)</option>
                        <option value="americano">Americano</option>
                        <option value="chamomileTea">Chamomile Tea</option>
                        <option value="earlGreyTea">Earl Grey Tea</option>
                        <option value="espresso">Espresso</option>
                        <option value="herbalTea">Herbal Tea</option>
                        <option value="hotChocolate">Hot Chocolate</option>
                        <option value="hotLemonWater">Hot Lemon Water</option>
                        <option value="irishCoffee">Irish Coffee</option>
                        <option value="machiato">Machiato</option>
                        <option value="masalaChai">Masala Chai</option>
                        <option value="mocha">Mocha</option>
                        <option value="turmericLatte">Turmeric Latte</option>
                    </select>
                </label>
            </div>

            <div class="mb-3">
                <label for="beverageCold" class="form-label">
                    <select class="form-select" id="orderType">
                        <option value="" selected disabled>Select Beverage (Cold)</option>
                        <option value="bloodyMary">Bloody Mary</option>
                        <option value="cocktail">Cocktail</option>
                        <option value="coldBrew">Cold Brew</option>
                        <option value="icedCaramelLatte">Iced Caramel Latte</option>
                        <option value="icedChaiLatte">Iced Chai Latte</option>
                        <option value="icedCoffee">Iced Coffee</option>
                        <option value="icedLemonTea">Iced Lemon Tea</option>
                        <option value="icedRaspberryTea">Iced Raspberry Tea</option>
                        <option value="milkshake">Milkshake</option>
                        <option value="mocktail">Mocktail</option>
                        <option value="orangeJuice">Orange Juice</option>
                        <option value="sparklingWater">Sparkling Water</option>
                    </select>
                </label>
            </div>

            <div class="mb-3">
                <label for="requests" class="form-label">Special Requests</label>
                <textarea class="form-control" id="requests" rows="3" placeholder="Any special requests?"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit Your Order</button>
        </form>
    </div>

    <?php include('footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>