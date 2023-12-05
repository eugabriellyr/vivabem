@extends('layout.layout')
{{-- Esse conteudo sendo uma extensão da página layout --}}


@section('title','Musculação')

@section('conteudo')
{{-- Tudo que terá na página Musculação --}}

    <img src="../assets/img/about/fundoheader.png" class="img-fluid">

<!--==============================
    Breadcumb
    ============================== -->

    {{-- <div class="breadcumb-wrapper" data-bg-src="../assets/img/banner-musc.png"> --}}
        <div class="breadcumb-wrapper background-image" style=" background-image: url(../assets/img/bg/banner-musc1.png);}" data-bg-src="../assets/img/bg/banner-musc1.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Musculação Detalhes</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">MODALIDADE</a></li>
                            <li class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area 02
    ==============================-->
    <div class="service-details-area space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="service-page-single">
                        <div class="page-img mb-50">
                            <img src="../assets/img/normal/musc.png" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">Musculação</h2>
                            <p class="mb-30">A Musculação é uma modalidade de exercício físico que se destaca por seu foco no desenvolvimento e fortalecimento dos músculos. Durante um treino de musculação, os praticantes realizam uma série de exercícios que envolvem a contração e o alongamento dos músculos, geralmente utilizando pesos ou máquinas específicas. Esse tipo de treinamento não apenas promove o aumento da massa muscular, mas também contribui para a melhoria da resistência, da força e da densidade óssea.</p>
                            <p class="mb-50">Além disso, a musculação oferece benefícios para a saúde geral do corpo. Ao fortalecer os músculos, o treino de musculação pode ajudar na prevenção de lesões, na correção da postura e no aumento do metabolismo, favorecendo a perda de peso. Além disso, é uma prática versátil, adaptável a diferentes objetivos, seja para ganho de massa muscular, tonificação ou definição. A musculação também desempenha um papel crucial no suporte à saúde mental, uma vez que a liberação de endorfinas durante o exercício pode melhorar o humor e reduzir o estresse.</p>
                            <h3 class="page-subtitle mb-0">Treino de Musculação</h3>
                            <p>Como acontece os treinos de musculação?</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i> Escolha do treino</h6>
                                        <p>Os treinos de Musculação na nossa academia usam aparelhos que geralmente seguem um padrão estruturado para atingir objetivos específicos de condicionamento físico, força ou hipertrofia. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i> Seleção de exercícios</h6>
                                        <p> Com base nos objetivos do praticante, o treinador ou uma pessoa pode escolher uma série de exercícios que visem diferentes grupos musculares. Os aparelhos são selecionados com base na função muscular desejada.</p>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-25 mb-50">We offer a wide range of fitness services and programs to cater to different fitness levels, interests, and goals. Whether you're looking for personal training, group fitness classes, specialized workouts, or nutritional guidance, we have options to suit your needs.</p>
                            <h3 class="page-subtitle mb-0">Why Choose Us?</h3>

                            {{-- <div class="service-page-list checklist mb-50" data-bg-src="../assets/img/normal/service-details1-2.png"> --}}
                            <div class="service-page-list checklist mb-50" style=" background-image: url(../assets/img/normal/woman.png);}" data-bg-src="../assets/img/normal/woman.png">

                                <ul>
                                    <li><i class="far fa-check-circle"></i>Design workout program.</li>
                                    <li><i class="far fa-check-circle"></i>Progressive overload.</li>
                                    <li><i class="far fa-check-circle"></i>Focus on proper form.</li>
                                    <li><i class="far fa-check-circle"></i>Be consistent with training.</li>
                                    <li><i class="far fa-check-circle"></i>Adjust calorie intake as needed.</li>
                                </ul>
                            </div>
                            <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                <div class="accordion-card style2 active">
                                    <div class="accordion-header" id="collapse-item-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> What are your gym's operating hours?</button>
                                    </div>
                                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> What amenities and facilities does your gym offer?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> Do you provide personal training services?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Progressively communicate flexible human capital with best-of-breed schemas. Completely develop 2.0 infrastructures via bleeding-edge opportunities. Completely initiate world-class leadership skills via fully tested applications. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Todas Modalidades</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Cardiovascular</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>CrossFit</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Pilates</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Yoga</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Zumba..</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_schedule">
                            <h3 class="widget_title">Horários</h3>
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Monday – Friday 08:00 – 21:30 pm
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Saturday 09:00 – 16:00 pm
                                </li>
                                <li class="unavailable">
                                    <i class="far fa-clock"></i>
                                    Domingo fechado
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>


 @endsection
