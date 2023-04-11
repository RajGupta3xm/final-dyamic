<?php
    include 'connection.php';
    include 'headerandsidebar.php';
    if(isset($_POST['send']))
    {
        $id = $_GET['id'];
    }

?>

<div class="table">
        <div class="col-lg-12">
            <h1 class="h1center">User Display Data </h1>
            
            <?php
                    include 'connection.php';
                    $id = $_GET['id'];
                    $q = "SELECT * FROM `complaincentre` WHERE id=$id ";
                    $query = mysqli_query($con,$q);
                    $res = mysqli_fetch_array($query);
                   
                       
                    
            ?>
            <table  class="table table-bordered border-primary"">

            <tr>
            <th>Name:</th>
            <td><?php echo $res['name']?></td>
            </tr>

            <tr>
            <th>Email:</th>
            <td><?php echo $res['email'];?></td>
            </tr>

            <tr>
                <th>Phone</th>
                <td><?php echo $res['phone']?></td>
            </tr>

            <tr>
                <th>Subject</th>
                <td><?php echo $res['subject']?></td>
            </tr>

            <tr>
                <th>Message</th>
                <td><?php echo $res['message']?></td>
            </tr>
          
            </table>

        </div>
    </div>
    <?php
        include 'footer.php';
    ?>