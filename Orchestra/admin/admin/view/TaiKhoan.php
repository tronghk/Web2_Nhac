<?php
    include '../inc/header.php';
    include '../controller/UserManager.php';
?>
<?php

     $class = new UserManager();
     $listUser = $class->getAll();
     if($listUser != null)
        $length = count($listUser); 
    $row =ceil($length/6);

        
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
                            <a href="#">Tài khoản</a>
                        </li>
                    </ul>
            </div>

            <!-- Content -->
            <div class="card">
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
                                <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Mã: activate to sort column descending" style="width: 74.05px;">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Hình: activate to sort column ascending" style="width: 77.775px;">Mật khẩu</th>
                                 <th style="width: 100px;" class="sorting" tabindex="0" aria-controls="add-row" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Mật khẩu</th>
                                 <th rowspan="1" colspan="1">Action</th></tr>
                            </tfoot>
                            <tbody>    
                            <?php
                                if($listUser != null){

                                        foreach($listUser as $value){
                                            $username = $value->get_UserName();
                                            $password = $value->get_Password();
                                           echo"
                                                <tr role='row' class='odd'>
                                                <td class='sorting_1'>
                                                 $username
                                                </td>  
                                                <td>
                                                    $password
                                                </td>
                                                <td>
                                                        <div class='form-button-action'>
                                                            
                                                            <button type='submit' data-toggle='tooltip' title='' class='btn btn-link btn-danger' data-original-title='Remove'><a>
                                                            <i class='fa fa-times'></i> edit</a>
                                                            </button>
                                            
                                                        </div>  
                                                </td>            
                                            </tr>
                                           "; 
                                        }
                                    }
                                ?>                                                                  


                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="add-row_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="add-row_paginate">
                                <ul class="pagination">
                                                 <li class="paginate_button page-item previous" id="add-row_previous">
                                                        <a aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                 </li>
          
                                            <?php
                                            for($i = 1;$i <= $row; $i++)
                                            {
                                                echo "
                                                <li class='paginate_button page-item active' >
                                                            <a id='$i' style='background-color: blue !important'  aria-controls='add-row' data-dt-idx='1' tabindex='0' class='page-link'>$i</a>
                                                </li>
                                                ";
                                            }
                                            ?>
                                            

                                                <li class="paginate_button page-item next disabled" id="add-row_next">
                                                        <a href="#" aria-controls="add-row" data-dt-idx="2" tabindex="1" class="page-link">Next</a>
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