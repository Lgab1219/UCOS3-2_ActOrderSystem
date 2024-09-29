<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="act_order_styles.css" />
</head>
<body>
    <?php session_start();

    function calculateTotal($order, $quantity, $cash) {
        // Set up the prices of the products
        $burger = 50;
        $fries = 75;
        $steak = 150;
        $total = 0;
        $change = 0;

        // Calculate total and change based on the order
        switch ($order) {
            case "burger":
                $total = $quantity * $burger;
                break;
            case "fries":
                $total = $quantity * $fries;
                break;
            case "steak":
                $total = $quantity * $steak;
                break;
        }
        $change = $cash - $total;

        return [$total, $change];
    }

    // Return true if cash is enough, otherwise false
    function display($total, $cash) {
        return $cash >= $total;
    }

    if (isset($_POST['submitBtn'])) {
        // Get all values from input
        $order = $_POST['order'];
        $quantity = $_POST['quantity'];
        $cash = $_POST['cash'];

        // Calculate total and change
        list($total, $change) = calculateTotal($order, $quantity, $cash);

        // Determine if the receipt should be displayed
        $displayReceipt = display($total, $cash);

        // Get the current date and time
        $dateTime = date("Y-m-d H:i:s");  
    }
    ?>

    <!-- Checks displayReceipt boolean to determine which HTML to display -->
    <?php if (isset($displayReceipt) && $displayReceipt): ?>
        <h2><?php echo "Total Price: ", $total; ?></h2>
        <h2><?php echo "You Paid: ", $cash; ?></h2>
        <h2><?php echo "Change: ", $change; ?></h2>
        <h2><?php echo $dateTime; ?></h2>
    <?php else: ?>
        <h1>Sorry, balance not enough</h1>
    <?php endif; ?>

    <button><a href="unset.php">Reset</a></button>
</body>
</html>
