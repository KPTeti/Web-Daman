<?php
include 'connection.php';
header('Content-Type: application/json; charset=UTF-8');

$response = array();
$sql = "SELECT * FROM `damantable` ORDER BY ID DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $response = array(
      'surveyor1' => $row['surveyor1'],
      'surveyor2' => $row['surveyor2'],
      'tanggal' => $row['tanggal'],
      'nama_odp' => $row['nama_odp'],
      'qr_code_odp' => $row['qr_code_odp'],
      'nama_hd' => $row['nama_hd'],
      'ip_olt' => $row['ip_olt'],
      'hostname' => $row['hostname'],
      'port_olt' => $row['port_olt'],
      'kapasitas' => $row['kapasitas'],
    );
    $response = array(
      'data' => $response
    );
    echo json_encode($response);
  }
} else {
  $response = array(
    'data' => 'no data',
  );
  echo json_encode($response);
}
?>
