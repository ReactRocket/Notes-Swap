<?php
session_start();
require("sidebar.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<style>
    #content {
        margin-left: 250px;
        padding: 15px;
    }
    .card
    {
        background-color: #ef5734;
      background-image: linear-gradient(315deg, #ef5734 0%, #ffcc2f 74%);
        box-shadow: 10px 10px 31px -1px rgba(0,0,0,0.75);
        -webkit-box-shadow: 10px 10px 31px -1px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 31px -1px rgba(0,0,0,0.75);
    }
</style>

<body>

    <div id="content">
       
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php
                        include("../connect.php");
                        $query = "SELECT * FROM tblsubject";
                        $query_run = mysqli_query($mysql, $query);
                        if (mysqli_num_rows($query_run) > 0) 
                        {
                            foreach ($query_run as $row) 
                            {
                                echo "
                        <div class='col-sm-4 mt-5'>
                        <div class='card bg-warning text-white' style='width: 22rem;'>
                            <div class='card-body'>
                                <h5 class='card-title'>$row[subjectname]</h5>
                                <h2>Total Notes</h2>
                                <h5>";
                               
                        ?>
                        <?php

                        $qs = "SELECT Subject FROM tblnotes WHERE Subject = '$row[subjectname]' ORDER BY Subject";
                        $ttlstud = mysqli_query($mysql, $qs);

                        $rows = mysqli_num_rows($ttlstud);
                        echo $rows
                            ?>
                        </h5>
                        <form action="viewPNotes.php" method="post">
                            <input type="hidden" name="subname" value="<?php echo"$row[subjectname]" ?>">
                            <?php
                            echo"<div><input type='submit'name='view' value='View $row[subjectname] Notes' class='btn btn-outline-dark mt-2'></div>";
                            ?>
                        </form>
                       

                    </div>
                </div>
			</div>
                <?php
                    
                    }
                }
                ?>
                         
                    </div>
                </div>
            </div>
        </div>
          
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>


</div>