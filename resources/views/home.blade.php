<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matthew & Mallory</title>

    <link rel="stylesheet" href="{{asset("css/all.css")}}">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

    @include('partials.analytics')
</head>

<body>


<!-- Header -->
<header>
    <div class="header_plane anim"></div>

    <!-- Menu Button -->
    <a class="main_menu_btn">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
    </a>


    <!-- Submenu -->
    <div class="main_menu_block">
        <div class="menu_wrapper">
            <div class="sub_menu anim">
                <ul>
                    <li><a href="#our_story">Nossa História</a></li>
                    <li><a href="#guests">Padrinhos e Madrinhas</a></li>
                    <li><a href="#when_where">Quando & Onde</a></li>
                    <li><a href="#hotel">Como Chegar</a></li>
                    <li><a href="#events">Momentos Marcantes</a></li>
                    <li><a href="#rsvp">Confirmar Presença</a></li>
                    <li><a href="#gallery">Nossa Galeria</a></li>
                    <li><a href="#registry">Lista de Presentes</a></li>
                </ul>
            </div>
            <div class="sub_img anim"></div>
        </div>
    </div>
    <!-- Submenu End -->

    <!-- Social Buttons -->
    <div class="header_social">
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
    </div>

</header>
<!-- Header End -->

<div class="page">

    <!-- Intro -->
    <section class="home_intro white_txt parallax2" data-image="{{$imageMain}}">
        <div class="home_txt" data-0="opacity:1" data-top-bottom="opacity:0">

            <!-- Intro Text -->

            <div class="title1 title1_2">Vamos Casar!</div>
            <div class="bullet"><span>07 <b>01</b></span></div>
            <div class="title0">2017</div>
            <a href="#married" class="intro_down"><span><i class="fa fa-angle-down"></i></span></a>
        </div>
        <div class="into_firefly"></div>
    </section>
    <!-- Intro End -->

    <!-- Married -->
    <section class="married clearfix" id="married">
        <div class="container">
            <div class="im1 parallax" data-bottom="left:20%" data-center="left:0" data-image="http://placehold.it/302x302">
                <div class="im_arrows"></div>
            </div>
            <div class="im2 parallax" data-bottom="right:20%" data-center="right:0" data-image="http://placehold.it/302x302">
                <div class="im_arrows"></div>
            </div>

            <div class="married_txt" data-bottom="opacity:0" data-center="opacity:1">
                <h2><span>Você está</span> Convidado!</h2>
                Dia 07 de Janeiro de 2017<br>
                <b>Felipe Rodrigues & Suellen Leite</b><br>
                <a href="#rsvp" class="btn go">CONFIRME JÁ</a>

                <div class="married_coundown"></div>
                <div class="double_arrow"></div>
            </div>
        </div>
    </section>
    <!-- Married End -->


    <!-- Story -->
    <section class="our_story" id="our_story">
        <h2><span>Nossa</span> História</h2>

        <!-- Wrapper -->
        <div class="story_wrapper">

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            The day we met
                            <i>03.12.2013</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <a class="youtube cboxElement" href="http://www.youtube.com/embed/hEowkXOP_Wg?rel=0">
                        <i class="flaticon-play102"></i></a>
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Our first holiday
                            <i>03.01.2014</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            First dinner together
                            <i>12.05.2014</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            The Proposal
                            <i>24.08.2014</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Here comes the baby
                            <i>10.01.2015</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Bridesmaids
                            <i>03.02.2015</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- The Crew -->
    <section class="guests" id="guests">
        <div class="container">
            <h2><span>Nossos</span> Bridal Party</h2>

            <!-- Guest Wrapper -->
            <div class="guest_wrapper">
                <!-- Best Man & Maid of Honor  -->


                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="Best Man"></div>
                    <div class="guest_title"><span>Best Man</span> Maxx Frazer</div>
                    <i class="flaticon-balloon14"></i> Best Haircut

                </div>
                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="Maid Of Honor"></div>
                    <div class="guest_title"><span>Maid of Honor</span> Alina Gilman</div>
                    <i class="flaticon-balloon14"></i> Made in Georgia

                </div>

                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="James"></div>
                    <div class="guest_title"><span>Groomsman</span> James Petersen</div>
                    <i class="flaticon-balloon14"></i> MNTN

                </div>
                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="Justin"></div>
                    <div class="guest_title"><span>Groomsman</span> Justin Allen</div>
                    <i class="flaticon-balloon14"></i> Hello Brooklyn

                </div>
                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="Suesen"></div>
                    <div class="guest_title"><span>Bridesmaid</span> Suisen Cram</div>
                    <i class="flaticon-balloon14"></i> Yes, I’m from Iowa

                </div>
                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="Kate"></div>
                    <div class="guest_title"><span>Bridesmaid</span> Kate Gaffney</div>
                    <i class="flaticon-balloon14"></i> O-H-I-O

                </div>


                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="Nick"></div>
                    <div class="guest_title"><span>Groomsman</span> Nick Barker</div>
                    <i class="flaticon-balloon14"></i> Jimmy Nickles

                </div>
                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="Nate"></div>
                    <div class="guest_title"><span>Groomsman</span> Nate Lourenco</div>
                    <i class="flaticon-balloon14"></i> Ivan Drago

                </div>
                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="Madison"></div>
                    <div class="guest_title"><span>Bridesmaid</span> Madison Le</div>
                    <i class="flaticon-balloon14"></i> Whose Garden?

                </div>
                <div class="guest_item">
                    <div class="guest_photo"><img src="http://placehold.it/200x200" alt="Lydia"></div>
                    <div class="guest_title"><span>Bridesmaid</span> Lydia Cram</div>
                    <i class="flaticon-balloon14"></i> Sister. Sister

                </div>

            </div>
            <!-- Guest Wrapper End -->
        </div>
    </section>
    <!-- The Crew End -->


    <!-- When & Where -->
    <section class="when_where white_txt parallax" id="when_where" data-image="{{asset('images/pictures/IMG_20160214_180815345.jpg')}}" data-bottom-top="opacity:0;" data-bottom="opacity:1;">
        <div class="over"></div>
        <div class="container">

            <!-- Photocamera Icon -->
            <div class="photocamera"><span class="flaticon-slr2"></span></div>

            <div class="when_where_container opacity">
                <h2><span>Where &amp;</span> When</h2>

                <!-- Texts -->
                <div class="pattern1"></div>
                <div class="title1">The Historic</div>
                <div class="title2">Redhouse Depot</div>
                <div class="title3"><a href="https://goo.gl/maps/dhx42" target="_blank">
                        320 Church Street <br/>Huntsville, Alabama</a><br/><i class="flaticon-map35"></i></div>

                <div class="pattern2"></div>
                <div class="title1">5 o'clock</div>
                <div class="title5">IN THE EVENING</div>
                <div class="title4">September Nineteen<br>Two Thousand and Fifteen</div>
                <div class="pattern3"></div>
            </div>
        </div>
    </section>
    <!-- When & Where End -->

    <!-- Hotel Reservation -->
    <section class="hotel" id="hotel">

        <div class="container opacity">
            <h2><span>Hotel</span> Reservation</h2>

            <p>We have reserved a block of rooms at the: <b>Pointe Hilton Tapatio Cliffs Resort</b><br>
                For reservations, please call: 800.811.1111<br>
                Please mention you are a guest of the: Mallory & Matthew Wedding Group code: MM</p>

            <p>To ensure room availability, please RSVP prior to: <b>september 10, 2015</b><br>
                If you have any questions, feel free to email us at:
                <a href="mailto:MatthewplusMallory@gmail.com">MatthewplusMallory@gmail.com</a></p>

        </div>
    </section>
    <!-- Hotel Reservation End -->


    <!-- Events -->
    <section class="our_story events" id="events">
        <h2><span>Our</span> Events</h2>

        <!-- Wrapper -->
        <div class="story_wrapper">

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            The day we met
                            <i>03.12.2013</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <a class="youtube cboxElement" href="http://www.youtube.com/embed/hEowkXOP_Wg?rel=0">
                        <i class="flaticon-play102"></i></a>
                    <div class="story_img_plane"></div>
                </div>

                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Our first holiday
                            <i>03.12.2013</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            First dinner together
                            <i>03.12.2013</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            The Proposal
                            <i>03.12.2013</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Here comes the baby
                            <i>03.12.2013</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="story_item">
                <div class="story_img parallax" data-image="http://placehold.it/640x400">
                    <div class="story_img_plane"></div>
                </div>
                <div class="story_plane">
                    <div class="story_back"></div>
                    <div class="story_txt">
                        <div class="story_title">
                            Bridesmaids
                            <i>03.12.2013</i>
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Events End -->

    <!-- RSVP -->
    <section class="rsvp" id="rsvp">
        <div class="container">
            <h2><span>Join</span> Our Party</h2>

            <div id="envelope" data-100-top="@class:active" data-200-bottom="@class: ">
                <div class="envelope_front">
                    <div class="env_top_top"></div>
                </div>
                <div class="envelope_back">
                    <div class="env_top"></div>
                </div>

                <div class="paper">

                    <!-- End Date of Reservation -->
                    <div class="paper_title">Please RSVP by August 2nd</div>

                    <!-- Form -->
                    <div id="div_block_1">
                        <div class="txt_input">
                            <input type="text" class="form-control" id="name_block_1" placeholder="Your Name">
                        </div>
                        <div class="txt_input">
                            <input type="text" class="form-control" id="guest_block_1" placeholder="Your Guest's Name">
                        </div>
                        <div class="txt_input">
                            <input type="text" class="form-control" id="email_block_1" placeholder="Your E-mail">
                        </div>
                        <div class="txt_input">
                            <input type="text" class="form-control" id="attending_block_1" placeholder="# Attending">
                        </div>
                        <input name="" type="submit" value="Send" class="btn btn-lg submit_block_1">


                        <!-- Form Additional text -->
                        <p>We’re excited to see you! Any questions, just email us at:
                            <a href="mailto:MatthewplusMallory@gmail.com">MatthewplusMallory@gmail.com</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- RSVP End -->


    <!-- Gallery -->
    <section class="gallery" id="gallery">
        <h2><span>Our</span> Gallery</h2>
        <div class="gallery_wrapper">
            <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="http://placehold.it/640x400" title="In late August, on a family vacation to Oahu"><b>Hawaii</b>
                        In late August, on a family vacation to Oahu
                    </a>
                </div>
                <img src="http://placehold.it/640x400" alt="Gallery 1">
            </div>
            <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="http://placehold.it/640x400" title="In Summer 2015"><b>New Zealand</b>
                        In Summer 2015
                    </a>
                </div>
                <img src="http://placehold.it/640x400" alt="Gallery 2">
            </div>
            <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="http://placehold.it/640x400" title="February 5, 2015 / New-York, USA"><b>Honeymoon</b>
                    </a>
                </div>
                <img src="http://placehold.it/640x400" alt="Gallery 3">
            </div>
            <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="http://placehold.it/640x400" title="February 5, 2015 / New-York, USA"><b>Honeymoon</b>
                        February 5, 2015 / New-York, USA
                    </a>
                </div>
                <img src="http://placehold.it/640x400" alt="Gallery 4">
            </div>
            <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="http://placehold.it/640x400" title="In late August, on a family vacation to Oahu"><b>Hawaii</b>
                        In late August, on a family vacation to Oahu
                    </a>
                </div>
                <img src="http://placehold.it/640x400" alt="Gallery 5">
            </div>
            <div class="gallery_item">
                <div class="gallery_txt">
                    <a href="http://placehold.it/640x400" title="In Summer 2015"><b>New Zealand</b>
                        In Summer 2015<br>
                    </a>
                </div>
                <img src="http://placehold.it/640x400" alt="Gallery 6">
            </div>
        </div>
    </section>
    <!-- Gallery End -->

    <!-- Gift Registry -->
    <section class="registry" id="registry">
        <div class="container">
            <h2><span>Gift</span> Registry</h2>

            <p>What we want most for our wedding is to have our friends and family there to celebrate the occasion with us. <br>
                So more than anything we’re simply grateful for your presence!</p>
            <p>If you would like to get us something, we’d love that too...you can find our registries here:</p>

            <!-- Logos & Links -->
            <div class="registry_wrapper">
                <a href="#"><img src="http://placehold.it/250x70" alt="Partners"></a>
                <a href="#"><img src="http://placehold.it/250x70" alt="Partners"></a>
                <a href="#"><img src="http://placehold.it/250x70" alt="Partners"></a>
                <a href="#"><img src="http://placehold.it/250x70" alt="Partners"></a>
            </div>
        </div>
    </section>
    <!-- Gift Registry End -->

    <!-- Footer -->
    <section class="footer white_txt parallax" id="footer" data-image="http://placehold.it/1920x300">
        <div class="over"></div>
        <div class="container">

            <!-- Thanks Text -->
            <div class="thanks">Thanks for Visiting our Website</div>
            <div class="footer_txt">


                <!-- Social Buttons -->
                <div class="footer_social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>

                <div class="title1">Matthew & Mallory</div>
                <!-- Copyrights -->
                <div class="copyrights">2015 Matthew & Mallory - One Page Wedding Template</div>

            </div>
        </div>
    </section>

    <script src="{{asset('js/all.js')}}"></script>
</div>

</body>
</html>
