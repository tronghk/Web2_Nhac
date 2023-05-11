<?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
		include("D:/xampp/htdocs/php1/Web2_Nhac-main/Web2_Nhac-main/DataAccess/connect.php");
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 6;
        $start = ($current_page - 1) * $limit;

        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
        $data = mysqli_query($conn, "SELECT  song.idSong as songid,  song.name AS songname, artist.name AS artistname 
										FROM  song , artist 
										WHERE song.idArtist = artist.idArtist  
										LIMIT $start, $limit");
									
        $row=$data->fetch_assoc();
        ?>
<?php 
								include("D:/xampp/htdocs/php1/Web2_Nhac-main/Web2_Nhac-main/DataAccess/connect.php");


								$idsong = $row['songid'];
								if(isset($_POST['add'])){
										$sql ="INSERT INTO song_in_list (idList, idSong) 
												VALUES ('$idsong')";  
										$conn->query($sql); 
								}  
					?>
<!-- LOAD DATABASE -->
<?php foreach ($data as $row)  :?>
<li class="single-item">
    <a data-playlist data-title="1. Got What I Got" data-artist="Jason Aldean" data-img="img/covers/cover.svg"
        href="http://blast.volkovdesign.com/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3"
        class="single-item__cover">
        <img src="img/covers/cover.svg" alt="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
                d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
                d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
        </svg>
    </a>
    <div class="single-item__title">
        <h4><a href="#"><?php echo $row['songname'] ?></a></h4>
        <span><a href="artist.php"><?php echo $row['artistname']?></a></span>
    </div>
    <form class="pagination" action="" method="post">
        <button type="submit" class="single-item__add" name="add" type="button" class="btn btn-info btn-lg"
            data-toggle="modal" data-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z" />
            </svg>
        </button>
        <a href="#" class="single-item__export">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z">
                </path>
            </svg>
        </a>
    </form>
    <span class="single-item__time">2:58</span>
</li>
<?php endforeach; ?>