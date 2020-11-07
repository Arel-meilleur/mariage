<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Tontine.Plus | Passez votre association à l'ère numérique">
      <meta name="keyword" content="Association, tontine, cotisation, afrique, mutuelle, djangui, nkap, matontine, tonteo, ami, social, solidarité">
      <meta name="author" content="Tontine.Plus">
      <!-- Title -->
      <title>Mariage</title>
      <!-- Favicon -->
      {{-- <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset("admin/assets/img/favicon/favicon-32x32.png")}} "> --}}
      <!--Bootstrap css-->
      <link rel="stylesheet" href="{{ asset("admin/assets/css/bootstrap.css")}} ">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="{{ asset("admin/assets/css/font-awesome.min.css")}}  ">
      <!--Magnific css-->
      <link rel="stylesheet" href=" {{ asset("admin/assets/css/magnific-popup.css")}} ">
      <!--Animatedheadline css-->
      <link rel="stylesheet" href="{{ asset("admin/assets/css/jquery.animatedheadline.css")}} ">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="{{ asset("admin/assets/css/owl.carousel.min.css")}} ">
      <link rel="stylesheet" href=" {{ asset("admin/assets/css/owl.theme.default.min.css")}} ">
      <!--Animate css-->
      <link rel="stylesheet" href="{{ asset("admin/assets/css/animate.min.css")}} ">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="{{ asset("admin/assets/css/style.css")}} ">
      <link rel="stylesheet" href="{{ asset("admin/assets/css/stylem.css")}} ">
      <!--Responsive css-->
      <link rel="stylesheet" href="{{ asset("admin/assets/css/responsive.css")}} ">
      <!--Videopopup css-->
      <link rel="stylesheet" href="{{ asset("admin/assets/css/videopopup.css")}} ">
   </head>
   <body>

       <?php
    	$basePath = "";
    	$env = getenv("TP_ENV");
    	switch ($env)
    	{
    		case "DEV":
    			$basePath = "http://". $_SERVER['SERVER_NAME'];
    			$appPath = "http://dev-web.tontine.plus";
    			break;

    		case "STAGING":
    			$basePath =  "http://". $_SERVER['SERVER_NAME'];
    			$appPath = "http://staging-web.tontine.plus";
    			break;

    		default:
    			$basePath =  "http://". $_SERVER['SERVER_NAME'];
    			$appPath = "http://app.tontine.plus";
    			break;
    	}

       ?>

<script>
   jQuery(document).ready(function() {
       jQuery(".myselect").chosen({
           disable_search_threshold: 10,
           no_results_text: "Oops, nothing found!",
           width: "100%"
       });

        jQuery('textarea.my-editor').ckeditor({
         filebrowserImageBrowseUrl: '{{ url("/public") }}/laravel-filemanager?type=Images',
         filebrowserImageUploadUrl: '{{ url("/public") }}/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
         filebrowserBrowseUrl: '{{ url("/public") }}/laravel-filemanager?type=Files',
         filebrowserUploadUrl: '{{ url("/public") }}/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
     });
   });

</script>


    <nav class="navbar navbar-expand-lg wakfi-features-area   section_b_80 ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
         <a class="navbar-brand mr-auto"></a>
         <ul class="navbar-nav mt-2 mt-lg-0">

               {{-- <li class="nav-item">
                  <a class="nav-link" href="offres.php">offres d'emplois</a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="#" data-scroll-nav="7">contact</a>
               </li> --}}

               <form>
               <p>
                  <select>
                     <option > FR</option>
                     <option > EN</option>
                  </select>
               </p>
                  <br/>
               </form>

         </ul>
      </div>
   </nav>

