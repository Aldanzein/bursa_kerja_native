<?php include 'koneksi.php';
				$car = $_POST['cari'];
				$dataPerPage = 3;
				if(isset($_GET['paging'])) {
				$noPage = $_GET['paging']; }
					else $noPage = 1;
				$offset = ($noPage - 1) * $dataPerPage; ?>
<table  border="1" cellpadding="0" cellspacing="3">
    
    <?php
	include 'koneksi.php';
    $query = mysql_query("select * from t_perusahaan group by id_perusahaan desc LIMIT $offset, $dataPerPage   ");
 
    
    while ($data = mysql_fetch_array($query)) {
    ?>
	
     
            <tr>
           <td rowspan="4"><img src="<?php echo $data['gambar'];?>" width="50px" height="50px"></td></tr>
            <tr><td colspan=""><?php echo $data['nm_perusahaan']; ?></td></tr>
          <tr> <td><?php echo $data['jenis_usaha']; ?></td></tr>
		<tr> <td><?php echo $data['bidang']; ?></td></tr>

		
		
           
     
    <?php
        
    }
	
		?> 
	

	

    
			</table><br>