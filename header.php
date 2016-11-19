<html>
<head>
<title>Database</title>
</head>

<body>

<table height="844" border="1" align="center">
  <tr>
    <td colspan="2" height="150" align="center">
	<!-- mulai Header -->HEADER  
	<!-- Akhir Header --></td>
  </tr>
  <tr>
    <td width="150" height="634" valign="top">
	<!-- mulai menu -->
	<p align="center">Menu Utama</p>
	<p align="center"><a href='index.php'>Home</a><br>
	<a>About</a><br>
	
	<a>Ganti Password</a><br>
	<?php
	if (!isset ($username))
	echo "<a href='index.php'>Login</a></p>";
//echo "username =$username<br>";
	if (isset ($username))
	echo "<a href='logout.php'>Logout</a></p>";
	?>
	<!-- akhir menu --></td>
    <td width="659" valign="top">
	<!-- Mulai Halaman Utama -->