<?php
   $html_dssp = "";
   $i = 1;
   foreach ($dssp as $item) {
       extract($item);
       $mota_rutgon = (isset($mota) && $mota != "") ? substr($mota, 0, 30) . "..." : "";
       $hinhanh = IMG_PATH_ADMIN . $img;
       $imgtag = "<img src='" . $hinhanh . "' width='80px'>";
       $link = "index.php?pg=sanphamchitiet&idpro=" . $id;
       $html_dssp .= '<tr>
           <td>' . $i . '</td>
           <td>' . $imgtag . '</td>
           <td>' . $name . '</td>
           <td>' . number_format($price, 0, ",", ".") . ' VNĐ</td>
           <td>' . $view . '</td>
           <td>';
       if ($bestseller == 1) {
           $html_dssp .= '<i class="fa-solid fa-check" style="color: #11fa00;"></i>';
       } else {
           $html_dssp .= '<i class="fa-solid fa-x" style="color: #ff0000;"></i>';
       }
       $html_dssp .= '</td>
           <td>' . $mota_rutgon . '</td>
           <td>
               <a href="index.php?pg=sanphamupdate&id=' . $id . '" class="btn btn-warning">
                   <i class="fa-solid fa-pen-to-square"></i> Sửa
               </a>
               <a href="#" onclick="return confirmDelete(' . $id . ');" class="btn btn-danger">
                   <i class="fa-solid fa-trash"></i> Xóa
               </a>
           </td>
       </tr>';
       $i++;
   }
?>
<div class="main-content">
          <h3 class="title-page">Sản phẩm</h3>
          <div class="d-flex justify-content-end">
            <a href="index.php?pg=sanphamadd" class="btn btn-primary mb-2"
              >Thêm sản phẩm</a
            >
          </div>
          <form action="index.php?pg=sanphamlist" method="post" class="search">
          <input type="text" name="kyw" id="">
          <button type="submit" name="timkiem" class="r">Tìm kiếm</button>
          </form>
          
          <table id="example" class="table table-striped" style="width: 100%">
            <thead>
              <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên SP</th>
                <th>GIÁ</th>
                <th>Lượt xem</th>
                <th>Sp bestseller</th>
                <th>Mô tả</th>
                <th>Thao tác</th>

              </tr>
            </thead>
            
            <tbody>
            <?=$html_dssp;?>
            </tbody>  
          </table>
          <div class="phantrang">
          <?php
         echo $hienthisotrang;
          ?>
          </div>
        </div>
      </div>
    </div>
    <script>
function confirmDelete(id) {
    if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này?")) {
        window.location.href = "index.php?pg=delproduct&id=" + id;
        return true;
    } else {
        return false;
    }
}
</script>