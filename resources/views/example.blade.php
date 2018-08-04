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

    <div id="slider">
        <div class="blockhead">
            <h1>Verİn Yükünüzü Bİz Daşıyaq!</h1>
            <p>“Mover” MMC yükləri xaricdəki anbarlarına qəbul edir, onların Azərbaycana gətirilib, müştəriyə çatdırılmasını təmin edir. Daxil olan yüklərin anbara daxil olduğu formasında və vaxtında müştəriyə təhvil verilməsi şirkətin öhdəlikləri sırasına daxildir.</p>
        </div>
        <a href="#" class="playbutton"><span class="icon-play"></span><span>Play Video</span></a>
    </div><!--slider end-->


    <div id="howitworks">
        <div class="blockCont">
            <div class="blockhead">
                <h1>Necə İşləyİr?</h1>
                <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>

            <div class="switcher tabSwitcher">
                <span class="active" data-block="#anbar" rel="howitInfo">Anbar xidməti</span>
                <span data-block="#assistant" rel="howitInfo">Sifariş assistantı xidməti</span>
            </div>



            <div id="assistant" class="howitInfo">

                <div class="step">
                        <h1>Xaricdəki ünvanımızı alın</h1>
                        <div class="stepIcon"><span class="icon-step1"></span></div>
                        <p>Mover.az saytında qeydiyyatdan keçməklə xaricdəki ofisimizin ünvanını əldə ecəkəsiniz. Bununla da siz Amerika və Türkiyənin online mağazalarından alış-veriş edə biləcəksiniz.</p>
                    </div><!--step end-->
    
                    <div class="step">
                        <h1>Sifarişi ünvanımıza göndərin</h1>
                        <div class="stepIcon"><span class="icon-step2"></span></div>
                        <p>Bundan sonra müvafiq ölkə seçiminizə uyğun saytdan sifariş edərkən ünvan hissəsində bizim saytımızdan əldə etdiyiniz ünvanı qeyd edərək sifarişinizi tamamlayırsınız.</p>
                    </div><!--step end-->
    
                    <div class="step">
                        <h1>Evinizə qədər çatdıraq</h1>
                        <div class="stepIcon"><span class="icon-delivery"></span></div>
                        <p>Mover.az Sifarişlərinizi ən gec 4 gün ərzində Bakıya çatdırır. İstədiyiniz halda Bakı şəhəri daxilində çatdırılma xidmətimiz də var</p>
                    </div><!--step end-->
        
            </div><!--assistant end-->




            <div id="anbar" class="howitInfo">

                <div class="step">
                    <h1>Xaricdəki ünvanımızı alın</h1>
                    <div class="stepIcon"><span class="icon-step1"></span></div>
                    <p>Mover.az saytında qeydiyyatdan keçməklə xaricdəki ofisimizin ünvanını əldə ecəkəsiniz. Bununla da siz Amerika və Türkiyənin online mağazalarından alış-veriş edə biləcəksiniz.</p>
                </div><!--step end-->

                <div class="step">
                    <h1>Sifarişi ünvanımıza göndərin</h1>
                    <div class="stepIcon"><span class="icon-step2"></span></div>
                    <p>Bundan sonra müvafiq ölkə seçiminizə uyğun saytdan sifariş edərkən ünvan hissəsində bizim saytımızdan əldə etdiyiniz ünvanı qeyd edərək sifarişinizi tamamlayırsınız.</p>
                </div><!--step end-->

                <div class="step">
                    <h1>Evinizə qədər çatdıraq</h1>
                    <div class="stepIcon"><span class="icon-delivery"></span></div>
                    <p>Mover.az Sifarişlərinizi ən gec 4 gün ərzində Bakıya çatdırır. İstədiyiniz halda Bakı şəhəri daxilində çatdırılma xidmətimiz də var</p>
                </div><!--step end-->

            </div><!--anbar end-->

        </div><!--blockCont end-->
    </div><!--howitworks end-->



    <div id="pricePolitics">
        <div class="blockCont">

            <div class="blockhead">
                <h1>QİYMƏT CƏDVƏLİ</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>

            <div class="priceCont">
                <div class="textBlock">
                    <h1>Məlumat</h1>
                    <p>Biz sizin üçün ödəmə etdikdə, ödədiyimiz məbləğin üzərinə 5% bank xərci əlavə olunur və toplam məbləğ mərkəzi bankın həmin günə təyin etdiyi kursla manata çevrilir.</p>
                </div>

                <div class="textBlock">
                    <h1>Necə hesablayım ?</h1>
                    <p>Seçdiyiniz məhsulların toplam məbləğini "Məbləğ TL" yazılan hissəyə qeyd edin. Kalkulatorda ödəyəcəyiniz toplam məbləğ manat ilə göstəriləcək
                        QEYD: Hesablayacağınız məbləğlərdə satıcı firmaların tələb etdiyi türkiyə daxili kargo pulunu nəzərə almağı unutmayın</p>
                </div>

                <div class="textBlock">
                    <h1>Ölkələr üzrə tariflər</h1>
                    <p>Sifariş olunan bağlamanın çatdırılma haqqı çəkiyə görə hesablanır. Ölçüsü 1 metrdən böyük olan bağlamaların çatdırılma haqqı həcmi çəkiyə görə hesablanır. Həcmi çəkinin hesablanması üçün en*, hündürlük*, uzunluq*, 6000 standartı tətbiq edilir.</p>
                </div>
                <div class="clear"></div>

                <div class="countryCont">

                    <div class="countryPrice tr">
                        <div class="flag">
                            <span>Türkiyə</span>
                        </div>

                        <div class="prices">
                                <div class="price">
                                    <span>0,5 kq - 1 kq dək</span>
                                    <span>4.10 $</span>
                                </div>
                                <div class="price">
                                    <span>0,5 kq - 1 kq dək</span>
                                    <span>4.10 $</span>
                                </div>
                        </div><!--prices end-->
                    </div><!--countryPrice end-->

                    <div class="countryPrice us">
                            <div class="flag">
                                <span>Amerika</span>
                            </div>
    
                            <div class="prices">
                                    <div class="price">
                                        <span>0,5 kq - 1 kq dək</span>
                                        <span>4.10 $</span>
                                    </div>
                                    <div class="price">
                                        <span>0,5 kq - 1 kq dək</span>
                                        <span>4.10 $</span>
                                    </div>
                            </div><!--prices end-->
                        </div><!--countryPrice end-->
                <div class="clear"></div>
                </div><!--countryCont end-->

            </div><!--priceCont end-->


            <div class="calculator">
                <div class="calculatorCont">
                    <h1>Kalkulyator</h1>

                    <div class="input-group selectCont ">
                        <div class="selectBox">
                            <span class="icon-down"></span>
                            <select id="country-select">
                                <option disabled="disabled">Ölkəni seçin</option>
                                <option value="tr">Türkiyə</option>
                                <option value="us">Amerika</option>
                            </select>
                        </div>
                    </div><!--input-group  end-->

                    <div class="input-group col3">
                        <label>Çəki vahidi</label>
                        <div class="selectBox">
                            <span class="icon-down"></span>
                            <select id="country-select">
                                <option value="tr">kiloqram</option>
                                <option value="us">libs</option>
                            </select>
                        </div>
                    </div><!--input-group  end-->

                    <div class="input-group col3">
                        <label>Ölçü vahidi</label>
                        <div class="selectBox">
                            <span class="icon-down"></span>
                            <select id="country-select">
                                <option value="tr">santimetr</option>
                                <option value="us">inch</option>
                            </select>
                        </div>
                    </div><!--input-group  end-->

                    <div class="input-group col3">
                        <label>Miqdarı</label>
                        <div class="inputBox">
                            <input type="text" placeholder="Miqdarı yazın..." value="" />
                        </div>
                    </div><!--input-group  end-->
                    <div class="clear"></div>

                    <div class="input-group col4">
                        <label>En</label>
                        <div class="inputBoxOpa">
                            <input type="text" placeholder="" value="" />
                        </div>
                    </div><!--input-group  end-->

                    <div class="input-group col4">
                        <label>Uzunluq</label>
                        <div class="inputBoxOpa">
                            <input type="text" placeholder="" value="" />
                        </div>
                    </div><!--input-group  end-->


                    <div class="input-group col4">
                        <label>Hündürlük</label>
                        <div class="inputBoxOpa">
                            <input type="text" placeholder="" value="" />
                        </div>
                    </div><!--input-group  end-->


                    <div class="input-group col4">
                        <label>Çəki</label>
                        <div class="inputBoxOpa">
                            <input type="text" placeholder="" value="" />
                        </div>
                    </div><!--input-group  end-->
                    <div class="clear"></div>

                    <div id="calcResult">
                        <span id="calcResultCount">0.0</span><span>AZN</span>
                    </div>

                    <div class="input-group col12">
                        <div class="inputBox">
                            <input type="button" value="Hesabla" />
                        </div>
                    </div>

                </div><!--calculatorCont end-->

                <div class="calculatorCont">
                    <h1>Link Hesablanması</h1>
                    <div class="input-group col12">
                        <div class="inputBox">
                            <input type="text" placeholder="Məbləği qeyd edin məs. 130" />
                        </div>
                        <div class="inputBottom">
                            <span>Ödəcəyiniz məbləğ : </span><span id="linkPrice"> 0.00 AZN</span>
                        </div>
                    </div>
                </div><!--calculatorCont end-->
            </div><!--calculator end-->

        </div><!--blockCont end-->  
    </div><!--price end-->




    
    <div id="reviewBlock">
        <div class="blockCont">

            <div class="blockhead">
                <h1>MüştərİLƏR BİZİM HAQDA</h1>
            </div>

            <div class="reviewsCont owl-carousel">

                <div class="review">
                    <div class="innerReview">
                        <h1>Ferhad Aliyev</h1>
                        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="reviewPhoto"><img src="img/demo/photo.jpg" /></div>
                    </div>
                </div><!--review end-->

                <div class="review">
                    <div class="innerReview">
                        <h1>Ferhad Aliyev</h1>
                        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="reviewPhoto"><img src="img/demo/photo.jpg" /></div>
                    </div>
                </div><!--review end-->

                <div class="review">
                    <div class="innerReview">
                        <h1>Ferhad Aliyev</h1>
                        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="reviewPhoto"><img src="img/demo/photo.jpg" /></div>
                    </div>
                </div><!--review end-->

                <div class="review">
                    <div class="innerReview">
                        <h1>Ferhad Aliyev</h1>
                        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="reviewPhoto"><img src="img/demo/photo.jpg" /></div>
                    </div>
                </div><!--review end-->
    

                <div class="review">
                    <div class="innerReview">
                        <h1>Ferhad Aliyev</h1>
                        <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="reviewPhoto"><img src="img/demo/photo.jpg" /></div>
                    </div>
                </div><!--review end-->

                

            </div><!--reviewsCont end-->
        <div class="clear"></div>
        </div><!--blockCOnt end-->
    </div><!--reviewBlock end-->



    <div id="siteslistBlock">
        <div class="blockCont">
            
            <div class="sitelist">

                <div class="siteblock">
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                </div>
                
                <div class="siteblock">
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                </div>

                <div class="siteblock">
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                </div>


                <div class="siteblock">
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                </div>

                <div class="siteblock">
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                </div>


                <div class="siteblock">
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                    <a href="#"><img src="img/demo/logos/1.png" /></a>
                </div>

            </div><!--sitelist end-->
        </div><!--blockCont end-->
    </div>



    <div id="lastNews" >
        <div class="blockCont clearAfter">

            <div class="newsitem col3">

                <div class="newsItemCont">
                    <div class="newsThumb">
                        <a href="#"><img src="img/demo/news.jpg" /></a>
                        <div class="newsDate">23 May 2017</div>
                    </div>
                    <div class="newsInfo">
                        <div class="newsIcon"><span class="icon-news"></span></div>
                        <div class="newsTitle"><a href="#">28 may Respublika günü</a></div>
                    </div>
                </div><!--newsItemCont end-->

            </div><!--newsitem end-->


            <div class="newsitem col3">

                <div class="newsItemCont">
                    <div class="newsThumb">
                        <a href="#"><img src="img/demo/news.jpg" /></a>
                        <div class="newsDate">23 May 2017</div>
                    </div>
                    <div class="newsInfo">
                        <div class="newsIcon"><span class="icon-news"></span></div>
                        <div class="newsTitle"><a href="#">28 may Respublika günü</a></div>
                    </div>
                </div><!--newsItemCont end-->

            </div><!--newsitem end-->


            <div class="newsitem col3">

                <div class="newsItemCont">
                    <div class="newsThumb">
                        <a href="#"><img src="img/demo/news.jpg" /></a>
                        <div class="newsDate">23 May 2017</div>
                    </div>
                    <div class="newsInfo">
                        <div class="newsIcon"><span class="icon-news"></span></div>
                        <div class="newsTitle"><a href="#">28 may Respublika günü</a></div>
                    </div>
                </div><!--newsItemCont end-->

            </div><!--newsitem end-->
        
        </div><!--blockCont end-->
    </div><!--lastNews end-->

    <div id="map">

    </div><!--Map end-->

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