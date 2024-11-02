<?php
$arrmonths = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Form Automation</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
                <!-- Month Dropdown -->
                <select name="drpMonths" class="form-control">
                    <?php
                    /*  for ($i = 1; $i < 11; $i++) 
                        echo '<input type="text" name="txtNum '. $i .'" ><br>',"\n\t";
                    */
                    if (isset($arrmonths)) {
                        foreach ($arrmonths as $value) {
                            $selected = ($value == date('F')) ? 'selected' : '';
                            echo "<option value='$value' $selected>$value</option>";
                        }
                    }
                    ?>
                </select>

                <!-- Day Dropdown -->
                <select name="drpDays" class="form-control">
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                        $selected = ($i == date('d')) ? 'selected' : '';
                        echo "<option value='$i' $selected>$i</option>";
                    }
                    ?>
                </select>

                <!-- Year Dropdown -->
                <select name="drpYears" class="form-control">
                    <?php
                    for ($i = 1982; $i < 2080; $i++) {
                        $selected = ($i == 2014) ? 'selected' : '';
                        echo "<option value='$i' $selected>$i</option>";
                    }
                    ?>
                </select>

                <!-- Submit Button with Icon -->
                <button type="button" class="btn btn-primary mt-2">
                    <i class="fas fa-paper-plane" style="color: blue;"></i> Submit
                </button>
                
            </div>
        </div>
    </div>

    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