<!-- Fin de la petite section de debut -->

      <!--Navbar Start-->
      <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top" style="top:50px">
         <div class="container">
            <!-- nav pour la langue -->


            <!-- LOGO -->
            {{-- <img src="{{ asset("admin/assets/img/logo.png")}} " alt="Tontine.Plus"/> --}}

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a href="#" class="nav-link active" data-scroll-nav="0" >Accueil</a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link" data-scroll-nav="1" >Présentation</a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link" data-scroll-nav="2" >Notre histoire</a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link" data-scroll-nav="3">Programme</a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link" data-scroll-nav="5">Album</a>
                  </li>

                  <li class="nav-item">
                     {{-- <a href="<?= $appPath ?>" class="nav-link">Connexion</a>  --}}
                     <a href="{{ route('login') }}"  class="nav-link" >Connexion</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!--Navbar End-->


      <!--Home Section Start-->
      <section class="wakfi-home-area" data-scroll-index="0">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="banner-welcome">
                     <h2>Mariage de</h2>
                     <div class="caption-inner">
                        <div class="ah-headline">
                           {{-- <span class="typed-static">Gerez </span> --}}
                           <span class="ah-words-wrapper">
                           <b class="is-visible"> Doris et Aimé</b>
                           {{-- <b> Les finances.</b>
                           <b> La tontine.</b>
                           <b> La vie sociale.</b>
                           <b> Les projets.</b> --}}
                           </span>
                        </div>
                     </div>
                     <h3> SAVE THE DATE </h3>
                     <h3 style="margin-left: 1em;"> 26/12/2020 </h3>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="banner-right">
                     <img src="{{ asset("admin/assets/img/love.png")}} " class="float-lg-right" alt="banner phone" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Home Section End-->


      <!-- Promo Area Start -->

      <section class="wakfi-promo-area section_t_100 section_b_70 wow fadeInUp">
          {{-- @foreach ($data as $key=>$data)  --}}

          <h2 class="text-center mb-4"> Témoignages   </h2>
         <div class="container">
            <div class="row">
                @foreach($data as $i=>$row)
               <div class="col-lg-4">

                  <div class="single-promo">
                    {{-- @foreach($myPosts as $key=>$post) --}}

                        @if(file_exists(public_path('/post/').$row->thumb_image))
                        <img src="{{ asset('/post') }}/{{ $row->thumb_image }} " class="img img-responsive">

                        @endif

                        {{-- @if($key === 0) --}}
                     {{-- <img src="{{asset("admin/assets/img/avatar2.png")}} " alt="Auteur" /> --}}
                     {{-- <img src="{{ asset('/post/show') }}/{{ $post->main_image }} " alt="Auteur" /> --}}
                     {{--  <img class="img-responsive top_static_article_img" src="{{ asset('public/post') }}/{{ $myPost->main_image }}"  alt="{{ $myPost->name }}">  --}}

                     <div class="promo-text">
                         <h3>{{ $row->name}}</h3>
                        <p>{{ $row->comment}} </p>
                     </div>
                     {{-- @endforeach --}}
                  </div>

               </div>
               @endforeach
               {{--  <div class="col-lg-4">
                  <div class="single-promo">
                     <img src="{{asset("admin/assets/img/avatar2.png")}} " alt="Auteur" />

                     <div class="promo-text">
                        <h3>Auteur</h3>
                        <p>Gérer tous les aspects de votre association, pas seulement les tontines.</p>
                     </div>
                  </div>
               </div>  --}}
               {{--  <div class="col-lg-4">
                  <div class="single-promo">

                     <img src="{{asset("admin/assets/img/avatar2.png")}} " alt="Auteur" />

                     <div class="promo-text">
                        <h3>Auteur</h3>
                        <p>Vos données sont en sécurité. Gérer les accès des membres grâce aux rôles prédéfinis.</p>
                     </div>
                  </div>
               </div>  --}}
            </div>
         </div>
         {{--  @endforeach  --}}
      </section>
      <!-- Promo Area End -->


      <!-- About Section Start -->
      <section class="wakfi-about-area section_t_100 section_b_70" data-scroll-index="1"><br/><br/>
         <div class="abt-bg">
            <!-- img src="assets/img/abt_round.png" alt="about image" /-->
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-5 wow fadeInLeft">
                  {{--  <div class="about-app-right">
                     <img src="{{ asset("admin/assets/img/avatar2.png")}} " alt="Avatar" />
                  </div>  --}}
               </div>
               <div class="col-lg-7  wow fadeInRight">
                  {{-- <div class="about-app-left">
                     <h3>Moderniser votre association. Adoptez Tontine.Plus</h3>
                     <p>Tontine.Plus est un service en ligne à la disposition des associations tontinières qui se présente comme la combinaison d'un outil de gestion et d'un réseau social. </p>
                     <p>
                            Le côté gestion de la plateforme vous permet de renforcer et d'automatiser les règles de gestion déjà connues. Il facilite la gestion au quotidien de l'association par l'implication de tous les membres à travers l'application mobile qui l'accompagne.
                     </p>
                     <p>Le côté réseau social de l’application quant à lui vous permet de consolider les liens qui existent déjà entre les membres et faire en sorte que les activités de l’association se poursuivent en ligne comme lors des assemblées générales</p>
                     <a href="#/tplus/register/" class="wakfi-btn"><i class="fa fa-user"></i>Créer un compte</a>
                  </div> --}}
                  <div class="col-md-7 wow fadeInLeft">
                     <div class="contact-form ">
                        <h3>Faire un commentaire </h3>

                        {{ Form::open(array('url' => '/post/store','method'=>'Post', 'enctype'=>'multipart/form-data')) }}
                           @csrf
                        {{-- <form method="post" action="send.php" id="contactForm"> --}}
                           {{-- {{ Form::text('name',null,['class'], 'id'=>"post")}} --}}
                           {{--  <p>
                           {{ Form::text('comment',null,['class'=>'form-control fadeInLeft','id'=>'comment','style'=>'background:#F3F5FB none ','placeholder'=>'Votre commentaire ici','textarea'] )  }}
                           </p>  --}}
                           <p>
                              <textarea placeholder="Votre message..." id="msg" name="comment" style="background:#F3F5FB none"></textarea>
                           </p>
                           {{-- <p>
                              <textarea style="background:#F3F5FB none repeat scroll 0 0; ;" placeholder="Votre message..." id="msg" name="comments"></textarea>
                           </p> --}}
                           {{-- <p>
                              <input style="background:#F3F5FB none repeat scroll 0 0; ;" type="text" placeholder="Votre nom et prénom" id="name" name="first_name">
                           </p> --}}
                           <p>
                           {{ Form::text('name',null,['class'=>'form-control fadeInLeft meilleur','id'=>'name','style'=>'background:#F3F5FB none ','placeholder'=>'Votre nom'] )  }}
                           </p>
{{--
                           {{ Form::text('photo',null,['class'=>'form-control','id'=>'photo'] )  }}  --}}
                           </p>
                           <div class="form-group">
                              {{ Form::label('photo','', array('class' => 'control-label mb-1')) }}

                              {{ Form::file('img',['class'=>'form-control'] )  }}
                                                             </div>
                              <p>
                              <input type="hidden" name="submit1" value="Submit">
                              <button type="submit">Envoyer</button>
                           </p>
                          {{--  <p>
                          {{ Form::submit('Envoyer!') }}
                          </p>  --}}
                           {{-- <p>
                              <input type="hidden" name="submit1" value="Submit">
                              <button type="submit">Envoyer</button>
                           </p> --}}
                           <p>
                           {{ Form::close() }}
                           </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About Section End -->


      <!-- Features Area Start -->
      {{-- <section class="wakfi-features-area section_t_100  section_b_80" data-scroll-index="2"><br/><br/>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading wow fadeInUp">
                     <h2>Des fonctions innovantes</h2>
                     <p>Tontine.Plus vous offre une multitude de fonctions qui rendent la vie au sein de l'association encore plus agréable. Voici les plus importantes : </p>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-lg col-md-6 wow fadeInLeft">
                  <div class="feature-left-side">
                     <div class="media">
                        <div class="media-body">
                           <h4>Tontines, Mutuelles, Caisses</h4>
                           <p>Créez des tontines de toutes les variantes: Classique, avec enchère, à accumulation (Mutuelle). Créez des caisses pour la solidarité, l'épargne, etc.</p>
                        </div>
                        <div class="icon-circle ml-4 mt-1">
                           <i class="fa fa-bank"></i>
                        </div>
                     </div>
                     <div class="media">
                        <div class="media-body">
                           <h4>Gestion financière</h4>
                           <p>Chaque transaction financière est enregitrée et archivée. Les données financières de votre association sont disponibles et accessibles à tout moment</p>
                        </div>
                        <div class="icon-circle ml-4 mt-1">
                           <i class="fa fa-money"></i>
                        </div>
                     </div>
                     <div class="media">
                        <div class="media-body">
                           <h4>Automatisation</h4>
                           <p>Organisation des assemblées générales, suivi des contributions et des cotisations des membres, assistance aux membres, tout est automatisé avec Tontine.Plus</p>
                        </div>
                        <div class="icon-circle ml-4 mt-1">
                           <i class="fa fa-cog"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg text-center mobile-none wow fadeIn">
                  <div class="feature-phone">
                     <img src="assets/img/intro_phn.png" alt="feature phone" />
                  </div>
               </div>
               <div class="col-lg col-md-6 wow fadeRight">
                  <div class="feature-right-side">
                     <div class="media">
                        <div class="icon-circle mr-4 mt-1">
                           <i class="fa fa-comments"></i>
                        </div>

                        <div class="media-body">
                           <h4>Communication</h4>
                           <p>Chattez aves les membres en ligne. Envoyez des messages internes ou par courriel électronique. Partagez les nouvelles de vos familles. Organisez des évènements</p>
                        </div>
                     </div>
                     <div class="media">
                        <div class="icon-circle mr-4 mt-1">
                           <i class="fa fa-bell"></i>
                        </div>
                        <div class="media-body">
                           <h4>Notifications</h4>
                           <p>La prochaine réunion a été reporté? Un membre a un évènement heureux à célébrer? Un membre vient de verser ses cotisations? ... Vous êtes notifié en temps réel sur Tontine.Plus.</p>
                        </div>
                     </div>
                     <div class="media">
                        <div class="icon-circle mr-4 mt-1">
                           <i class="fa fa-archive"></i>
                        </div>
                        <div class="media-body">
                           <h4>Documents et Médias</h4>
                           <p>Stockez les informations de l'association (photos, vidéos, documents importants, règlement intérieur, statut, rapport de séance...)</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- Features Area End -->


      <!-- Choose Area Start -->
      {{-- <section class="wakfi-choose-area section_100">
         <div class="choose-bg">
            <!-- img src="assets/img/choos_bg.png" alt="choose bg" / -->
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-6  wow fadeInLeft">
                  <div class="choose-left">
                     <h3>Comment ça marche?</h3>
                     <p>Tout le processus commence par l’inscription d’un utilisateur sur la plateforme. L’utilisateur rempli le formulaire d’inscription et le soumet à Tontine.Plus,</p>
                     <ul>
                        <li><i class="fa fa-check"></i> Enregistrez votre association et paramettrez-la (ajout des membres, création de cycle, configuration des assemblées générales)</li>
                        <li><i class="fa fa-check"></i> Paramettrez les aspects financiers de la tontine (création et configuration des tontines, des mutuelles et de diverses caisses)</li>
                        <li><i class="fa fa-check"></i> Invitez les membres à se connecter</li>
                        <li><i class="fa fa-check"></i> Profitez de Tontine.Plus</li>
                     </ul>
                     <div class="choose-btn">
                        <a href="<?= $appPath ?>" class="wakfi-btn"><i class="fa fa-user"></i> Commencer  maintenant</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 wow fadeInRight">
                  <div>
                     <a href="javascript:void(0)" id="video-trigger"><img src="assets/img/tp_tablet.png" class="float-lg-right" alt="banner phone" /><i class="fa fa-play-circle-o fa-5x play" aria-hidden="true"></i></div>

                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- Choose Area End -->


      <!-- Screenshot Area Start -->
      {{-- <section class="wakfi-screenshot-area section_100" data-scroll-index="3"><br/><br/>
         <div class="abt-bg">
            <!-- img src="assets/img/abt_round.png" alt="choose bg" /-->
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12  wow fadeInUp">
                  <div class="site-heading">
                     <h2>Nos ecrans</h2>
                     <p>Tontine.Plus est accessible via la plateforme Web qui couvre toutes les fonctions et par l'application mobile qui donne accès aux fonctions essentielles où que vous soyez...</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="screenshot-slider owl-carousel">
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-02.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-03.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-04.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-01.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-05.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-06.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-02.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-03.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-04.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-01.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-05.png" alt="screenshot 1" />
                     </div>
                     <div class="screenshot-single-slide">
                        <img src="assets/img/ss-06.png" alt="screenshot 1" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- Screenshot Area End -->



      <!-- Newsletter Area Start -->
      {{-- <section class="wakfi-newsletter-area section_100   wow fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="newsletter-box">
                     <div class="newsletter-icon">
                        <i class="fa fa-envelope-open-o"></i>
                     </div>
                     <h2>Restez connecté!</h2>
                     <p>Inscrivez-vous sur notre liste de diffusion pour recevoir des informations concernant Tontine.Plus. </p>
                     <form>
                        <input type="email" placeholder="Votre adresse email" name="newsletter" >
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- Newsletter Area End -->


      <!-- Pricing Area Start -->
      {{-- <section class="wakfi-pricing-area section_100 section_b_70" data-scroll-index="5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading  wow fadeInUp"><br/><br/>
                     <h2>Nos tarifs</h2>
                     <p>Des prix flexibles qui s'adaptent à la taille de votre association. Seules les associations sont facturées. Les prix ci-dessous sont par mois et par membre avec
                     facturation à l'année.</p>
                     <p>Trois (03) mois d'essai sans engagement.</p>

                 	<div class="contact-form ">
                 		<form>
                 			<p>
                 				<strong>
                 					Dévise de votre association
                 				</strong>
		                     	<select id="devise">
		                     		<option value="XAF">FCFA</option>
		                     		<option value="CAD">CAD</option>
		                     		<option value="USD">USD</option>
		                     		<option value="Euro">Euro</option>
		                     		<option value="autre">Autre</option>
		                     	</select>
                 			</p>
                 		</form>
                 	</div>

                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4  wow fadeInLeft">
                  <div class="single-pricing">
                     <div class="pricing-header">
                        <h3>base</h3>
                     </div>
                     <div class="pricing-header-tag">
                        <h2><span id="p1">100 Fcfa</span><span class="month">/mois</span></h2>
                     </div>
                     <div class="pricing-body">
                        <ul>
                           <li>Nombre de Membres: illimités</li>
                           <li>Support: Email, Chat </li>
                           <li>Stockage: 250 Mo</li>
                        </ul>
                     </div>
                     <div class="pricing-footer">
                        <a href="<?= $appPath ?>/tplus/register/" class="wakfi-btn">Inscription</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4  wow fadeIn">
                  <div class="single-pricing">
                     <div class="pricing-header">
                        <h3>Standard</h3>
                     </div>
                     <div class="pricing-header-tag">
                        <h2><span id="p2">200 Fcfa</span><span class="month">/mois</span></h2>
                     </div>
                     <div class="pricing-body">
                        <ul>
                           <li>Nombre de Membres: illimités</li>
                           <li>Support: Email, Chat, téléphone 24/7 </li>
                           <li>Stockage: 5Go</li>
                        </ul>
                     </div>
                     <div class="pricing-footer">
                        <a href="<?= $appPath ?>/tplus/register/" class="wakfi-btn">Inscription</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4  wow fadeInRight">
                  <div class="single-pricing">
                     <div class="pricing-header">
                        <h3>Avancé</h3>
                     </div>
                     <div class="pricing-header-tag">
                        <h2 ><span id="p3">500 Fcfa</span><span class="month">/mois</span></h2>
                     </div>
                     <div class="pricing-body">
                        <ul>
                           <li>Nombre de Membres: illimités</li>
                          <li>Support: Email, Chat </li>
                          <li>Gestionnaire de compte dédié</li>
                           <li>Stockage: 25Go</li>
                        </ul>
                     </div>
                     <div class="pricing-footer">
                        <a href="<?= $appPath ?>/tplus/register/" class="wakfi-btn">Inscription</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- Pricing Area End -->

      <!-- Pricing Area Start accompagnement-->
      {{-- <section class="wakfi-about-area section_t_100 section_b_70" data-scroll-index="6">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading  wow fadeInUp"><br/>
                     <h2>Accompagnement</h2>
                     <p>
                     Le programme Welcome+ est le programme d'intégration à travers lequel nous vous accompagnons,
                     vous en tant que nouveaux clients de Tontine.Plus, dans l'adoption du produit. À travers ce programme, nous voulons:
                     Vous montrer la valeur que la plate-forme Tontine.Plus a à vous offrir
                     Rendre votre expérience utilisateur aussi simple et transparente que possible
                     Écouter vos questions et vos préoccupations afin d'y apporter une réponse
                      </p>
                      <div class="pricing-footer">
                        <a href="welcome.php" class="wakfi-btn">En savoir plus</a>
                     </div>

                  </div>
               </div>
            </div>

         </div>
      </section> --}}
      <!-- Pricing Area End accompagnement -->



      <!-- Download Area Start -->
      {{-- <section class="wakfi-download-area section_100  wow fadeInUp">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="download-box">
                     <h2>Téléchargez Tontine.Plus</h2>
                     <p>l'application mobile est disponible pour les plateformes Android et IOS</p>
                     <div class="download-area-btns">
                        <a href="https://play.google.com/store/apps/details?id=com.tontine.plus"><i class="fa fa-android"></i> <span>android</span></a>
                        <a href="https://itunes.apple.com/us/app/tontineplus/id1366864907?mt=8"><i class="fa fa-apple"></i> <span>IOS</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- Download Area End -->




       <section class="wakfi-contact-area section_100" data-scroll-index="7">
            <h2 class="text-center mb-4"> Album photo   </h2>
      </section>
      <!-- Contact Area End -->


      <!-- Footer Area Start -->
      <footer class="wakfi-footer-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer-box">
                     <p>Mariage de Doris et Aimé &copy; 2020 Tous droits réservés</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->

      <!--video Popup-->
      <div id="vidBox">
		  <div id="videCont">
		    <video  id="demo" controls>
		      <source src="assets/video/TP_presentation1.mp4" type="video/mp4">
		      Votre navigateur ne supporte pas la lecture de video mp4
		    </video>
		   </div>
		</div>

      <!--Jquery js-->
      <script src="{{ asset("admin/assets/js/jquery-3.0.0.min.js")}} "></script>
      <!--Bootstrap js-->
      <script src=" {{ asset("admin/assets/js/bootstrap.min.js")}} "></script>
      <!--ScrollIt js-->
      <script src=" {{ asset("admin/assets/js/scrollIt.min.js")}} "></script>
      <!--Owl-Carousel js-->
      <script src=" {{ asset("admin/assets/js/owl.carousel.min.js")}} "></script>
      <!--Animatedheadline js-->
      <script src=" {{ asset("admin/assets/js/jquery.animatedheadline.min.js")}} "></script>
      <!--Magnific js-->
      <script src=" {{ asset("admin/assets/js/jquery.magnific-popup.min.js")}} "></script>
      <!--Wow js-->
      <script src=" {{ asset("admin/assets/js/wow.min.js")}} "></script>
      <!--Videopopup js-->
      <script src=" {{ asset("admin/assets/js/videopopup.js")}} "></script>
      <!--Init js-->
      <script src=" {{ asset("admin/assets/js/init.js")}} "></script>
      <!--Main js-->
      <script src=" {{ asset("admin/assets/js/main.js")}} "></script>
      <script src=" {{ asset("admin/assets/js/sweetalert.all.min.js")}}"></script>

	<script>
		$("#contactForm").submit(function(e) {
		  var url = "<?= $basePath ?>/send.php"; // the script where you handle the form input.
		$.ajax({
		       type: "POST",
		       url: url,
		       data: $("#contactForm").serialize(), // serializes the form's elements.
		       success: function(data)
		       {
		           var obj = jQuery.parseJSON(data);
		           mesg = obj["message"]
		           //alert(obj)
		           if (obj['statut'] == 'succes'){
		               swal("", mesg, "success"); // show response from the php script.
		               $('#contactForm').trigger("reset");
		           }
		           else
		           {
		           		swal("", mesg, "error");
						//alert(obj['message'])
		           }

		       }
		     });
			e.preventDefault(); // avoid to execute the actual submit of the form.

			});

	</script>

	<script>
		$('#vidBox').VideoPopUp({
			opener: "video-trigger",
			backgroundColor: "#000000",
			//maxweight: "1024",
			pausevideo: true,
			idvideo: "demo"
		});

	</script>

	<script>
		$("#devise").on('change', function (){
			var devise = this.value;
			var p1 = '';
			var p2 = '';
			var p3 = '';

			switch(devise) {
			  case "XAF":
			    p1 = '100 Fcfa';
				p2 = '200 Fcfa';
				p3 = '500 Fcfa';

			    break;
			  case "CAD":
				p1 = '1 $CAD';
				p2 = '2 $CAD';
				p3 = '4 $CAD';
			    break;
			  case "USD":
				p1 = '1 USD';
				p2 = '2 USD';
				p3 = '4 USD';
			    break;
			  case "Euro":
				p1 = '1 €';
				p2 = '2 €';
				p3 = '4 €';
			    break;
			  case "autre":
				p1 = '1 USD';
				p2 = '2 USD';
				p3 = '4 USD';
			    break;
			}

			$("#p1").text(p1);
			$("#p2").text (p2);
			$("#p3").text (p3);

		});


      /* code javascript pour faire basculer d'un point qu'econque de la page pour le haut*/

      (function ($) {

         /*--Faire défiler vers le haut et afficher le bouton--*/

         $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
               $('#back-to-top').fadeIn();
            } else {
               $('#back-to-top').fadeOut();
            }
         });

         //Cliquez sur l'événement faites défiler jusqu'au bouton supérieur jquery

         $('#back-to-top').click(function(){
            $('html, body').animate({scrollTop : 0},600);
            return false;
         });

         })(jQuery);


      /* Fin du code pour baculer vers le haut de page*/

   </script>


      <!-- icon pour le basculement vers le haut de page -->

   <div class ="icon-circle ml-4 mt-1" id ="meilleur">
      <a id="back-to-top" href="#">
      <i class="fa fa-arrow-circle-up"></i>
      </a>
   </div>

         <!-- Fin du code pou l'icon de baculement  -->



   </body>
</html>

