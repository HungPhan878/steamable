<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'config.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email = new PHPMailer(true);
// var_dump($_POST);die;
if (isset($_POST['action'])) {
   $email = $_POST['email'];
   //   check tồn tại của email
   $sqlCheck = "SELECT EXISTS(SELECT * FROM users WHERE email ='$email') as exid";
   if ($conn->query($sqlCheck)) {
      $result = $conn->query($sqlCheck);
      $row = $result->fetch_assoc();
      if ($row["exid"] == 1) {
         echo " email đã tồn tại, vui lòng thay đổi email khác";
      } else {
         $password = $_POST['password'];
         $otpcode = rand(100000, 999999);

         $sql = "INSERT INTO users (email, password,otpcode, type) VALUES ('$email', '$password' ,'$otpcode', '0')";
         // var_dump($sql);die;
         if ($conn->query($sql)) {
            echo "New user created successfully. ";

            // Gửi email chứa mã OTP
           // Nhớ thêm thư viện PHPMailer
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'phamlenhatminh92@gmail.com'; // Thay bằng email của bạn
            $mail->Password = 'mejigweckrfnymzm'; // Thay bằng mật khẩu ứng dụng
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('noreply@yourdomain.com', 'Your App');
            $mail->addAddress($email,);
            $mail->addAddress('sunflora92612@gmail.com', 'minh');
            $mail->Subject = 'Mã OTP của bạn';
            $mail->Body = "Mã OTP của bạn là: $otpcode";

            if (!$mail->send()) {
               echo 'Lỗi gửi email: ' . $mail->ErrorInfo;
            } else {
               echo 'OTP đã được gửi qua email.';
            }

            // Lưu email vào session để sử dụng khi kiểm tra OTP


            // Chuyển hướng đến trang nhập OTP
            // header("Location: verify_otp.php?email=$email");
            // exit();
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
         mysqli_close($conn);
      }
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_errno($conn);
   }
}
