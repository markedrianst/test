<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <form action="capturing_data_receiver.php" method="post">
        <label for="txtFirstName" >First Name</label>
        <input type="text" autofocus name="txtFirstName" id="txtFirstName"><br>
        <label for="txtLastName">Last Name</label>
        <input type="text" name="txtLastName" id="txtLastName"><br>
        <input type="radio"checked name="radSex" id="radMale" value="Male">
        <label for="radMale">Male</label>
        <input type="radio"  name="radSex" id="radFemale" value="Female">
        <label for="radFemale">Female</label><br>
        <button type="submit" name="btnSend">Send</button>

    
    
    </form>
    
</body>
</html>