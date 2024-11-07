<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
</style>

<body style="background-color:#f1f1f1;">
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" id="otpForm">
        Open modal
    </button>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="check_otp.php?email=<?php echo $email; ?>" method="POST">
                        <input type="text" id='emailotp' name="otpemail">  <br>
                        <label for="otpcode">Mã OTP:</label><br>
                        <input type="text" id="otpcode" name="otpcode" required><br><br>

                        <input type="submit" name="verify" value="Xác minh">
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row  justify-content-center align-items-center mt-2">
            <div class="col-md-4">
                <div class="card shadow" style="border-radius: 20px;">
                    <div class="d-flex justify-content-center my-3">
                        <img style=" width: 200px; height: 40px;" src="./images/streamable-logo.png" alt="">
                    </div>
                    <div class=" text-center">
                        <h3>Sign Up</h3>
                        <p class="pt-2">to continue to <strong>Streamable</strong></p>
                    </div>
                    <div class="card-body">
                        <form >

                            <div class="mb-3 custom-hover ">
                                <div class="border d-flex py-2"
                                    style="border-radius: 5px; justify-content: space-around" role="button"
                                    tabindex="0">
                                    <div><img style=" width: 18px; height: 18px;" src="./images/gg-logo.png" alt="">
                                    </div>
                                    <p style="font-size: 14px; margin-bottom: 0px;">Tiếp tục sử dụng dịch vụ từ Google
                                    </p>
                                </div>
                                <style>
                                    .custom-hover:hover {
                                        background-color: #f8faff;
                                    }
                                </style>
                            </div>

                            <div class="mb-3 custom-hover d-flex justify-content-center  ">
                                <div class="border d-flex py-2"
                                    style="border-radius: 5px; justify-content: space-around; align-items: center; width: 290px"
                                    role="button" tabindex="0">
                                    <div><i style="color: #1977f2;" class="bi bi-facebook"></i>
                                    </div>
                                    <p style="font-size: 14px; margin-bottom: 0px;">Continue with Facebook </p>

                                </div>
                                <style>
                                    .custom-hover:hover {
                                        background-color: #f8faff;
                                    }
                                </style>
                            </div>
                            <div class="d-flex align-items-center mb-3" style="color: #cccccc;">
                                <div class="flex-grow-1 border-top"></div>
                                <span class="mx-2">or sign up with email</span>
                                <div class="flex-grow-1 border-top"></div>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Email address" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Password" required>
                            </div>


                            <button type="button" id="signup" class="btn btn-secondary w-100">Sign Up</button>
                        </form>
                    </div>
                    <div class="card-footer text-center py-4 " style="font-size: 14px; color:#9b9b9b;">
                        <p style="margin-bottom: 0;">By continuing, you accept our <a href="#">Terms of Service</a> </p>
                        <p style="margin-bottom: 0;">and acknowledge receipt of our <a href="#">Privacy Policy</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  ">
        <div class="d-flex justify-content-center">
            <div class="d-flex pt-3" style="align-items: flex-start; font-size: 14px;">
                <p style="color:#9b9b9b;margin-bottom: 0;">Already have an account?</p>
                <button style="border: none; background-color:#f1f1f1;color: #555555;" type="button"><b
                        class="custom-hover">Log in</b></button>
            </div>
            <style>
                .custom-hover:hover {
                    color: black;
                    background-color: #f1f1f1
                }
            </style>

        </div>
    </div>

    <!-- Button trigger modal -->

    <script>
        $(document).ready(function() {
            $('#signup').click(function() {
                var email = $('#email').val();
                var password = $('#password').val();
                var otpcode = $('#otpcode').val();
                

                $.ajax({
                    type: "post",
                    data: {
                        'email': email,
                        'password': password,
                        'otpcode': otpcode,
                        'action': 'signup',
                    },
                    url: 'regisbyemail.php',
                    dataType: 'text',
                    success: function(data) {
                        console.log(data);
                        $('#otpForm').click()
                        $('#emailotp').val(email)
                        if (data === 'success') {
                            alert('sign up successfull');
                            $('#otpForm').modal('show');
                        } else {
                            alert('sign up failed: ' + data);
                        }
                    }
                })
            })

        })
    </script>
</body>

</html>