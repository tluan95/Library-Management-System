<?php
include"connection.php";

$sql= "UPDATE add_books SET books_title='$_POST[title]',books_author='$_POST[author]',books_id='$_POST[ids]',books_category='$_POST[cat]',books_year='$_POST[year]',books_describe='$_POST[desc]'WHERE id=$_POST[id]";

if(mysqli_query($link,$sql))

	header("refresh:1; url=sucssefully.php");
else
	echo"not update";

?>


