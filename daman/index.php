<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hal2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="headerlogo"> <a href="home.php"><img src="assets/img/logo.png" height="100px" class="logo" /></a></div>
    <div class="header">
    <h1>Data Management</h1>
	</div>

	<form action="post.php" method="POST" id="form" name="form">
	<div class="form atas">
		<div class="form-group">
			<label>Nama Surveyor</label>
			<input type="text" class="form-control" name="surveyor1" id="surveyor1">
		</div>

		<div class="form-group">
				<label>Nama Surveyor</label>
				<input type="text" class="form-control" name="surveyor2" id="surveyor2">
		</div>

		<div class="form-group">
				<label>Tanggal</label>
				<input type="date" class="form-control" id="date" name="tanggal" required>
		</div>

		<div class="form-group">
				 <label for="text-input" class="control-label">Nama ODP</label>

				 <div class="form-group">
					 <div class="form-group col-sm-3">
						 <label>ODP</label>
						 <input type="text" class="form-control" value="ODP" name="odp1" id="odp1" onblur="combine()" readonly=readonly>
					 </div>

					 <div class="form-group col-sm-3">
						 <label>STO</label>
						 <select class="form-control" name="odp2" id="odp2" onblur="combine()" required>
								 <option value="BBS">BBS</option>
								 <option value="BTL">BTL</option>
								 <option value="KEN">GOD</option>
								 <option value="KBU">KBU</option>
								 <option value="KEN">KEN</option>
								 <option value="KEN">KGD</option>
								 <option value="KEN">KLS</option>
								 <option value="PGR">PGR</option>
								 <option value="KEN">PKM/KLU</option>
								 <option value="KEN">SMN</option>
								 <option value="PGR">WNS</option>
								 <option value="KEN">WTS</option>
						 </select>
					 </div>

					 <div class="form-group col-sm-3">
						 <label>ODC</label>
						 <input type="text" class="form-control" value="" name="odp3" id="odp3" onblur="combine()" required>
					 </div>

					 <div class="form-group col-sm-3">
						 <label>/--</label>
						 <input type="text" class="form-control" value="" name="odp4" id="odp4" onblur="combine()" required>
					 </div>

					 <input type="text" name="nama_odp" class="form-control" id="nama_odp" readonly=readonly>
				 </div>
			 </div>

			 <script type = "text/javascript">
				function combine() {
					var odp1 = document.form.odp1.value;
					var odp2 = document.form.odp2.value;
					var odp3 = document.form.odp3.value;
					var odp4 = document.form.odp4.value;
					var combination = odp1 + "-" + odp2 + "-" + odp3 + "/" + odp4;
					document.form.nama_odp.value = combination;
				}
			 </script>

		<div class="form-group">
				<label>QR Code ODP</label>
				<input type="text" class="form-control" name="qr_code_odp" id="qr_code_odp" required>
		</div>

		<div class="form-group">
				<label>Nama HD</label>
				<select class="form-control" name="nama_hd" id="nama_hd" required>
					<option>NAMA HD</option>
					<option>NADAFIAH</option>
					<option>ALYA</option>
					<option>DEA GUSTA</option>
					<option>NINING AISYIYAH</option>
					<option>YULIA ADZANI</option>
					<option>ESTU FAJAR</option>
				</select>
		</div>

		<div class="form-row">
				<div class="form-group col-sm-4">
					<label>IP OLT</label>
					<input type="text" class="form-control" name="ip_olt" id="ip_olt">
				</div>

				<div class="form-group col-sm-4">
					<label>Host Name OLT</label>
					<input type="text" class="form-control" name="hostname" id="hostname">
				</div>

				<div class="form-group col-sm-4">
					<label>SHELF/SLOT/PORT</label>
					<input type="text" class="form-control" name="port_olt" id="port_olt">
				</div>
		 </div>

		<div class="form-group">
				<label>Kapasitas ODP</label>
				<select class="form-control" name="kapasitas" id="kapasitas" required>
				 <option>8</option>
				 <option>16</option>
			 </select>
		</div>

		<a href="https://docs.google.com/forms/d/e/1FAIpQLSdpWy6vUSuRy4Ok_Dzq4u0wDvXyZ0o_nQZToGL3J2wljK6wrw/viewform?usp=sf_link" target="_blank"> Upload Gambar </a>
	</div>
	<div class="form bawah">
		<div class="form-group">
				<label>Port</label>
				<input type="text" class="form-control" name="port" id="port">
		</div>

		 <div class="form-group">
		 		 <label>Status Port</label>
				 <select class="form-control" name="status" id="status" required>
 					<option>STATUS</option>
 					<option>OCCUPIED</option>
 					<option>IDLE(KOSONG)</option>
 					<option>UNKNOWN</option>
 				</select>
		 </div>

		 <div class="form-group">
		 		 <label>QR Code Port</label>
		 		 <input type="text" class="form-control" name="qr_code_port" id="qr_code_port">
		 </div>

		 <div class="form-group">
		 		 <label>NCLI</label>
		 		 <input type="text" class="form-control" name="ncli" id="ncli">
		 </div>

		 <div class="form-group">
		 		 <label>Nama Pelanggan</label>
		 		 <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan">
		 </div>

		 <div class="form-group">
		 		 <label>ONT ID</label>
		 		 <input type="text" class="form-control" name="ont_id" id="ont_id" required>
		 </div>

		 <div class="form-group">
		 		 <label>SN</label>
		 		 <input type="text" class="form-control" name="sn" id="sn" required>
		 </div>

		 <div class="form-group">
		 		 <label>No Telp</label>
		 		 <input type="text" class="form-control" name="no_telp" id="no_telp">
		 </div>

		 <div class="form-group">
		 		 <label>No Inet</label>
		 		 <input type="text" class="form-control" name="no_inet" id="no_inet">
		 </div>

		 <div class="form-group">
		 		 <label>Noted</label>
		 		 <input type="text" class="form-control" name="noted" id="noted" required>
		 </div>

		 <div class="catatan">
				 <h5 class="cttn1">Catatan</h5>
				 <h5 class="cttn">Harap periksa kembali data yang sudah anda masukkan</h5>
		 </div>

		<div class="form-group">
              <input type="button" name="btn" value="Simpan" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-success" />
        </div>
    </div>
	</form>

  <footer id="page-footer3">
	   <p> Telekomunikasi Indonesia, Copyright ©2017 </p>
  </footer>


