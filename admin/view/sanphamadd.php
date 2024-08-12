<?php
$html_danhmuclist=showdm_admin1($danhmuclist);

?>

<div class="main-content">
                <h3 class="title-page">
                    Thêm sản phẩm
                </h3>
                
                <form class="addPro" action="index.php?pg=addproduct" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sả phẩm">
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
                            <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá gốc">
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
                        <button type="submit" name="addproduct" class="btn btn-primary">Thêm sản phẩm</button>
                    </div>
                </form>
            </div>

            <script>
                new DataTable('#example');
            </script>