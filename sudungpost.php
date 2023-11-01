<form method="POST" action="sudungpost.php">
    <input type="text" name="tendangnhap" placeholder="Tendangnhap">
    <input type="password" name="matkhau" placeholder="matkhau">
    <button type="submit">Submit</button>

</form>
<?php

echo '<pre>';
print_r ($_POST);
echo '<pre>';
if (isset($_POST['tendangnhap']))
echo $_POST['tendangnhap'] ;
if (isset($_POST['matkhau']))
echo $_POST['matkhau'] ;
?>