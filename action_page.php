<!DOCTYPE php>

<html>
<body>
Welcome <?php $name= $_POST['fname'];
echo $name; ?><br>
Your phone number is: <?php $number= $_POST["number"];
echo $number;?>
</body>
</html>