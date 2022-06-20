<base href="http://localhost/accessremotejobs.com/">
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<?php include("incs/header.php") ?>
 	</head>
  	<body>
    	<?php include("incs/nav.php")?>
		<section>
			<div class="container-fluid mt-5 mb-5">
				<div class="container">
					<div class="row">
						<div id="postedJobs"><div class="spinner-border "></div>Please Wait....</div>
					</div>
				</div>
			</div>
		</section>
		<?php include 'incs/footer.php';?>

		<script>
			function getSearchResult(){
				var postedJobs = "<?php echo $_COOKIE['jobIDCookie']?>";
				$.ajax({
					url:"includes/getJobDetails",
					method:"POST",
					data:{postedJobs:postedJobs},
					beforeload:function(){

					},
					success:function(data){
						$("#postedJobs").html(data);
					}
				})
			}
			getSearchResult();
		</script>
  	</body>
</html>