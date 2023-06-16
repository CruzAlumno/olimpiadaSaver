<!DOCTYPE html>
<!-- saved from url=(0025)https://www.starwars.com/ -->
<html
  class="js canvas no-touch geolocation borderradius csstransitions fontface generatedcontent video audio localstorage svg svgclippaths no-mobile no-flash no-ios no-android no-kindle scrolling_text filereader"
  version="HTML+RDFa 1.1" lang="en" style="">
<!--<![endif]-->

<head prefix="fb: http://ogp.me/ns/fb# og: http://ogp.me/ns#">

@include('includes.head')
</head>

<body class="mtt" style="position: relative;">
  <div class="gpt overlay" id="gpt-363" data-google-query-id="CKLsgYC6nfgCFVIE0wodct8FdA" style="display: none;">
    <div id="google_ads_iframe_/21783347309/starwars/homepage_0__container__" style="border: 0pt none;"></div>
  </div>

@include('includes.chrome-container')

@include('includes.style-pack-theming')


  <div id="nav-outer-container" class="full-nav">
    <div id="nav-drawer-bg"></div>

    <div id="nav-inner-container">


      @include('includes.navbar')

      <?php
        use Illuminate\Support\Facades\Auth;
        use App\Models\Olimpiada;

        $olTitle = "";
        $admin = "";
        $authCheck = Auth::check();

        if(isset($ol)){
            $oll = Olimpiada::find($ol);
            $olTitle = $oll->edicionOlimpiada . " OLIMPIADAS INFORMÁTICAS";
        }

        if($authCheck) $admin = "/admin"
      ?>

      <div id="nav-drawer">
        <nav id="nav-content">

          <ul id="section-links" itemscope="" itemtype="https://www.schema.org/SiteNavigationElement">
            @if(isset($ol))
            <li itemprop="name">
              <a itemprop="url" class="section-link films-content" href="{{$admin}}/{{$ol}}/medio/pruebas"
                data-cto="section" data-section="films" tabindex="0" aria-hidden="false">
                <p class="films-content-title"><span>Medio</span><span class="vertical-bar"></span><span
                    class="horizontal-bar"></span></p>
              </a>
            </li>
            <li itemprop="name">
              <a itemprop="url" class="section-link films-content" href="{{$admin}}/{{$ol}}/superior/pruebas"
                data-cto="section" data-section="films" tabindex="0" aria-hidden="false">
                <p class="films-content-title"><span>Superior</span><span class="vertical-bar"></span><span
                    class="horizontal-bar"></span></p>
              </a>
            </li>
            <li itemprop="name">
                <a itemprop="url" class="section-link films-content" href="{{$admin}}/{{$ol}}/modding/pruebas"
                  data-cto="section" data-section="films" tabindex="0" aria-hidden="false">
                  <p class="films-content-title"><span>Modding</span><span class="vertical-bar"></span><span
                      class="horizontal-bar"></span></p>
                </a>
            </li>
            <li itemprop="name">
              <a itemprop="url" class="section-link films-content" href="/{{$ol}}/subscripcion"
                data-cto="section" data-section="films" tabindex="0" aria-hidden="false">
                <p class="films-content-title"><span>Subscripción</span><span class="vertical-bar"></span><span
                    class="horizontal-bar"></span></p>
              </a>
            </li>
            @endif
            @if($authCheck)
            <li itemprop="name">
              <a itemprop="url" class="section-link films-content" href="/admin/{{$ol}}/newPrueba"
                data-cto="section" data-section="films" tabindex="0" aria-hidden="false">
                <p class="films-content-title"><span>Nueva Prueba</span><span class="vertical-bar"></span><span
                    class="horizontal-bar"></span></p>
              </a>
            </li>
            @endif
          </ul>


        </nav>
      </div>

      <div id="countdown" class="hidden">
        <ol>
        </ol>
      </div>
      <div id="page-overlay"></div>
    </div>
  </div>
  <div id="body-wrapper" class="gapless body-text-color-light" data-section="">
    <div id="burger-container">
      <div id="background-styles" style="background-position: center top 181px;">
        <div class="starfield star-left"></div>
        <div class="starfield star-right"></div>
        <div class="site-default-gradient">
          <div class="safety-color"></div>
        </div>
        <div id="body-bg">
          <div class="safety-color"></div>
          <div class="main"></div>
          <div class="color-fade"></div>
        </div>
      </div>

      <div id="main-body">
        <script src="/index_files/jquery.min.js" type="text/javascript"></script>

        <div id="spinner" style="display: none;">
          <span class="loader"></span>
        </div>

        <div id="main">
          <article id="burger" class="">
            <div class="overlay"></div>
            <section
              class="module header_banner header-banner-view no-top-padding no-bottom-padding no-left-padding no-right-padding span-full-screen content-span-full-screen"
              data-module="header_banner" id="ref-1-0">
              <div class="bound">
                <div class="module_header_container">
                    <div class="module_header">
                      <div class="title">
                        <h2 class="title-container"> <span class="title-text">
                            <div class="non-mobile-title-text">{{$olTitle}}</div>
                          </span> </h2>
                      </div>
                    </div>
                  </div>
              </div>
            </section>
            <section class="module header_banner header-banner-view"
            data-module="header_banner" id="ref-2-0">
            <div class="view view-starry-night">
  <!-- CONTENIDO DE CADA PANTALLA -->
  @yield('content')
  <!-- FIN DEL CONTENIDO DE CADA PANTALLA -->
            </div>
            </section>

            <style class="module_styles" type="text/css">
              <!-- /* header_banner module 1-0 */
              -->
              #ref-1-0 {
              background-image:
              none;
              background-color:
              #0A0B0B;
              }
            <!-- /* rich_text module 1-3 */ -->
            <!-- /* rich_text module 1-5 */ -->
            <!-- /* rich_text module 1-7 */ -->
            <!-- /* flex_content_hero module 1-8 */ -->
            <!-- /* flex_content_hero_single module 1-9 */ --> #ref-1-9{ }
            <!-- /* gumstick module 1-10 */ --> #ref-1-10{ background-image: none; background-color: #5d5537;
            background-size: 100% auto; background-position: top; background-repeat: no-repeat; } @media screen and
            (min-width: 680px){ #ref-1-10{ background-image:
            url('https://lumiere-a.akamaihd.net/v1/images/jt-singlehero-b-gumstick_87081b65.jpeg?region=0,0,1200,133');
            } } @media screen and (min-width: 1px) and (max-width: 420px){ #ref-1-10{ background-image:
            url('https://lumiere-a.akamaihd.net/v1/images/jt-singlehero-b-gumstick-mobile_5e95ebc4.jpeg?region=0,0,640,200&width=420');
            } } @media screen and (min-width: 421px) and (max-width: 679px){ #ref-1-10{ background-image:
            url('https://lumiere-a.akamaihd.net/v1/images/jt-singlehero-b-gumstick-mobile_5e95ebc4.jpeg?region=0,0,640,200&width=680');
            } }
            <!-- /* card_slider_video module 1-11 */ --> #ref-1-11{ background-image: none; background-color: #5d5537; }
            <!-- /* card_wide module 1-12 */ --> #ref-1-12{ background-image: none; background-color: #5d5537;
            background-image: linear-gradient(#5d5537, #6b6035); }
            <!-- /* flex_content_hero_single module 1-13 */ --> #ref-1-13{ }
            <!-- /* flex_content_hero_single module 1-14 */ --> #ref-1-14{ }
            <!-- /* flex_content_hero_single module 1-16 */ --> #ref-1-16{ background-image: none; background-color:
            #e37132; }
            <!-- /* gumstick module 1-17 */ --> #ref-1-17{ background-image: none; background-color: #e37132;
            background-size: 100% auto; background-position: top; background-repeat: no-repeat; } @media screen and
            (min-width: 680px){ #ref-1-17{ background-image:
            url('https://lumiere-a.akamaihd.net/v1/images/thr-gumstickc-desktop_887ee51a.jpeg?region=0,0,1200,134'); } }
            @media screen and (min-width: 1px) and (max-width: 420px){ #ref-1-17{ background-image:
            url('https://lumiere-a.akamaihd.net/v1/images/thr-gumstickc-mobile_98b1ccf0.jpeg?region=0,0,640,200&width=420');
            } } @media screen and (min-width: 421px) and (max-width: 679px){ #ref-1-17{ background-image:
            url('https://lumiere-a.akamaihd.net/v1/images/thr-gumstickc-mobile_98b1ccf0.jpeg?region=0,0,640,200&width=680');
            } }
            <!-- /* card_slider_video module 1-18 */ --> #ref-1-18{ background-image: none; background-color: #e37132;
            background-image: linear-gradient(#e37132, #c8642c); }
            <!-- /* card_slider module 1-19 */ --> #ref-1-19{ background-image: none; background-color: transparent; }
            <!-- /* card_slider_video module 1-20 */ --> #ref-1-20{ background-image: none; background-color:
            transparent; }
            <!-- /* slider module 1-21 */ --> #ref-1-21{ background-image: none; background-color: transparent; }
            </style>
          </article>
        </div>
      </div>
    </div>

    <!--
    <footer itemscope="" itemtype="http://schema.org/WPFooter">
      <section id="utility" class="social">
        <div class="social-links">
          <p>Follow Star Wars:</p>
          <ul id="social-links">
            <li>
              <a class="facebook" href="https://www.facebook.com/StarWars" target="_blank" rel="noopener noreferrer"
                data-cto="social" title="facebook">
                <span class="facebook-icon"></span>
              </a>
            </li>
            <li>
              <a class="instagram" href="https://www.instagram.com/starwars/" target="_blank" rel="noopener noreferrer"
                data-cto="social" title="instagram">
                <span class="instagram-icon"></span>
              </a>
            </li>
            <li>
              <a class="twitter" href="https://twitter.com/starwars" target="_blank" rel="noopener noreferrer"
                data-cto="social" title="twitter">
                <span class="twitter-icon"></span>
              </a>
            </li>
            <li>
              <a class="youtube" href="https://www.youtube.com/user/starwars" target="_blank" rel="noopener noreferrer"
                data-cto="social" title="youtube">
                <span class="youtube-icon"></span>
              </a>
            </li>
          </ul>
          <span class="sw-kids-container">
            <a class="sw-kids" href="https://starwarskids.com/" target="_blank" title="Star Wars Kids"
              data-cto="swkids">
              <span class="sw-kids-icon"></span>
            </a>
          </span>
        </div>
      </section>

      <section id="help">
        <div>
          <p id="copyright">TM &amp; © Lucasfilm Ltd. All Rights Reserved</p>
          <ul id="legal">
            <li><a target="_blank" href="#">Terms of Use</a></li>
            <li><a target="_blank" href="#">Additional
                Content Information</a></li>
            <li><a target="_blank" href="#">Privacy Policy</a></li>
            <li><a target="_blank" href="#">Children’s Online
                Privacy Policy</a></li>
            <li><a target="_blank" href="#">Your
                California Privacy Rights</a></li>
            <li><a target="_blank"
                href="#">Star
                Wars at shopDisney</a></li>
            <li><a target="_blank" href="#">Star Wars Helpdesk</a></li>
            <li><a target="_blank"
                href="#">Interest-Based Ads</a></li>
            <li><a target="_blank"
                href="#">Do
                Not Sell My Personal Information</a></li>
          </ul>
        </div>
      </section>
    </footer>
