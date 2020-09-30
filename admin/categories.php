<?php
include './sidebar2.php';  ?>

<div class="description">
                        <form method="post" action="categories.php" style="border:1px solid #ccc">
                            <div class="container">
                              <h1>Add Member</h1>
                              <p>Fill The Data Feilds..</p>
                              <hr>                         
                              <label><b>Name</b></label>
                              <input type="text" placeholder="Enter name" name="mname" required>                                         
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
                                  <label><b>membership</b></label>
                                  <select name="membership">
                                    <option>Select</option>
                                    <option value="3month">3 months</option>
                                    <option value="6month">6 months</option>
                                    <option value="1year">1 year</option>
                                  </select>  
                                  <label><b>Package</b></label>
                                  <select name="pack">
                                    <option>Select</option>
                                    <option value="silver">Silver</option>
                                    <option value="gold">Gold</option>
                                    <option value="platinum">Platinium</option>
                                  </select>                                       
                              <label><b>Joining Date</b></label>
                              <input type="date" placeholder="Enter Joining Date" name="joining" required>
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

  $name= $_POST['mname'];
  $email= $_POST['email'];
  $mobile= $_POST['mobile'];
  $address= $_POST['address'];
  $gender= $_POST['gender'];
  $membership= $_POST['membership'];
  $package= $_POST['pack'];
  $joining= $_POST['joining'];

  $query="INSERT INTO `member`(`name`, `email`, `mobile`, `address`, `gender`, `membership`, `package`, `joining`) VALUES ('$name','$email','$mobile','$address','$gender','$membership','$package','$joining')";
  $run=mysqli_query($conn,$query);

  if($run==true)
  {
    ?>
      <script>
        alert('member data insert successfully');
      </script>
      <?php
  }
  else
  {
    ?>
      <script>
        alert('member data error');
      </script>
      <?php
  }
}
?>