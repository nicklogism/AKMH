<?php
	require_once("conn.php");
	
	//design query
	$query = "SELECT * FROM users";
	//execute query
	
	$res = mysqli_query($conn, $query) or die(mysqli_error($conn));


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Catalog members </title>
<style>
	h1, h2{
		text-align:center;	
		font-family:Tahoma;
	}
	
	#members thead tr{
		background:#336699;
		color:white;
		font-family:Tahoma;
	}
	
	#members tbody tr{
		color:#333;
		font-family:Tahoma;
		font-size:1em;
	}
	
	.even{
		background:#FDFDFD;
	}
	
	.odd{
		background:#F7F7F7;
	}
	
	#members img{
		border-radius:50%;
		box-shadow:3px 3px 6px #555;
	}

</style>
</head>

<body>
	
	<h1> Catalog members </h1>
	
	<table id="members" cellpadding="10" align="center" width="60%">
	
		<thead>
			<tr>
				<td> ID        </td>
				<td> Firstname </td>
				<td> Lastname  </td>
				<td> Email     </td>
				<td> Username  </td>
				<td> Picture   </td>
				<td> Edit      </td>
				<td> Delete    </td>
			</tr>
		</thead>
		
		<tbody>
		<?php
		
			$bg = '';
			while($row = mysqli_fetch_assoc($res)){
				
				$id        = $row['id'];
				$firstname = $row['firstname'];
				$lastname  = $row['lastname'];
				$email     = $row['email'];
				$username  = $row['username'];
				$pic       = $row['pic'];
				$pic_tag   = '';
				if($pic){
					$pic_tag = "<img src='$pic'>";
				}
				
				if($bg == 'even'){
					$bg = 'odd';
				}
				else {
					$bg = 'even';
				}
		?>	
				<tr>
				<td class="<?= $bg ?>"> <?= $id         ?> </td>
				<td class="<?= $bg ?>"> <?= $firstname  ?> </td>
				<td class="<?= $bg ?>"> <?= $lastname   ?> </td>
				<td class="<?= $bg ?>"> <?= $email      ?> </td>
				<td class="<?= $bg ?>"> <?= $username   ?> </td>
				<td class="<?= $bg ?>"> <?= $pic_tag    ?> </td>
				
				<td class="<?= $bg ?>"> <a href="edit_member.php?id=<?= $id ?>"> Edit </a> </td>
				<td class="<?= $bg ?>"> <a href="delete_member.php?id=<?= $id ?>" onclick="return confirm('Delete is permanent. Proceed ?')"> Delete </a></td>
				</tr>
		<?php
		
			} // end while
			
		?>
		</tbody>
	
	</table>
</body>

</html>

