<?php
    include '../inc/header.php';

?>


                <!-- Chuyển hướng con trỏ -->
                <div class="page-header">
                    <h4 class="page-title m-1">Dữ liệu</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="bi bi-house"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="bi bi-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Danh Sách</a>
                            </li>
                            <li class="separator">
                                <i class="bi bi-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Nhạc</a>
                            </li>
                        </ul>
                </div>

                <!-- Content -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Thêm Sản Phẩm</h4>
                            <button class="btn btn-primary btn-round ml-auto btn-add" data-toggle="modal" data-target="#addRowModal">
                                <i class="bi bi-plus"></i>
                                Thêm nhạc
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="row m-2">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="add-row_length">
                                        <label>Show
                                            <select name="add-row_length" aria-controls="add-row" class="form-control form-control-sm">
                                                <option value="10">10</option><option value="25">25</option><option value="50">50</option>
                                                <option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6">
                                                    <div id="add-row_filter" class="dataTables_filter">
                                                        <label>Search:
                                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="add-row">
                            </label>
                        </div>
                        </div>
                            </div>
                            <table id="add-row" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Mã: activate to sort column descending" style="width: 74.05px;">Mã</th><th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Tên: activate to sort column ascending" style="width: 199.475px;">Tên</th><th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Hình: activate to sort column ascending" style="width: 77.775px;">Hình</th><th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Thể loại: activate to sort column ascending" style="width: 92.1625px;">Thể loại</th><th style="width: 196.225px;" class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                </thead>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Mã</th><th rowspan="1" colspan="1">Tên</th><th rowspan="1" colspan="1">Hình</th><th rowspan="1" colspan="1">Thể loại</th><th rowspan="1" colspan="1">Action</th></tr>
                                </tfoot>
                                <tbody>                                                                    
                                    <tr role="row" class="odd">
                                                <td class="sorting_1">DN10</td>
                                                <td>Mlem Mlem</td>
                                                
                                                <td><img src="/image_web/1639639214-bg.jpg" style="height: 50px; width: 40px;"></td>
                                                <td>jp</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <button type="button" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"><a href="index.php?controller=sanphamcontroller&amp;action=sua&amp;id=DN10">
                                                            <i class="fa fa-edit"></i> edit
                                                        </a></button>
                                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><a href="index.php?controller=sanphamcontroller&amp;action=delete&amp;id=DN10">
                                                        <i class="fa fa-times"></i> delete</a>
                                                        </button>
                                                
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                    <tr role="row" class="even">
                                                <td class="sorting_1">DN66</td>
                                                <td>Magic Love</td>
                                            
                                                <td><img src="/image_web/1639639214-bg.jpg" style="height: 50px; width: 40px;"></td>
                                                <td>tq</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <button type="button" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"><a href="index.php?controller=sanphamcontroller&amp;action=sua&amp;id=DN66">
                                                            <i class="fa fa-edit"></i> edit
                                                        </a></button>
                                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><a href="index.php?controller=sanphamcontroller&amp;action=delete&amp;id=DN66">
                                                        <i class="fa fa-times"></i> delete</a>
                                                        </button>
                                                
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                    <tr role="row" class="odd">
                                                <td class="sorting_1">DN76</td>
                                                <td>Muộn rồi mà sao còn</td>
                                            
                                                <td><img src="/image_web/1639639214-bg.jpg" style="height: 50px; width: 40px;"></td>
                                                <td>2</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <button type="button" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"><a href="index.php?controller=sanphamcontroller&amp;action=sua&amp;id=DN76">
                                                            <i class="fa fa-edit"></i> edit
                                                        </a></button>
                                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><a href="index.php?controller=sanphamcontroller&amp;action=delete&amp;id=DN76">
                                                        <i class="fa fa-times"></i> delete</a>
                                                        </button>
                                                
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                    <tr role="row" class="even">
                                                <td class="sorting_1">DN99</td>
                                                <td>Arigatou sayonara</td>
                                            
                                                <td><img src="/image_web/1639639214-bg.jpg" style="height: 50px; width: 40px;"></td>
                                                <td>jp</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <button type="button" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"><a href="index.php?controller=sanphamcontroller&amp;action=sua&amp;id=DN99">
                                                            <i class="fa fa-edit"></i> edit
                                                        </a></button>
                                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><a href="index.php?controller=sanphamcontroller&amp;action=delete&amp;id=DN99">
                                                        <i class="fa fa-times"></i> delete</a>
                                                        </button>
                                                
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                    </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="add-row_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="add-row_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="add-row_previous">
                                                <a href="#" aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="add-row" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item next disabled" id="add-row_next">
                                                <a href="#" aria-controls="add-row" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
  
        </div>
        <?php
            include '/Workspace/FontEnd/WEB2_Project/Orchestra/admin/admin/inc/footer.php'
        ?>
       
        <div class="form-group add-form" style="display: none;">
            <h1 class="card-title text-center m-lg-3 mt-0" >
                Thông tin sản phẩm
            </h1>
            <span>Mã sản phẩm:</span> <input type="text"> <br><br>
            <span>Tên sản phẩm:</span> <input type="text"><br><br>
            <span>Thể Loại: </span>
            <select name="selectType" id="typeMusic">
                
                <option value="">Nhạc trẻ</option>
            </select>
            <br>
            <br>
            <div class="link-source text-center">
                
                <span>Đường dẫn</span>
               <input type="text" style="font-size: 12px;"  disabled>
                <button style="font-size: 12px; border: none;">Chọn tệp </button>
            </div>
            <div class="optionAdd">
                <div class="d-block">
                    Lựa chọn: <br>
                    <button class="btn btn-primary btn-round ml-auto text-center " style="width: 90px; height: 40px; margin-top: 15px;">
                        <i class="bi bi-plus"></i>
                        Thêm
                    </button>
                    <br>
                    <button class="btn btn-primary btn-round ml-auto text-center " style="width: 90px; height: 40px; margin-top: 15px;">
                        <i class="bi bi-plus"></i>
                        Sửa
                    </button>
                    <br>
                    <button class="btn btn-primary btn-round ml-auto text-center " style="width: 90px; height: 40px; margin-top: 15px;">
                        <i class="bi bi-plus"></i>
                        Xóa
                    </button>
                </div>
                <div class="image-add" style="position: relative;">
                    <button class="text-center" style="position: absolute; bottom: -30px; border: none; margin-left: 35px;">Chọn ảnh</button>
                </div>
               
                
            </div>
            

        </div>
    </div>
</body>
</html>