<?php 
function connect(){
    $conn = new mysqli('localhost', 'root', '', 'quanlyorchestraa');
    if($conn->connect_errno != 0){
       return $conn->connect_error;
    }else{
       $conn->set_charset("utf8mb4");	
    }
    return $conn;
 }
function getAllSong(){
    $conn = connect();
    $limit = 12;
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($current_page - 1) * $limit;
    $res = $conn->query("SELECT artist.image as artistimg, song.name as songname, artist.name as artistname FROM  artist , song
    WHERE song.idArtist = artist.idArtist ORDER BY RAND()");
    while($row = $res->fetch_assoc()){
       $products[] = $row;
    }
    return $products;
 }
  
 function getSongByGenre($name){
    $conn = connect();
    $res = $conn->query("SELECT artist.image as artistimg, song.name as songname, artist.name as artistname FROM album , artist , song, genresong 
    WHERE album.idAlbum = song.idAlbum 
    AND song.idArtist = artist.idArtist 
    AND song.idGenreSong = genresong.idGenreSong 
    AND genresong.name = '$name' ORDER BY RAND()");
    while($row = $res->fetch_assoc()){
       $products[] = $row;
    }
    return $products;
 }
?>