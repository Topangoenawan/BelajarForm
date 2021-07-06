<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php

if(isset($_GET['nim'])){
    $nim = $_GET['nim'];
    echo $nim;
  }

include "form.php";
echo "<h1>contoh form</h1>";
buka_form("#",1,"edit");
buat_textbox("NIM", "nim", "");
buat_textbox("Nama", "nama", "");
buat_textbox("No Telp", "notelp", "");
buat_textbox("Email", "email", "");
buat_textarea("Alamat", "alamat", "");
$list = array();
$list[] = array('val' => 'islam', 'cap' => 'ISLAM');
$list[] = array('val' => 'kristen', 'cap' => 'KRISTEN');
$list[] = array('val' => 'katolik', 'cap' => 'KATOLIK');
$list[] = array('val' => 'hindu', 'cap' => 'HINDU');
buat_combobox("Agama", "agama", $list, "");
tutup_form("#");

?>