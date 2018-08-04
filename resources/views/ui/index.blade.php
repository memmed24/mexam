@extends('layouts.example')

@section('main')


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
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                </div>
                
                <div class="siteblock">
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                </div>

                <div class="siteblock">
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                </div>


                <div class="siteblock">
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                </div>

                <div class="siteblock">
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                </div>


                <div class="siteblock">
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                    <a href="#"><img src="{{asset('img/demo/logos/1.png')}}" /></a>
                </div>

            </div><!--sitelist end-->
        </div><!--blockCont end-->
    </div>

    
    
    <div id="lastNews" >
        <div class="blockCont clearAfter">

            <div class="newsitem col3">

                <div class="newsItemCont">
                    <div class="newsThumb">
                        <a href="#"><img src="{{asset('img/demo/news.jpg')}}" /></a>
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
                        <a href="#"><img src="{{asset('img/demo/news.jpg')}}" /></a>
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
                        <a href="#"><img src="{{asset('img/demo/news.jpg')}}" /></a>
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

@endsection