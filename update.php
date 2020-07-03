<body id="bg">
<?php include 'link.php'; ?>

<?php
include 'conn.php' ; 
$ids= $_GET['id'];
$list="select * from course_form where sn={$ids} ";
$query= mysqli_query($conn,$list);
$res=mysqli_fetch_array($query); 


if(isset($_POST['submit']))
{
$snupdate=$_GET['id'];
$name = $_POST['name']; 
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender= $_POST['gender'];
$qualification =$_POST['qualification'];
$college= $_POST['college_name'];
$language=$_POST['language'];


$update= "UPDATE course_form SET sn=$snupdate, name='$name',email='$email' , phone='$phone' , gender ='$gender' , qualification = '$qualification' , college='$college',language='$language' WHERE sn=$snupdate " ;
$result=mysqli_query($conn,$update);
mysqli_close($conn);
header('location:display.php');
}
?>
<form class="container register" action="" method="POST">
	<a href="index.php"><input class="btn btn-primary" style="margin-bottom: 1%;" type="button" value="Home"></a>
                <div class="row">
                    <div class="col-md-3 register-left">
                      
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from learn free Programming languages</p>
                         <span style="color: black; ">Check the all Registerd student for free programming courses</span>
                         <a href="display.php" ><input type="button" class="btn-left" name="check" value="check form"/></a>
                    </div>
                    <div class="col-md-9 register-right">
                                <h3 class="register-heading">Update details for free programming language cousres</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name *" name="name" value="<?php  echo $res['name']; ?>" />
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email" value="<?php  echo $res['email']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="<?php  echo $res['phone']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl" >
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" >
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Qualification *" name="qualification"  value="<?php  echo $res['qualification']; ?> " />
                                        </div>

                                         <div class="form-group ">
                                            <input type="text" class="form-control " placeholder="College Name"  name="college_name" value="<?php 
                                             echo $res['college']; ?>"  />
                                        </div>
                                        <div class="form-group ">
                                            <select class="form-control" name="language">
                                                <option class="hidden" value="" selected disabled>Select Programming Language</option>
                                                <option value="c">c</option>
                                                <option value="c++">c++</option>
                                                <option value="java">java</option>
                                                <option value="python">python</option>
                                                <option value="php">php</option>
                                                <option value="javascript">javascript</option>
                                            </select>
                                        </div>
                                       
                                        <input type="submit" class="btnRegister" name="submit" value="update" onclick="return validateForm()" />
                                    </div>
                                </div>
          </div>
                        
</form>
</body>