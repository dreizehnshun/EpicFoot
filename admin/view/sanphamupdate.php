<?php




if(is_array($sp)&&(count($sp)>0)){
    extract($sp);
    $idupdate=$id;
    $imgpath=IMG_PATH_ADMIN.$img;
    if(is_file($imgpath)){
        $img='<img src="'.$imgpath.'" width="80px">';
    }else{
        $img="";
    }

}
$html_danhmuclist=showdm_admin($danhmuclist,$iddm);

?>

<div class="main-content">
                <h3 class="title-page">
                    Cập nhật sản phẩm
                </h3>
                
                <form class="addPro" action="index.php?pg=updateproduct" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm <?=$imgpath?></label>
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                            <?=$img?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name" value ="<?=($name!="")?$name:"";?>" id="name" placeholder="Nhập tên sả phẩm">
                    </div>
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" name="iddm" aria-label="Default select example">
                            <option selected>Chọn danh mục</option>
                            <?=$html_danhmuclist;?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá sản phẩm:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="price" id="price" value="<?=($price>0)?$price:0;?>" class="form-control" placeholder="Nhập giá gốc">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Có phải sản phẩm bestseller ko</label>
                        <input type="text" class="form-control" name="bestseller" id="bestseller" placeholder="Hãy nhập 1 là có,0 là không">
                    </div>
                    <div class="form-group">
                        <label for="name">Mô tả</label>
                        <input type="text" class="form-control" name="mota" id="mota" placeholder="Nhập mô tả">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$idupdate?>">
                        <button type="submit" name="updateproduct" class="btn btn-primary">Cập nhật sản phẩm</button>
                    </div>
                </form>
            </div>

            <script>
                new DataTable('#example');
            </script>