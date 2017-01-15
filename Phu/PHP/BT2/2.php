<?php 
	include_once('config.php');
	if(isset($_POST['submit_file'])) {
		//kiểm tra đã chọn file hay chưa
		//
		
		if (isset($_FILES['fileToUpload'])){
			//trạng thái = 0 => không có lỗi  !  
			if ($_FILES['fileToUpload']['type'] == "image/jpeg" || $_FILES['fileToUpload']['type'] == "image/png" || $_FILES['fileToUpload']['type'] == "image/gif") {
				if ($_FILES['fileToUpload']['error'] > 0) {
					echo "File upload Loi";
				} else {
					move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"uploadfile/".$_FILES['fileToUpload']['name']);
					$sql = "INSERT INTO img(name)
               			 VALUES('". $_FILES['fileToUpload']['name'] ."')";
		            mysqli_query($link, $sql);
		            if ( mysqli_insert_id($link) > 0 ) {
		                header($_SERVER['REQUEST_URI']);
		            }
					
				}
			} else {
				echo "Sai dinh dang file";
			}
			
		}
		
	} else {
		echo " Moi ban submit";
	}


 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Upload IMG</title>
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
		
			<div class="row">
				   <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <legend class="col-sm-8 col-sm-offset-2">Form UPload</legend>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-sm-2 col-sm-offset-2" for="name">IMG :</label>
                        <div class="col-sm-4 ">
                            <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                        </div>
                        <img id="img" src="" style="width: 100px;height: 100px;">
					
                    </div>
                    <div class="form-group">
						<div class="col-sm-2 col-sm-offset-4">
							<input type="submit" value="Upload Image" name="submit_file">
						</div>
					</div>
				</form>
			</div>
			<div class="row">
				<div class="table-responsive" style="width: 40%;margin: 10px auto;">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Name</th>
							</tr>
						</thead>
						<?php 
							$sql = "SELECT * FROM img";
							$result = mysqli_query($link,$sql);
							$i = 1;
							while ($row = mysqli_fetch_assoc( $result ) ) {
								?>
									<tr>
										<td><?php echo $i; ?></td>
										<td>
											<img src="<?php echo "uploadfile/".$row['name']; ?>" width="100" height="100">
										</td>
									</tr>
								<?php
								$i ++;
							}
						 ?>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>

	<script type="text/javascript">
		$(function() {
			var $img = $("#fileToUpload") ;
		
			$img.change(function() {
				//get url of img
				var tmppath = URL.createObjectURL(event.target.files[0]);

			 	// if ($file.substring(3,11) == 'fakepath') {
		   //          $filename = $file.substring(12);
		   //      } 

		       
				$("#img").attr({src:tmppath});
			});
			
		})
	</script>
</html>