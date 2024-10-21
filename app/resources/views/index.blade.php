@extends('layouts.app')

@section('content')
<!-- Banner Area -->
<section id="home_seven_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="banner_seven_text">
                    <h1>Você Sonha<br>Nós te Levamos até Lá</h1>
                    <p>Deixe seus sonhos alçarem voo. Viaje para destinos onde cada paisagem é uma nova história esperando ser vivida. Com nossas passagens acessíveis, o céu é apenas o começo de sua jornada.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Area -->
@include("index.reservas")
<!-- why choose andTour section -->
<section id="home_seven_why_choose" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Por que escolher a Horizon Wings</h2>
                </div>
            </div>
        </div>
        <div class="why_choose_andtour">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="why_choose_andtour_card">
                        <div class="choose_img pt-1">
                            <img src="public/assets/img/icon/cost.png" alt="icon">
                        </div>
                        <h3>Custo mínimo</h3>
                        <!-- <p>Laboris anim duis sunt aliquip tempor qui. Est in laboris jugni lol occaecat duo -->
                            <!-- excepteur voluptate minim.</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="why_choose_andtour_card">
                        <div class="choose_img">
                            <img src="public/assets/img/icon/magnific.png" alt="icon">
                        </div>
                         <h3>Suporte mundial</h3>
                        <!-- <p>Laboris anim duis sunt aliquip tempor qui. Est in laboris jugni lol occaecat duo -->
                            <!-- excepteur voluptate minim.</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="why_choose_andtour_card">
                        <div class="choose_img">
                            <img src="public/assets/img/icon/quality.png" alt="icon">
                        </div>
                         <h3>Serviço de alta qualidade</h3>
                        <!-- <p>Laboris anim duis sunt aliquip tempor qui. Est in laboris jugni lol occaecat duo -->
                            <!-- excepteur voluptate minim.</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="why_choose_andtour_card">
                        <div class="choose_img">
                            <img src="public/assets/img/icon/award.png" alt="icon">
                        </div>
                         <h3>Atendimento de excelência</h3>
                        <!-- <p>Laboris anim duis sunt aliquip tempor qui. Est in laboris jugni lol occaecat duo -->
                            <!-- excepteur voluptate minim.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trending destinations section -->
<section id="trending_destinations_area" class="section_padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Destinos em alta</h2>
                    <!-- <a href="top-destinations.html">See all<img src="public/assets/img/icon/list-arrow.png" alt="icon"></a> -->
                </div>
                <div class="trending_destinations_wrapper">
                    <div class="trending_item">
                        <div class="treding_img">
                            <!-- <a href="top-destinations.html"> -->
                                <img src="public/assets/img/home-seven/destination/paris.png"
                                    alt="img"></a>
                        </div>
                        <h3>Paris</h3>
                        <p>120+ Passeios</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <!-- <a href="top-destinations.html"> -->
                                <img src="public/assets/img/home-seven/destination/singapore.png" alt="img"></a>
                        </div>
                        <h3>Cingapura</h3>
                        <p>82+ Passeios</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <!-- <a href="top-destinations.html"> -->
                                <img src="public/assets/img/home-seven/destination/rome.png"
                                    alt="img"></a>
                        </div>
                        <h3>Roma</h3>
                        <p>140+ Passeios</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <!-- <a href="top-destinations.html"> -->
                                <img src="public/assets/img/home-seven/destination/bangkok.png"
                                    alt="img"></a>
                        </div>
                        <h3>Bangkok</h3>
                        <p>247+ Passeios</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <!-- <a href="top-destinations.html"> -->
                                <img src="public/assets/img/home-seven/destination/bali.png"
                                    alt="img"></a>
                        </div>
                        <h3>Bali</h3>
                        <p>250+ Passeios</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <!-- <a href="top-destinations.html"> -->
                                <img src="public/assets/img/home-seven/destination/phuket.png"
                                    alt="img"></a>
                        </div>
                        <h3>Phuket</h3>
                        <p>320+ Passeios</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <!-- <a href="top-destinations.html"> -->
                                <img src="public/assets/img/home-seven/destination/tokyo.png"
                                    alt="img"></a>
                        </div>
                        <h3>Tokyo</h3>
                        <p>70+ Passeios</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <!-- <a href="top-destinations.html"> -->
                                <img src="public/assets/img/home-seven/destination/indonesia.png" alt="img"></a>
                        </div>
                        <h3>Indonesia</h3>
                        <p>120+ Passeios</p>
                    </div>
                    <div class="trending_item">
                        <div class="treding_img">
                            <!-- <a href="top-destinations.html"> -->
                                <img src="public/assets/img/home-seven/destination/mexico.png"
                                    alt="img"></a>
                        </div>
                        <h3>Mexico</h3>
                        <p>30+ Passeios</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular tour section -->
