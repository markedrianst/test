<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body >
  
    <h2>Vendo Machine</h2>

        <form action="" method="post">
            <fieldset>
                <legend><b>Drinks</b></legend>
                <!-- <input type="checkbox" name="Drinks[]" id="Coke" value="Coke-15"><label for="Coke" style="font-size: 14;">Coke- ₱15</label><br>    
                <input type="checkbox" name="Drinks[]" id="Sprite" value="Sprite-20"><label for="Sprite" style="font-size: 14;">Sprite- ₱20</label><br>    
                <input type="checkbox" name="Drinks[]" id="Royal" value="Royal-20"><label for="Royal" style="font-size: 14;">Royal- ₱20</label><br>  
                <input type="checkbox" name="Drinks[]" id="Pepsi" value="Pepsi-15"><label for="Pepsi" style="font-size: 14;">Pepsi- ₱15</label>  <br>
                <input type="checkbox" name="Drinks[]" id="Mountain" value="Mountain Dew-20"><label for="Mountain" style="font-size: 14;">MountainDew -  ₱20</label><br>    -->
                <input type="checkbox" name="Drinks[]" id="Coke" value='{"name": "Coke", "price": 15}'><label for="Coke" style="font-size: 14;">Coke- ₱15</label><br> 
                <input type="checkbox" name="Drinks[]" id="Sprite" value='{"name": "Sprite", "price": 20}'><label for="Sprite" style="font-size: 14;">Sprite- ₱20</label><br> 
                <input type="checkbox" name="Drinks[]" id="Royal" value='{"name": "Royal", "price": 20}'><label for="Royal" style="font-size: 14;">Royal- ₱20</label><br> 
                <input type="checkbox" name="Drinks[]" id="Pepsi" value='{"name": "Pepsi", "price": 15}'><label for="Pepsi" style="font-size: 14;">Pepsi- ₱15</label>  <br> 
                <input type="checkbox" name="Drinks[]" id="Mountain" value='{"name": "Mountain Dew", "price": 20}'><label for="Mountain" style="font-size: 14;">MountainDew -  ₱20</label><br>
            
            </fieldset>
<br>
        <fieldset>
            <legend><b>Options</b></legend>
            <label for="size">Size:</label>
            <select name="size" id="size">
                <option value="Regular">Regular</option>
                <option value="Up-Size">Up-Size (add ₱5)</option>
                <option value="Jumbo">Jumbo (add ₱10)</option>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="0" min="1" required autofocus>

            <button type="submit" name="btnSend">Check Out</button>
        </fieldset>
    </form>
    <?php
    /*if(isset($_REQUEST['btnSend'])){

        $drinks = $_REQUEST['Drinks'] ?? [];
        $size = $_REQUEST['size'] ?? 'Regular';
        $quantity = intval($_REQUEST['quantity']) ?? 1;
        $totalAmount = 0;
        $totalItems = 0;
        $totalCost = 0; 

        echo "<h4>Purchase Summary:</h4>";

        if ($size === "Up-Size") {
            $totalCost += 5;
        } elseif ($size === "Jumbo") {
            $totalCost += 10;
        }

        if (empty($drinks)) {
            echo "No drinks selected. Please choose at least one drink.<br>";
        } else {
            foreach ($drinks as $drink) {
                list($drinksName, $price) = explode('-', $drink);
                $price = intval($price);
                $itemTotal = ($price + $totalCost) * $quantity;
                $totalAmount += $itemTotal;
                $totalItems += $quantity;
                if($quantity==1){
                
                echo'<ul>';
                echo"<li>$quantity piece of $size $drinksName amounting to ₱$itemTotal</li>";
                echo'</ul>';
                }else{

                echo'<ul>';
                echo"<li>$quantity pieces of $size $drinksName amounting to ₱$itemTotal</li>";
                echo'</ul>';
                }
            }
            echo "<br><b>Total Number of Items:</b> {$totalItems}<br>";
            echo "<b>Total Amount:</b> ₱{$totalAmount}<br>";
        }
    }*/
    if (isset($_REQUEST['btnSend'])) {
        $arrDrinks = $_REQUEST['Drinks'] ?? [];
        $size = $_REQUEST['size'] ?? 'Regular';
        $quantity = intval($_REQUEST['quantity']) ?? 1;
        $totalAmount = 0;
        $totalItems = 0;
        $totalCost = 0;
        $purchaseSummary = []; 
        
        if ($size === "Up-Size") {
            $totalCost = 5;
        } elseif ($size === "Jumbo") {
            $totalCost = 10;
        }

    
        echo "<h4>Purchase Summary:</h4>";
    
        if (empty($arrDrinks)) {
            echo "No drinks selected. Please choose at least one drink.<br>";
        } else {
            foreach ($arrDrinks as $drink) {
                $drinkData = json_decode($drink, true);
               
                $drinkName = $drinkData['name'] ?? 'Unknown Drink';
                $price = intval($drinkData['price'] ?? 0); 
                $itemTotal = ($price+$totalCost) * $quantity; 
              
                $totalAmount += $itemTotal;
                $totalItems += $quantity; 
    
                if ($quantity == 1) {
                    $purchaseSummary[] = "$quantity piece of $size $drinkName amounting to ₱$itemTotal";
                } else {
                    $purchaseSummary[] = "$quantity pieces of $size $drinkName amounting to ₱$itemTotal";
                }
            }
            foreach ($purchaseSummary as $item) {
              
                echo"<ul><li>$item</li></ul>";
            }
            echo "<br><b>Total Number of Items:</b> {$totalItems}<br>";
            echo "<b>Total Amount:</b> ₱{$totalAmount}<br>";
        }
    }
    ?>
</body>
</html>
