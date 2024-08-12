<div class="main-content">
                <h3 class="title-page">
                    Danh mục
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?pg=danhmuc_add" class="btn btn-primary mb-2">Thêm danh mục</a>
                </div>
                <table id="example" class="table table-striped" style="width:50%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Ưu tiên</th>
                            <th>Số lượng sản phẩm</th>
                            <th>Hành động</th>
                            
                        </tr>
                    </thead>

<?php
 if(isset($kq)&&(count($kq)>1)){
    $i=1;
foreach ($kq as $dm) {
    extract($dm);
    $dem_sp_iddm =thong_ke_san_pham_theo_danhmuc($id);
    $total_products = $dem_sp_iddm[0]['total_products'];
    echo '<tr>
    <td>'.$i.'</td>
    <td>'.$name.'</td>
    <td>'.$home.'</td>
    <td>'.$total_products.'</td>
    <td>
                                <a href="index.php?pg=updatedmform&id='.$id.'" class="btn btn-warning"><i
                                        class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="#" onclick="return confirmDelete('.$id.');" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i> Xóa</a>  
    
    
    </tr>';
    $i++;
}
 }
?>  
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
        function confirmDelete(id) {
    if (confirm("Bạn có chắc chắn muốn xóa danh mục này?")) {
        window.location.href = "index.php?pg=deldm&id=" + id;
        return true;
    } else {
        return false;
    }
}
    </script>