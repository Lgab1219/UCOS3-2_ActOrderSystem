<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="act_order_styles.css">
</head>
<body>
    <!--
        TESTING PHASE:
        1. Get all the values from the input
        2. Print out the values in the handleForm file

        FINAL PHASE:
        1. Set up all the needed variables
        2. Get all the values from the input
        3. Set those values as missing variables needed for the equation
        4. If statement that would check if the cash given is enough compared to total price
        5. Print out the results based on the if statement
    --->

    <?php session_start();
    
    ?>

    <h1>Menu</h1>
    <table>
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>
    <br><br>
    <form action="handleForm.php" method="post">
        <label for="order">Select: </label>
        <select name="order" id="order">
            <option value="burger">Burger</option>
            <option value="fries">Fries</option>
            <option value="steak">Steak</option>
        </select>
        <br><br>
        <label for="quantity">Quantity: </label>
        <input type="number" id="quantity" name="quantity" min="0" step="1">
        <br><br>
        <label for="cash">Cash: </label>
        <input type="number" id="cash" name="cash" min="0" step="100">
        <br><br>
        <input type="submit" value="Submit" name="submitBtn">
    </form>
</body>
</html>