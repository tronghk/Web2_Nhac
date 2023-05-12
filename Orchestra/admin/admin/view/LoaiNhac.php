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
                            <a href="#">Thể loại</a>
                        </li>
                    </ul>
            </div>

            <!-- Content -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Thêm thể loại</h4>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                            <i class="bi bi-plus"></i>
                            Thêm thể loại
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
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Mã: activate to sort column descending" style="width: 120px;">Mã</th><th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Tên: activate to sort column ascending" style="width: 199.475px;">Tên</th><th style="width: 80px;" class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Mã</th><th rowspan="1" colspan="1">Tên</th><th rowspan="1" colspan="1">Action</th></tr>
                            </tfoot>
                            <tbody>                                                                    
                                <tr role="row" class="odd">
                                            <td class="sorting_1">TP00</td>
                                            <td>Nhạc thiếu nhi</td>
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
                               <tr role="row" class="odd">
                                            <td class="sorting_1">TP01</td>
                                            <td>Nhạc trẻ</td>
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
                                 <tr role="row" class="odd">
                                            <td class="sorting_1">TP02</td>
                                            <td>Nhạc Trữ tình</td>
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
                                    <tr role="row" class="odd">
                                            <td class="sorting_1">TP03</td>
                                            <td>Nhạc Trung</td>
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
                                    <tr role="row" class="odd">
                                            <td class="sorting_1">TP04</td>
                                            <td>Nhạc Âu Mỹ</td>
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
            include '../inc/footer.php'
        ?>
    </div>
    
</body>
</html>