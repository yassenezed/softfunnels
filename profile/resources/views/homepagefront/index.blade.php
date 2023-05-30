<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Soft Pages</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('homepagefront/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css"  href="{{ asset('homepagefront/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('homepagefront/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('homepagefront/images/fevicon.png') }}">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('homepagefront/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ asset('homepagefront/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{ asset('homepagefront/css//owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
               <img src="{{asset('img/navbar/softpages.png')}}" alt="" class="src" style="
               width: 220px;
               height: auto;
           ">  
              </div>
              <ul class="nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#section1">À Propos</a></li>
                <li class="nav-item"><a class="nav-link" href="#section2">Avantages</a></li>
                <li class="nav-item"><a class="nav-link" href="#section3">Contactez-Nous</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('signupview.index')}}"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('signinn.index')}}"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
              </ul>
            </div>
          </nav>
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div class="container-fluid">
               <section class="slide-wrapper">
                  <div class="container-fluid">
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="container">
                                 <div class="banner_main">
                                    <h3 class="banner_taital">Parce que vous méritez une meilleure plateforme de Landing Pages !</h3>
                                    <p class="banner_text">Offrez à votre entreprise une plateforme de landing pages exceptionnelle !</p>
                                    <div class="btn_main">
                                       <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                       <div class="readmore_bt"><a href="#">Read More</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="banner_main">
                                    <h3 class="banner_taital">Parce que vous méritez une meilleure plateforme de Landing Pages !</h3>
                                    <p class="banner_text">Offrez à votre entreprise une plateforme de landing pages exceptionnelle !</p>
                                    <div class="btn_main">
                                       <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                       <div class="readmore_bt"><a href="#">Read More</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="banner_main">
                                    <h3 class="banner_taital">Parce que vous méritez une meilleure plateforme de Landing Pages !</h3>
                                    <p class="banner_text">Offrez à votre entreprise une plateforme de landing pages exceptionnelle !</p>
                                    <div class="btn_main">
                                       <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                       <div class="readmore_bt"><a href="#">Read More</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="banner_main">
                                    <h3 class="banner_taital">Parce que vous méritez une meilleure plateforme de Landing Pages !</h3>
                                    <p class="banner_text">Offrez à votre entreprise une plateforme de landing pages exceptionnelle !</p>
                                    <div class="btn_main">
                                       <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                       <div class="readmore_bt"><a href="#">Read More</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="banner_main">
                                    <h3 class="banner_taital">Parce que vous méritez une meilleure plateforme de Landing Pages !</h3>
                                    <p class="banner_text">Offrez à votre entreprise une plateforme de landing pages exceptionnelle !</p>
                                    <div class="btn_main">
                                       <div class="contact_bt active "><a href="#">Contact Us</a></div>
                                       <div class="readmore_bt"><a href="#">Read More</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <!--banner section end -->
      </div>
      <!--header section end -->
      <!--about section start -->
      <div class="about_section layout_padding" style="
      border-bottom: 11px solid #1383a2;
  ">
         <div class="container" id="section1">
            <h1 class="about_taital">À PROPOS</h1>
            <p class="about_text">Notre service de création de pages de destination est conçu pour vous aider à capturer l'attention de vos visiteurs et à les convertir en clients.</p>
            <div class="about_section_2">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="about_image"><img src="{{ asset('homepagefront/images/landingpage.svg')}}"></div>
                  </div>
                  <div class="col-lg-6">
                     <div class="about_taital_main">
                        <p class="lorem_text">Notre plateforme de création de pages de destination simplifie le processus de création en éliminant le besoin de programmation ou de conception graphique. Avec une variété de fonctionnalités intégrées telles que des formulaires de capture d'informations, des témoignages clients et des appels à l'action percutants, vous pouvez créer des pages qui génèrent des résultats tangibles.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

       <!-- Pricing -->
       <div class="card mb-5 mb-sm-0">
         <!-- Header -->
         <header class="card-header text-center p-5">
           <h4 class="h6 text-primary mb-3">Basique</h4>
           <span class="d-block">
             <span class="display-4 text-dark">
               90 MAD
             </span>
             <span class="d-block text-secondary font-size-14">par mois</span>
           </span>
         </header>
         <!-- End Header -->

         <!-- Content -->
         <div class="card-body p-5">
           <ul class="list-unstyled mb-4">
             <li class="font-size-14 py-2">Génération sécurisée de vos landing pages</li>
             <li class="font-size-14 py-2">Génération sécurisée de vos blocs</li>
             <li class="font-size-14 py-2">Réception sécurisée des formulaires clients</li>
             <li class="font-size-14 py-2">Ajout facile des clients en un seul clic</li>
             <li class="font-size-14 py-2">Support client réactif</li>

           </ul>

           <a href="{{ route('signupview.index', ['id_pack' => '1', 'price' => '90', 'type' => 'Basique' , 'quantity' => '1' ]) }}" class="href">
            <button type="button" class="btn btn-block btn-sm btn-primary">Acheter Maintenant</button>
          </a>         </div>
         <!-- End Content -->
       </div>
       <!-- End Pricing -->
      <!--about section end -->
      {{-- <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">What We Do</h1>
            <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a page when</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="icon_box">
                        <div class="icon_1"><img src="{{ asset('homepagefront/images/icon-1.png')}}"></div>
                     </div>
                     <h4 class="selection_text">Selection of Business</h4>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or randomised</p>
                     <div class="icon_box">
                        <div class="icon_1"><img src="{{ asset('homepagefront/images/icon-4.png')}}"></div>
                     </div>
                     <h4 class="selection_text">Securities Transactions</h4>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or randomised</p>
                  </div>
                  <div class="col-lg-4">
                     <div class="icon_box">
                        <div class="icon_1"><img src="{{ asset('homepagefront/images/icon-2.png')}}"></div>
                     </div>
                     <h4 class="selection_text">Research and Analytics</h4>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or randomised</p>
                     <div class="icon_box">
                        <div class="icon_1"><img src="{{ asset('homepagefront/images/icon-5.png')}}"></div>
                     </div>
                     <h4 class="selection_text">Advisory Activities</h4>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or randomised</p>
                  </div>
                  <div class="col-lg-4">
                     <div class="icon_box">
                        <div class="icon_1"><img src="{{ asset('homepagefront/images/icon-3.png')}}"></div>
                     </div>
                     <h4 class="selection_text">Business Plans</h4>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or randomised</p>
                     <div class="icon_box">
                        <div class="icon_1"><img src="{{ asset('homepagefront/images/icon-6.png')}}"></div>
                     </div>
                     <h4 class="selection_text">Management and Asset</h4>
                     <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or randomised</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end --> --}}
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container" id="section2">
            <div class="row">
               <div class="col-md-6">
                  <div class="blog_img"><img src="{{ asset('homepagefront/images/Filter-rafiki.svg')}}"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="blog_taital">Augmentez vos ventes et votre génération de leads</h1>
                  <p class="blog_text">Grâce à notre service de création de landing pages. Que vous ayez besoin d'une page pour promouvoir un produit, collecter des adresses e-mail ou organiser un événement, notre outil intuitif vous permet de créer des pages de destination percutantes en quelques étapes simples.</p>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      {{-- <!-- events section start -->
      <div class="events_section layout_padding">
         <div class="container">
            <h1 class="events_taital">Follow Our Video For Solved Your Problem</h1>
            <div class="events_section_2">
               <div class="events_bg">
                  <div class="play_icon"><a href="#"><img src="{{ asset('homepagefront/images/play-icon.png')}}"></a></div>
               </div>
            </div>
            <div class="seemore_bt"><a href="#">See More</a></div>
         </div>
      </div>
      <!-- events section end --> --}}
      <!-- contact section start -->
      <br><br>
      <div class="contact_section layout_padding">
         <div class="container" id="section3">
            <h3 class="contact_taital">Contactez Nous</h3>
            <div class="contact_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="contact_main">
                        <input type="text" class="mail_text" placeholder="Nom Complet" name="Full Name">
                        <input type="text" class="mail_text" placeholder="Telephone" name="Phone Number">
                        <input type="text" class="mail_text" placeholder="Email" name="Email">
                        <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                        <div class="send_bt"><a href="#">Envoyer</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.2945809003572!2d-7.6437572248851176!3d33.571699973341715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d32bb7d6d747%3A0xf1537bf44c209786!2sCentre%20Commercial%20Nadia!5e0!3m2!1sfr!2sma!4v1684425086738!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- testimonial section start -->
      <div class="testimonial_section layout_padding">
         <div id="my_carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
               <li data-target="#my_carousel" data-slide-to="1"></li>
               {{-- <li data-target="#my_carousel" data-slide-to="2"></li> --}}
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="testimonial_taital">Témoignage</h1>
                     <p class="testimonial_text">Découvrez les témoignages authentiques de nos clients satisfaits, partageant leur expérience de notre produit/service et comment cela a considérablement amélioré leur présence en ligne</p>
                     <div class="testimonial_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                    <h4 class="jonimo_text">Sophie, entrepreneuse</h4>
                                    <div class="quick_icon"><img src="{{ asset('homepagefront/images/quick-icon.png')}}"></div>
                                    <div class="quick_icon_1"><img src="{{ asset('homepagefront/images/quick-icon1.png')}}"></div>
                                 </div>
                                 <p class="dummy_text">Depuis que j'ai commencé à utiliser cette plateforme de landing pages, mes taux de conversion ont explosé ! J'ai pu créer des pages d'accueil percutantes en quelques minutes seulement, sans avoir besoin de compétences techniques. Cela a vraiment boosté mon activité en ligne. Merci pour cette solution facile à utiliser et efficace !</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                    <h4 class="jonimo_text">Marc, responsable marketing</h4>
                                    <div class="quick_icon"><img src="{{ asset('homepagefront/images/quick-icon.png')}}"></div>
                                    <div class="quick_icon_1"><img src="{{ asset('homepagefront/images/quick-icon1.png')}}"></div>
                                 </div>
                                 <p class="dummy_text">Notre équipe avait besoin d'une solution de landing pages rapide et sécurisée pour nos campagnes publicitaires. Grâce à cette plateforme, nous avons pu créer et déployer des pages d'accueil personnalisées en un rien de temps. La variété des fonctionnalités et des modèles disponibles nous a permis de nous démarquer et d'obtenir des résultats remarquables. Je recommande vivement cette plateforme à tous les marketeurs en quête de performance.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="testimonial_taital">Témoignage</h1>
                     <p class="testimonial_text">Découvrez les témoignages authentiques de nos clients satisfaits, partageant leur expérience de notre produit/service et comment cela a considérablement amélioré leur présence en ligne</p>
                    <div class="testimonial_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                    <h4 class="jonimo_text">Thomas, consultant en marketing digital</h4>
                                    <div class="quick_icon"><img src="{{ asset('homepagefront/images/quick-icon.png')}}"></div>
                                    <div class="quick_icon_1"><img src="{{ asset('homepagefront/images/quick-icon1.png')}}"></div>
                                 </div>
                                 <p class="dummy_text">En tant que consultant, je recherche constamment des outils qui me permettent de fournir des résultats tangibles à mes clients. Cette plateforme de landing pages est devenue un incontournable dans ma boîte à outils. Sa flexibilité, sa facilité d'utilisation et son support client exceptionnel en font une valeur sûre. Je peux créer des pages d'accueil hautement personnalisées qui convertissent, tout en gagnant du temps et en maximisant mon retour sur investissement. Je recommande chaudement cette solution à tous mes collègues du marketing.</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                    <h4 class="jonimo_text">Alice, propriétaire d'un site e-commerce </h4>
                                    <div class="quick_icon"><img src="{{ asset('homepagefront/images/quick-icon.png')}}"></div>
                                    <div class="quick_icon_1"><img src="{{ asset('homepagefront/images/quick-icon1.png')}}"></div>
                                 </div>
                                 <p class="dummy_text">Je cherchais un moyen simple et efficace de promouvoir mes produits en ligne. Cette plateforme de landing pages a été une véritable révélation ! J'ai pu créer des pages d'accueil attrayantes, optimisées pour la conversion, sans avoir à me soucier de la sécurité ou de la compatibilité mobile. Depuis que j'utilise cette solution, mes ventes ont augmenté de façon significative. C'est un investissement qui en vaut vraiment la peine !</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{-- <div class="carousel-item">
                  <div class="container">
                     <h1 class="testimonial_taital">Témoignage</h1>
                     <p class="testimonial_text">Découvrez les témoignages authentiques de nos clients satisfaits, partageant leur expérience de notre produit/service et comment cela a considérablement amélioré leur présence en ligne</p>
                     <div class="testimonial_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                    <h4 class="jonimo_text">Jonimo</h4>
                                    <div class="quick_icon"><img src="{{ asset('images/quick-icon.png')}}"></div>
                                    <div class="quick_icon_1"><img src="{{ asset('images/quick-icon1.png')}}"></div>
                                 </div>
                                 <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                    <h4 class="jonimo_text">Mark Duo</h4>
                                    <div class="quick_icon"><img src="{{ asset('images/quick-icon.png')}}"></div>
                                    <div class="quick_icon_1"><img src="{{ asset('images/quick-icon1.png')}}"></div>
                                 </div>
                                 <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="location_main">
               <div class="location_text"><img src="{{asset('homepagefront/images/map-icon.png')}}"><span class="padding_left_10"><a href="#section3">Location</a></span></div>
               <div class="location_text center"><img src="{{asset('homepagefront/images/call-icon.png')}}"><span class="padding_left_10"><a href="#">Appeler : +212 (0) 5 20 303 483 </a></span></div>
               <div class="location_text right"><img src="{{asset('homepagefront/images/mail-icon.png')}}"><span class="padding_left_10"><a href="#">info@softsevenart.com</a></span></div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-4">
                     <h2 class="footer_taital">SoftPages</h2>
                     <p class="footer_text">Générez des landing pages simplement et en toute sécurité avec notre service. Créez des pages attrayantes et efficaces sans effort, grâce à notre interface. Profitez de fonctionnalités avancées pour personnaliser votre page et capturer l'attention de vos visiteurs. Avec notre solution, la création de landing pages n'a jamais été aussi facile et sécurisée. Essayez notre service dès aujourd'hui et optimisez votre conversion en ligne.</p>
                  </div>
                  <div class="col-lg-4">
                     <h2 class="footer_taital">Services</h2>
                     <p class="footer_text">Nos services vous offrent la possibilité de créer des landing pages facilement et en toute sécurité.</p>
                  </div>
                  <div class="col-lg-4">
                     <h2 class="footer_taital">Abonnez-vous</h2>
                     <input type="text" class="Enter_text" placeholder="Entrer Votre Email" name="Enter Your Email">
                     <div class="subscribe_bt"><a href="#">Abonnez-Vous</a></div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="{{ asset('homepagefront/images/fb-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{ asset('homepagefront/images/twitter-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{ asset('homepagefront/images/linkedin-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{ asset('homepagefront/images/instagram-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{ asset('homepagefront/images/youtub-icon.png')}}"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© Copyright 2023  <a href="{{route('home')}}">| SoftPages</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('homepagefront/js/jquery.min.js')}}"></script>
      <script src="{{ asset('homepagefront/js/popper.min.js') }}"></script>
      <script src="{{ asset('homepagefront/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('homepagefront/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{ asset('homepagefront/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('homepagefront/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('homepagefront/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{ asset('homepagefront/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>