     <?php
     include 'connection/conn.php';
     include 'connection/session.php';
     
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

////naga check kun may unod or wala ang error nga gina kwa sang GET ok??
//
//     
//if (isset($_GET["error"]) && !empty($_GET["error"])) {
//    //naga check sang value sang error
//    if($_GET['error'] == 1){
//    	$_SESSION['msgs'] = "Invalid Username or Password";
//    }
//    else if($_GET['error'] == 2){
//    	$_SESSION['msgs'] = "Please Login First!";
//    }    
//}else{  
//    echo "";
//}
//if (isset($_GET["logout"]) && !empty($_GET["logout"])) {
//    if($_GET['logout'] == 1){
//    	$_SESSION['msgs'] = "You've been logged out!";
//    }    
//}else{  
//    echo "";
//}
     
     
if(isset($_POST['signin'])){
$username = $_POST['user_name'];
$pass = $_POST['user_pass'];

    $username = stripslashes($username);
    $pass = stripslashes($pass);
    
    $query = "SELECT * FROM user where user_name = '{$username}' and password = SHA1('{$pass}');";
    
   
    $result = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_array($result);
    $total = mysqli_num_rows($result);
    
    $ulevel; 

    if($total > 0){
        $ulevel = $row['user_level'];
        $officeid = $row['office_id'];
        $sql = mysqli_query($conn, "SELECT * FROM office WHERE office_id = {$officeid}");
        $fetch = mysqli_fetch_array($sql);
        $office = $fetch['office_name'];
        $default = $fetch['default'];

            if($ulevel == 1){
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['uname'] =  $row['user_name'];
                $_SESSION['user_level'] = "Administrator";
                $_SESSION['name'] =  $row['name'];
                $_SESSION['address'] =  $row['address'];
                $_SESSION['office_id'] = $row['office_id'];
                $_SESSION['office'] =  $office;
                $_SESSION['default'] =  $default;
                $_SESSION['contact'] =  $row['contact'];
                $_SESSION['date'] =  $row['register'];

                die("<script>alert('Welcome'); location.href = 'admin/dashboard.php';</script>");
                // echo "<script>alert('Welcome')</script>";
                // header('Location: admin/dashboard.php');                
            
           }elseif($ulevel == 2){
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['uname'] =  $row['user_name'];
                $_SESSION['user_level'] = "Office Administrator";
                $_SESSION['name'] =  $row['name'];
                $_SESSION['address'] =  $row['address'];
                $_SESSION['office'] =  $office;
                $_SESSION['office_id'] = $row['office_id'];
                $_SESSION['default'] =  $default;
                $_SESSION['contact'] =  $row['contact'];
                $_SESSION['date'] =  $row['register'];
                 die("<script>alert('Welcome'); location.href = 'office/dashboard.php';</script>");
                // echo "<script>alert('Welcome')</script>";
                //  header('Location: office/dashboard.php');
           }elseif ($ulevel == 3) {
               // $_SESSION['user_level'] = "Viewer";
           }
    }else{
        header('Location: index.php?error=1');
    }
   
}
$conn -> close();