<section id="popular-tour" class="section_padding_bottom">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Passeios mais populares</h2>
                    <!-- <a href="tour-search.html">See all<img src="public/assets/img/icon/list-arrow.png" alt="icon"></a> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <!-- <a href="tour-search.html"> -->
                            <img src="public/assets/img/home-seven/tour/popular-tour-1.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3>Trilha de Quadriciclo</h3>
                        <p><i class="fas fa-map-marker-alt"></i>Yellowstone, Estados Unidos</p>
                        <p>Uma aventura emocionante através de paisagens deslumbrantes, como montanhas, florestas e gêiseres...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5 <br>(1214 reviewes)</p>
                                <!-- <h6>(1214 reviewes)</h6> -->
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$499.00<sub>/Por pessoa</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <!-- <a href="tour-search.html"> -->
                            <img src="public/assets/img/home-seven/tour/popular-tour-2.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3>Mergulho na Ilha Maui</h3>
                        <p><i class="fas fa-map-marker-alt"></i>Havaí, Estados Unidos</p>
                        <p>Um mergulho em águas cristalinas, recifes de corais vibrantes e uma rica vida marinha...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.2/5<br>(1165 Avaliações)</p>
                                <!-- <h6>(1214 reviewes)</h6> -->
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$620.00<sub>/Por pessoa</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <!-- <a href="tour-search.html"> -->
                            <img src="public/assets/img/home-seven/tour/popular-tour-3.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3>Antelope Canyon</h3>
                        <p><i class="fas fa-map-marker-alt"></i>Gran Canyon, Estados Unidos</p>
                        <p>Um desfiladeiro natural esculpido ao longo do tempo pela água e pelo vento para criar uma sinfonia de formas, cores e sombras...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.5/5<br>(1214 Avaliações)</p>
                                <!-- <h6>(1214 reviewes)</h6> -->
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$460.00<sub>/Per pessoa</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <!-- <a href="tour-search.html"> -->
                            <img src="public/assets/img/home-seven/tour/popular-tour-4.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3>Tour Ilha Oahu</h3>
                        <p><i class="fas fa-map-marker-alt"></i>Havaí, Estados Unidos</p>
                        <p>Experiência completa, levando os visitantes aos principais pontos turísticos e atrações naturais da ilha...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.6/5<br>(1312 Avaliações)</p>
                                <!-- <h6>(1214 reviewes)</h6> -->
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$545,00<sub>/Por pessoa</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <!-- <a href="tour-search.html"> -->
                            <img src="public/assets/img/home-seven/tour/popular-tour-5.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3>Kennedy Space Center</h3>
                        <p><i class="fas fa-map-marker-alt"></i>Orlando, Estados Unidos</p>
                        <p>Uma experiência imersiva, repleta de atrações sobre a exploração espacial e a história da NASA...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.5/5<br>(1527 Avaliações)</p>
                                <!-- <h6>(1214 reviewes)</h6> -->
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$399,00<sub>/Por pessoa</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <!-- <a href="tour-search.html"> -->
                            <img src="public/assets/img/home-seven/tour/popular-tour-6.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3>Coliseu</h3>
                        <p><i class="fas fa-map-marker-alt"></i>Roma, Itália</p>
                        <p>Uma experiência histórica fascinante, onde os turistas podem mergulhar na rica cultura e história do Império Romano...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.9/5<br>(1335 Avaliações)</p>
                                <!-- <h6>(1214 reviewes)</h6> -->
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$149.00<sub>/Por pessoa</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <!-- <a href="tour-search.html"> -->
                            <img src="public/assets/img/home-seven/tour/popular-tour-7.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3>Ao Phang Nga Park</h3>
                        <p><i class="fas fa-map-marker-alt"></i>Phang Nga, Tailândia</p>
                        <p>Uma experiência deslumbrante em meio a paisagens naturais exóticas, formações rochosas de calcário, manguezais e águas cristalinas....</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.2/5<br>(1214 Avaliações)</p>
                                <!-- <h6>(1214 reviewes)</h6> -->
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$419,00<sub>/Por pessoa</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="common_card_seven">
                    <div class="common_card_seven_img">
                        <!-- <a href="tour-search.html"> -->
                            <img src="public/assets/img/home-seven/tour/popular-tour-8.png" alt="img">
                        </a>
                    </div>
                    <div class="common_card_seven_text">
                        <h3>Torre Eiffel</h3>
                        <p><i class="fas fa-map-marker-alt"></i>Paris, França</p>
                        <p>Este monumento, construído para a Exposição Universal de 1889, é uma maravilha da engenharia e um símbolo mundial da França...</p>
                        <div class="common_card_seven_bottom">
                            <div class="common_card_seven_bottom_left">
                                <p>4.8/5<br>(1214 Avaliações)</p>
                                <!-- <h6>(1214 reviewes)</h6> -->
                            </div>
                            <div class="common_card_seven_bottom_right">
                                <h4>$150.00<sub>/Por pessoa</sub></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- discount area -->
