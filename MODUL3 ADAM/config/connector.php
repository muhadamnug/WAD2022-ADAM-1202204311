<?php
$showroom=mysqli_connect("localhost", "root", "", "showroom_adam_table", 3333);

function showAll(){
    global $showroom;
    $wadah=[];
    $query="SELECT * FROM showroom_adam";
    $data=mysqli_query($showroom, $query);
    while ($datas= mysqli_fetch_assoc($data)) {
        $wadah[] = $datas;
    };

    return $wadah;
}
function detail($id){
    global $showroom;
    $wadah=[];
    $query="SELECT * FROM showroom_adam WHERE id_mobil=$id";
    $data=mysqli_query($showroom, $query);
    while ($datas= mysqli_fetch_assoc($data)) {
        $wadah[] = $datas;
    };

    return $wadah;
}
?>