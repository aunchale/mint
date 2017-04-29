<?php
				require("Class.php");
				require_once('db_connect.php');
					$memberlogin = new Userlogin;
							
							$_query=mysqli_query($conn,"SELECT * from userlogin WHERE username LIKE '".$_POST["username"]."'");
						        $memberlogin->username = $_POST["username"];
								$memberlogin->password = $_POST["password"];
								$memberlogin->memberlogin($conn,$memberlogin,$_query); 
						  
				?>
