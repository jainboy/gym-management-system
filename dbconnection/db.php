<?php
$conn = mysqli_connect('localhost', 'root','','table');
if($conn==false)
{
    ?>
    <script>
        alert('connection error');
    </script>
    <?php
}
?>