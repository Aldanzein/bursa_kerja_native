 &nbsp
<title>Panel User</title>
<head>
<link href="cssuser.css" rel="stylesheet" type="text/css" media="all" />
<link href="lumino/css/bootstrap.min.css" rel="stylesheet">
<link href="lumino/css/datepicker3.css" rel="stylesheet">
</head>

<div class="panel panel-default chat">
					<div class="panel-heading" id="accordion"><span class="glyphicon glyphicon-comment"></span> Chat</div>
					<div class="panel-body">
						<?php include "koneksi.php";
							$dataPerPage = 7;
				if(isset($_GET['paging1'])) {
				$noPage = $_GET['paging1']; }
					else $noPage = 1;
				$offset = ($noPage - 1) * $dataPerPage;
						$query = mysql_query(" select a.*, b.* from chat a join t_anggota b where a.id_anggota=b.id_anggota group by id_chat desc LIMIT $offset, $dataPerPage");
				while ($data = mysql_fetch_array($query)) { ?>
						
						<table cellspacing="1px" border="0px">
			<tr>
				<td width="170px"><font size="3px"> <?php echo $data['nm_anggota'];?></td><td> <img src="<?php echo $data['gambar'];?>" width="100px" height="100px" style="margin-left: 20px; margin-right: 20px; border-radius: 100px;" ><hr> </td>
				<td><p> <b><font color="#6495ed" size="2px"><?php echo $data['chat'];?></b></font></p></td>
				<?php } ?>
			</tr>
			
	</table>
	<?php
			$query1   = "SELECT COUNT(*) AS jumData FROM chat ";
$hasil1 = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
$jumData = $data1['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

		$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

		if ($noPage > 1) echo  "<a  href='".$_SERVER['PHP_SELF']."?permintaan=Daftar+Permintaan&paging1=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

		for($page = 1; $page <= $jumPage; $page++)
		{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?permintaan=Daftar+Permintaan&paging1=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
}
// menampilkan link next
		if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?permintaan=Daftar+Permintaan&paging1=".($noPage+1)."'>Next &gt;&gt;</a>";
		?> 
			
			<br>
					</div>
					
					<div class="panel-footer">
						<div class="input-group"><form action="siminputchat.php?id=<?php echo $ida;?>" method="post">
							<input id="btn-input" type="text" style="width: 1200px;" name="chat" class="form-control input-md" placeholder="Type your message here..." />
							<span class="input-group-btn">
							<button class="btn btn-success btn-md" id="btn-chat">Send</button></form>
							</span>
						</div>
					</div>
				</div>
			
