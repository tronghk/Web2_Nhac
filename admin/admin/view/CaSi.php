<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best-Music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/admin/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid nav_container">
        <div class="menu">
            <div class="menu-header">
                <a href="./QuanLy.php" class="menu-header-logo"> <img src="/image_web/logo.png" class="menu-logo" alt=""></a>
            </div>
            <div class="menu-bar">
               <div class="menu-author w-100 p-3 rounded">

                    <div class="author-image">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" style="width: 48px;"
                        alt="Avatar" />
                    </div>
                    <div class="author-inf">
                        <p class="author-name si">DoAnMonHoc</p>
                        <p class="author-em">Admin</p>
                    </div>

               </div>
               <div class="menu-content">
                    <ul class="list-group nav-menu-list">
                        <li class="list-group-item menu-item">E-Commerce</li>
                        <li class="list-group-item menu-item rounded-pill" id="tag-dashboard">
                            <a href="ThongKe.php" class="menu-icon-sub rounded-pill">
                                <span class="rounded-circle icon-link"><i class="bi bi-bar-chart "></i></span>
                                <span class="icon-title">Thống kê</span>
                            </a>

                        </li>

                        <li class="list-group-item menu-item" onclick="openTab(id)" id='tag-music'>
                            <a href="#" class="menu-icon-sub">
                                <span class="rounded-circle icon-link"><i class="bi bi-music-note"></i></span>
                                <span class="icon-title">Nhạc</span>
                                <span class="icon-link"> <i class="icon-next bi bi-arrow-right"></i></span>
                            </a>
                            <ul class="list-group display-tag-none" myname="False">
                                <li class="list-group-item menu-item rounded-pill ">
                                    <a href="./LoaiNhac.php" class="menu-icon-sub rounded-pill">
                                        <span class="icon-title sub-list">Loại nhạc</span>
                                    </a>
        
                                </li>
                                <li class="list-group-item menu-item rounded-pill" >
                                    <a href="./BaiHat.php" class="menu-icon-sub rounded-pill">
                                        <span class="icon-title sub-list">Bài Hát</span>
                                    </a>
        
                                </li>
                            </ul>

                        </li>
                        <li class="list-group-item menu-item" onclick="openTab(id)" id="openTab"> 
                            <a href="#" class="menu-icon-sub">
                                <span class="rounded-circle icon-link"><i class="bi bi-person"></i></span>
                                <span class="icon-title">Người phát triển</span>
                                <span class="icon-link"> <i class="icon-next bi bi-arrow-right"></i></span>
                            </a>
                            <ul class="list-group display-tag-none" myname="False">
                                <li class="list-group-item menu-item rounded-pill" id="load">
                                    <a href="#" class="menu-icon-sub rounded-pill">
                                        <span class="icon-title sub-list">Ca sĩ</span>
                                    </a>
        
                                </li>
                                <li class="list-group-item menu-item rounded-pill" id="tag-productDetail">
                                    <a href="./Album.php" class="menu-icon-sub rounded-pill">
                                        <span class="icon-title sub-list">Album</span>
                                    </a>
        
                                </li>
                            </ul>

                        </li>

                        <li class="list-group-item menu-item rounded-pill" >
                            <a href="./TaiKhoan.php" class="menu-icon-sub rounded-pill">
                                <span class="rounded-circle icon-link"><i class="bi bi-person-badge"></i></span>
                                <span class="icon-title">Tài khoản</span>
                            </a>
                           

                        </li>
                        
                    </ul>
               </div>
            </div>
        </div>
        <div class="content">

            <!-- thanh tìm kiếm và user -->
            <div class="content-slider_bar">
                <div class="input-group">
                    <div class="input-group-prepend rounded">
                        <button type="submit" class="btn btn-search pr-1">
                            <i class="rounded bi bi-search"></i>
                        </button>
                    </div>
                    <input type="text" placeholder="Search ..." class="form-control">
                </div>
                <div class="author-logout" style="position: relative;">
                    <i class="bi bi-person"></i>
                    <div class="log-out" >Log Out
                        <span></span>
                    </div>
                </div>
            </div>

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
                            <a href="#">Phát triển</a>
                        </li>
                        <li class="separator">
                            <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Ca sĩ</a>
                        </li>
                    </ul>
            </div>

            <!-- Content -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Thêm Sản Phẩm</h4>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
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
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Mã: activate to sort column descending" style="width: 74.05px;">Mã</th><th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Tên: activate to sort column ascending" style="width: 199.475px;">Tên</th><th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Hình: activate to sort column ascending" style="width: 77.775px;">Hình</th><th style="width: 196.225px;" class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                            </thead>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Mã</th><th rowspan="1" colspan="1">Tên</th><th rowspan="1" colspan="1">Hình</th><th rowspan="1" colspan="1">Action</th></tr>
                            </tfoot>
                            <tbody>                                                                    
                                <tr role="row" class="odd">
                                            <td class="sorting_1">DN10</td>
                                            <td>Mlem Mlem</td>
                                            
                                            <td><img src="/image_web/1639639214-bg.jpg" style="height: 50px; width: 40px;"></td>
                                       
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
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Trợ giúp
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Giấy phép
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2023, made with <i class="bi bi-heart text-danger"></i> by <a href="">Nguyễn Hửu Trọng - Lê Quang Trường - Nguyễn Minh Tiến</a>
                </div>				
            </div>
        </footer>
    </div>
    <script src="/admin/js/main.js"></script>
    
</body>
</html>