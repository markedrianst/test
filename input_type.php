<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types</title>
</head>
<body>
    <form >
        <!-- input texts properties-->
        <!-- <input type="text" name="txtName" value="Hello World" > -->
        <!-- <input type="text" name="txtName" placeholder="Enter name" disabled > -->
        <label for="txtFirstName"> First Name: </label>
        <input type="text" name="txtFirstName" id="txtFirstName" autofocus > <br>
        <label for="txtLastName"> Last Name: </label>
        <input type="text" name="txtLastName" id="txtLastName"> <br>
        <label for="txtPassword"> Password  :  </label>
        <input type="password" name="txtPassword" id="txtPassword"> <br>
        <!-- submit btn---------------------- -->
         <input type="submit"name="btnSave1"  value="Save 1">
         <button type="submit" name="btnSave2"> <i class="fa fa-save"></i>Save 2</button><br>
         <hr>
         <!-- reset -->
        <input type="reset" value="reset"><br>
        <hr>
        <!-- radiobutton -->
         <input type="radio" name="radSex" id="radMale" value="Male" checked>
         <label for="radMale">Male</label><br>
         <input type="radio" name="radSex" id="radFemale" value="Female">
         <label for="radFemale">Female</label><br>
         <input type="radio" name="radSex2" id="radMale2" value="Male">
         <label for="radMale2">Male</label><br>
         <input type="radio" name="radSex2" id="radFemale2" value="Female">
         <label for="radFemale2">Female</label><br>
         <hr>

         <!-- input type check box -->
          <input type="checkbox" name="chkBike" id="chkBike" value="Bike">
          <label for="chkBike">I have a Bike</label><br>
          <input type="checkbox" name="chkCar" id="chkCar" value="Car">
          <label for="chkCar">I have a Car</label><br>
          <input type="checkbox" name="chkoate" id="chkBoat" value="Boat">
          <label for="chkBoat">I have a Boat</label><br>
          <hr>

          <!-- input type color -->
           <label for="clrTheme">Pick a Color</label>
           <input type="color" name="clrTheme" id="clrThem">
           <br><hr>

           <!-- input type date -->
            <label for="dtpBirthday">Birthday</label>
            <input type="date" name="dtpBirthday" id="dtpBirthday" value="2000-01-01">
            <br><hr>

            <!-- input type email -->
             <label for="txtEmail">Email Address:</label>
             <input type="email" name="txtEmail" id="txtEmail">
             <br><hr>
             <!-- input type file -->
              <label for="filePhoto">Select a File</label>
              <input type="file" name="filePhoto" id="filePhoto">
              <br><hr>
            <!-- input type number -->
             <label for="txtNumber">Enter Quantity</label>
            <input type="number" name="txtNumber" id="txtNumber" min="1" max="10">
            <br><hr>
            <!-- input type range -->
            <label for="txtRange">Enter Volume</label>
            <input type="range" name="txtRange" id="txtRange" min="0" max="50">

            <!-- input type tell -->
             <label for="txttell">Enter telephone number</label>
             <input type="tel" name="txttell" id="txttell" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
             <br><hr>
            
             <!-- input type time  -->
              <label for="txtTime">Input time</label>
              <input type="time" name="txtTime" id="txtTime">
              <br><hr>

              <!-- input type url -->
              <label for="txtURL">Add URL</label>
              <input type="url" name="txtURL" id="txtURL">
              <br><hr>


    </form>
    
</body>
</html>