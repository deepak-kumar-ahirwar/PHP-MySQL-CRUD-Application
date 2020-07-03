<body id="bg">
<?php include 'link.php'; ?>

<form class="container register" action="insert.php" method="POST" name="insert_form">
                <div class="row">
                    <div class="col-md-3 register-left">
                      
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away to  learn free Programming languages</p>
                         <span style="color: black; ">Check the all Registerd student for free programming courses</span>
                         <a href="display.php" ><input type="button" class="btn-left" name="check" value="Check form"/></a>
                    </div>
                    <div class="col-md-9 register-right">
                                <h3 class="register-heading">Apply for free programming language cousres</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name *" name="name" required>
                                             
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" required>
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
                                            <input type="text" class="form-control" placeholder="Qualification *" name="qualification" required>
                                        </div>

                                         <div class="form-group ">
                                            <input type="text" class="form-control " placeholder="College Name" value="" name="college_name" required>
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

                        <input type="submit" class="btnRegister" name="submit" value="Register"  />
                                    </div>
                                </div>
          </div>
                        
</form>
</body>