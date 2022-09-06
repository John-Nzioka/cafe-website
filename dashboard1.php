<?php
  require_once('config.php');
  $upload_dir = 'uploads/';

  if (isset($_POST['Submit'])) {
    $cake_title = $_POST['caketitle'];
    $cake_description = $_POST['cakedescription'];
    $cake_price = $_POST['cakeprice'];

    $imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

    if(empty($cake_title)){
			$errorMsg = 'Please your input title is empty';
		}elseif(empty($cake_description)){
			$errorMsg = 'Please your input description is empty';
		}elseif(empty($cake_price)){
			$errorMsg = 'Please your input price is empty';
		}else{

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}


		if(!isset($errorMsg)){
			$sql = "insert into cakeproducts(title, description, price, image)
					values('".$cake_title."', '".$cake_description."', '".$cake_price."', '".$userPic."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: index.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?> 
