<?php
include './sidebar2.php';  ?>

<div class="description">
                        <h2>All Members</h2>
                        <table  id="table_design">
                           <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Membership</th>
                                <th>Joining Date</th>
                                <th>Package</th>
                            </tr>
                            <?php
                            include('../dbconnection/db.php');
                            $query=mysqli_query($conn,"SELECT * FROM `member`");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td>    <?php   echo $row['id'];    ?>    </td>
                                <td>    <?php   echo $row['name'];    ?>    </td>
                                <td>    <?php   echo $row['membership'];    ?>    </td>
                                <td>    <?php   echo $row['joining'];    ?>    </td>
                                <td>    <?php   echo $row['package'];    ?>    </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
        </main>
    </body>
</html>