<form action="#" method="post">
<select name="Color[]" multiple> // Initializing Name With An Array
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
include('connect.inc');
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);

if(isset($_POST['submit'])){
// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
foreach ($_POST['Color'] as $select)
{
echo "You have selected :" .$select; // Displaying Selected Value
}
?>
