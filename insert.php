
<?php
include 'conn.php' ;
$nameErr;
if(isset($_POST['submit']))
{
if(empty($_POST['name'])){
$nameErr="please fill your name";

}else
{
$name=$_POST['name'];	
}

$qualification =$_POST['qualification'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender= $_POST['gender'];
$college_name= $_POST['college_name'];
$lanuguage= $_POST['lanuguage'];

$data= "insert into course_form( name,email,phone, gender,qualification, college, language) values (
  '$name','$email','$phone','$gender','$qualification','$college_name','$lanuguage')" ;
$result=mysqli_query($conn,$data);
if($result)
        {
            ?>
            <script>
            alert("registeration complete")
            </script>
            <?php
        }
  else
        {
          ?>
          <script>
          alert("registeration incomplete")
          </script>
        <?php 

        }

}
mysqli_close($conn);
header('location:display.php');
?>
