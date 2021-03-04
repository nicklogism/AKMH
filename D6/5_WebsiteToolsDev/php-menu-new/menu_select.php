<?php
	$conn = mysql_connect("localhost", "root", '') or die(mysql_error()); 
	mysql_query("SET NAMES 'utf8'");
	mysql_select_db("phpmenu", $conn);
	$self=$_SERVER['PHP_SELF'];
?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type="text/css" media="all">@import "suckerfish/style2.css";</style>
<script type="text/javascript" src="suckerfish/suckerfish.js"></script>

</head>

<body>
<form action="menu_select.php" name="form1" id="form1">
<div>
<?php	
$query = mysql_query('SELECT * FROM categories order by sequence,id');
while ( $row = mysql_fetch_assoc($query) ){
	/****search for kids****/
	$kids=false;
	$id=$row['id'];
	$q="SELECT * FROM categories WHERE parent=".$id;
	$children=mysql_query($q);
	$found=mysql_num_rows($children);
	if($found) $kids=true;
	/**********************/
	$menu_array_gr[$row['id']]=array('name_gr'=>stripslashes($row['name_gr']),'parent'=>$row['parent'], 'kids'=>$kids);
}

	
	//recursive function that prints categories as a nested html unorderd list
	function generate_menu_gr($parent, $prefix){
		global $menu_array_gr;
		$prefix.=" - ";

        foreach($menu_array_gr as $key => $value){
                if ($value['parent'] == $parent) {                          
						$str = "<option value=\"$key\">".$prefix.$value['name_gr']."</option>\n";
						print $str;
                        generate_menu_gr($key, $prefix); 
                }
        }
		
	}
	
	//generate menu starting with parent categories (that have a 0 parent)
	print "<select name=\"select\" id=\"select\">\n";	
	print "<option value=\"0\"> Root Category </option>";
	generate_menu_gr(0, "");
	print "</select>";		
?>
</div>
<br />

<div>
	<input name="category" type="text"  id="category" value="" size="50" maxlength="50" />
    <br /><br /><br />
    <input type="submit" name="submit" id="submit" />
</div>


</form>
</body>
</html>