<section id="discount_area" class="section_padding_bottom">
    <div class="container">
        <div class="discount_area_wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="discount_left_area">
                        <h2>Garanta até 50% de desconto no seu destino favorito</h2>
                        <p>Descubra o mundo com ofertas imperdíveis e aproveite até 50% de desconto em viagens para os seus destinos preferidos. Não perca a chance de explorar novos lugares e criar memórias inesquecíveis!</p>
                        <!-- <a class="btn btn_theme btn_md discount-btn" href="top-destinations-details.html">Grab your
                            destinations</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="discount_img">
                        <img src="public/assets/img/home-seven/common/discount-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Amazing tour area -->
<section id="amazing_tour_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Coisas incríveis para fazer</h2>
                    <!-- <a href="top-destinations-details.html">See all<img src="public/assets/img/icon/list-arrow.png"
                            alt="icon"></a> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="amazing_tour_box">
                    <!-- <a href="top-destinations-details.html"> -->
                        <img src="public/assets/img/home-seven/tour/amazing-tour-1.png" alt="img">
                        <div class="amazing_tour_box_content">
                            <div class="amazing_tour_content">
                                <div class="rating_outof">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <h5>5/5</h5>
                                </div>
                                <h3>Locais Históricos</h3>
                                <h5>10+ Lugares</h5>
                            </div>
                        </div>
                        <!-- <div class="top_ratings">
                            <p><i class="fas fa-star"></i> <span>4.8</span></p>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="amazing_middle_area">
                    <div class="amazing_tour_box">
                        <!-- <a href="top-destinations-details.html"> -->
                            <img src="public/assets/img/home-seven/tour/amazing-tour-2.png" alt="img">
                            <div class="amazing_tour_box_content">
                                <div class="amazing_tour_content">
                                    <div class="rating_outof">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <h5>5/5</h5>
                                    </div>
                                    <h3>Cidades</h3>
                                    <h5>1k+ Lugares</h5>
                                </div>
                            </div>
                            <!-- <div class="top_ratings">
                                <p><i class="fas fa-star"></i> <span>4.8</span></p>
                            </div> -->
                        </a>
                    </div>
                    <div class="amazing_tour_box">
                        <!-- <a href="top-destinations-details.html"> -->
                            <img src="public/assets/img/home-seven/tour/amazing-tour-3.png" alt="img">
                            <div class="amazing_tour_box_content">
                                <div class="amazing_tour_content">
                                    <div class="rating_outof">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <h5>5/5</h5>
                                    </div>
                                    <h3>Montanhas</h3>
                                    <h5>50+ Lugares</h5>
                                </div>
                            </div>
                            <!-- <div class="top_ratings">
                                <p><i class="fas fa-star"></i> <span>4.8</span></p>
                            </div> -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="amazing_end_area">
                    <div class="amazing_tour_box">
                        <!-- <a href="top-destinations-details.html"> -->
                            <img src="public/assets/img/home-seven/tour/amazing-tour-4.png" alt="img">
                            <div class="amazing_tour_box_content">
                                <div class="amazing_tour_content">
                                    <div class="rating_outof">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <h5>5/5</h5>
                                    </div>
                                    <h3>Praias</h3>
                                    <h5>114+ Lugares</h5>
                                </div>
                            </div>
                            <!-- <div class="top_ratings">
                                <p><i class="fas fa-star"></i> <span>4.8</span></p>
                            </div> -->
                        </a>
                    </div>
                    <div class="amazing_end_bottom">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="amazing_tour_box">
                                    <!-- <a href="top-destinations-details.html"> -->
                                        <img src="public/assets/img/home-seven/tour/amazing-tour-5.png" alt="img">
                                        <div class="amazing_tour_box_content">
                                            <div class="amazing_tour_content">
                                                <div class="rating_outof">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <h5>5/5</h5>
                                                </div>
                                                <h3>Gastronomia</h3>
                                                <h5>800+ Lugares</h5>
                                            </div>
                                        </div>
                                        <!-- <div class="top_ratings">
                                            <p><i class="fas fa-star"></i> <span>4.8</span></p>
                                        </div> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="amazing_tour_box">
                                    <!-- <a href="top-destinations-details.html"> -->
                                        <img src="public/assets/img/home-seven/tour/amazing-tour-6.png" alt="img">
                                        <div class="amazing_tour_box_content">
                                            <div class="amazing_tour_content">
                                                <div class="rating_outof">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <h5>5/5</h5>
                                                </div>
                                                <h3>Trilhas</h3>
                                                <h5>250+ Lugares</h5>
                                            </div>
                                        </div>
                                        <!-- <div class="top_ratings">
                                            <p><i class="fas fa-star"></i> <span>4.8</span></p>
                                        </div> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Trending tours -->
