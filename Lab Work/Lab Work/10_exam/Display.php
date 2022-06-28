<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Display book</title>
<style type="text/css">
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	  padding: 10px;
	  margin-left: auto;
	  margin-right: auto;
	}
</style>
</head>
<?php 
include('book.php');

$book1 = new book(" ١١ ", " wow ", "  ", "  ", 18);
$book22 = new book("١٢ ", " electronic ", "  ", "  ", 15);
$book3 = new book(" ١٣ ", " stories ", " ", "  ", 17 );


echo ("<table books='center'>
	<tr>
		<th> book id </th>
		<th> title </th>
		<th> borrow </th>
	</tr>");

$test1->get_info();
$test2->get_info();
$faris->get_info();


?>
<body>


</body>
</html>