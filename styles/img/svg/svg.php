<?php
Include('include-global.php');
$title = "$basetitle";
Include('include-header.php');
?>
</head>
<body  class="stretched">
<?php
Include('include-navbar.php');
?>



<?php
if($_POST){
// IMAGE UPLOAD //////////////////////////////////////////////////////////
    $folder = "";
    $bgimg = $_FILES['bgimg']['name'];
    $uploaddir = $folder . $bgimg;
	$a =  move_uploaded_file($_FILES['bgimg']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////////////////////////////
}
?>

<form action="" method="post" enctype="multipart/form-data" >
<input name="bgimg" type="file" id="bgimg" /></div>
<input name="abir" type="hidden" value="bgimg" />
<button type="submit" class="btn btn-primary">-</button>
</form>


<?php
Include('include-footer.php');
?>

</body>
</html>