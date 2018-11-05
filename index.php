<?php
    include'koneksi.php';
    $id = ''; 
    if( isset( $_GET['id'])) {
        $id = $_GET['id']; 
    } 
    $msg = '';
    $code = '';

    if (!empty($id))
    {
        //Single data with param id
        $query = mysqli_query($koneksi,"select * from profile where id='$id'");
        if (mysqli_num_rows($query) > 0) {
            $code = 200;
            $msg = "Sukses";
            }else{
                $code = 204;
                $msg = "Tidak Ada data"; 
            }
    }else
    {
        //All Data
        $query = mysqli_query($koneksi,"select * from profile");
        if (mysqli_num_rows($query) > 0) {
            $code = 200;
            $msg = "Sukses";
            }else{
                $code = 204;
                $msg = "Tidak Ada data"; 
            }
    };
    //untuk menjalankan perinta sql
        # buat array
        $response = array();
        $response["success"] = true;
        $response["data"] = array();
        $response["message"] = $msg;
        $response["code"] = $code;
            while ($row = mysqli_fetch_assoc($query)) {
                # kerangka format penampilan data json
                $data['id'] = $row["id"];
                $data['username'] = $row["username"];
                $data['password'] = $row["password"];
                $data['level'] = $row["level"];
                $data['fullname'] = $row["fullname"];
                array_push($response["data"], $data);
            }
        echo json_encode($response);
?>