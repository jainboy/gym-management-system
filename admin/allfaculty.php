f<?php
include './sidebar2.php';  ?>

<div class="description">
                        <h2>All Faculity</h2>
                        <table  id="table_design">
                           <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Shift</th>
                                <th>Mobile</th>
                            </tr>
                            <?php
                            include('../dbconnection/db.php');
                            $query=mysqli_query($conn,"SELECT * FROM `faculity`");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td>    <?php   echo $row['id'];    ?>    </td>
                                <td>    <?php   echo $row['name'];    ?>    </td>
                                <td>    <?php   echo $row['email'];    ?>    </td>
                                <td>    <?php   echo $row['shift'];    ?>    </td>
                                <td>    <?php   echo $row['mobile'];    ?>    </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
        </main>
    </body>
</html>