<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Tabel Input Daman</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jss/bootstrap.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="page-header" align="center"> <h1> Tabel Input Data </h1></div>
      <table class="table table-striped">
        <thead>
        <th> Nama Surveyor 1 </th>
        <th> Nama Surveyor 2 </th>
        <th> Tanggal </th>
        <th> Nama ODP </th>
        <th> QR Code ODP </th>
        <th> Nama HD </th>
        <th> IP OLT </th>
        <th> Hostname OLT </th>
        <th> SHELF/SLOT/PORT </th>
        <th> Kapasitas ODP </th>
        <th> Port </th>
        <th> Status </th>
        <th> QR Code Port </th>
        <th> NCLI </th>
        <th> Nama Pelanggan </th>
        <th> ONT ID </th>
        <th> SN </th>
        <th> No Telepon </th>
        <th> No Internet </th>
        <th> Noted </th>
        </thead>
        <tbody>

        <?php
        $con = mysqli_connect ('127.0.0.1', 'root', '');
        mysqli_select_db($con, 'daman');
        $sql="SELECT * FROM damantable";
        $run = mysqli_query($con,$sql);
        while($rows=mysqli_fetch_array($run)){
          echo '
          <tr>
          <td>'.$rows['surveyor1'].'</td>
          <td>'.$rows['surveyor2'].'</td>
          <td>'.$rows['tanggal'].'</td>
          <td>'.$rows['nama_odp'].'</td>
          <td>'.$rows['qr_code_odp'].'</td>
          <td>'.$rows['nama_hd'].'</td>
          <td>'.$rows['ip_olt'].'</td>
          <td>'.$rows['hostname'].'</td>
          <td>'.$rows['port_olt'].'</td>
          <td>'.$rows['kapasitas'].'</td>
          <td>'.$rows['port'].'</td>
          <td>'.$rows['status'].'</td>
          <td>'.$rows['qr_code_port'].'</td>
          <td>'.$rows['ncli'].'</td>
          <td>'.$rows['nama_pelanggan'].'</td>
          <td>'.$rows['ont_id'].'</td>
          <td>'.$rows['sn'].'</td>
          <td>'.$rows['no_telp'].'</td>
          <td>'.$rows['no_inet'].'</td>
          <td>'.$rows['noted'].'</td>
          </tr>
          ';
        }

        ?>

        </tbody>
      </table>
      </div>
  </body>
</html>
