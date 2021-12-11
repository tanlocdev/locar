<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Locars - Website cho thuê xe</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/logo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>

    <!-- Start Switcher -->

    <!-- /Switcher -->

    <!--Header-->
    <?php include('includes/header.php'); ?>
    <!-- /Header -->

    <!--Page Header-->
    <section class="page-header listing_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1><b>FAQs</b></h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li>FAQs</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->
    <p></p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center" style="center">
                <!-- Nav tabs category -->

                <div class="text-center" style= "width: 60%; margin:0px auto ;">
                    <ul class="nav nav-tabs faq-cat-tabs text-center">
                        <li class="active"><a href="#faq-cat-1" data-toggle="tab">&ensp; Khách &ensp;</a></li>
                        <li><a href="#faq-cat-2" data-toggle="tab">&ensp; Thành viên &ensp;</a></li>
                        <li><a href="#faq-cat-3" data-toggle="tab">&ensp; Chủ xe &ensp;</a></li>
                    </ul>
                </div>

                <br>

                <!-- Tab panes -->
                <div class="tab-content faq-cat-content">
                    <div class="tab-pane active in fade" id="faq-cat-1">
                        <div class="panel-group" id="accordion-cat-1">
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-1">
                                        <h4 class="panel-title">
                                            Làm thế nào để tôi trả tiền thuê xe của tôi?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-1" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        Locars - Cho thuê xe sẵn sàng chấp nhận Mastercard và Visa. Kiểm tra cá nhân trên thông tin thuê của bạn. Tại thời điểm này, chúng tôi muốn khuyên rằng kiểm tra cá nhân không được chấp nhận tại địa phương </div>
                                </div>
                            </div>
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-2">
                                        <h4 class="panel-title">
                                            Điều gì sẽ xảy ra nếu tôi tìm thấy một mức giá tốt hơn cho một chiếc xe cho thuê hiện tại?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-2" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        Một trong nhiều điều tuyệt vời về cho thuê xe là giá thuê và dịch vụ của chúng tôi được đảm bảo là tốt nhất trong ngành. Nếu bạn gặp một mức giá thấp hơn từ một đối thủ cạnh tranh và tỷ lệ là trên một chiếc xe tương đương bao gồm các điều khoản, địa điểm và phí thuê xe tương tự, chúng tôi sẽ rất vui khi giảm giá cho bạn. Vui lòng hoàn thành mẫu Tỷ lệ tốt nhất được đảm bảo của chúng tôi nếu bạn đã tìm thấy tỷ lệ tốt hơn với một trong những đối thủ cạnh tranh của chúng tôi. </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-3">
                                        <h4 class="panel-title">
                                            Tôi có cần giấy phép lái xe để thuê xe không?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-3" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        Giấy phép lái xe là rất cần thiết vì chúng tôi cần giữ giấy phép lái xe của khách hàng để làm vật thế chấp, phòng trường hợp khách hàng phá vỡ hợp đồng, chúng tôi có đủ cơ sở để làm thử tục pháp lý. </div>
                                </div>
                            </div>


                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-4">
                                        <h4 class="panel-title">
                                            Có khoản phí nào không nếu tôi trả lại xe sau ngày đáo hạn? <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-4" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        Có, chúng tôi tính phí 50%/ ngày thuê trước 12h:00 am ngày hôm sau của ngày đáo hạn và 100%/ ngày thuê sau 12h00 am ngày hôm sau ngày đáo hạn và tương tự những ngày tiếp theo.
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="faq-cat-2">
                        <div class="panel-group" id="accordion-cat-2">
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-1">
                                        <h4 class="panel-title">
                                            Tại sao tôi phải đăng ký?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-2-sub-1" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        Khi bạn đăng ký trở thành thành viên trên trang web của chúng tôi, bạn sẽ có thể tiết kiệm thời gian điền yêu cầu. Khi bạn đã tham gia và đăng nhập, mỗi khi bạn gửi cho chúng tôi yêu cầu, chúng tôi sẽ điền trước mẫu đơn gửi bằng thông tin cá nhân của bạn để bạn không phải nhập những thứ tương tự lặp đi lặp lại. Chúng tôi cũng cung cấp cho bạn cơ hội đăng ký nhận bản tin email của chúng tôi, điều này sẽ giúp bạn cập nhật các ưu đãi và đặc biệt mới nhất mà chúng tôi cung cấp. </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-2">
                                        <h4 class="panel-title">
                                            Làm thế nào để trở thành thành viên?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-2-sub-2" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        Có hai cách để đăng ký. Bạn có thể đi trực tiếp vào mẫu đăng ký của chúng tôi hoặc bạn chỉ cần hoàn thành yêu cầu như bình thường. Sau khi bạn gửi yêu cầu đó, bạn sẽ có cơ hội đăng ký. Nếu bạn chọn làm như vậy, khi bạn vào mẫu đăng ký, thông tin bạn cung cấp cho yêu cầu của bạn sẽ được điền sẵn vào mẫu đăng ký. </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-3">
                                        <h4 class="panel-title">
                                            Làm thế nào để đăng nhập?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-2-sub-3" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        Sau khi bạn đăng ký, chúng tôi sẽ hướng dẫn bạn đến màn hình đăng nhập. Khi bạn đăng nhập, bạn sẽ thấy một thanh nhỏ ở góc trên bên phải của màn hình chào đón bạn trang web của chúng tôi. Nếu bạn đã thiết lập tài khoản nhưng đã đăng xuất, bạn có thể nhấp vào nút 'Đăng nhập' trên thanh menu của chúng tôi đưa bạn đến trang đăng nhập của chúng tôi hoặc, nếu bạn ở trên trang chủ của chúng tôi, bạn có thể sử dụng khu vực đăng nhập trên đó. </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-4">
                                        <h4 class="panel-title">
                                            Còn sự riêng tư của tôi thì sao?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-2-sub-4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sự riêng tư của bạn rất quan trọng đối với chúng tôi. Miễn là bạn không chia sẻ tên thành viên và mật khẩu của mình với người khác, không ai có thể xem hoặc chỉnh sửa thông tin cá nhân của bạn. Để biết thêm thông tin, vui lòng đọc chính sách bảo mật của chúng tôi. </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-5">
                                        <h4 class="panel-title">
                                            Thông tin thẻ tín dụng của tôi có được lưu trữ trong tài khoản của tôi không?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-2-sub-5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Chúng tôi không lưu trữ bất kỳ thông tin thẻ tín dụng nào trong tài khoản của bạn.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq-cat-3">
                        <div class="panel-group" id="accordion-cat-3">
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-1">
                                        <h4 class="panel-title">
                                        
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-3-sub-1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-1">
                                        <h4 class="panel-title">
                                            FAQ Item Category #3
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-3-sub-1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-1">
                                        <h4 class="panel-title">
                                            FAQ Item Category #3
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-3-sub-1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-1">
                                        <h4 class="panel-title">
                                            FAQ Item Category #3
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-3-sub-1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-3" href="#faq-cat-3-sub-2">
                                        <h4 class="panel-title">
                                            FAQ Item Category #3
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-3-sub-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   



    <!--Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->

    <!--Login-Form -->
    <?php include('includes/login.php'); ?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php'); ?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php'); ?>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <!--Switcher-->
    <script src="assets/switcher/js/switcher.js"></script>
    <!--bootstrap-slider-JS-->
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>