<?php
include './sidebar2.php';  ?>

<div class="description">
                        <form method="post" action="faculty.php" style="border:1px solid #ccc">
                            <div class="container">
                              <h1>Add Member</h1>
                              <p>Fill The Data Feilds..</p>
                              <hr>                         
                              <label><b>Name</b></label>
                              <input type="text" placeholder="Enter name" name="name" required>  
                              <label><b>Salery</b></label>
                              <input type="text" placeholder="Enter Salery" name="salery" required>                                       
                              <label><b>Email</b></label>
                              <input type="text" placeholder="Enter email" name="email" required>
                              <label><b>Mobile</b></label>
                              <input type="text" placeholder="Enter Mobile no" name="mobile" required>                                         
                              <label><b>Address</b></label>
                              <input type="text" placeholder="Enter address" name="address" required>
                              <label><b>Gender</b></label>
                                  <select name="gender">
                                    <option>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                  </select>    
                                  <label><b>Shift Time</b></label>
                                  <select name="shift">
                                    <option>Select</option>
                                    <option value="morning">5am-10am</option>
                                    <option value="evening">5pm-10pm</option>                                  
                                  </select>  
                                <button type="submit" class="published" name="published">Add</button>
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

  $name= $_POST['name'];
  $salery= $_POST['salery'];
  $email= $_POST['email'];
  $mobile= $_POST['mobile'];
  $address= $_POST['address'];
  $gender= $_POST['gender'];
  $shift= $_POST['shift'];

  $query="INSERT INTO `faculity`(`name`, `email`, `mobile`, `gender`, `address`, `salery`, `shift`) VALUES ('$name','$email','$mobile','$gender','$address','$salery','$shift')";
  $run=mysqli_query($conn,$query);

  if($run==true)
  {
    ?>
      <script>
        alert('faculity data insert successfully');
      </script>
      <?php
  }
  else
  {
    ?>
      <script>
        alert('faculity data unsuccessful');
      </script>
      <?php
  }
}
?>