<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'config.php';
// var_dump($_POST);die;
if (isset($_POST["action"])) {
    // var_dump(isset($_POST["action"]));die;
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT email,  password , type FROM users WHERE email = '$email'";
    // var_dump($query);die;
    $result = mysqli_query($conn, $query);
    // var_dump($result);die;
    if ($conn->field_count > 0) {
        $row = mysqli_fetch_array($result);


        // var_dump($_POST,$row,$pass);die;
        // var_dump($row,$password);die;
        if ($password == $row['password']) {  // so sánh pass mình nhập vs pass row trong database
            $type = $row['type'];
            // var_dump($row, $type);die;
            // Lưu tên đăng nhập
            //type=1
            if ($type == '1') {
                $_SESSION['email'] = $email;
                // var_dump($_SESSION);die;
                echo "Xin chào <b>" . $email . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
                setcookie("TestCookie", $email, time() + 3600);
            } else {
                echo "gửi lại OTP";
                

                //     "<form action='check_otp.php' method='POST'>
                //     <label for='email'>Nhập email của bạn để nhận lại mã OTP:</label><br>
                //     <input type='email' id='email' name='email' required><br><br>
                //     <input type='submit' value='Lấy lại OTP'>
                //   </form>";
            }



            
        } else {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
    } else {
        echo 'Tên đăng nhập hoặc mật khẩu không đúng!';
    }
    $conn->close();
}
