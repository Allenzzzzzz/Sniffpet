<?php
	include('../includes/dbconn.php');
	include('../includes/header.php');

	if (isset($_POST['btnRegVaccine']))
	{
		$vname = $_POST['vname'];
		$weight = $_POST['weight'];
		$against = $_POST['against'];
		$manufact = $_POST['manufact'];
		$lotno = $_POST['lotno'];
        $veterinarian = $_POST['veterinarian'];
        $image = $_FILES['image']['name'];
        $target = "../assets/img/".basename($_FILES['image']['name']);
	
		$query = "INSERT INTO vaccines(avatar,vaccine_name,pet_weight, vaccine_against, vaccine_manufact, vaccine_lotno, veterinarian)VALUES('$image','$vname','$weight','$against','$manufact','$lotno','$veterinarian')";
		$result = mysqli_query($connection,$query)or die(mysqli_error($connection));

		if ($result and move_uploaded_file($_FILES['image']['tmp_name'], $target))
		{
			$select = "SELECT * FROM vaccine WHERE vaccine_name = '$vname'";
			$resultSelect = mysqli_query($connection,$select);
			$num = mysqli_num_rows($resultSelect);
			if ($num == 0)
			{
				$row = mysqli_fetch_assoc($resultSelect);
				$id = $row['vaccine_id'];
				$data = $id;
				?>
				<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 300px; height: 300px;">
				<h3 style="text-align: center;">Vaccine Registered Successfully</h3>
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