<!-- <section id="trending_tour" class="section_padding slider_btn">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Trending tours</h2>
                    <a href="tour-search.html">See all<img src="public/assets/img/icon/list-arrow.png" alt="icon"></a>
                </div>
                <div class="trending_tour_seven_slider owl-theme owl-carousel">
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-1.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Aliqua irure</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-2.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Anim minim dolore</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-3.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Mollit eiusmod qui</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-4.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Qui nisi irure iru</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-1.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Aliqua irure</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-2.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Anim minim dolore</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-3.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Mollit eiusmod qui</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-4.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Qui nisi irure iru</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-1.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Aliqua irure</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-2.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Anim minim dolore</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-3.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Mollit eiusmod qui</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common_card_seven">
                        <div class="common_card_seven_img">
                            <a href="tour-search.html">
                                <img src="public/assets/img/home-seven/tour/trending-tour-4.png" alt="img">
                            </a>
                        </div>
                        <div class="common_card_seven_text">
                            <h3><a href="tour-search.html">Qui nisi irure iru</a></h3>
                            <p><i class="fas fa-map-marker-alt"></i>London, United Kingdom</p>
                            <p>Exercitation exercitation quis ut pariatur id consequat amco occaecat...</p>
                            <div class="common_card_seven_bottom">
                                <div class="common_card_seven_bottom_left">
                                    <p>4.8/5 Excellent</p>
                                    <h6>(1214 reviewes)</h6>
                                </div>
                                <div class="common_card_seven_bottom_right">
                                    <h4>$99.00 <sub>/Per person</sub></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- client feedback area -->
