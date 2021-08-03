<!DOCTYPE html>
<html>
<head>
<title>page1</title>
<script type="text/javascript" src="./page1.js"></script>

</head>
<body>


<form name='page1.php' action='' method='post' 
    onSubmit='return validate();'>
    
    <fieldset>
    
    <label for="page1">Page 1 [Home]</label>
    <br><br>
    <label for="csite">Conversion Site</label>
    <br><br>
    <label>1.</label>
    <a href='page1.php '>Home </a>
    <label>2.</label>
    <a href='page2.php'>Conversion Rate </a>
    <label>3.</label>
    <a href='page3.php'>History </a>
    <br><br>

    <label for="conveter">Conveter:</label>
     <br>
        <select name="conveter" id="conveter">
        <option value="select">Select</option>
        <option value="1">Centimeter</option>
        <option value="2">Meter</option>
        <option value="3">Feet</option>
        <option value="4">Kilometer</option>
        <option value="5">Inch</option>
    </select>
    <br><br>
    <label for="value">Value:</label>
    <input type="text" id="value" name="textinput" >
    <br><br>
    <label for="result">Result:</label>
    <input type="text" id="result" name="result">
    </fieldset>
    <br><br>
    <input type=button value='submit'onClick=validate('conveter');
       
    </form>
    <br>



