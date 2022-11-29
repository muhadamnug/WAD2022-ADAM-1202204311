<?php
$showroom=mysqli_connect("localhost", "root", "", "wad_modul4_adam", 3333);

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
function profile($id)
{
        global $showroom;

        $query = "SELECT * FROM user_adam WHERE id=$id";
        $dataprofile = mysqli_query($showroom, $query);
        $baris = [];

        while ($row = mysqli_fetch_assoc($dataprofile)){
                $baris[]=$row;
        };

        return $baris;

}; 
?>