<section id="client_feedback" class="slider_btn">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="client_feedback_heading text-center">
                    <h2>Aqui Estão Alguns Comentários dos Clientes</h2>
                </div>
                <div class="client_feedback_slider owl-theme owl-carousel">
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-1.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Minha experiência com a companhia aérea foi excelente! O atendimento ao cliente foi excepcional desde o momento em que fiz o check-in até o desembarque. A equipe foi simpática e prestativa, respondendo a todas as minhas perguntas com paciência. Com certeza voarei com eles novamente!</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Wellington Rato</h3>
                                <p>Dedetizador</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Serviço Incrível</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-2.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Voei com esta companhia recentemente e fiquei impressionado com o conforto dos assentos. Mesmo em um voo longo, consegui relaxar e aproveitar a viagem. Além disso, as opções de entretenimento a bordo eram variadas e mantiveram minha atenção durante todo o trajeto. Recomendo para quem busca conforto!.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Leila Pereira</h3>
                                <p>Bancária</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Ótima infraestrutura</p>
                            </div>
                        </div>
                    </div>
                    <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-3.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Estou muito satisfeito com a pontualidade da companhia aérea. Meu voo saiu e chegou no horário, o que é sempre um alívio. O processo de embarque foi rápido e eficiente, e as informações sobre o voo foram claras. Isso me fez sentir seguro durante toda a viagem.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Raphael Claus</h3>
                                <p>Aposentado</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Muito eficiente</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-1.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip ali
                            qua nostrud ipsum. Esse et conseq dolor anim esse dolore. Voluptate consectetur denorus
                            consectetur ven
                            iam ad aliqua houston.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>David connley</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Awesome service</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-2.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip jui aliqua nostrud ipsum. Esse et
                            conseq dolor anim esse dolore. Voluptate consectetur consectetur guir veniam
                            ad aliqua.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Selina Madis</h3>
                                <p>Operation Officer</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Great delivery</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-3.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                            conseq dolor anim es
                            se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Harry Gonzelo</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Very efficient</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-1.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip ali
                            qua nostrud ipsum. Esse et conseq dolor anim esse dolore. Voluptate consectetur denorus
                            consectetur ven
                            iam ad aliqua houston.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>David connley</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Awesome service</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-2.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip jui aliqua nostrud ipsum. Esse et
                            conseq dolor anim esse dolore. Voluptate consectetur consectetur guir veniam
                            ad aliqua.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Selina Madis</h3>
                                <p>Operation Officer</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Great delivery</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="client_feedback-card">
                        <div class="client_feedback_top">
                            <div class="client_img">
                                <img src="public/assets/img/home-seven/common/client-fe-3.png" alt="img">
                            </div>
                            <div class="feedback_quote">
                                <img src="public/assets/img/icon/feedback-quote.png" alt="icon">
                            </div>
                        </div>
                        <p>Commodo aliqua minim id do aute aliquip ex aliquip poli aliqua nostrud ipsum. Esse et
                            conseq dolor anim es
                            se dolore. Voluptate consectetur consectetur veniam ad aliqua koilom none.</p>
                        <div class="client_feedback_bottom">
                            <div class="client_info">
                                <h3>Harry Gonzelo</h3>
                                <p>General Manager</p>
                            </div>
                            <div class="client_ratings text-end">
                                <div class="all_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Very efficient</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Area -->
