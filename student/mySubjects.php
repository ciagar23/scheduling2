<?php
$query = mysql_query("select * from my_subjects where idnumber='$user'");

$success = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '';
?>

<ul class="nav nav-second-level">

	<?php
	if(mysql_num_rows($query)>0){
		while($row=mysql_fetch_array($query)){
			extract($row);
		?>
		<li>
			<a href="../student/process.php?action=remove&id=<?=$Id?>"><?=$code?> - <i class="fa fa-times text-danger"></i></a> 
		</li>
	<?php
	}
	}
	else {?>
		<li>
			<a href="#">No Subjects Yet</a> 
		</li>
	<?php
	}
	?>
		
	<li>
		<a href="../student/?view=allsubjects">View All Subjects</a>
	</li>
</ul>
