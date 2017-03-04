<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEO::generate() !!}

    <title>Lipe & Su</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}"/>
    {{-- Google Fonts --}}
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    @include('scripts')
</head>

<body>

<header>
    <div class="header_plane anim"></div>

    {{-- Menu Button --}}
    <a class="main_menu_btn">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
    </a>

    {{-- Submenu --}}
    <div class="main_menu_block">
        <div class="menu_wrapper">
            <div class="sub_menu anim">
                <ul>
                    <li><a id="btn-menu-guests" href="#guests">Padrinhos e Madrinhas</a></li>
                    <li><a id="btn-menu-when_where" href="#when_where">Onde & Quando</a></li>
                    <li><a id="btn-menu-rsvp" href="#rsvp">Confirmar Presença</a></li>
                    {{--<li><a id="btn-menu-gallery" href="#gallery">Nossa Galeria</a></li>--}}
                    <li><a id="btn-menu-registry" href="#registry">Lista de Presentes</a></li>
                </ul>
            </div>
            <div class="sub_img anim"></div>
        </div>
    </div>
    {{-- Submenu End --}}

</header>
{{-- Header End --}}

<div class="page">

    {{-- Intro --}}
    <section class="home_intro white_txt parallax2" data-image="{{$picture}}">
        <div class="home_txt" data-0="opacity:1" data-top-bottom="opacity:0">

            {{-- Intro Text --}}

            <div class="title1 title1_2">Vamos Casar!</div>
            <div class="bullet"><span>17 <b>06</b></span></div>
            <div class="title0">2017</div>
            <a href="#married" class="intro_down"><span><i class="fa fa-angle-down"></i></span></a>
        </div>
        <div class="into_firefly"></div>
    </section>
    {{-- Intro End --}}

    {{-- Married --}}
    <section class="married clearfix" id="married">
        <div class="container">
            <div class="im1 parallax" data-bottom="left:20%" data-center="left:0" data-image="{{asset('images/felipe-profile.jpg')}}">
                <div class="im_arrows"></div>
            </div>
            <div class="im2 parallax" data-bottom="right:20%" data-center="right:0" data-image="{{asset('images/suellen-profile.jpg')}}">
                <div class="im_arrows"></div>
            </div>

            <div class="married_txt" data-bottom="opacity:0" data-center="opacity:1">
                <h2><span>Você está</span> Convidado!</h2>
                Dia 17 de Junho de 2017<br>
                <b>Felipe Rodrigues & Suellen Leite</b><br>
                <a id="btn-go-rsvp" href="#rsvp" class="btn go">CONFIRME JÁ</a>

                <div class="countdown"></div>
                <div class="double_arrow"></div>
            </div>
        </div>
    </section>
    {{-- Married End --}}

    {{-- The Crew --}}
    <section class="guests" id="guests">
        <div class="container">
            <h2><span>Nossos</span> Padrinhos e Madrinhas</h2>

            <div class="guest_men">
                {{-- Best Man & Maid of Honor  --}}
                @foreach($bestMen as $man)
                    <div class="guest_item">
                        <div class="guest_photo"><img src="{{getFacebookPicture($man["picture"])}}" alt="{{$man["name"]}}"></div>
                        <div class="guest_title"><span>Padrinho</span> {{$man["name"]}}</div>
                        {{--<i class="flaticon-balloon14"></i> Top--}}
                    </div>
                @endforeach
            </div>


            <div class="guest_women">
                @foreach($bridesMaid as $maid)
                    <div class="guest_item">
                        <div class="guest_photo"><img src="{{getFacebookPicture($maid["picture"])}}" alt="{{$maid["name"]}}"></div>
                        <div class="guest_title"><span>Madrinha</span> {{$maid["name"]}}</div>
                        {{--<i class="flaticon-balloon14"></i> Top--}}
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- The Crew End --}}

    {{-- When & Where --}}
    <section class="when_where white_txt parallax" id="when_where" data-image="{{asset('images/catavento.jpg')}}" data-bottom-top="opacity:1;" data-bottom="opacity:1;">
        <div class="over"></div>
        <div class="container">

            {{-- Photocamera Icon --}}
            <div class="photocamera"><span class="flaticon-slr2"></span></div>

            <div class="when_where_container opacity">
                <h2><span>Onde &amp;</span> Quando</h2>

                {{-- Texts --}}
                <div class="pattern1"></div>

                <div class="title1">Sítio Catavento</div>
                <div class="title2"></div>
                <div class="title3">
                    Rodovia BR-101 Norte - Muribeca <br/>Serra, ES<br/>
                </div>

                <div class="pattern2"></div>
                <div class="title4">Sábado, 17 de Junho de 2017</div>
                <div class="title1">Ás 15h30</div>
                <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJA6L965mKtwARLyJacssHVj8&key=AIzaSyBYF9dF3HJPC7_jJsn8Bsb-puah8kpuRcQ" allowfullscreen></iframe>
                <div class="pattern3"></div>
            </div>
        </div>
    </section>
    {{-- When & Where End --}}

    {{-- RSVP --}}
    <section class="rsvp" id="rsvp">
        <div class="container">
            <h2><span>Venha para </span>&nbsp;&nbsp;Nossa Festa!</h2>

            <div id="envelope" data-100-top="@class:active" data-200-bottom="@class: ">
                <div class="envelope_front">
                    <div class="env_top_top"></div>
                </div>
                <div class="envelope_back">
                    <div class="env_top"></div>
                </div>

                <div class="paper">
                    <div class="alert alert-success alert-dismissible" style="display: none">Confirmação Enviada!</div>

                    {{-- End Date of Reservation --}}
                    <div class="paper_title">Confirme sua Presença</div>

                    {{-- Form --}}
                    <form id="form_rsvp" action="{{route('rsvp')}}">
                        {{csrf_field()}}
                        <div class="txt_input">
                            <input type="text" class="form-control" name="name" placeholder="Seu Nome" required>
                        </div>
                        <div class="txt_input">
                            <input type="text" class="form-control" name="phone" placeholder="Telefone" pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" required>
                        </div>
                        <input type="submit" value="Enviar" class="btn btn-lg">

                        {{-- Form Additional text --}}
                        <p>Estamos animados em ver você! Quaisquer Dúvidas:</p>
                        <p>
                            <b>Email:</b> <a target="_blank" href="mailto:filpgame@gmail.com">filpgame@gmail.com</a>
                            <br/><b>Telegram:</b> <a target="_blank" href="http://t.me/filpgame">@filpgame</a>
                            <br/><b>Whatsapp:</b> <a target="_blank" href="intent://send/+5521969950980#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">+5521969950980</a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
    {{-- RSVP End --}}

    {{-- Gift Registry --}}
    <section class="registry" id="registry">
        <div class="container">
            <h2><span>Lista de </span> Presentes</h2>

            <p>O que nós mais queremos para nosso casamento é ter nossos amigos e família presentes para celebrar esse momento único conosco. <br>
                Então antes de tudo nós seremos totalmente gratos com a sua presença!</p>
            <p>Se você gostaria de nos dar algo de presente, nós também vamos amar! Você encontra nossa lista aqui:</p>

            {{-- Logos & Links --}}
            <div>
                <a id="gift-list-pontofrio" target="_blank" href="{{route('presente')}}"><img src="http://www.mundodapromocao.com.br/wp-content/uploads/2016/05/Logo-Cupom-de-Desconto-Pontofrio.png" alt="Presente" width="420" height="100"></a>
            </div>
        </div>
    </section>
    {{-- Gift Registry End --}}

    {{-- Gallery --}}
    {{--<section class="gallery" id="gallery">
        <h2><span>Nossa</span> Galeria</h2>
        <div class="gallery_wrapper">
            @foreach($galleryPictures as $picture)
                <div class="gallery_item">
                    <div class="gallery_txt">
                        <a href="{!! $picture !!}"></a>
                    </div>
                    <img src="{!! $picture !!}">
                </div>
            @endforeach
        </div>
    </section>--}}
    {{-- Gallery End --}}

    {{-- Footer --}}
    <section class="footer white_txt parallax" id="footer" data-image="{!! $footerPicture !!}">
        <div class="over"></div>
        <div class="container">

            {{-- Thanks Text --}}
            <div class="thanks">Obrigado por visitar nosso site!</div>
            <div class="footer_txt">
                <div class="title1">Felipe & Suellen</div>

                {{-- Copyrights --}}
                <div class="copyrights">Matthew & Mallory - One Page Wedding Template</div>
            </div>
        </div>
    </section>


    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    {{-- CountDown JS --}}
    <script type="text/javascript" src="{{asset('js/jquery.plugin.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.countdown.min.js')}}"></script>
    {{-- ColorBox JS --}}
    <script src="{{asset('js/jquery.colorbox-min.js')}}"></script>
    {{-- OWL Carousel JS --}}
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    {{-- Bootstrap JS --}}
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    {{-- ScrollR JS --}}
    <script src="{{asset('js/skrollr.min.js')}}"></script>
    {{-- PrefixFree --}}
    <script src="{{asset('js/prefixfree.min.js')}}"></script>
    {{-- FireFly JS --}}
    <script src="{{asset('js/jquery.firefly-0.3-min.js')}}"></script>
    {{-- Theme JS --}}
    <script src="{{asset('js/script.js')}}"></script>
</div>

</body>
</html>
