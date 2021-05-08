<?php include ("a_header.php");?>
<?php include ("a_connection.php");?>

<div class="container">

    <?php
    $id2 = $_GET['blogid'];
    $sql2 = "SELECT * FROM blog WHERE blog_id = '$id2'";
    $result2 =  mysqli_query($conn, $sql2);
    while($row2 = mysqli_fetch_assoc($result2))
    {
        $blog_id = $row2['blog_id'];
        $blog_name = $row2['blog_name'];
        $blog_date = $row2['blog_date'];
        $blog_url = $row2['blog_url'];
        $blog_desc = $row2['blog_desc'];
        $blog_image_url = $row2['blog_image_url'];
        echo '    
               <!-- Page Heading/Breadcrumbs -->
        <h2 class="text-center text-black mx-3">' .$blog_name  . '</h2>
        <ol class="breadcrumb">
            <li class="mx-2"> 
            </li>
        </ol>
                <!-- Preview Image -->
                <img class="img-fluid rounded img-thumbnail" src="' .$blog_image_url  . '" alt="">
                <hr>
                <!-- Date/Time -->
                <p> Uploaded on:' .$blog_date  . '</p>
                <hr>';
              echo '<p>';
                echo file_get_contents("files/$blog_desc");
echo'</p>';
                echo '<hr>
               <a href="' .$blog_url  . '">Link</a>'
               ;
    }
?>

</div>

<?php include ("a_footer.php");?>