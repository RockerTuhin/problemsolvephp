<?php
	$connect = mysqli_connect("localhost","root","","uploadCSV");
	if(isset($_POST["submit"]))
	{
		if($_FILES['file']['name'])
		{
			$fileName = explode(".", $_FILES['file']['name']);
			if($fileName[1] == 'csv')
			{
				$handle = fopen($_FILES['file']['tmp_name'],"r");
				while($data = fgetcsv($handle))
				{
					// $item1 = mysqli_real_escape_string($connect, $data[0]);
					// $item2 = mysqli_real_escape_string($connect, $data[1]);

					$sql = "INSERT into tbl_excel(excel_name, excel_email) values('$data[0]','$data[1]')";
					mysqli_query($connect,$sql);
				}
				fclose($handle);
				print("Import done");
				
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload a csv</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<div align="center">
			<p>Upload CSV: <input type="file" name="file"></p>
			<p><input type="submit" name="submit" value="Import"></p>
		</div>
	</form>
</body>
</html>
