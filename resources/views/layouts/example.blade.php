<!DOCTYPE html>
<html>
  <head>
    <title>Mover.az</title>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Markam.az" />

    <link href="img/favicon.png" rel="icon" />
    <link href="{{asset('assets/owl/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/owl/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/owl/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/fancybox/css/jquery.fancybox.css?v=2.1.5')}}" rel="stylesheet" />
    <link href="{{asset('assets/fonts/stylesheet.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/glyphter/css/Glyphter.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCzHTE7WgCEYCMMiomtzTGFzgL6bqqx2Q"></script>
    <script src="{{asset('assets/isotope/isotope.pkgd.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/isotope/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/owl/js/owl.carousel.min.js')}}" ></script>
    <script src="{{asset('assets/fancybox/jquery.fancybox.js')}}" ></script>
    <script src="{{asset('js/custom.js')}}"></script>
  </head>
  <body>


    <div class="" style="display:none" id="registerBlockTrigger">
        <div class="account-register popupuser" id="ajax_register_new" style="display: block;">
            <div class="popupheadings"><h1>Daxil ol və ya qeydiyyatdan keç</h1></div>
            <div class="ajax-content popupcontent">
                <div class="ajax-container">
            
                    <form action="#" method="post" id="ajax-register-form" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group required">
                                <label class="control-label" for="input-firstname">Adı</label>
                                    <input type="text" name="firstname" value="" placeholder="Adı" id="input-firstname" class="form-control">
                                    <div class="for-error error-firstname" style="display: none;"></div>
                            </div>
            
                            <div class="form-group required">
                                <label class="control-label" for="input-register-email">E-Mail</label>
                                <input type="email" name="email" value="" placeholder="E-Mail" id="input-register-email" class="form-control">
                                <div class="for-error error-email" style="display: none;"></div>
                            </div>

                            <div class="form-group required">
                                <label class="control-label" for="input-telephone">Telefon</label>
                                <input type="tel" name="telephone" value="" placeholder="Telefon" id="input-telephone" class="form-control">
                                <div class="for-error error-telephone" style="display: none;"></div>
                            </div>

                            <div class="form-group required">
                                <label class="control-label" for="input-register-password">Şifrə</label>
                                <input type="password" name="password" value="" placeholder="Şifrə" id="input-register-password" class="form-control">
                                <div class="for-error error-password" style="display: none;"></div>
                            </div>
                        
                            <div class="buttons">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="agree" value="1" id="agree_check">
                                    <label class="form-check-label" style="float: left;" for="agree_check"><a href="#" class="agree"> <b> Gizlilik Şərtləri</b></a>ni oxudum və razıyam</label>
                                </div>
                            </div>

                            <div class="buttons">
                                <button type="button" onclick="ocajaxlogin.registerAction();" class="btn bigbutton btn-primary"><span>Davam et</span></button>
                            </div>
                    
            
                            <div class="sochiallogin">
                                <a href="" class="facelogin"><span class="icons icon-facebook"></span><span><b>Facebook</b> ilə daxil ol</span></a>
                                <a href="" class="googlelogin"><span class="icons icon-google"></span><span><b>Google</b> ilə daxil ol</span></a>
                            </div>

                            <div class="clear"></div>
                            <div class="alert alert-danger for-error error-warning" style="display: none;"><i class="fa fa-exclamation-circle"></i><span></span></div>
                    </form>
                </div>
        
            </div>
            <div class="popfooter">
                <p>Əgər hesabınız varsa <a href="#loginBlockTrigger" class="fancyuser" onclick="">Giriş</a>edin.</p>
            </div>
        </div>
    </div>


    <div class="" style="display:none" id="loginBlockTrigger">
            <div class="account-register popupuser" id="ajax_register_new" style="display: block;">
                <div class="popupheadings"><h1>Daxil ol və ya qeydiyyatdan keç</h1></div>
                <div class="ajax-content popupcontent">
                    <div class="ajax-container">
                
                        <form action="#" method="post" id="ajax-register-form" enctype="multipart/form-data" class="form-horizontal">
                
                                <div class="form-group required">
                                    <label class="control-label" for="input-register-email">E-Mail</label>
                                    <input type="email" name="email" value="" placeholder="E-Mail" id="input-register-email" class="form-control">
                                    <div class="for-error error-email" style="display: none;"></div>
                                </div>
    
                                <div class="form-group required">
                                    <label class="control-label" for="input-register-password">Şifrə</label>
                                    <input type="password" name="password" value="" placeholder="Şifrə" id="input-register-password" class="form-control">
                                    <div class="for-error error-password" style="display: none;"></div>
                                </div>
                            
    
                                <div class="buttons">
                                    <button type="button" onclick="ocajaxlogin.registerAction();" class="btn bigbutton btn-primary"><span>Davam et</span></button>
                                </div>
    
                                <div class="clear"></div>
                                <div class="alert alert-danger for-error error-warning" style="display: none;"><i class="fa fa-exclamation-circle"></i><span></span></div>
                        </form>
                    </div>
            
                </div>
                <div class="popfooter">
                    <p>Əgər hesabınız yoxdursa <a href="#registerBlockTrigger" class="fancyuser" onclick="">Qeydiyyatdan</a>keçin.</p>
                </div>
            </div>
    </div>

    <div class="slide-mobile-menu">
                <div class="menuhead"><div class="title">Menyu</div><span class="icon-plus closemenu"></span></div>
        
                <div class="mobile-user">
                    <a href="#">Qeydiyyat</a>
                    <a href="#">Daxil ol</a>
                </div>
        
                <div class="heading">Menyu</div>
        
                <div class="cat-menu">
                    <ul class="mainmenu">
                        <li><p class="haschilds">Haqqımızda</p> <span class="collapse">+</span>
                            <ul class="submenu">
                                <li><a href="#">Haqqımızda</a></li>
                                <li><a href="#">Haqqımızda</a></li>
                                <li><a href="#">Haqqımızda</a></li>
                                <li><a href="#">Haqqımızda</a></li>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Kömək</a></li>
                        <li><a href="#">Xəbərlər</a>
                    </ul>
                </div>
            
            <div class="clear"></div>
        
        
    </div><!--slide mobile-menu end-->

