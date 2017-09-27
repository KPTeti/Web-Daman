<?php
include 'connection.php';

$surveyor1 = $_POST['surveyor1'];
$surveyor2 = $_POST['surveyor2'];
$tanggal = $_POST['tanggal'];
$nama_odp = $_POST['nama_odp'];
$qr_code_odp = $_POST['qr_code_odp'];
$nama_hd = $_POST['nama_hd'];
$ip_olt = $_POST['ip_olt'];
$hostname = $_POST['hostname'];
$port_olt = $_POST['port_olt'];
$kapasitas = $_POST['kapasitas'];
$port = $_POST['port'];
$status = $_POST['status'];
$qr_code_port = $_POST['ncli'];
$ncli = $_POST['ncli'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$ont_id = $_POST['ont_id'];
$sn = $_POST['sn'];
$no_telp = $_POST['no_telp'];
$no_inet = $_POST['no_inet'];
$noted = $_POST['noted'];

$sql = "INSERT INTO `damantable` (`surveyor1`,`surveyor2`, `tanggal`, `nama_odp`, `qr_code_odp`,
`nama_hd`, `ip_olt`, `hostname`, `port_olt`, `kapasitas`, `port`, `status`, `qr_code_port`, `ncli`, `nama_pelanggan`, `ont_id`, `sn`, `no_telp`, `no_inet`,`noted`) VALUES ('$surveyor1', '$surveyor2', '$tanggal', '$nama_odp', '$qr_code_odp', '$nama_hd', '$ip_olt', '$hostname', '$port_olt', '$kapasitas', '$port', '$status', '$qr_code_port', '$ncli', '$nama_pelanggan', '$ont_id', '$sn', '$no_telp', '$no_inet', '$noted')";

if ($conn->query($sql) === TRUE) {
  header('Location: http://10.88.18.128/daman/index.php');
  $conn->close();
} else {
  $conn->error;
  $conn->close();
}
?>
