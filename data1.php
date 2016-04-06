<?php include "koneksi.php";
$query = mysql_query("select * from t_anggota ");

 $data1 = 500;
  while ($data = mysql_fetch_array($query)) {
  $id = $data['id_anggota'];
  $komp = $data['kompetensi_keahlian'];
  
  $kampret = $data['nm_anggota'];}?>

[
    {
        "id": <?php echo "$id";?>,
        "name": "<?php echo "$kampret";?>",
        "price": "<?php echo "$komp";?>"
 },
 {
        "id": <?php echo "$id";?>,
        "name": "<?php echo "$kampret";?>",
        "price": "<?php echo "$komp";?>"
 }
]
