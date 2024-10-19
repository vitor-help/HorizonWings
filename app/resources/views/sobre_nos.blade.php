@extends('layouts.app')

@section('content')

<!-- Common Banner Area -->
<section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Sobre Nós</h2>
                        <ul>
                            <li><a href="http://localhost/">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Sobre nós</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="about_us_top" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_us_left">
                        <h5>Sobre Nós</h5>
                        <h2>Nós somos a principal agência de viagens do mundo</h2>
                        <p>Na Horizon Wings, acreditamos que cada viagem é uma oportunidade de explorar o desconhecido e criar memórias inesquecíveis. Desde a nossa fundação, temos nos dedicado a oferecer experiências de viagem únicas e personalizadas, que vão além das expectativas.</p>
                        <p>Com uma equipe apaixonada e especializada, estamos prontos para guiá-lo em todas as etapas da sua jornada, seja uma aventura em terras exóticas, um refúgio tranquilo ou uma viagem dos sonhos. Seja qual for o destino, estamos aqui para transformar sua viagem em uma experiência extraordinária.</p>
                        <!-- <a href="tour-search.html" class="btn btn_theme btn_md">Find tours</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_us_right">
                        <img src="public/assets/img/common/abour_right.png" alt="img">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Banner -->
    <section id="about_offer_banner" class="section_padding_bottom">
        <div class="container-fluid">
            <div class="row">
                <!-- <h2 class="d-none">Heading</h2> -->
                <div class="col-lg-4">
                    <div class="about_offer_banner">
                        <a href="!#"><img src="public/assets/img/common/small_banner.png" alt="img"></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about_offer_banner">
                        <img src="public/assets/img/common/big_banner.png" alt="img">
                        <div class="about_offer_text">
                            <!-- <h3>Enjoy <span>20%</span> discount</h3> -->
                            <!-- <h2>Thailand couple tour</h2> -->
                            <!-- <a href="tour-search.html">Find tours</a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Service Area -->
    <section id="about_service_offer" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="public/assets/img/icon/world.png" alt="img">
                        <h5><a href="#!">Melhores Serviços</a></h5>
                        <p>Oferecemos uma ampla gama de serviços personalizados para garantir que sua experiência de viagem seja perfeita.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="public/assets/img/icon/walte.png" alt="img">
                        <h5><a href="#!">Pagamento Confiável</a></h5>
                        <p>Trabalhamos com sistemas de pagamento seguros e confiáveis, para que você possa reservar sua viagem com tranquilidade.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="public/assets/img/icon/star.png" alt="img">
                        <h5><a href="#!">Melhor Infraestrutura</a></h5>
                        <p>Nossos parceiros e fornecedores são escolhidos a dedo para proporcionar o melhor em conforto e conveniência.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="public/assets/img/icon/persentis.png" alt="img">
                        <h5><a href="#!">Ofertas incríveis</a></h5>
                        <p>Aproveite nossas promoções exclusivas e pacotes especiais para destinos ao redor do mundo. Sempre temos uma oferta incrível esperando por você.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- consultation Area -->
    <section id="consultation_area" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="consultation_area_text">
                        <h2>VOCÊ SONHA <br> NÓS TE LEVAMOS ATÉ LÁ</h2>
                        <p>Deixe seus sonhos alçarem voo. Viaje para destinos onde cada paisagem é uma nova história esperando ser vivida. Com nossas passagens acessíveis, o céu é apenas o começo de sua jornada</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Area -->
    <section id="counter_area" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="counter_area_wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="public/assets/img/icon/user.png" alt="icon">
                                    <h3 class="counter">2348</h3>
                                    <h6>Parceiros</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="public/assets/img/icon/bank.png" alt="icon">
                                    <h3 class="counter">1748</h3>
                                    <h6>Propriedades Listadas</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="public/assets/img/icon/world-map.png" alt="icon">
                                    <h3 class="counter">4287</h3>
                                    <h6>Destinos</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="public/assets/img/icon/calander.png" alt="icon">
                                    <h3 class="counter">40</h3>
                                    <h6>Reservas</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Area -->
    <section id="customer_reviews" class="section_padding_bottom">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Veja a opnião de quem já viajou com a gente</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <!-- <h5>08 Dec, 2021</h5> -->
                            </div>
                            <div class="all_review_star">
                                <h5>Excelente</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="public/assets/img/review/review6.png" alt="img">
                            <h4>Leia Organa</h4>
                            <span>Senadora</span>
                            <p>"O preço das passagens era bastante acessível, e o serviço foi surpreendentemente bom. O assento era confortável e o entretenimento a bordo mantinha-me distraída durante o voo. Definitivamente voltarei a voar com eles! "</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <!-- <h5>08 Dec, 2021</h5> -->
                            </div>
                            <div class="all_review_star">
                                <h5>Excelente</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="public/assets/img/review/review4.png" alt="img">
                            <h4>Ahsoka Tano</h4>
                            <span>Esgrimista</span>
                            <p>"Desde o check-in até o desembarque, tudo foi perfeito! A equipe foi extremamente atenciosa e sempre disposta a ajudar. O voo foi pontual e a comida estava deliciosa. Recomendo a todos que buscam conforto e eficiência durante suas viagens!"</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <!-- <h5>08 Dec, 2021</h5> -->
                            </div>
                            <div class="all_review_star">
                                <h5>Excelente</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="public/assets/img/review/review7.png" alt="img">
                            <h4>Asajj Ventress</h4>
                            <span>Cabeleireira</span>
                            <p>" Fiquei impressionada com o nível de conforto dos assentos e o sistema de entretenimento de bordo, que me manteve ocupada durante todo o voo. A equipe foi cordial e atenciosa, e a refeição servida estava ótima. Estou muito satisfeitoa e mal posso esperar para voar com eles novamente! "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Area -->
    <!-- <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="assets/img/common/email.png" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

@endsection