-->
    <div id="modal-container" role="dialog" aria-labelledby="modal-content">
      <div id="modal-window" class="out-of-burger" aria-modal="false">
        <div id="modal-close" class="top-right hidden"></div>
        <div id="browser-warning" class="modal browser-warning">
          <div class="modal-content">
            <h3 class="modal-title">This site does not work on your browser.</h3>
            <p class="modal-desc">Please upgrade your browser to experience the site.</p>
          </div>

        </div>
      </div>
      <div id="modal-overlay"></div>
    </div>
  </div>
  <div style="display:none;min-height:2000px;position:absolute;top:0;bottom:0;width:100%;z-index:10000;"></div>

  <noscript>
    <img
      src="https://ctologger01.analytics.go.com/cto?accnt=wdgdollucas%2Cwdgdolstarcom%2Cwdgdsec%2Cmatterhorn&app=w88_dolwa_prod03&brndSeg=luc&categoryCd=luc&jsv=0&omniId=no_s_vi_cookie&sessionData=no_dolWASessionData_cookie&sessionId=no_dolWASessionData_cookie&siteCd=starwars&swid=no_SWID_cookie&trckTp=trackpage&visitorData=no_dolWAVisitorData_cookie&visitorId=no_dolWAVisitorData_cookie&xhr=get"
      height="1" width="1">
  </noscript>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt=""
        src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/941642745/?value=0&amp;guid=ON&amp;script=0" />
    </div>
  </noscript>


  <div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
      <div></div>
    </div>
  </div><img src="/index_files/saved_resource" style="display: none;">

</body>

</html>
