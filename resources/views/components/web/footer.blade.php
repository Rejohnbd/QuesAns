<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>About US</h3>
                    </div>
                    <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
                        bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis
                        dis montes.</p>
                    <div class="footer-right">
                        <ul class="footer-links-soi">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Information Link</h3>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Contact Details</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href="mailto:#">info@yoursite.com</a></li>
                        <li><a href="#">www.yoursite.com</a></li>
                        <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                        <li>+61 3 8376 6284</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-center">
                <p class="footer-company-name">All Rights Reserved. &copy; 2020 - {{date('Y')}} <a href="#">Islamic Question Answer</a></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Scan QRCode For Question</h4>
            </div>
            <div class="modal-body customer-box">
                <div class="alert alert-success" id="successWrapper" role="alert" style="display: none;">
                    Question Submited Successfully
                </div>
                <div id="formWrapper">
                    <img src="{{ asset('assets/images/qrcode.png') }}" alt="" class="img-fluid img-rounded">
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>