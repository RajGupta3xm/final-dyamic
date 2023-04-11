<?php
    include 'connection.php';
    include 'headerandsidebar.php';

    
?>



<div class="table">
        <div class="col-lg-12">
            <h1 class="h1center">Display Data Table</h1>
            <table class=" table table-striped table-hover table-bordered">
            
                <tr class="table">
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Massege</th>
                    <th scope="col">VIEW</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>

                <?php
                    include 'connection.php';
                    $q = "SELECT * FROM `complaincentre`";
                    $query = mysqli_query($con,$q);
                    while ($res = mysqli_fetch_array($query)) 
                    {
                       
                    
                ?>
                    <tr>
                        <td><?php echo $res['id'];?></td>
                        <td><?php echo $res['name'];?></td>
                        <td><?php echo $res['email']?></td>
                        <td><?php echo $res['phone']?></td>
                        <td><?php echo $res['subject']?></td>
                        <td><?php echo $res['message']?></td>
                        <td><button class="btn btn-success"><a href="view.php?id=<?php echo $res['id'];?>">VIEW</a></td>
                        <td><button class="btn btn-info"><a href="update.php?id=<?php echo $res['id'];?>">UPDATE</a></td>
                        <td><button class="btn btn-danger" ><a href="delete.php?id=<?php echo $res['id'];?>">DELETE</a></td>
                    </tr>

            
            
            <?php
                    }
            ?>
            </table>

        </div>
    </div>
    <?php
        include 'footer.php';
    ?>