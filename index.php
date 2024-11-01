<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>

<body>
<div class="header container sticky">
        <div class="logo-menu">
            <div class="logo-streamable"><img src="./img/logo.JPG" alt="Logo" height="40"></div>
            <nav class="menu-header navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#">Tools</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          
                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tools</a>
                                <ul class="dropdown-menu vw-100 position-absolute bottom-0 start-50 translate-middle-x border-0 " aria-labelledby="navbarDropdown">
                                    <div class="menu-detail-mobile">
                                        <ul class="menu-1-mobile list-unstyled">
                                            <li><strong>Upload</strong></li>
                                            <li><p>Upload video</p></li>
                                            <li><p>Clip from URL</p></li>
                                            <li><p>Backup video</p></li>
                                        </ul>
                                        <ul class="menu-1-mobile list-unstyled">
                                            <li><strong>Edit</strong></li>
                                            <li><p>Crop video</p></li>
                                            <li><p>Mute video</p></li>
                                            <li><p>Merge video</p></li>
                                            <li><p>Trim video</p></li>
                                            <li><p>Rotate video</p></li>
                                            <li><p>Compress video</p></li>
                                        </ul>
                                        <ul class="menu-1-mobile list-unstyled">
                                            <li><strong>Manage</strong></li>
                                            <li><p>Simple video manager</p></li>
                                            <li><p>Video privacy</p></li>
                                            <li><p>Password protected video</p></li>
                                        </ul>
                                        <ul class="menu-1-mobile list-unstyled">
                                            <li><strong>Share</strong></li>
                                            <li><p>Share video link</p></li>
                                            <li><p>Send multiple videos</p></li>
                                            <li><p>Embed video</p></li>
                                            <li><p>Download video</p></li>
                                            <li><p>Ad free video player</p></li>
                                        </ul>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Princing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Log in</a>
                            </li>
                           
                        </ul>
                        <button type="button" class="btn btn-primary">Sign up for free</button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- <div class="logo-menu-mobile none-computer">
        <div class="logo-head ">
            <div class="lg-h"><img src="./img/Capture-logo.JPG" alt=""></div>
        </div>
        <div class="btn-group bt-h">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"></a>

                    <div class="tools-button-mobile">
                        <div class="t-bt-tools">
                            <span>Tools</span>
                            <div class="arrow d-flex">
                                <div class="arrow-down">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                                <div class="arrow-up">
                                    <i class="fa-solid fa-chevron-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="tools-menu-mobile  ">
                            <div class="menu-detail-mobile ">
                                <ul class="menu-1-mobile">
                                    <li><strong>Upload</strong></li>
                                    <li>
                                        <p>Upload video</p>
                                    </li>
                                    <li>
                                        <p>Clip from URL</p>
                                    </li>
                                    <li>
                                        <p>Backup video</p>
                                    </li>
                                </ul>
                                <ul class="menu-1-mobile">
                                    <li><strong>Edit</strong></li>
                                    <li>
                                        <p>Crop video</p>
                                    </li>
                                    <li>
                                        <p>Mute video</p>
                                    </li>
                                    <li>
                                        <p>Merge video</p>
                                    </li>
                                    <li>
                                        <p>Trim video</p>
                                    </li>
                                    <li>
                                        <p>Rotate video</p>
                                    </li>
                                    <li>
                                        <p>Compress video</p>
                                    </li>
                                </ul>
                                <ul class="menu-1-mobile">
                                    <li><strong>Manage</strong></li>
                                    <li>
                                        <p>Simple video manager</p>
                                    </li>
                                    <li>
                                        <p>Video privacy</p>
                                    </li>
                                    <li>
                                        <p>Password protected video</p>
                                    </li>
                                </ul>
                                <ul class="menu-1-mobile">
                                    <li><strong>Share</strong></li>
                                    <li>
                                        <p>Share video link</p>
                                    </li>
                                    <li>
                                        <p>Send multiple videos</p>
                                    </li>
                                    <li>
                                        <p>Embed video</p>
                                    </li>
                                    <li>
                                        <p>Download video</p>
                                    </li>
                                    <li>
                                        <p>Ad free video player</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </li>
                <li><a class="dropdown-item" href="#">Princing</a></li>
                <li><a class="dropdown-item" href="#">Blog</a></li>
                <li><a class="dropdown-item" href="#">Log in</a></li>
                <div>
                    <button type="button" class="btn btn-primary bt-h2">Sign up for free</button>
                </div>


            </ul>
        </div>


    </div> -->

    <div class="head-rela">

        <div class="vector-4 none-moblie">
            <img src="./img/vector4.svg" alt="">

        </div>
        <div class="body-1 container-1">
            <h1>Video hosting made easy</h1>
            <h4>
                Join thousands of businesses and creators who trust Streamable to upload and share their videos.
            </h4>
        </div>
        <div class="vector-7 none-moblie">
            <img src="./img/vector7.svg" alt="">
        </div>
    </div>
    <div class="slide-big">
        <div class="slidevideo none-moblie">
            <div class="wrapper">
                <div class="track">
                    <div class="logo">
                        <video autoplay playsinline>
                            <source src="./img/vid1.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid2.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid3.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid4.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid5.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid6.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid7.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid8.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay playsinline>
                            <source src="./img/vid1.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid2.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid3.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid4.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid5.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid6.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid7.mp4">
                        </video>
                    </div>
                    <div class="logo">
                        <video autoplay autoplay muted>
                            <source src="./img/vid8.mp4">
                        </video>
                    </div>

                </div>
            </div>


        </div>
        <div class="form-on container-1">
            <h4>Select Videos to upload</h4>
            <p>Or drag and drop video files </p>
            <form id="uploadForm" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" accept="video/*" required>
                <button type="button" id="uploadBtn" class="btn btn-primary btbig">Upload Video For Free</button>
            </form>
            <h5>*No credit card or account required </i></h5>
            <div class="form-sp"><span>By continuing, you accept our <a href="">Terms of Sevice</a> and acknowledge receipt our <a href=""> Privacy Policy</a> </span></div>

        </div>

    </div>
    <DIV class="logo-rela container">
        <div class="URL-logo container-1">
            <div class="URL">
                <span>Want to upload a video link? <u>Clip from URL</u></span>
            </div>


        </div>
        <div class="logo-5 container-1 none-moblie">
            <div><img src="./img/image.png" alt=""></div>
            <div><img src="./img/image5.png" alt=""></div>
            <div><img src="./img/image2.png" alt=""></div>
            <div><img src="./img/image3.png" alt=""></div>
            <div><img src="./img/image4.png" alt=""></div>
        </div>
        <div class="logo-5-mobile container-1 none-computer">
            <div class="logo-m-1">
                <div><img src="./img/image2.png" alt=""></div>
                <div><img src="./img/image5.png" alt=""></div>
            </div>
            <div class="logo-m-2">
                <div><img src="./img/image.png" alt=""></div>

                <div><img src="./img/image3.png" alt=""></div>
            </div>
            <div class="logo-m-3"><img src="./img/image4.png" alt=""></div>
        </div>
        <div class="vector-5 none-moblie">
            <img src="./img/vector5.svg" alt="">
        </div>
        <div class="gif-vect container-1">
            <div class="vector-6 none-moblie">
                <img src="./img/vector6.svg" alt="">
            </div>
            <div class="content-gif">
                <div class="img-g"><img src="./img/upload-GIF.gif" alt=""></div>
                <div class="ct">
                    <h1>Upload and share your videos instantly</h1>
                    <span>The fastest video uploader on the web — don't take our word for it, try it! After your videos are uploaded, stream in 4K UHD (60fps). No home theater necessary.</span>
                </div>
            </div>
            <div class="content-gif2">

                <div class="ct2">
                    <h1>Video editing that gets out of your way</h1>
                    <span>With one-click resizing to landscape, square, or vertical formats, you can get back hours of time while creating videos for every platform and channel.</span>
                </div>
                <div class="img-g2"><img src="./img/edit-animation-compressed-v2.gif" alt=""></div>
            </div>
        </div>

    </DIV>
    <div class="body-b container">
        <div class="b-content">
            <h1>Streamable is loved by over 50 million users and customers from 122 countries</h1>
        </div>

    </div>
    <div class="body-c container">
        <div class="table">
            <div class="tab-sp">
                <span>I love it when a web tool provides a simple service seamlessly. @streamable is a super clean #video publishing tool. Host a vid with no surrounding noise but the logo. Embed tool as well. Great place to host and share a video.</span>
            </div>
            <div class="ava">
                <div class="ava-r"><img src="./img/danny.jpg" alt=""></div>
                <div>
                    <p>Danny McLellan <br>

                        VP Events at Twitter</p>
                </div>
            </div>

        </div>
        <div class="table ">
            <div class="tab-sp"><SPan>Shoutout to @streamable for being so good at converting videos, else I would not have any awesome plays of the game to share with my server members!</SPan></div>
            <div class="ava">
                <div class="ava-r"><img src="./img/uponia.png" alt=""></div>
                <div>
                    <p>Danny McLellan <br>

                        VP Events at Twitter</p>
                </div>
            </div>
        </div>


    </div>

    </div>
    <div class="footer">
        <div class="content-f container-1">
            <h1>Get started for free</h1>
            <h4>Upload and share your first video with Streamable today.</h4>
            <div class="vector-8 ">
                <img src="./img/vector8.svg" alt="">
                <div>
                    <button type="button" class="btn btn-primary bt-foot">Sign up for free</button>
                </div>
            </div>
        </div>


    </div>
    <div class="menu-f container-1">
        <div class="com-pro">
            <div class="com">
                <span><b>Company</b></span>
                <p>Blog</p>
                <p>Privacy</p>
                <p>Terms</p>
                <p>Community guidelines</p>
                <p>Law Enforcement guidelines</p>
                <p>Transparency Report</p>
            </div>
            <div class="com">
                <span><b>Product</b></span>
                <p>Pricing</p>
                <p>Log in</p>
                <p>Sign up</p>
            </div>
        </div>
        <div class="com-pro">
            <div class="com"><span><b>Tools</b></span>
                <p> Upload video</p>
                <p>Clip from URL</p>
                <p>Simple video manager</p>
                <p>Backup video</p>
                <p>Crop video</p>
                <p>Mute video</p>
                <p>Merge video</p>
                <p>Trim video</p>
                <p>Rotate video</p>
                <p>Compress video</p>
                <p>Share video link</p>
                <p>Send multiple videos</p>
                <p>Embed video</p>
                <p>Download video</p>
                <p>Video privacy</p>
                <p>Password protected video</p>
                <p>Ad free video player</p>
            </div>

        </div>
        <div class="com-pro">
            <div class="com">
                <span><b>Support</b></span>
                <p>Help center</p>
                <p>Contact</p>
            </div>
        </div>

    </div>
    </div>
    </div>

    <script>
        document.querySelector('.tools-button').addEventListener('click', function() {
            this.classList.toggle('active');
        });
        document.addEventListener('DOMContentLoaded', () => {
            const toolsButton = document.querySelector('.tools-button-mobile');
            const toolsMenu = document.querySelector('.tools-menu-mobile');

            toolsButton.addEventListener('click', () => {
                toolsButton.classList.toggle('active'); // Chuyển đổi class active
            });
        });
    </script>

</body>

</html>