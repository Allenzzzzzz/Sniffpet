<?php
	include('../includes/dbconn.php');
	include('../includes/header.php');

	if (isset($_POST['btnRegPet']))
	{
		$pname = $_POST['pname'];
		$ptype = $_POST['ptype'];
		$oname = $_POST['oname'];
		$oadd = $_POST['oadd'];
		$pbreed = $_POST['pbreed'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$image = $_FILES['image']['name'];
		$target = "../assets/img/".basename($_FILES['image']['name']);

		$query = "INSERT INTO pets(avatar,pet_name,pet_type,pet_owner,address,breed,age,gender)VALUES('$image','$pname','$ptype','$oname','$oadd','$pbreed','$age','$gender')";
		$result = mysqli_query($connection,$query)or die(mysqli_error($connection));

		if ($result and move_uploaded_file($_FILES['image']['tmp_name'], $target))
		{
			$select = "SELECT * FROM pets WHERE pet_name = '$pname'";
			$resultSelect = mysqli_query($connection,$select);
			$num = mysqli_num_rows($resultSelect);
			if ($num > 0)
			{
				$row = mysqli_fetch_assoc($resultSelect);
				$id = $row['pet_id'];
				$data = $id;
				?>
				<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 300px; height: 300px;">
				<h3 style="text-align: center;">Pet Registered Successfully</h3>
				<button class="btn btn-primary form-control" onclick="back();">Proceed</button>
				</div>
				<script type="text/javascript">
					function back()
					{
						window.location.href='record.php';
					}
				</script>
				<?php
			}

		}
	}
?>