<!-- Modal HTML -->
	<div id="confirm-submit" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;></button>
					<h4 class="modal-title">Review</h4>
				</div>
				<div class="modal-body">
					<p>Apakah sudah benar datanya?</p>
					<table class="table">
						<p class="text-warning"><small>
							<tr>
								<th>Nama Surveyor :</th>
								<td id="nama1Input"></td>
							</tr>
							<tr>
								<th>Nama Surveyor :</th>
								<td id="nama2Input"></td>
							</tr>
							<tr>
								<th>Tanggal :</th>
								<td id="dateinput"></td>
							</tr>

							<tr>
								<th>Nama ODP :</th>
								<td id="nama_odpinput"></td>
							</tr>

							<tr>
								<th>QR Code ODP :</th>
								<td id="qr_code_odp_input"></td>
							</tr>

							<tr>
								<th>Nama HD :</th>
								<td id="nama_hdinput"></td>
							</tr>

							<tr>
								<th>IP OLT :</th>
								<td id="ip_oltinput"></td>
							</tr>

							<tr>
								<th>Host Name OLT :</th>
								<td id="hostnameoltinput"></td>
							</tr>

							<tr>
								<th>SHELF/SLOT/PORT :</th>
								<td id="port_oltinput"></td>
							</tr>

							<tr>
								<th>Kapasitas :</th>
								<td id="kapasitasinput"></td>
							</tr>

							<tr>
								<th>Port :</th>
								<td id="portinput"></td>
							</tr>

							<tr>
								<th>Status :</th>
								<td id="statusinput"></td>
							</tr>

							<tr>
								<th>QR Code Port :</th>
								<td id="qr_code_portinput"></td>
							</tr>

							<tr>
								<th>NCLI :</th>
								<td id="ncli_input"></td>
							</tr>

							<tr>
								<th>Nama Pelanggan :</th>
								<td id="nama_pelangganinput"></td>
							</tr>

							<tr>
								<th>ONT ID :</th>
								<td id="ont_idinput"></td>
							</tr>

							<tr>
								<th>SN :</th>
								<td id="sn_input"></td>
							</tr>

							<tr>
								<th>No Telp :</th>
								<td id="no_telpinput"></td>
							</tr>

							<tr>
								<th>No Inet :</th>
								<td id="no_inetinput"></td>
							</tr>

							<tr>
								<th>Noted :</th>
								<td id="notedinput"></td>
							</tr>

						</small></p>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="BUTTON" class="btn btn-primary" id="submit">Submit</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$('#submitBtn').click(function() {
			$('#nama1Input').text($('#surveyor1').val());
			$('#nama2Input').text($('#surveyor2').val());
			$('#dateinput').text($('#date').val());
			$('#nama_odpinput').text($('#nama_odp').val());
			$('#qr_code_odp_input').text($('#qr_code_odp').val());
			$('#nama_hdinput').text($('#nama_hd').val());
			$('#kapasitasinput').text($('#kapasitas').val());
			$('#portinput').text($('#port').val());
			$('#ip_oltinput').text($('#ip_olt').val());
			$('#hostnameoltinput').text($('#hostname').val());
			$('#port_oltinput').text($('#port_olt').val());
			$('#statusinput').text($('#status').val());
			$('#qr_code_portinput').text($('#qr_code_port').val());
			$('#ncli_input').text($('#ncli').val());
			$('#nama_pelangganinput').text($('#nama_pelanggan').val());
			$('#ont_idinput').text($('#ont_id').val());
			$('#sn_input').text($('#sn').val());
			$('#no_telpinput').text($('#no_telp').val());
			$('#no_inetinput').text($('#no_inet').val());
			$('#notedinput').text($('#noted').val());
		});
		$('#submit').click(function(){
			alert('Data berhasil disubmit');
		$('#form').submit();
		});
	</script>
	<script>
  $( document ).ready(function() {
    $.getJSON("http://10.88.18.128/daman/get.php", function(data) {
      $.each( data , function(key, val) {
        if (key == "data" && val != "no data") {
          $("#surveyor1").val(data.data.surveyor1);
          $("#surveyor2").val(data.data.surveyor2);
					$("#tanggal").val(data.data.tanggal);
					$("#nama_odp").val(data.data.nama_odp);
					$("#qr_code_odp").val(data.data.qr_code_odp);
					$("#nama_hd").val(data.data.nama_hd);
					$("#ip_olt").val(data.data.ip_olt);
					$("#hostname").val(data.data.hostname);
					$("#port_olt").val(data.data.port_olt);
					$("#kapasitas").val(data.data.kapasitas);
        }
      });
    });
  });
  </script>
	<script src="main.js"></script>
		 <script src="assets/js/jquery.min.js"></script>
		 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
		 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
</body>
</html>
