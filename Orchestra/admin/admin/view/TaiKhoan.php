<?php
    include '../inc/header.php';
    include '../controller/UserManager.php';
?>

<?php
    
    $class = new UserManager();
    $helper = new Format();
    $class->getUser();
    $class->edit();
    $rEdit = $class->editUser();
    $class->search();
    $row = 0;
    $length = 1;
    $listUser = $_SESSION["listUser"];
    $trang =$_SESSION["trang"];
    $user = $_SESSION['username'];
    if($listUser != null)
        $length = $class->count();
        $row = ceil($length/6);
    if($row*6 < $length)
        $row = $row+1;
    if($rEdit != null){
        $message = "Sửa tài khoản ".$helper->messageResult($rEdit);
    }

    


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
                                                    <form action="" method="post">
                                                            <input type="search" name="search" value="<?php echo $_SESSION['search']; ?>"   class="form-control form-control-sm" placeholder="" aria-controls="add-row">
                                                            </form>
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
                                           echo'
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                    '.$username.'
                                                    </td>  
                                                    <td>
                                                        '.$password.'
                                                    </td>
                                                    <td>
                                                            <div class="form-button-action">
                                                                
                                                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger"
                                                                data-original-title="Edit">
                                                                <a href="TaiKhoan.php?edit='.$username.'">
                                                                edit</a>
                                                                </button>
                                                
                                                            </div>  
                                                    </td>            
                                            </tr>
                                           '; 
                                        }
                                    }
                                ?>                                                                  


                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="add-row_info" role="status" aria-live="polite">
                                    <?php
                                    echo 'Showing '.$trang.' to '.$row.' of 6 entries '
                                ?></div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="add-row_paginate">
                                <ul class="pagination">
                                            <?php
                                            if($trang == 1){
                                                echo'
                                                <li class="disabled paginate_button page-item previous" id="add-row_previous">
                                                <a aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                ';
                                            }else{
                                                echo'
                                                <li class=" paginate_button page-item previous" id="add-row_previous">
                                                <a href="TaiKhoan.php?trang='.($trang-1).'" aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                ';
                                            }
                                            for($i = 1;$i <= $row; $i++)
                                            {
                                                if($trang != $i){
                                                    echo '<li class="paginate_button page-item active" ><a href="TaiKhoan.php?trang='.$i.'"
                                                    id='.$i.' style="background-color: blue !important"  aria-controls="add-row" data-dt-idx="1" tabindex="0"
                                                     class="page-link">'.$i.'</a></li>';
                                                }else{
                                                    echo '<li class="paginate_button page-item active" ><a href="#"
                                                    id='.$i.' style="background-color: red !important"  aria-controls="add-row" data-dt-idx="1" tabindex="0"
                                                     class="page-link">'.$i.'</a></li>';
                                                }
                                               
                                            }

                                            if($trang == $row){
                                                echo'
                                                <li class="disabled paginate_button page-item previous" id="add-row_previous">
                                                <a aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Next</a>
                                                </li>
                                                ';
                                            }else{
                                                echo'
                                                <li class=" paginate_button page-item previous" id="add-row_previous">
                                                <a href="TaiKhoan.php?trang='.($trang+1).'" aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Next</a>
                                                </li>
                                                ';
                                            }
                                            ?>
                                            
                                            


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
   <?php
    if($user != null){
        echo'
        <form action="TaiKhoan.php" method="post" class="form-add align-content-center justify-content-center " style="display: flex;">
        <div class="form-group add-form" >
             <a href="TaiKhoan.php?trang='.($trang).'" >
                <i class="out bi bi-x-circle-fill"></i>
           </a>
            <h1 class="card-title text-center m-lg-3 mt-0" >
                Thông tin tài khoản
            </h1>
    
            <span >Tài khoản:</span> <input name="username" required="required" readonly="readonly" value="'.$user.'" type="text">
            <span >Mật khẩu:</span> <input name="password" required="required" value="" type="text"> <br><br>
                       
             
            <br>
            <div class="optionAdd">
                <div class="d-block text-center">
                    <br><br>
                    Lựa chọn: <br>
                    <button  type="submit"  class="load-form btn btn-primary btn-round ml-auto text-center " style="width: 90px; height: 40px; margin-top: 15px;">
                            
                    <i class="bi bi-plus"></i>
                        Sửa
                    </button>
                </div>
                
               
                
            </div>
            
    
        </div>
    </form>
        ';
    }
   ?>
   <?php
    if($rEdit != null){
        echo'
                        <div class="message-action" style="width:100%;display:flex;justify-content:center">
                        <div id="msgAlert" class="panel-body text-center" style="position: fixed;top:0;z-index: 1001; width:130%;">
                
                        
                        <div class="form-alert">
                            <div class="alert">
                                '.$message.'
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    
                <script>
                setTimeout(function(){
                    $("#msgAlert").fadeOut("slow");
                },2000); 

                </script>
        ';
    }
   ?>
    
</body>
</html>