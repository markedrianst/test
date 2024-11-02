<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form Elements</title>
</head>
<body>
    <form >
        <input type="text" name=""><!--  textbox -->
        <hr>
        <!-- <select name="drpCards" size="5" multiple></select> -->
        <select name="drpCards"><!--  drop downlist -->
            <option value="Volvo">Volvo</option>
            <option value="Saab">Saab</option>
            <option value="Fiat" selected>Fiat</option>
            <option value="Audi">Audi</option>
            <option value="Toyota">Toyota</option>
            <option value="Mitsubishi">Mitsubishi</option>
            <option value="Honda">Honda</option>
        </select>
        <br>

        <textarea name="txtpost"rows="10" cols="30"></textarea>

        <hr>

        <button type="button">Cilck Me!</button>
        <hr>

        <fieldset>
            <legend>Personal Information</legend>
            First Name <input type="text" name="">
            Last Name <input type="text" name="">
        </fieldset>
        <hr>

        <input type="text" name="dlstBrowser" list="browsers">
        <datalist id="browsers">
            <option value="Edge">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Safari">
            <option value="Opera">
        
        </datalist>

    </form>
    
</body>
</html>