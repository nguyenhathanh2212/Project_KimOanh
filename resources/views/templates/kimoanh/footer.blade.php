            <footer>
                <div class="footer-top">
                    <div class='socical Module Module-158'>
                        <div class='ModuleContent'>
                            <div class="social">
                                <a href="#!">
                                    <em class="fa fa-facebook" aria-hidden="true"></em>
                                </a>
                                <a href="#!">
                                    <em class="fa fa-twitter" aria-hidden="true"></em>
                                </a>
                                <a href="#!">
                                    <em class="fa fa-youtube-play" aria-hidden="true"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-5 col-xl-6">
                                <div class='footer-col Module Module-139'>
                                    <div class='ModuleContent'>
                                        <div class="footer-title">{{$contract->name}}</div>
                                        <div class="about-us">
                                            <ul>
                                                <li>{{$contract->address}}</li>
                                                <li>Tel: <a href="tel:{{$contract->hotline}}">{{$contract->hotline}}</a></li>
                                                <li>Email: <a href="mailto:info@ {{$contract->email}}">{{$contract->email}}</a></li>
                                                <li>Hotline: <a href="tel:{{$contract->phone}}">{{$contract->phone}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-xl-4">
                                <div class="footer-col">
                                    <div class='subscribe-wrap Module Module-166'>
                                        <div class='ModuleContent'>
                                            <div id="ctl00_FormDangKy_ctl00_pnlFormWizard">
                                                <div id="ctl00_FormDangKy_ctl00_pnlForm" class="wrap-form">      
                                                    <h2 class="module-title">Đăng ký nhận bản tin</h2>
                                                    <div id="ctl00_FormDangKy_ctl00_pnlQuestions">
                                                        <div class="form-group qtext require ">
                                                            <input name="ctl00$FormDangKy$ctl00$ctlde277e6605224e1c8cb1d9b3d53c2234$txtde277e6605224e1c8cb1d9b3d53c2234" type="text" id="ctl00_FormDangKy_ctl00_ctlde277e6605224e1c8cb1d9b3d53c2234_txtde277e6605224e1c8cb1d9b3d53c2234" placeholder="Tên (*)" />
                                                        </div>
                                                        <div class="form-group qtext require ">
                                                            <input name="ctl00$FormDangKy$ctl00$ctl42e2482b7de04225a162a5e4798990b9$txt42e2482b7de04225a162a5e4798990b9" type="text" id="ctl00_FormDangKy_ctl00_ctl42e2482b7de04225a162a5e4798990b9_txt42e2482b7de04225a162a5e4798990b9" placeholder="Số điện thoại (*)" />
                                                        </div>
                                                        <div class="form-group qtext require ">
                                                            <input name="ctl00$FormDangKy$ctl00$ctl7a2c20d52df64f8ca54cc51a29d30f43$txt7a2c20d52df64f8ca54cc51a29d30f43" type="text" size="30" id="ctl00_FormDangKy_ctl00_ctl7a2c20d52df64f8ca54cc51a29d30f43_txt7a2c20d52df64f8ca54cc51a29d30f43" placeholder="Email (*)" />
                                                        </div>
                                                    </div>
                                                    <div id="ctl00_FormDangKy_ctl00_up1" style="display:none;">
                                                        <img src='{{ config('setting.folder_image_public') }}/indicator1.gif' alt='' />
                                                    </div>
                                                    <div class="form-group frm-btnwrap">
                                                        <label class="label">&nbsp;</label>
                                                        <div class="frm-btn">
                                                            <input type="submit" name="ctl00$FormDangKy$ctl00$btnSubmit" value="Gửi" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$FormDangKy$ctl00$btnSubmit&quot;, &quot;&quot;, true, &quot;formwizard103d8dda-de3f-4d16-a764-8e816463c930&quot;, &quot;&quot;, false, false))" id="ctl00_FormDangKy_ctl00_btnSubmit" class="btn btn-default frm-btn-submit" />
                                                            <input name="ctl00$FormDangKy$ctl00$btnReset" type="reset" id="ctl00_FormDangKy_ctl00_btnReset" class="btn btn-default frm-btn-reset" value="Xóa" />
                                                            <input type="hidden" name="ctl00$FormDangKy$ctl00$hdnResponseSetGuid" id="ctl00_FormDangKy_ctl00_hdnResponseSetGuid" />
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>          
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                {{-- <div class="copyright">
                                    Copyright &copy; 2018 Kim Oanh Real Estate. <a href="http://www.canhcam.vn/dich-vu"    target="_blank">Thiết kế website</a> bởi <a target="_blank" href="http://www.canhcam.vn">Cánh Cam</a>
                                </div> --}}
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class='Module Module-141'>
                                    <div class='ModuleContent'>
                                        <nav class="footer-nav">
                                            <a href="#" target="_self">Điều kiện & Điều khoản</a>
                                            <a href="#" target="_self">Chính sách bảo mật</a>
                                            <a href="#" target="_self">Sitemap</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <a href="#!" id="" title="Back to top" class="up"><span>TOP</span><i class="fa fa-angle-up"></i></a> 
        </div>
        @stack('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                if (!$('.news-index').is(':visible')) {
                    $(document).on('click', 'a[href^="#"]', function (event) {
                        event.preventDefault();

                        $('html, body').animate({
                            scrollTop: $($.attr(this, 'href')).offset().top
                        }, 500);
                    });
                }

                $(window).bind('scroll', function() {
                    var navHeight = 0;
                    if ($(window).scrollTop() > navHeight) {
                        $('header').addClass('fixed-header');
                    } else {
                        $('header').removeClass('fixed-header');
                    }
                });

                $('header').on('click', '.btn-showmenu', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    $('.overlay').css('display', 'block');
                    $('.menu').addClass('open');
                });

                $(document).click(function() {
                    $('.overlay').hide();
                    $('.menu').removeClass('open');
                });
                $('.show-notice').delay(3000).fadeOut();
            });
        </script>
    </body>
</html>
