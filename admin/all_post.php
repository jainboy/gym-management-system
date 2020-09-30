<?php
include './sidebar2.php';  ?>

<div class="description">
                        <h2>All Categories</h2>
                        <table  id="table_design">
                           <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Import Date</th>
                                <th>Price</th>
                                <th>Use date</th>
                            </tr>
                            <?php
                            include('../dbconnection/db.php');
                            $query=mysqli_query($conn,"SELECT * FROM `equipment`");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td>    <?php   echo $row['id'];    ?>  </td>
                                <td>    <?php   echo $row['equipment'];    ?>  </td>
                                <td>    <?php   echo $row['importer'];    ?>  </td>
                                <td>    <?php   echo $row['price'];    ?>  </td>
                                <td>    <?php   echo $row['udate'];    ?>  </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
        </main>
    </body>
</html>