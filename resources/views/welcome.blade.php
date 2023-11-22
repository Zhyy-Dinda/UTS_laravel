<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ableproadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Aug 2023 05:51:15 GMT -->
<head>
    <title>Live Preview | Able Pro Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="Phoenixcoded" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon" />

    <!-- [Page specific CSS] start -->
    <link
      href="assets/css/plugins/animate.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="../cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      rel="stylesheet"
    />
    <!-- [Page specific CSS] end -->
    <!-- [Font] Family -->
    <link
      rel="stylesheet"
      href="assets/fonts/inter/inter.css"
      id="main-font-link"
    />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="assets/css/style-preset.css" />

    <link rel="stylesheet" href="assets/css/landing.css" />

    <!-- Gradient Text Animation CSS -->
    <style>
      .hero-text-gradient {
        --bg-size: 400%;
        --color-one: rgb(37, 161, 244);
        --color-two: rgb(249, 31, 169);

        background: linear-gradient(
            90deg,
            var(--color-one),
            var(--color-two),
            var(--color-one)
          )
          0 0 / var(--bg-size) 100%;
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
        animation: move-bg 24s infinite linear;
      }
      @keyframes move-bg {
        to {
          background-position: var(--bg-size) 0;
        }
      }
    </style>
    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-14K1GBX9FG");
    </script>

    <!-- Wisernotify -->
    <script>
      !(function () {
        if (window.t4hto4)
          console.log("WiserNotify pixel installed multiple time in this page");
        else {
          window.t4hto4 = !0;
          var t = document,
            e = window,
            n = function () {
              var e = t.createElement("script");
              (e.type = "text/javascript"),
                (e.async = !0),
                (e.src =
                  "../pt.wisernotify.com/pixel6d4c.js?ti=1jclj6jkfc4hhry"),
                document.body.appendChild(e);
            };
          "complete" === t.readyState
            ? n()
            : window.attachEvent
            ? e.attachEvent("onload", n)
            : e.addEventListener("load", n, !1);
        }
      })();
    </script>
    <!-- Microsoft clarity -->
    <script type="text/javascript">
      (function (c, l, a, r, i, t, y) {
        c[a] =
          c[a] ||
          function () {
            (c[a].q = c[a].q || []).push(arguments);
          };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
      })(window, document, "clarity", "script", "gkn6wuhrtb");
    </script>
  </head>

  <body
    data-pc-preset="preset-1"
    data-pc-sidebar-caption="true"
    data-pc-direction="ltr"
    data-pc-theme_contrast=""
    data-pc-theme="light"
    class="landing-page"
  >
    <!-- [ Main Content ] start -->
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Header ] start -->
    <!-- <header id="home" style="background-image: url(assets/images/landing/img-headerbg.jpg)"> -->
    <header id="home">
      <!-- [ Nav ] start -->
      <nav class="navbar navbar-expand-md navbar-light default">
        <div class="container">
          <a class="navbar-brand" href="{{'/home'}}">
            {{-- <img src="assets/images/" alt="logo" /> --}}
            <h2 class="pb-0">zhyy<span class="hero-text-gradient">lol</span></h2>
          </a>
          <button
            class="navbar-toggler rounded"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
              <li class="nav-item px-1">
                <a
                  class="nav-link"
                  href="{{'/home'}}"
                  >login</a
                >
              </li>
              <li class="nav-item px-1">
                <a class="nav-link" href="#">Register</a>
              </li>
              <li class="nav-item px-1 me-2 mb-2 mb-md-0">
                <a
                  class="btn btn-icon btn-light-dark"
                  target="_blank"
                  href="#"
                  ><i class="ti ti-brand-github"></i
                ></a>
              </li>
              <li class="nav-item">
                <a
                  class="btn btn btn-success"
                  target="_blank"
                  href="#"
                  > Now <i class="ti ti-external-link"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- [ Nav ] end -->
      <!-- [ Container ] start -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center">
            <h1 class="mb-4 wow fadeInUp" data-wow-delay="0.2s">
              Welcome bangsat
              <span class="hero-text-gradient">Gwa capee anjeng</span>
              hemeforest<span class="hero-text-gradient"> GObloog</span> akjk kjhgfhk
            </h1>
            <div
              class="row justify-content-center wow fadeInUp"
              data-wow-delay="0.3s"
            >
              <div class="col-md-8">
                <p class="text-muted f-16 mb-0">
                  Able Pro is the one of the Featured admin dashboard template
                  in Envato Marketplace and used by over 2.5K+ Customers
                  wordwide.
                </p>
              </div>
            </div>
            <div class="my-4 my-sm-5 wow fadeInUp" data-wow-delay="0.4s">
              <a
                href="elements/bc_alert.html"
                class="btn btn-outline-secondary me-2"
                >Explore Components</a
              >
              <a href="dashboard/index.html" class="btn btn-primary"
                >Live Preview</a
              >
            </div>
            <div
              class="row g-5 justify-content-center text-center wow fadeInUp"
              data-wow-delay="0.5s"
            >
              <div class="col-auto head-rating-block">
                <div class="star mb-2">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star-half-alt text-warning"></i>
                </div>
                <h4 class="mb-0">
                  4.7/5 <small class="text-muted f-w-400"> Ratings</small>
                </h4>
              </div>
              <div class="col-auto">
                <h5 class="mb-2">
                  <small class="text-muted f-w-400"> Sales</small>
                </h5>
                <h4 class="mb-0">2.5K+</h4>
              </div>
            </div>
            <div
              class="row g-5 mt-1 justify-content-center text-center wow fadeInUp"
              data-wow-delay="1s"
            >
              <div class="col-auto">
                <p class="mb-4 text-muted">
                  - Click Below Icon to Preview Each Tech Demos -
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="technology-block">
        <ul class="list-inline mb-0">
          <li
            class="list-inline-item"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Click to Preview Bootstrap 5">
            <a href="dashboard/index.html" target="_blank"
              ><img
                src="assets/images/landing/tech-bootstrap.svg"
                alt="img"
                class="img-fluid"
            /></a>
          </li>
          <!--
          <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Gulp"
            ><img src="assets/images/landing/tech-gulp.svg" alt="img" class="img-fluid"
          /></li>
          -->
          <li
            class="list-inline-item"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Click to Preview React MUI"
          >
            <a href="react/index.html" target="_blank"
              ><img
                src="assets/images/landing/tech-react.svg"
                alt="img"
                class="img-fluid"
            /></a>
          </li>
          <li
            class="list-inline-item"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Click to Preview Angular Material"
          >
            <a href="angular/default/index.html" target="_blank"
              ><img
                src="assets/images/landing/tech-angular.svg"
                alt="img"
                class="img-fluid"
            /></a>
          </li>
          <li
            class="list-inline-item"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Click to Preview CodeIgniter"
          >
            <a
              href="codeigniter/default/public/index.html"
              target="_blank"
              ><img
                src="assets/images/landing/tech-codeigniter.svg"
                alt="img"
                class="img-fluid"
            /></a>
          </li>
          <li
            class="list-inline-item"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Click to Preview ASP.net"
          >
            <a href="https://able-pro.azurewebsites.net/" target="_blank"
              ><img
                src="assets/images/landing/tech-net.svg"
                alt="img"
                class="img-fluid"
            /></a>
          </li>
          <li
            class="list-inline-item"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Figma Design System"
          >
            <a href="https://links.codedthemes.com/mQZrX" target="_blank"
              ><img
                src="assets/images/landing/tech-figma.svg"
                alt="img"
                class="img-fluid"
            /></a>
          </li>
        </ul>
      </div>
    </header>
    <!-- [ Header ] End -->
    <!-- [ Top Features apps ] start -->
    <section>
      <div class="container title">
        <div
          class="row justify-content-center text-center wow fadeInUp"
          data-wow-delay="0.2s"
        >
          <div class="col-md-8 col-xl-6">
            <h2 class="mb-3">Complete Combo</h2>
            <p class="mb-0">
              Able Pro caters to the needs of both developers and designers,
              whether they are beginners or experts.
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body mt-2">
                <h5 class="mb-3">Figma Design System</h5>
                <p class="text-muted">
                  Check the live preview of Able Pro Figma design file. Figma
                  file included in all licenses.
                </p>
                <img
                  class="pt-2"
                  src="assets/images/landing/feature-figma.png"
                  width="100%"
                />
                <a
                  class="btn btn-light-dark mt-3"
                  href="https://links.codedthemes.com/mQZrX"
                  target="_blank"
                  >Preview Figma <i class="ti ti-external-link"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body mt-2">
                <h5 class="mb-3">Explore Components</h5>
                <p class="text-muted">
                  Access all components of Able Pro in one place to make your
                  development work easier.
                </p>
                <img
                  class="pt-2"
                  src="assets/images/landing/feature-components.png"
                  width="100%"
                />
                <a
                  class="btn btn-light-dark mt-3"
                  href="elements/bc_alert.html"
                  target="_blank"
                  >View All Components <i class="ti ti-external-link"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card">
              <div class="card-body mt-2">
                <h5 class="mb-3">Documentation</h5>
                <p class="text-muted">
                  Find solutions and navigate through our helper guide with
                  ease.
                </p>
                <img
                  class="pt-2"
                  src="assets/images/landing/feature-documentation.png"
                  width="100%"
                />
                <a
                  class="btn btn-light-dark mt-3"
                  href="https://codedthemes.gitbook.io/able-pro-bootstrap/"
                  target="_blank"
                  >Check Documentation <i class="ti ti-external-link"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- [ Top Features ] End -->
    <!-- [ working apps ] start -->
    <section class="bg-primary overflow-hidden">
      <div class="container title">
        <div
          class="row justify-content-center text-center wow fadeInUp"
          data-wow-delay="0.2s"
        >
          <div class="col-md-8 col-xl-6">
            <h2 class="mb-3 text-white">Working Conceptual Apps</h2>
            <p class="mb-0 text-white text-opacity-75">
              Each App is carefully crafted to achieve the best feature rich
              working concept for your project
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 app_dotsContainer">
            <a
              class="app-link wow fadeInUp"
              data-wow-delay="0.2s"
              href="#app_1"
            >
              <h4 class="text-white f-w-500">Chat</h4>
              <p class="mb-0 text-white text-opacity-75">
                Power your web apps with the conceptual chat app of Able Pro
                Dashboard Template.
              </p>
            </a>
            <a
              class="app-link wow fadeInUp"
              data-wow-delay="0.2s"
              href="#app_2"
            >
              <h4 class="text-white f-w-500">E-commerce</h4>
              <p class="mb-0 text-white text-opacity-75">
                Collection, Filter, Product Detail, Add New Product, and
                Checkout pages makes your e-commerce app complete.
              </p>
            </a>
            <a
              class="app-link wow fadeInUp"
              data-wow-delay="0.4s"
              href="#app_3"
            >
              <h4 class="text-white f-w-500">Inbox</h4>
              <p class="mb-0 text-white text-opacity-75">
                Compose Message, List Message (email), Detailed Inbox pages well
                suited for any conversation based web apps.
              </p>
            </a>
            <a
              class="app-link wow fadeInUp"
              data-wow-delay="0.6s"
              href="#app_4"
            >
              <h4 class="text-white f-w-500">User Management</h4>
              <p class="mb-0 text-white text-opacity-75">
                Detailed pages for User Management like Profile settings, role,
                account settings, social profile and more to explore.
              </p>
            </a>
          </div>
          <div
            class="col-md-6 position-relative wow fadeInRight"
            data-wow-delay="0.4s"
          >
            <div class="owl-carousel owl-theme screen-slide img-app-moke">
              <div class="item" data-hash="app_1">
                <img
                  src="assets/images/landing/chat.png"
                  alt="img"
                  class="img-fluid rounded"
                />
              </div>
              <div class="item" data-hash="app_2">
                <img
                  src="assets/images/landing/e-commerce.png"
                  alt="img"
                  class="img-fluid rounded"
                />
              </div>
              <div class="item" data-hash="app_3">
                <img
                  src="assets/images/landing/mail.png"
                  alt="img"
                  class="img-fluid rounded"
                />
              </div>
              <div class="item" data-hash="app_4">
                <img
                  src="assets/images/landing/social.png"
                  alt="img"
                  class="img-fluid rounded"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- [ working apps ] End -->
    <!-- [ workspace apps ] start -->
    <!--
    <section class="bg-white">
      <div class="container title">
        <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
          <div class="col-md-8 col-xl-6">
            <h2 class="mb-3">Complete Combo</h2>
            <p class="mb-0">Able Pro caters to the needs of both developers and designers, whether they are beginners or experts. </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row workspace-card-block align-items-center justify-content-center mb-4 mb-sm-5">
          <div class="col-md-6 col-lg-4">
            <a href="#workspace_1" class="card wow fadeInUp" data-wow-delay="0.4s">
              <div class="card-body">
                <div class="avtar avtar-l">
                  <svg class="pc-icon">
                    <use xlink:href="#custom-mouse-circle"></use>
                  </svg>
                </div>
                <div>
                  <h5 class="mb-3">Figma Design System</h5>
                  <p class="mb-0 text-muted">Check the live preview of Able Pro Figma design file. Figma file included in all licenses.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#workspace_2" class="card wow fadeInUp" data-wow-delay="0.6s">
              <div class="card-body">
                <div class="avtar avtar-l">
                  <svg class="pc-icon">
                    <use xlink:href="#custom-refresh-2"></use>
                  </svg>
                </div>
                <div>
                  <h5 class="mb-3">Explore Componentss</h5>
                  <p class="mb-0 text-muted">Access all components of Able Pro in one place to make your development work easier.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#workspace_3" class="card wow fadeInUp" data-wow-delay="0.8s">
              <div class="card-body">
                <div class="avtar avtar-l">
                  <svg class="pc-icon">
                    <use xlink:href="#custom-simcard-2"></use>
                  </svg>
                </div>
                <div>
                  <h5 class="mb-3">Documentation</h5>
                  <p class="mb-0 text-muted">Find solutions and navigate through our helper guide with ease. </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="workspace-slider-block rounded wow fadeInUp bg-gray-800" data-wow-delay="0.2s">
              <div class="workspace-slider owl-carousel owl-theme">
                <div class="item" data-hash="workspace_1"
                  ><img src="assets/images/landing/img-slider.jpg" width="60%" alt="img" class="img-fluid img-ws-slider rounded"
                /></div>
                <div class="item" data-hash="workspace_2"
                  ><img src="assets/images/landing/img-slider.jpg" width="60%" alt="img" class="img-fluid img-ws-slider rounded"
                /></div>
                <div class="item" data-hash="workspace_3"
                  ><img src="assets/images/landing/img-slider.jpg" width="60%" alt="img" class="img-fluid img-ws-slider rounded"
                /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  -->
    <!-- [ workspace apps ] End -->
    <!-- [ Applications apps ] start -->
    <section class="bg-white">
      <div class="container title mb-0">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="0.2s">
          <div class="col-md-8">
            <h2 class="mb-3">
              <span class="text-primary">TRY</span> BEFORE BUY
            </h2>
            <p class="text-muted mb-md-0">
              Download the Free MIT Able Pro Dashboard Template before make your
              purchase decision.
            </p>
          </div>
          <div class="col-md-4 text-md-end">
            <a
              class="btn btn-lg btn-outline-secondary bg-gray-100 me-2"
              href="dashboard/index.html"
              target="_blank"
              >Check out Pro Version</a
            >
            <a
              class="btn btn-lg btn-primary me-2"
              data-bs-toggle="tooltip"
              data-bs-placement="bottom"
              href="https://codedthemes.com/item/able-pro-lite-free-admin-template/"
              target="_blank"
              title="Free version of Able Pro"
              ><i class="ti ti-brand-github"></i> Free (Soon)</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- [ Applications apps ] End -->
    <!-- [ support team apps ] start -->
    <section class="support-team-block">
      <div class="container title">
        <div
          class="row justify-content-center text-center wow fadeInUp"
          data-wow-delay="0.2s"
        >
          <div class="col-md-8 col-xl-6">
            <h2 class="mb-3">
              They <span class="text-primary">love</span> Able Pro, Now your
              turn 😍
            </h2>
            <!-- prettier-ignore -->
            <p class="mb-0"
              >We take pride in our Dashboard development, which has been consistently rated 4.6/5 by our satisfied customers. It brings us joy to share the positive feedback we have received from our loyal clients.</p
            >
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div
              class="marquee marquee-text wow fadeInUp"
              data-wow-delay="0.4s"
            >
              <ul class="list-inline marquee-list">
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-1.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “Amazing template for fast develop.💎“
                          </p>
                          <small
                            >devbar -
                            <span class="text-muted"
                              >Customizability</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-2.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1">“Code quality is amazing. Design is astonishing. very easy to customize..😍“</p>
                          <small
                            >shahabblouch -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-3.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “This has been one of my favorite admin dashboards
                            to use. 😍“
                          </p>
                          <small
                            >htmhell -
                            <span class="text-muted"
                              >Design Quality</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-4.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1">“Excellent support, if we need any modification, they are doing immediately“</p>
                          <small
                            >hemchandkodali -
                            <span class="text-muted"
                              >Customer Support</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-5.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “For developers like me, this is the total package!
                            😍 “
                          </p>
                          <small
                            >sumaranjum -
                            <span class="text-muted"
                              >Feature Availability</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-1.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“I love the looks of Able Pro 7.0. I really like the colors you guys have chosen for this theme. It looks really nice.. 💎“</p
                          >
                          <small
                            >ritelogic -
                            <span class="text-muted">Other</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-2.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “The author is very nice and solved my problem
                            inmediately 😍 “
                          </p>
                          <small
                            >richitela -
                            <span class="text-muted"
                              >Customer Support</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-3.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">“Very universal admin template“</p>
                          <small
                            >Genstiade -
                            <span class="text-muted"
                              >Feature Availability</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-4.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “An amazing template. Very good design, good quality
                            code and also very good customer support. 💎“
                          </p>
                          <small
                            >macugi -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-5.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“I have it running on a medium size site that is geared towards displaying stats tables and custom forms, a blog and a forum. My customers love the design and the speed in which the pages load. 😍 “</p
                          >
                          <small
                            >RizzoFrank -
                            <span class="text-muted"
                              >Design Quality</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div
              class="marquee-1 marquee-text wow fadeInUp"
              data-wow-delay="0.5s"
            >
              <ul class="list-inline marquee-list">
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-1.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “Perfect for my need. Elegant look n feel with
                            blazing fast code. 💎“
                          </p>
                          <small
                            >ThemeShakers -
                            <span class="text-muted"
                              >Feature Availability</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-2.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“Excellent template! It's also very well organized and easy to find our way..“</p>
                          <small
                            >Danlec -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-3.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“Their Team is great and working great always. when you need help...“</p
                          >
                          <small
                            >manojkumarhr -
                            <span class="text-muted"
                              >Customer Support</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-4.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “Wonderful theme, full of features, with ton of
                            addons.“
                          </p>
                          <small
                            >momennoor -
                            <span class="text-muted"
                              >Design Quality</span
                            ></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-5.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “An excellent theme. It contains everything you need
                            to open complex projects. 😍 “
                          </p>
                          <small
                            >Vihtora -
                            <span class="text-muted">Other</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-1.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “Excellent template. Very complete. 💎“
                          </p>
                          <small
                            >mundodascasas -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-2.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <p class="mb-1">
                            “It serves my all purposes well and one thing it was
                            great because i didn't require designer at all.“
                          </p>
                          <small
                            >amit1134 -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-3.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“I highly recommend Able pro admin template and team phoenixcoded item. It was best purchase on themeforest for me.“</p
                          >
                          <small
                            >vishalmg -
                            <span class="text-muted">Flexibility</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <div class="card support-card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img
                            src="assets/images/user/avatar-4.jpg"
                            alt="user-image"
                            class="rounded-circle wid-60 hei-60"
                          />
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <!-- prettier-ignore -->
                          <p class="mb-1"
                            >“5 stars are for the excellent support, that is brilliant! The design is very cool and...!“</p
                          >
                          <small
                            >ab69aho -
                            <span class="text-muted">Code Quality</span></small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- [ support team apps ] End -->
    <!-- [ Productivity apps ] start -->
    <!--
    <section class="bg-primary p-md-0 min-vh-100 overflow-hidden">
      <div class="container title mb-0">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <h2 class="mb-0 text-white">Increase your Productivity with exact statistics</h2>
            <p class="my-4 text-white text-opacity-75"
              >The starting point for your next project is based on MUI.Easy customization Helps you build apps faster and better.</p
            >
            <div class="btn btn-outline-light me-2">Explore Widgets</div>
          </div>
          <div class="col-md-6 d-none d-md-block">
            <div class="row">
              <div class="col-6">
                <div class="jarallax h-1001" data-jarallax-element="-100">
                  <img src=" ../assets/images/landing/img-productivity-1.png" alt="image" class="img-fluid jarallax-img" />
                </div>
              </div>
              <div class="col-6">
                <div class="jarallax h-1001" data-jarallax-element="100">
                  <img src="assets/images/landing/img-productivity-2.png" alt="image" class="img-fluid jarallax-img" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->
    <!-- [ Productivity apps ] End -->

    <!-- [ dashboard apps ] start -->
    <!--
    <section class="bg-white overflow-hidden">
      <div class="container title mb-0">
        <div class="row align-items-center">
          <div class="col-md-6 position-relative wow fadeInLeft" data-wow-delay="0.2s">
            <img src="assets/images/landing/img-dashboard-suggestion.png" alt="img" class="img-fluid img-suggest-moke" />
          </div>
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <h2 class="mb-0">Able Pro in <span class="text-primary"> Multiple</span> Technologies</h2>
            <p class="my-4">All in one combo package you can download after purchase Able Pro.</p>
            <div class="btn btn-primary me-2">View Demo</div>
            <div class="btn btn-outline-secondary">Browse Store</div>
          </div>
        </div>
      </div>
    </section>
  -->
    <!-- [ dashboard apps ] End -->
    <!-- [ companies apps ] start -->
    <section class="bg-white">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-12">
            <h2>Trusted By</h2>
            <p class="my-4 wow fadeInUp" data-wow-delay="0.2s">
              From Startups to Fortune 500 companies using our Template for
              their product.
            </p>
            <div class="row justify-content-center client-block g-5">
              <div class="col-auto wow fadeInRight" data-wow-delay="0.4s">
                <img
                  src="assets/images/landing/client-eagames.svg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.4s">
                <img
                  src="assets/images/landing/client-vodafone.svg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.4s">
                <img
                  src="assets/images/landing/client-crystal-1.svg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.5s">
                <img
                  src="assets/images/landing/client-haswent-2.svg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.6s">
                <img
                  src="assets/images/landing/client-haxter-3.svg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.7s">
                <img
                  src="assets/images/landing/client-montecito-4.svg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.8s">
                <img
                  src="assets/images/landing/client-slingshot.svg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
              <div class="col-auto wow fadeInRight" data-wow-delay="0.9s">
                <img
                  src="assets/images/landing/client-totalstudio-5.svg"
                  alt="img"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- [ companies apps ] End -->

    <!-- [ footer apps ] start -->
    <footer class="footer">
      <div class="container title mb-0">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="0.2s">
          <div class="col-md-8">
            <h2 class="mb-3">Stay connected with us</h2>
            <p class="mb-4 mb-md-0">
              Simply submit your email, we share you the top news related to
              Able Pro feature updates, roadmap, and news.
            </p>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter your email"
                />
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top border-bottom footer-center">
        <div class="container">
          <div class="row">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <img
                src="assets/images/logo-dark.svg"
                alt="image"
                class="img-fluid mb-3"
              />
              <p class="mb-4">
                Phoenixcoded has gained the trust of over 5.5K customers since
                2015, thanks to our commitment to delivering high-quality
                products. Our experienced team players are responsible for
                managing Able Pro.
              </p>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                  <h5 class="mb-4">Company</h5>
                  <ul class="list-unstyled footer-link">
                    <li>
                      <a
                        href="https://themeforest.net/user/phoenixcoded"
                        target="_blank"
                        >Profile</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://themeforest.net/user/phoenixcoded/portfolio"
                        target="_blank"
                        >Portfolio</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://themeforest.net/user/phoenixcoded/followers"
                        target="_blank"
                        >Follow Us</a
                      >
                    </li>
                    <li>
                      <a href="https://phoenixcoded.net/" target="_blank"
                        >Website</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.8s">
                  <h5 class="mb-4">Help & Support</h5>
                  <ul class="list-unstyled footer-link">
                    <li>
                      <a
                        href="https://codedthemes.gitbook.io/able-pro-bootstrap/"
                        target="_blank"
                        >Documentation</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://codedthemes.gitbook.io/able-pro-bootstrap/roadmap/"
                        target="_blank"
                        >Feature Request</a
                      >
                    </li>
                    Explore Com
                    <li>
                      <a
                        href="https://codedthemes.gitbook.io/able-pro-bootstrap/roadmap/"
                        target="_blank"
                        >RoadMap</a
                      >
                    </li>
                    ponents
                    <li>
                      <a
                        href="https://phoenixcoded.authordesk.app/"
                        target="_blank"
                        >Support</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://themeforest.net/user/phoenixcoded#contact"
                        target="_blank"
                        >Email Us</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="1s">
                  <h5 class="mb-4">Useful Resources</h5>
                  <ul class="list-unstyled footer-link">
                    <li>
                      <a
                        href="https://themeforest.net/page/item_support_policy"
                        target="_blank"
                        >Support Policy</a
                      >
                    </li>
                    <li>
                      <a
                        href="https://themeforest.net/licenses/standard"
                        target="_blank"
                        >Licenses Term</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col my-1 wow fadeInUp" data-wow-delay="0.4s">
            <p class="mb-0">
              © Handcrafted by Team
              <a
                href="https://themeforest.net/user/phoenixcoded"
                target="_blank"
                >Phoenixcoded</a
              >
            </p>
          </div>
          <div class="col-auto my-1">
            <ul class="list-inline footer-sos-link mb-0">
              <li class="list-inline-item wow fadeInUp" data-wow-delay="0.4s">
                <a href="https://fb.com/phoenixcoded">
                  <svg class="pc-icon">
                    <use xlink:href="#custom-facebook"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- [ footer apps ] End -->

    <!-- [ Main Content ] end -->
    <script src="../code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Required Js -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/simplebar.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/fonts/custom-font.js"></script>
    <script src="assets/js/pcoded.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>

    <!-- [Page Specific JS] start -->
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="../cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/Jarallax.js"></script>
    <script>
      // Start [ Menu hide/show on scroll ]
      let ost = 0;
      document.addEventListener("scroll", function () {
        let cOst = document.documentElement.scrollTop;
        if (cOst == 0) {
          document.querySelector(".navbar").classList.add("top-nav-collapse");
        } else if (cOst > ost) {
          document.querySelector(".navbar").classList.add("top-nav-collapse");
          document.querySelector(".navbar").classList.remove("default");
        } else {
          document.querySelector(".navbar").classList.add("default");
          document
            .querySelector(".navbar")
            .classList.remove("top-nav-collapse");
        }
        ost = cOst;
      });
      // End [ Menu hide/show on scroll ]
      var wow = new WOW({
        animateClass: "animated",
      });
      wow.init();

      // slider start
      $(".screen-slide").owlCarousel({
        loop: true,
        margin: 30,
        center: true,
        nav: false,
        dotsContainer: ".app_dotsContainer",
        URLhashListener: true,
        items: 1,
      });
      $(".workspace-slider").owlCarousel({
        loop: true,
        margin: 30,
        center: true,
        nav: false,
        dotsContainer: ".workspace-card-block",
        URLhashListener: true,
        items: 1.5,
      });
      // slider end
      // marquee start
      $(".marquee").marquee({
        duration: 500000,
        pauseOnHover: true,
        startVisible: true,
        duplicated: true,
      });
      $(".marquee-1").marquee({
        duration: 500000,
        pauseOnHover: true,
        startVisible: true,
        duplicated: true,
        direction: "right",
      });
      // marquee end
    </script>
    <!-- [Page Specific JS] end -->
    <div class="pct-c-btn">
      <a
        href="#"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvas_pc_layout"
      >
        <svg class="pc-icon">
          <use xlink:href="#custom-setting-2"></use>
        </svg>
      </a>
    </div>
    <div
      class="offcanvas border-0 pct-offcanvas offcanvas-end"
      tabindex="-1"
      id="offcanvas_pc_layout"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Settings</h5>
        <button
          type="button"
          class="btn btn-icon btn-link-danger"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        >
          <i class="ti ti-x"></i>
        </button>
      </div>
      <div class="pct-body" style="height: calc(100% - 85px)">
        <div class="offcanvas-body py-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="pc-dark">
                <h6 class="mb-1">Theme Mode</h6>
                <p class="text-muted text-sm">
                  Choose light or dark mode or Auto
                </p>
                <div class="row theme-layout">
                  <div class="col-4">
                    <div class="d-grid">
                      <button
                        class="preset-btn btn active"
                        data-value="true"
                        onclick="layout_change('light');"
                      >
                        <svg class="pc-icon text-warning">
                          <use xlink:href="#custom-sun-1"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-grid">
                      <button
                        class="preset-btn btn"
                        data-value="false"
                        onclick="layout_change('dark');"
                      >
                        <svg class="pc-icon">
                          <use xlink:href="#custom-moon"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-grid">
                      <button
                        class="preset-btn btn"
                        data-value="default"
                        onclick="layout_change_default();"
                      >
                        <svg class="pc-icon">
                          <use xlink:href="#custom-setting-2"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Theme Contrast</h6>
              <p class="text-muted text-sm">Choose theme contrast</p>
              <div class="row theme-contrast">
                <div class="col-6">
                  <div class="d-grid">
                    <button
                      class="preset-btn btn"
                      data-value="true"
                      onclick="layout_sidebar_change('true');"
                    >
                      <svg class="pc-icon">
                        <use xlink:href="#custom-mask"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button
                      class="preset-btn btn active"
                      data-value="false"
                      onclick="layout_sidebar_change('false');"
                    >
                      <svg class="pc-icon">
                        <use xlink:href="#custom-mask-1-outline"></use>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Custom Theme</h6>
              <p class="text-muted text-sm">Choose your Primary color</p>
              <div class="theme-color preset-color">
                <a href="#!" class="active" data-value="preset-1"
                  ><i class="ti ti-check"></i
                ></a>
                <a href="#!" data-value="preset-2"
                  ><i class="ti ti-check"></i
                ></a>
                <a href="#!" data-value="preset-3"
                  ><i class="ti ti-check"></i
                ></a>
                <a href="#!" data-value="preset-4"
                  ><i class="ti ti-check"></i
                ></a>
                <a href="#!" data-value="preset-5"
                  ><i class="ti ti-check"></i
                ></a>
                <a href="#!" data-value="preset-6"
                  ><i class="ti ti-check"></i
                ></a>
                <a href="#!" data-value="preset-7"
                  ><i class="ti ti-check"></i
                ></a>
                <a href="#!" data-value="preset-8"
                  ><i class="ti ti-check"></i
                ></a>
                <a href="#!" data-value="preset-9"
                  ><i class="ti ti-check"></i
                ></a>
                <a href="#!" data-value="preset-10"
                  ><i class="ti ti-check"></i
                ></a>
              </div>
            </li>
            <li class="list-group-item">
              <h6 class="mb-1">Sidebar Caption</h6>
              <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
              <div class="row theme-nav-caption">
                <div class="col-6">
                  <div class="d-grid">
                    <button
                      class="preset-btn btn active"
                      data-value="true"
                      onclick="layout_caption_change('true');"
                    >
                      <img
                        src="assets/images/customizer/img-caption-1.svg"
                        alt="img"
                        class="img-fluid"
                        width="70%"
                      />
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button
                      class="preset-btn btn"
                      data-value="false"
                      onclick="layout_caption_change('false');"
                    >
                      <img
                        src="assets/images/customizer/img-caption-2.svg"
                        alt="img"
                        class="img-fluid"
                        width="70%"
                      />
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="pc-rtl">
                <h6 class="mb-1">Theme Layout</h6>
                <p class="text-muted text-sm">LTR/RTL</p>
                <div class="row theme-direction">
                  <div class="col-6">
                    <div class="d-grid">
                      <button
                        class="preset-btn btn active"
                        data-value="false"
                        onclick="layout_rtl_change('false');"
                      >
                        <img
                          src="assets/images/customizer/img-layout-1.svg"
                          alt="img"
                          class="img-fluid"
                          width="70%"
                        />
                      </button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid">
                      <button
                        class="preset-btn btn"
                        data-value="true"
                        onclick="layout_rtl_change('true');"
                      >
                        <img
                          src="assets/images/customizer/img-layout-2.svg"
                          alt="img"
                          class="img-fluid"
                          width="70%"
                        />
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="pc-container-width">
                <h6 class="mb-1">Layout Width</h6>
                <p class="text-muted text-sm">
                  Choose Full or Container Layout
                </p>
                <div class="row theme-container">
                  <div class="col-6">
                    <div class="d-grid">
                      <button
                        class="preset-btn btn active"
                        data-value="false"
                        onclick="change_box_container('false')"
                      >
                        <img
                          src="assets/images/customizer/img-container-1.svg"
                          alt="img"
                          class="img-fluid"
                          width="70%"
                        />
                      </button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid">
                      <button
                        class="preset-btn btn"
                        data-value="true"
                        onclick="change_box_container('true')"
                      >
                        <img
                          src="assets/images/customizer/img-container-2.svg"
                          alt="img"
                          class="img-fluid"
                          width="70%"
                        />
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-grid">
                <button class="btn btn-light-danger" id="layoutreset">
                  Reset Layout
                </button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>

<!-- Mirrored from ableproadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Aug 2023 05:52:23 GMT -->
</html>
