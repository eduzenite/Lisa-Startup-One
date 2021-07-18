<x-institutional-layout>
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-dark page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 class="">Sobre <strong>nós</strong></h1>

                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                            <li><a href="{{ route('welcome') }}">Início</a></li>
                            <li class="active">Sobre nós</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col">
                    <p>A Lisa é uma Inteligência Artificial que coleta dados de pessoas através de feedbacks diários, ajudando na identificação de burnout e início de depressão. Tratar é mais caro que prevenir, por isso, a Lisa ajuda as empresas a identificar sintomas que apontem um início de depressão ou exaustão em seus funcionários, para que esses possam ser ajudados antes de entrar em quadros mais sérios dessas doenças.</p>
                    <p>Deixar que a Lisa cuide de seus funcionários pode causar impactos financeiros a médio e longo prazo, mas o impacto que causamos na vida das pessoas é algo muito maior, algo que muitas vezes não é percebido e só quem já passou por uma depressão ou burnout sabe.</p>
                    <p>A Lisa atua de forma bem simples, utilizando um processo de três etapas para evitar que as pessoas evoluam para quadros graves:</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col">
                    <div class="cards custom-cards h-auto mt-4 mb-xl-4">
                        <div class="cards-container row justify-content-center justify-content-xl-between p-relative top-0 z-index-2">
                            <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                                <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                    <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                        <img src="{{ asset('img/about-us/acompanhamento.png') }}" class="img-fluid" alt="Healthcare Center">
                                        <h4 class="card-title mb-1 font-weight-bold">Acompanhamento</h4>
                                        <p class="card-text text-center">A Lisa irá solicitar a cada um dos seus colaboradores, feedbacks constantes do seu dia a dia. Esses feedbacks são confidenciais e analisados apenas pelo psicólogo quando necessário.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                                <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100">
                                    <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                        <img src="{{ asset('img/about-us/identificacao.png') }}" class="img-fluid" alt="Immediate Center">
                                        <h4 class="card-title mb-1 font-weight-bold">Identificação</h4>
                                        <p class="card-text text-center">Essas interações constantes dos colaboradores dão a Lisa um grande material de análise para que ela possa identificar possíveis quadros de depressão ou burnout caso sentimentos ruins sejam identificados por muito tempo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                                <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                    <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                        <img src="{{ asset('img/about-us/alerta.png') }}" class="img-fluid" alt="Diagnostic Center">
                                        <h4 class="card-title mb-1 font-weight-bold">Alerta</h4>
                                        <p class="card-text text-center">Se um colaborador tiver um possível quadro identificado, nossos psicólogos receberão um alerta. Caso seja identificado o início de um quadro de depressão ou burnout, nossa equipe irá prescrever um tratamento.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="more-about my-2" data-plugin-lazyload data-plugin-options="{'threshold': 300, 'effect':'fadeIn'}" data-original="{{ asset('img/about-us/problem.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 p-relative overflow-hidden col-cuttin-more-about"></div>
                    <div class="col-xs-12 col-lg-6 p-relative pt-5 py-lg-5 bg-color-light z-index-1 pl-lg-5 pl-xl-0">
                        <p class="text-uppercase mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Um Problema Mundial</p>
                        <h3 class="text-color-quaternary font-weight-bolder text-capitalize mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Depressão e Burnout</h3>
                        <p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Segundo a Organização Pan-Americana de Saúde, estima-se que mais de 300 mil pessoas sofram de depressão em todo o mundo. Esse transtorno podem causar grande sofrimento no trabalho, na escola ou no meio familiar, levando em casos mais sérios, até ao suicídio. O sofrimento causado por essa doença, não é apenas para quem a desenvolve, mas para todos ao seu redor.</p>
                        <p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Segundo a OMS, o burnout é resultante de "estresse crônico de trabalho que não foi administrado com sucesso" e atinge 32% da população brasileira. Essa síndrome está relacionada diretamente ao ambiente de trabalho e pode causar falta de energia e exaustão.</p>
                        <p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Várias empresas criaram ações coletivas para evitar esse tipo de doenças em seus funcionários, mas ações individuais podem ser mais efetivas em alguns casos. Por isso a Lisa foi criada, para ajudar empresas a:</p>
                        <div class="d-flex justify-content-start flex-column flex-xl-row">
                            <ul class="list list-icons list-icons-style-2 list-icons-sm custom-list-icons mb-1 mb-xl-3">
                                <li class="text-color-quaternary font-weight-bolder mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"><i class="fas fa-check text-color-quaternary"></i>Dar melhor qualidade de vida para seus funcionários</li>
                                <li class="text-color-quaternary font-weight-bolder mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><i class="fas fa-check text-color-quaternary"></i>Evitar perdas financeiras por conta de afastamentos</li>
                                <li class="text-color-quaternary font-weight-bolder appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><i class="fas fa-check text-color-quaternary"></i>Colaborar no combate de uma doença mundial</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pb-5 py-lg-5">
            <div class="row">
                <div class="col">
                    <p>A Lisa irá interagir com seus funcionários pelo celular, através de um aplicativo iOS ou Android, pelo computador, através de uma um aplicativo web ou até por e-mail. É possível interagir com a Lisa por texto e até por áudio.</p>
                </div>
            </div>

            <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                <div class="row pt-4 pb-4">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            <div class="card-body p-3 z-index-1">
                                <a href="{{ asset('img/about-us/mobile.jpg') }}">
                                    <img class="card-img-top border-radius-0" src="{{ asset('img/about-us/mobile.jpg') }}" alt="Card Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                            <div class="card-body p-3 z-index-1">
                                <a href="{{ asset('img/about-us/web.jpg') }}">
                                    <img class="card-img-top border-radius-0" src="{{ asset('img/about-us/web.jpg') }}" alt="Card Image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 border-radius-0 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="card-body p-3 z-index-1">
                                <a href="{{ asset('img/about-us/email.jpg') }}">
                                    <img class="card-img-top border-radius-0" src="{{ asset('img/about-us/email.jpg') }}" alt="Card Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="parallax mb-0 section section-text-light section-parallax" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '210%'}" data-image-src="{{ asset('img/about-us/parallax.jpg') }}">
            <section class="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-lg-9">
                            <div class="call-to-action-content">
                                <h3>Quer saber mais sobre como a Lisa pode ajudar sua empresa?</h3>
                                <p class="mb-0">Então clique no botão ao lado e descubra como a Lisa trabalha para melhorar a vida das pessoas.</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="call-to-action-btn">
                                <a href="{{ route('contact') }}" target="_blank" class="btn btn-modern text-2 btn-primary">Como funciona</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </div>
</x-institutional-layout>
