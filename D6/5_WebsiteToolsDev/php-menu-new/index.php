<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">

	body{
		font-family:Verdana;
		font-size:15px;
		background-color:rgba(102,204,204,1);
	}
	#nav{
		margin-left:-32px;
	}
	
	#nav *{
		padding:0;
		margin:0;	 
	}
	
	#nav li{
		list-style-type:none;	
		position:relative;
		min-width:140px;
		font-size:98%;		
	}
	
	#nav > li{
		float:left;
	}
	
	#nav a{
		display:block;
		text-decoration:none;
		width:112px;
		min-height:26px;
		line-height:26px;
		background-color:rgba(255,255,255,1);
		border-radius:5px;
		margin-bottom:4px;
		padding-left:8px;
		padding-right:15px;
		border: thin solid hsla(0,0%,20%,1);
	}
	
	#nav ul{
		display:none;
		position:absolute;
		top:30px;
		left:0px;
	}
	
	#nav ul ul{
		top:0px;
		left:140px;
	}
	
	#nav li:hover > a{
		background-color:#cfc;
	}
	
	#nav li:hover > ul{
		display:block;
	}
	
	#nav li a[more] { 
    	background-image:url(arrowT.png);
		background-repeat: no-repeat;
		background-position: right;
	}
	
	#nav li li a[more] { 
    	background-image:url(arrowR.png);
		background-repeat: no-repeat;
		background-position: right;
	}
</style>

<style type="text/css">

#wrapper{
	margin:auto;
	width:1000px;
}
#header{
	height:120px;	
	background-color:hsla(75,100%,40%,1);
	position:relative;
}
#body{
	background-color:hsla(30,100%,40%,1);
}
#footer{
	height:50px;
	background-color:hsla(75,100%,40%,1);	
}
#nav_wrapper{
	position:absolute;
	bottom:0px;
}

</style>

</head>

<body>
<?php
	$conn = mysqli_connect("localhost", "root", '', "phpmenu") or die(mysqli_connect_error()); 
	mysqli_query($conn, "SET NAMES 'utf8'");
	$self=$_SERVER['PHP_SELF'];
?>

<div id="wrapper">

<div id="header">
  <div id="nav_wrapper">

	<?php	
    $ul_id="id=\"nav\"";
    $query = mysqli_query($conn, 'SELECT * FROM categories order by sequence,id');
    while ( $row = mysqli_fetch_assoc($query) ){
        /****search for kids****/
        $kids=false;
        $id=$row['id'];
        $q="SELECT * FROM categories WHERE parent='$id'";
        $children=mysqli_query($conn, $q);
        $found=mysqli_num_rows($children);
        if($found) $kids=true;
        /**********************/
        $menu_array_gr[$row['id']]=array('name_gr'=>stripslashes($row['name_gr']),'parent'=>$row['parent'], 'kids'=>$kids);
		
		//menu_array_gr->array(9=>array('name'=>'Podosfairo', 'parent'=>18, 'kids'=>1)
    }
	
		//print_r($menu_array_gr);

        //recursive function that prints categories as a nested html unordered list
        function generate_menu_gr($parent){
            global $ul_id;
            global $menu_array_gr;
            $ul_open = false; //this prevents printing 'ul' if we don't have subcategories for this category
            foreach($menu_array_gr as $key => $value){
                    if ($value['parent'] == $parent) {       
                            //if this is the first child print '<ul>'                      
                            if ($ul_open == false){                            
                                    $ul_open = true;
                                    echo "\n<ul $ul_id>\n";
                                    $ul_id='';
                            }
                            $link="?cid=$key";
                            $li_more="";
                            if ($value['kids']) {
                                $li_more="more";
                                $link="#";
                            }
                            $str = "<li><a href=\"$link\" $li_more>".$value['name_gr']."</a>";
                            echo $str;
                            //call function again to generate nested list for subcategories belonging to this category
                            generate_menu_gr($key); 
                            echo "</li>\n";
                    }	
            }
			
            if ($ul_open == true) {
                echo "</ul>\n";
            }
			
        }
            
        //generate menu starting with parent categories (that have a 0 parent)
        generate_menu_gr(0);	
    ?>

    
    </div>
</div> 
<div id="body">
	<img src="awesome-rain-wallpaper_0.jpg" width="1000" height="669"  alt=""/> 
</div>
<div id="footer">
zzzzzzzzzzzzzz
</div>   
 </div>


 
</body>
</html>
