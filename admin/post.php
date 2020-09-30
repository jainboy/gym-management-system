<?php
include './sidebar2.php';  ?>

                    <div class="description">
                        <form method="post" enctype="multipart/form-data" action="post.php" style="border:1px solid #ccc">
                            <div class="container">
                              <h1>Add Equipment Data</h1>
                              <p>Fill The Data Feilds..</p>
                              <hr>                         
                              <label><b>Equipment Name</b></label>
                              <input type="text" placeholder="Enter Equipment Name" name="equipment" required>
                          
                              <label><b>Issuer Name</b></label>
                              <input type="text" placeholder="Enter Issuer Name" name="issuer" required>

                              <label><b>Import Date</b></label>
                              <input type="date" name="import" required>
                          
                              <label><b>Condition</b></label>
                                <select name="condition">
                                    <option>Select</option>
                                    <option value="exellent">exellent</option>
                                    <option value="good">good</option>
                                    <option value="bad">bad</option>
                                  </select>    

                              <label><b>Remark</b></label>
                              <textarea  name="remark" required></textarea>

                              <label><b>price</b></label>
                              <input type="text" placeholder="Enter price" name="price" required>
                             
                              <label><b>Using Date</b></label>
                              <input type="date" name="usedate" required>

                                <button type="submit" class="published" name="published">Published</button>
                            </div>
                        </form>
                    </div>
                </div>
        </main>
    </body>
</html>

<?php

if(isset($_POST['published']))
{

  include('../dbconnection/db.php');
  $equipment= $_POST['equipment'];
  $issuer= $_POST['issuer'];
  $import= $_POST['import'];
  $condition= $_POST['condition'];
  $remark= $_POST['remark'];
  $price= $_POST['price'];
  $udate= $_POST['usedate'];
 


  $query="INSERT INTO `equipment`(`equipment`, `issuer`, `importer`, `condition`, `remark`, `price`, `udate`) VALUES ('$equipment','$issuer','$import','$condition','$remark','$price','$udate')";
  $run=mysqli_query($conn,$query);

  if($run==true)
  {
    ?>
      <script>
        alert('Equipment Details insert successfully');
      </script>
      <?php
  }
  else
  {
    ?>
      <script>
        alert('Equipment Details insert UNSUCCESSFUL');
      </script>
      <?php
  }
}
?>