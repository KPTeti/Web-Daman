<?php

	/*$con = mysqli_connect('127.0.0.1', 'root', '');
    mysqli_select_db($con, 'coba');

	if (isset($_POST) & !empty($_POST)) {
			$user = mysqli_real_escape_string($con, $_POST['user']);
			$sql = "SELECT * FROM username where Nama = '$user'";
			$result = mysqli_query($con, $sql);
			$count = mysqli_num_rows($result);

			if ($count>0) {
				echo '<div style="color:red;"<b>'.$user.'</b> is not available</div>';
			}
			else{
				echo '<div style="color:green;"<b>'.$user.'</b> is available</div>';
			}
	}

	/*$user = $_POST['user'];

	$sql = "INSERT INTO username (Nama) Values ('$user')";

	 if (!mysqli_query($con, $sql))
    {
        echo 'Data Gagal Dimasukkan';
    }

    else
    {
        echo 'Data berhasil dimasukkan. Halaman akan direfresh dalam 5 detik.';


    }

	header("refresh:5; url=inCoba.php");*/

	$con = mysqli_connect('127.0.0.1', 'root', '');
    mysqli_select_db($con, 'cobain');

    if (isset($_POST) & !empty($_POST)){

	$ip_olt = mysqli_real_escape_string($con, $_POST['username']);

	$sql = "SELECT * FROM list where ip_olt = '$ip_olt'";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result);

	if ($count>0) {
				//echo '<div style="color:red;"<b>'.$username.'</b> is not available</div>';
		$show = "SELECT hostname FROM list where ip_olt = '$ip_olt'";
		$run = mysqli_query($con, $show);
		while ($rows = mysqli_fetch_array($run)) {
			echo $rows['hostname'];
		}

		}
	else{
				//echo '<div style="color:green;"<b>'.$username.'</b> is available</div>';
		echo " ";
		}
	}
?>
