<?php

$con = mysqli_connect("localhost","root","","social_network") or die("Connection was not established");

//$con = mysqli_connect("remotemysql.com" ,"Ncmv0vMxAr" ,"Xgee11P1le" ,"Ncmv0vMxAr");
if(!$con){
    echo "Not connected";
}else{
    echo "connected";

}

if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];

    $delete_post = "delete from posts where post_id='$post_id'";

    $run_delete = mysqli_query($con, $delete_post);

    if($run_delete){
        echo "<script>alert('A Post has been deleted')</script>";
        echo "<script>window.open('../home.php', '_self')</script>";
    }
}
?>