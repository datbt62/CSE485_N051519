<div class="contentadmin">
<div class="container">
        <?PHP
		
			$quanly=isset($_GET["quanly"])?$_GET["quanly"]:"";
			
		    if($quanly=='quanlysanpham'){
				include('quanlysanpham/main.php');			 
			}
			else 
			if($quanly=='quanlydonhang'){
				include('quanlydonhang/main.php');		 
			}
			else 
			if($quanly=='quanlynhacungcap'){
				include('quanlynhacungcap/main.php');				 
			}
			else 
			if($quanly=='quanlyslide'){
				include('quanlyslide/main.php');				 
			}
			else 
			if($quanly=='quanlytaikhoan'){
				include('quanlytaikhoan/main.php');				 
			}
		?>
	</div>
</div>