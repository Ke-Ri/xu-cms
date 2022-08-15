<?php 
    function generateSite($id){
        $ch = curl_init($_SERVER["HTTP_HOST"]."/cloud/xu-cms/page.php?id=$id");
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_BINARYTRANSFER, true);

        $content = curl_exec($ch);
        curl_close($ch);

        require('../xu-database.php');
        
        $sql = "select linkSite from xu_sites where idSite='$id'";
        $result = mysqli_query($conn,$sql);
        
        $row = mysqli_fetch_assoc($result);

        file_put_contents("../".$row["linkSite"].".html", $content);
    }

?>