<section id="counter_seven_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="counter_seven_area_wrapper">
                    <div class="row justify-content-evenly">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="countre_seven_item">
                                <h3><span class="counter">8</span>k</h3>
                                <h5>Vôos por Ano</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="countre_seven_item">
                                <h3><span class="counter">750</span>+</h3>
                                <h5>Clientes satisfeitos</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="countre_seven_item">
                                <h3><span class="counter">29</span></h3>
                                <h5>Países</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="countre_seven_item">
                                <h3><span class="counter">124</span></h3>
                                <h5>Prêmios conquistados</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- home seven latest news and blog section -->
<!-- <section id="latest_blog_home_seven" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_heading_seven">
                    <h2>Read our latest news and blogs to</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="home_seven_news_box">
                    <a href="news-details.html">
                        <img src="public/assets/img/home-seven/news/news-seven-1.png" alt="img">
                    </a>
                    <div class="home_seven_news_content">
                        <div class="news_content_top">
                            <div class="news_date">
                                <img src="public/assets/img/icon/date.png" alt="icon">
                                <p><span>Date :</span> 20 Dec, 2021</p>
                            </div>
                            <div class="news_admin">
                                <img src="public/assets/img/icon/admin.png" alt="icon">
                                <p><span>by :</span> Admin</p>
                            </div>
                        </div>
                        <h3><a href="news-details.html">Exercitation velit cillum sunt duis veniam deserunt
                                ipsum adipisicing</a></h3>
                        <p>Enim adipisicing magna ccaecat laboris dolore conseq occ. <a
                                href="news-details.html">Read more...</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home_seven_news_box">
                    <a href="news-details.html">
                        <img src="public/assets/img/home-seven/news/news-seven-2.png" alt="img">
                    </a>
                    <div class="home_seven_news_content">
                        <div class="news_content_top">
                            <div class="news_date">
                                <img src="public/assets/img/icon/date.png" alt="icon">
                                <p><span>Date :</span> 20 Dec, 2021</p>
                            </div>
                            <div class="news_admin">
                                <img src="public/assets/img/icon/admin.png" alt="icon">
                                <p><span>by :</span> Admin</p>
                            </div>
                        </div>
                        <h3><a href="news-details.html">Velit cillum sunt duis veniam deserunt sicing</a></h3>
                        <p><a href="news-details.html">Read more...</a></p>
                    </div>
                </div>
                <div class="home_seven_news_bottom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="home_seven_news_box">
                                <a href="news-details.html">
                                    <img src="public/assets/img/home-seven/news/news-seven-3.png" alt="img">
                                </a>
                                <div class="home_seven_news_content">
                                    <div class="news_content_top">
                                        <div class="news_date">
                                            <img src="public/assets/img/icon/date.png" alt="icon">
                                            <p><span>Date :</span> 20 Dec, 2021</p>
                                        </div>
                                        <div class="news_admin">
                                            <img src="public/assets/img/icon/admin.png" alt="icon">
                                            <p><span>by :</span> Admin</p>
                                        </div>
                                    </div>
                                    <h3><a href="news-details.html">Velit cillum sunt duis
                                            veniam sicing</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="home_seven_news_box">
                                <a href="news-details.html">
                                    <img src="public/assets/img/home-seven/news/news-seven-4.png" alt="img">
                                </a>
                                <div class="home_seven_news_content">
                                    <div class="news_content_top">
                                        <div class="news_date">
                                            <img src="public/assets/img/icon/date.png" alt="icon">
                                            <p><span>Date :</span> 20 Dec, 2021</p>
                                        </div>
                                        <div class="news_admin">
                                            <img src="public/assets/img/icon/admin.png" alt="icon">
                                            <p><span>by :</span> Admin</p>
                                        </div>
                                    </div>
                                    <h3><a href="news-details.html">Cillum sunt duis fury gui veniam sicing</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


@endsection