<div id="wrapper" class="mainPage">

    <div id="header">

        <div class="headerTop">
            <div class="headerCont">

                <div class="mobile-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="logo"><a href="#"></a></div>

                <div class="language">
                    <div>Dili seçin:</div>
                    <div class="langselect">
                        <select>
                            <option selected="selected">aze</option>
                            <option >rus</option>
                            <option >eng</option>
                        </select>
                    </div>
                </div><!--language end-->

            </div><!--headerCont end-->
        </div><!--headerTop end-->

        <div class="headerBottom">
            <div class="headerCont">

                <div class="headerMenu">
                    <ul>
                        <li><a href="#">Ana Səhifə</a></li>
                        <li><a href="#">Haqqımızda</a></li>
                        <li><a href="#">Kömək</a></li>
                        <li><a href="#">Xəbərlər</a>
                            <ul class="submenu">
                                <li><a href="#">Necə işləyir?</a></li>
                                <li><a href="#">Nümunə saytlar</a></li>
                                <li><a href="#">Ölkələr</a></li>
                                <li><a href="#">Tez-tez verilən suallar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Əlaqə</a></li>
                    </ul>
                </div><!--headerMenu end-->

                <div class="headerlinks">
                    
                    <div id="headerProfile" class="headerLink toggleHeadMenu" data-toggle="closed">
                        <div class="headerProfileIcon"> <span class="icon-profile"></span> </div>
                        <div class="toggleDropdown">
                            <ul>
                                <li><a href="#loginBlockTrigger" class="fancyuser" id="">Daxil ol</a></li>
                                <li><a href="#registerBlockTrigger" class="fancyuser" id="">Qeydiyattdan keç</a></li>
                            </ul>
                        </div>
                    </div><!--headerProfile end-->


                    <div id="headerBasket" class="headerLink toggleHeadMenu" data-toggle="closed">
                            <div class="headerProfileIcon"> <span class="icon-basket"></span></div>
                            <div class="headerLinkCount">9</div>

                            <div class="toggleDropdown">

                                <div class="basketItemCont">

                                    <div class="basketItem">
                                        <div class="basketItemImage"><img src="img/demo/product.jpg" /></div>
                                        <div class="batketItemInfo">
                                            <div class="title"><a href="#">Unisex Saç Bandı - Ten Hea</a></div>
                                            <div class="basketItemPrice">137AZN</div>
                                        </div>
                                    </div><!--basketItem end-->

                                    <div class="basketItem">
                                        <div class="basketItemImage"><img src="img/demo/product.jpg" /></div>
                                        <div class="batketItemInfo">
                                            <div class="title"><a href="#">Unisex Saç Bandı - Ten Hea</a></div>
                                            <div class="basketItemPrice">137AZN</div>
                                        </div>
                                    </div><!--basketItem end-->

                                </div><!--basketItemCont end-->

                                <div class="basketDetails">
                                    <div class="priceInfo">
                                        <span>Ümumi məbləğ:</span>
                                        <span>137 AZN</span>
                                    </div>
                                    <div class="buttons">
                                        <a href="#" class="buttonDark">Səbətə Bax</a>
                                        <a href="#" class="buttonDark">Ödənişə keç</a>
                                    </div>
                                </div><!--basketDetails end-->

                            </div><!--toggleDropdown end-->

                    </div><!--headerLink end-->

                </div><!--headerlinks end-->


            <div class="clear"></div> 
            </div><!--headerCont end-->
        </div><!--headerBottom end-->

    <div class="clear"></div>
    </div><!--header end-->

    @yield('main')

    <div id="footer">
        <div id="footerCont">

            <div class="footerBlock">
                <div class="footer-title"><h5>İş Saatları</h5></div>
                <ul class="footerInfoList">
                    <li>Bazar Ertəsi - Şənbə.......................10:00 - 20:00</li>
                    <li>Bazar..................................................istirahət günü</li>
                </ul>
                <div class="clear"></div>
                <p>Fizuli küç., 37 c, Fransa institutunun yanında</p>
                <div class="iconInfoLabel">
                    <div class="icon"><span class="icon-plane"></span></div>
                    <div class="label">info@mover.az</div>
                </div>

                <div class="iconInfoLabel">
                    <div class="icon"><span class="icon-phone"></span></div>
                    <div class="label">*9009</div>
                </div>


            </div><!--footerBlock end-->



            <div class="footerBlock">
                <div class="footer-title"><h5>Kömək</h5></div>
                <ul class="styled-list">
                    <li><a href="#">Necə işləyir?</a></li>
                    <li><a href="#">Tez-tez verilən suallar</a></li>
                    <li><a href="#">Nümunə saytlar</a></li>
                    <li><a href="#">Qiymət cədvəli</a></li>
                    <li><a href="#">Daşınma şərtləri</a></li>
                </ul>
            </div><!--footerBlock end-->

            <div class="footerBlock">
                <div class="footer-title"><h5>Haqqımızda</h5></div>
                <ul class="styled-list">
                    <li><a href="#">Haqqımızda</a></li>
                    <li><a href="#">Gizlilik şərtləri</a></li>
                    <li><a href="#">Xəbərlər və Elanlar</a></li>
                    <li><a href="#">Daşınma şərtləri</a></li>
                    <li><a href="#">Əlaqə</a></li>
                </ul>
            </div><!--footerBlock end-->

            <div class="clear"></div>

        </div><!--footerCont end-->

        <div id="copyright">
            
            <div class="copyrightCont clearAfter">
                <ul class="link-follow">
                    <li><a class=" icon-twitter" title="Twitter" href="https://twitter.com/"></a></li>
                    <li><a class=" icon-face" title="Facebook" href="https://www.facebook.com/"></a></li>
                    <li><a class=" icon-linkedin" title="Youtube" href="https://www.youtube.com/user/"></a></li>
                    <li><a class=" icon-instagram" title="Instagram" href="https://www.instagram .com/"></a></li>
                </ul>
                <div class="copyrightInfo">
                    <span><img src="img/pay.png" /></span>
                    <span><img src="img/footerLogo.png" /></span>
                </div>
            </div>
        </div><!--copyright end-->

    </div><!--footer end-->


    

  </div><!-- wrapper end-->
</body>
</html>