<?php 

include('modules/connect/config.php');
mysqli_set_charset($cnn,"utf8");
$sql_chitietsp ="select HinhAnh,masp,tenloaisp,tensp,DonGia,khuyenmai from sanpham,loaisp where (sanpham.maloaisp=loaisp.maloaisp) and (tensp='$tensp')";
$sql_chitietsp .="and (loaisp.tenloaisp ='$tenloaisp');";
$result=mysqli_query($cnn,$sql_chitietsp);
if(!$result){
  die("Không thể thực hiện câu lệnh sql:".mysqli_error($cnn));
  exit();
}?>
 <div class="tittle" >
    <span class="border-bottom" ><h4 align=center><u><?php echo $tensp.' '.$tenloaisp ?></u> </h4></span>
  </div>
    <br>
    <div class="row" margin-left=10>
    <?php 
    while ($row= mysqli_fetch_array($result)) {?>
 <div class="col-md-3" style="padding:10px">
    
    <table align=center>
    <tr>
    <td >
    <?php echo '<img src="'.$row['HinhAnh'].'" height=320 width=210>'; ?>
    </td>
    </tr>
    <tr>
      <td align=center>
      <?php echo '<h4> Mã sản phẩm: '.$row['masp'].'</h4>'; ?>
      </td>
    </tr>
    <tr>
    <td align=center>
    <?php echo '<h4>'.$row['tensp'].' '.$row['tenloaisp'].'</h4>'; ?>
    </td>
    </tr>
    

    <tr>
    <td align=center> 
    <p><strong>Giá gốc: 
    <?php echo ''.$row['DonGia'].' Đồng</strong></p>'; ?>
    </td>
    </tr>
    <tr>
      <td align=center>
        <p><strong>Khuyến mãi:
        <?php echo ' '.$row['khuyenmai'].' % </strong></p>';?>
        
      </td>
    </tr>
    <?php $giamgia = $row['DonGia']-$row['DonGia']*$row['khuyenmai']/100 ?>
    <tr>
      <td align=center>
        <p><strong>Giảm còn:
        <?php echo ' '.$giamgia.' ĐỒNG </strong></p>';?>
        
      </td>
    </tr>
    <tr>
    <td align=center>
    <button class="btn btn-warning" id="themgiohang" ><a href="index.php?page=cart&id=<?php echo $row['masp']?>">Thêm giỏ hàng</a></button>
    </td>    
    </tr>

    </table>
    
</div>
  <?php } ?>
  </div>