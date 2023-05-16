<?php
       include '../inc/header.php';
       include '../controller/AlbumManager.php';

?>
<?php
    
    $class = new AlbumManager();
    $helper = new Format();
    $class->get();
    $class->edit();
    $class->add();
    
    $rEdit = $class->editAlbum();
    $rAdd = $class->addAlbum();
    $rDelete = $class->deleteAlbum();
    $class->search();


    $row = 0;
    $length = 1;
    $list = $_SESSION["list"];
    $trang =$_SESSION["trang"];
    $object = $_SESSION['object'];
    $add = $_SESSION['add'];


    if($list != null)
        $length = $class->count();
        $row = ceil($length/6);
    if($row*6 < $length)
        $row = $row+1;

        
    if($rEdit != null){
        $message = "Sửa album ".$helper->messageResult($rEdit);
    }
    if($rAdd != null){
        $message = "Thêm album ".$helper->messageResult($rAdd);
    }

    if($rDelete != null){
        $message = "Xóa album ".$helper->messageResult($rDelete);
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
                            <a href="#">Phát triển</a>
                        </li>
                        <li class="separator">
                            <i class="bi bi-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Album</a>
                        </li>
                    </ul>
            </div>

            <!-- Content -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Thêm Album</h4>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <a href="Album.php?add=''">
                        <i class="bi bi-plus"></i>
                            Thêm Album
                        </a>
                        
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
                                                    <form action="" method="post">
                                                            <input type="search" name="search" value="<?php echo $_SESSION['search']; ?>"   class="form-control form-control-sm" placeholder="" aria-controls="add-row">
                                                            </form>
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
                            <?php
                                if($list != null){

                                        foreach($list as $value){
                                            $id = $value->get_id();
                                            $name = $value->get_name();
                                            echo'
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                    '.$id.'
                                                    </td>  
                                                    <td>
                                                        '.$name.'
                                                    </td>
                                                    <td>
                                                            <div class="form-button-action">
                                                                
                                                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger"
                                                                data-original-title="Edit">
                                                                <a href="Album.php?edit='.$id.'">
                                                                edit</a>
                                                                </button>

                                                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger"
                                                                data-original-title="delete">
                                                                
                                                                <a href="Album.php?delete='.$id.'">
                                                                <i class="fa fa-times"></i>
                                                                delete</a>
                                                                </button>
                                                
                                                            </div>  
                                                    </td>            
                                            </tr>
                                           '; 
                                        }
                                    }
                                ?>                                                                  


                            </tbody>
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
                                                <a href="Album.php?trang='.($trang-1).'" aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                ';
                                            }
                                            for($i = 1;$i <= $row; $i++)
                                            {
                                                if($trang != $i){
                                                    echo '<li class="paginate_button page-item active" ><a href="Album.php?trang='.$i.'"
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
                                                <a href="Album.php?trang='.($trang+1).'" aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Next</a>
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
    if($object != null){
        echo'
        <form action="Album.php" method="post" class="form-add align-content-center justify-content-center " style="display: flex;">
        <div class="form-group add-form" >
             <a href="Album.php?trang='.($trang).'" >
                <i class="out bi bi-x-circle-fill"></i>
           </a>
            <h1 class="card-title text-center m-lg-3 mt-0" >
                Thông tin album
            </h1>
    
            <span >Mã album:</span> <input name="id" required="required" readonly="readonly" value="'.$object->get_id().'" type="text">
            <span >Tên ablum:</span> <input name="name" required="required" value="'.$object->get_name().'" type="text"> <br><br>
                       
             
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
    if($add != null){
        echo'
        <form action="Album.php" method="post" class="form-add align-content-center justify-content-center " style="display: flex;">
        <div class="form-group add-form" >
             <a href="Album.php?trang='.($trang).'" >
                <i class="out bi bi-x-circle-fill"></i>
           </a>
            <h1 class="card-title text-center m-lg-3 mt-0" >
                Thông tin album
            </h1>
    
            <span >Mã album:</span> <input name="idadd" required="required" readonly="readonly" value="'.$add.'" type="text">
            <span >Tên album:</span> <input name="nameadd" required="required" value="" type="text"> <br><br>
                       
             
            <br>
            <div class="optionAdd">
                <div class="d-block text-center">
                    <br><br>
                    Lựa chọn: <br>
                    <button  type="submit"  class="load-form btn btn-primary btn-round ml-auto text-center " style="width: 150px; height: 40px; margin-top: 15px;">
                            
                    <i class="bi bi-plus"></i>
                        Thêm album
                    </button>
                </div>
                
               
                
            </div>
            
    
        </div>
    </form>
        ';
    }
   ?>
   <?php
    if($rEdit != null || $rAdd != null || $rDelete != null){
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