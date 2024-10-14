<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Reserve a Table at Our Opulent Café De Monte</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body class="body">
    <?php include('navbar.php'); ?>

    <div class="container my-5">
        <h2 class="text-center mb-4">Make a Reservation</h2>
        <form>
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
            </div>

            <!-- Phone Number -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="(+92) 300-0000000">
            </div>

            <!-- Date -->
            <div class="mb-3">
                <label for="date" class="form-label">Reservation Date</label>
                <input type="date" class="form-control" id="date">
            </div>

            <!-- Time -->
            <div class="mb-3">
                <label for="time" class="form-label">Reservation Time</label>
                <input type="time" class="form-control" id="time">
            </div>

            <!-- Number of Guests -->
            <div class="mb-3">
                <label for="guests" class="form-label">Number of Guests</label>
                <input type="number" class="form-control" id="guests" placeholder="2">
            </div>

            <!-- Special Requests -->
            <div class="mb-3">
                <label for="requests" class="form-label">Special Requests</label>
                <textarea class="form-control" id="requests" rows="3" placeholder="Any special requests?"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Submit Reservation</button>
        </form>
    </div>

    <?php include('footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>