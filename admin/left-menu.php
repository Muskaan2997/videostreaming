<?php
if($_SESSION['type'] == 'IBPS AFO PRE')
	$tp = 1;
else
	$tp = 2;
?>

		<div class="modal-content" style="padding-left: 5px;">
			<div class="modal-header no-padding">
				<div class="table-header">
					<?=$_SESSION['type']?>
				</div>
			</div>
			<div class="modal-body" style="height: -webkit-fill-available;">
				<div id="accordion" class="accordion-style1 panel-group">
				<div class="panel panel-default">
<?php
$i=0;
$query = mysqli_query($con,"select * from subjects where type = '".$tp."' order by name asc");
while($row = mysqli_fetch_assoc($query))
{
?>

						<div class="panel-collapse collapse in" >
						  <div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle">
									<strong><?=$row['name']?></strong>
								</a>
							</h4>
							</div>
							<div class="panel-body">
						 <ul style="margin:0;padding:0;list-style-type:none">
<?php
$query11 = mysqli_query($con,"select * from modules where sid = '".$row['id']."' and verify = 1 order by name asc");
while($row11 = mysqli_fetch_assoc($query11))
{
	$i++;
	if($i == 1)
	{
		if(!isset($_SESSION['mid']))
		{
			$_SESSION['mid'] = $row11['id'];
			$_SESSION['mname'] = $row11['name'];
			if(!isset($_SESSION['instructions']))
				$instruction = 'true';
			else if(empty($_SESSION['instructions']))
				$instruction = 'true';
		}
		else if(empty($_SESSION['mid']))
		{
			$_SESSION['mid'] = $row11['id'];
			$_SESSION['mname'] = $row11['name'];
			if(!isset($_SESSION['instructions']))
				$instruction = 'true';
			else if(empty($_SESSION['instructions']))
				$instruction = 'true';
		}
	
	}
	$query2 = mysqli_query($con, "select id from test_history where tid='".$row11['id']."' and sid='".$_SESSION['email']."' and status='1'");
	if(mysqli_num_rows($query2) > 0)
	{
		if(!isset($_SESSION['mid']))
		{
			$_SESSION['mid'] = $row11['id'];
			$_SESSION['mname'] = $row11['name'];
			if(!isset($_SESSION['instructions']))
				$instruction = 'true';
			else if(empty($_SESSION['instructions']))
				$instruction = 'true';	
		}
		else if(empty($_SESSION['mid']))
		{
			$_SESSION['mid'] = $row11['id'];
			$_SESSION['mname'] = $row11['name'];
			if(!isset($_SESSION['instructions']))
				$instruction = 'true';
			else if(empty($_SESSION['instructions']))
				$instruction = 'true';
		}

	}
?>
						<li><a href="change-module.php?id=<?=$row11['id']?>" class="btn btn-primary" style="width: 100%; margin-bottom: 3px;"><?=$row11['name']?></a></li>
                               
								
							
<?php } ?>
</ul>
						</div></div>
<?php } ?>
					</div>
      
				</div><!----/accordion---->

			</div>
		</div><!-- /.modal-content -->
