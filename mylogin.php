<?php
//contribute by Chinmaya Kumar Biswal
    $conn =mysqli_connect('localhost','root','','regd');
    if(isset($_POST['inlog']))
        {
            //$user=$_POST['inmail'];
            //$pwd=$_POST['inpass'];
            $user=mysqli_real_escape_string($conn, $_POST['inmail']);
            $spwd=mysqli_real_escape_string($conn, $_POST['inpass']);
        
            $pwd= md5($spwd);
        
            $query="SELECT * FROM user WHERE email='$user' && password='$pwd'";
            $data=mysqli_query($conn, $query);
            $total=mysqli_num_rows($data);
            if($total==1)
            {
                header('location:video.html');  
            }
            else
            {
                header('location:error.html');
            }
        }







              if(isset($_POST['sain']))
              {
                 
                  $email=mysqli_real_escape_string($conn, $_POST['samail']);
                  $spassword=mysqli_real_escape_string($conn, $_POST['sapass']);
                  $scpassword=mysqli_real_escape_string($conn, $_POST['newpass']);

                  $password= md5($spassword);
                  $cpassword=md5($scpassword);

                  $emailquery= "SELECT * FROM user WHERE email='$email' ";
                  $inquery=mysqli_query($conn, $emailquery);
                  $emailcount=mysqli_num_rows($inquery);
                  
                  if($emailcount>0)
                  {
                      ?>
                            <script>
                                alert("Email already exist");
                            </script>
                        <?php
                  }
                  else
                  {
                      if($password === $cpassword)
                      {
                          $insertquery= " insert into user (email,password,newpassword) values('$email', '$password', '$cpassword')";
                          $iquery=mysqli_query($conn,$insertquery);
                          if($iquery)
                            {
                             
                                ?>
                                  <script>
                                      alert("Inserted Successful");
                                  </script>
                                <?php
                            }
                            else
                            {
                                ?>
                                  <script>
                                      alert("Connection Faild Error. Please contact us using whatsapp or any social address so we can solve it");
                                  </script>
                                <?php
                            }
                          
                      }
                      else
                      {
                          ?>
                            <script>
                                alert("Password Doesnot Match");
                            </script>
                        <?php
                      }
                  }
              }
			  if(isset($_POST['feedbtn']))
			  {
				  //$first=$_POST['fir'];
				  //$last=$_POST['las'];
				  //$emailid=$_POST['ema'];
                 		  //$phone=$_POST['pho'];
				  //$msg=$_POST['mess'];
                  
                  $first=mysqli_real_escape_string($conn, $_POST['fir']);
                  $last=mysqli_real_escape_string($conn, $_POST['las']);
                  $emailid=mysqli_real_escape_string($conn, $_POST['ema']);
                  $phone=mysqli_real_escape_string($conn, $_POST['pho']);
                  $msg=mysqli_real_escape_string($conn, $_POST['mess']);
                  
                  
				  $inquery= " insert into feed (FN,LN,Mail,PN,MS) values('$first', '$last', '$emailid', '$phone', '$msg')";
                  $query=mysqli_query($conn,$inquery);
				   if($query)
                            {
                             
                                ?>
                                  <script>
                                      alert("Inserted Successful");
                                  </script>
                                <?php
							}
							else
							  {
								 ?>
											<script>
												alert("Database errorssss");
											</script>
										<?php  
							  }
			 }  
              

?>
