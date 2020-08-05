<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<select name="u">
<option value="P">P</option>
<option value="A">A</option>
</select>
<input type="submit" name="submit" value="Submit"><br>
</form>
<?php
if(isset($_POST['submit']))
{
$a=$_POST['u'];
echo "You have selected ".$a;
}
?>
