@extends('layouts.master')

@section('title', 'Home Page')

@push('styles')
<style>
  
/* Make every car card equal in height */
#body-type-filter .box-car-list {
    height: 100%;
    min-height: 400px;
    display: flex;
    flex-direction: column;
}

/* Keep all car images the same size */
#body-type-filter .image-group {
    flex-shrink: 0;
}

#body-type-filter .img-style {
    width: 100%;
    height: 200px;
    overflow: hidden;
}

#body-type-filter .img-style img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Make the content fill the remaining space */
#body-type-filter .box-car-list .content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

/* Keep car names consistent */
#body-type-filter .box-car-list .content h3 {
    min-height: 48px;
    line-height: 24px;
}

/* Push price and View button to the bottom */
#body-type-filter .days-box {
    margin-top: auto;
    min-height: 48px;
    gap: 10px;
}
/* Search results: equal-height cards */
#carResultsWrapper .box-car-list {
    height: 100%;
    display: flex;
    flex-direction: column;
}

#carResultsWrapper .image-group {
    flex-shrink: 0;
}

#carResultsWrapper .img-style {
    height: 200px;
    overflow: hidden;
}

#carResultsWrapper .img-style img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

#carResultsWrapper .box-car-list .content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

#carResultsWrapper .box-car-list .content h3 {
    min-height: 48px;
    line-height: 24px;
}

#carResultsWrapper .days-box {
    margin-top: auto;
}

/* =========================================
   EV PLUS — PREMIUM GRADIENT HERO
   No background image required
========================================= */

#carQuickSearch {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    padding: 100px 0 110px;
    min-height: 560px;
    color: #ffffff;
    background:
        radial-gradient(
            ellipse at 12% 12%,
            rgba(24, 125, 255, 0.24) 0%,
            transparent 38%
        ),
        radial-gradient(
            ellipse at 88% 75%,
            rgba(0, 205, 255, 0.14) 0%,
            transparent 35%
        ),
        linear-gradient(
            135deg,
            #071426 0%,
            #0b1e38 48%,
            #102d50 100%
        );
}

/* Soft ambient glow */
#carQuickSearch::before {
    content: "";
    position: absolute;
    z-index: -1;
    width: 520px;
    height: 520px;
    top: -300px;
    right: -100px;
    border-radius: 50%;
    background: rgba(36, 139, 255, 0.18);
    filter: blur(90px);
    pointer-events: none;
}

/* Subtle decorative ring */
#carQuickSearch::after {
    content: "";
    position: absolute;
    z-index: -1;
    width: 420px;
    height: 420px;
    bottom: -310px;
    left: -100px;
    border: 1px solid rgba(89, 170, 255, 0.18);
    border-radius: 50%;
    box-shadow:
        0 0 0 45px rgba(89, 170, 255, 0.025),
        0 0 0 90px rgba(89, 170, 255, 0.02);
    pointer-events: none;
}

#carQuickSearch .quick-search-content {
    position: relative;
    z-index: 1;
    width: 100%;
    max-width: 1050px;
    margin: 0 auto;
    text-align: center;
}

#carQuickSearch .quick-search-label {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 24px;
    margin-bottom: 25px;
    border: 1px solid rgba(91, 176, 255, 0.5);
    border-radius: 50px;
    background: rgba(44, 125, 225, 0.12);
    color: #65bcff;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 3px;
    box-shadow: inset 0 0 20px rgba(40, 135, 255, 0.06);
}

#carQuickSearch h1 {
    margin: 0 0 22px;
    color: #ffffff;
    font-size: clamp(42px, 6vw, 76px);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -2px;
}

#carQuickSearch .quick-search-content > p {
    max-width: 700px;
    margin: 0 auto 38px;
    color: #b7c8dc;
    font-size: 18px;
    line-height: 1.8;
}

/* Bright search surface */
#carQuickSearch .quick-search-form {
    display: flex;
    align-items: center;
    gap: 16px;
    width: 100%;
    max-width: 900px;
    min-height: 86px;
    margin: 0 auto;
    padding: 10px 12px 10px 30px;
    border: 1px solid rgba(255, 255, 255, 0.8);
    border-radius: 100px;
    background: #ffffff;
    box-shadow:
        0 22px 65px rgba(0, 0, 0, 0.25),
        0 0 35px rgba(36, 139, 255, 0.08);
    transition: box-shadow 0.25s ease;
}

#carQuickSearch .quick-search-form:focus-within {
    box-shadow:
        0 0 0 4px rgba(42, 151, 255, 0.22),
        0 22px 65px rgba(0, 0, 0, 0.28);
}

#carQuickSearch .quick-search-form > .icon-search {
    flex: 0 0 auto;
    color: #2788f5;
    font-size: 25px;
}

#carQuickSearch #quickCarSearchInput {
    flex: 1 1 auto;
    width: 100%;
    min-width: 0;
    height: 62px;
    padding: 0 10px;
    border: 0;
    outline: 0;
    background: transparent;
    color: #132b47;
    font-size: 18px;
    box-shadow: none;
}

#carQuickSearch #quickCarSearchInput::placeholder {
    color: #8493a7;
    opacity: 1;
}

#carQuickSearch .quick-search-form button[type="submit"] {
    flex: 0 0 auto;
    min-height: 66px;
    padding: 0 36px;
    border: 0;
    border-radius: 50px;
    background: linear-gradient(135deg, #36adff, #0967ed);
    color: #ffffff;
    font-size: 17px;
    font-weight: 700;
    white-space: nowrap;
    cursor: pointer;
    box-shadow: 0 7px 22px rgba(9, 103, 237, 0.3);
    transition: transform 0.2s ease, filter 0.2s ease;
}

#carQuickSearch .quick-search-form button[type="submit"]:hover {
    transform: translateY(-2px);
    filter: brightness(1.1);
}

/* Mobile */
@media (max-width: 767px) {
    #carQuickSearch {
        min-height: auto;
        padding: 70px 0 75px;
    }

    #carQuickSearch h1 {
        font-size: clamp(35px, 9vw, 50px);
        letter-spacing: -1px;
    }

    #carQuickSearch .quick-search-content > p {
        margin-bottom: 28px;
        font-size: 15px;
    }

    #carQuickSearch .quick-search-form {
        min-height: 66px;
        gap: 8px;
        padding: 7px 8px 7px 18px;
        border-radius: 22px;
    }

    #carQuickSearch .quick-search-form > .icon-search {
        font-size: 20px;
    }

    #carQuickSearch #quickCarSearchInput {
        height: 48px;
        padding: 0 4px;
        font-size: 14px;
    }

    #carQuickSearch .quick-search-form button[type="submit"] {
        min-height: 48px;
        padding: 0 16px;
        border-radius: 16px;
        font-size: 13px;
    }
}
</style>

@endpush
@section('content')
<!-- EV PLUS Search Bar -->
<section id="carQuickSearch" class="tf-section">
    <div class="container">
        <div class="quick-search-content">
            <span class="quick-search-label">EV PLUS</span>
            <h1>Find Your Perfect Car</h1>
            <p>Search by car brand, model, or keyword.</p>

            <form id="quickCarSearchForm" class="quick-search-form">
                <i class="icon-search"></i>

                <input
                    type="search"
                    id="quickCarSearchInput"
                    placeholder="Search BMW, Mercedes-Benz, SUV..."
                    autocomplete="off"
                    aria-label="Search cars"
                >

                <button type="submit">Search Cars</button>
            </form>
        </div>
    </div>
</section>
<!-- Search Results -->
<section class="tf-section2" id="carResults" style="display: none;">
    <div class="container">

        <div class="heading-section flex align-center justify-space flex-wrap gap-20 wow fadeInUp">
            <h2 class="heading-tittle">
                Search Results
            </h2>

            <a href="#" id="clearCarSearch" class="tf-btn-arrow">
                Clear Search <i class="icon-carus-arrowcircleright"></i>
            </a>
        </div>

        <!-- Matching car cards go here -->
        <div class="row" id="carResultsWrapper">
            <!-- JavaScript will display matching cars here -->
        </div>

        <div id="noCarResults" style="display: none; text-align: center; padding: 30px 0;">
            No cars match your selected filters.
        </div>

    </div>
</section>
      <!-- slider 1 -->
      <div class="swiper mainslider slider style1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slider-item">
              <div class="img-slider">
                <img class="img-item lazyload" data-src="assets/images/slider/slider1.3.webp"
                  src="assets/images/slider/slider1.3.webp" alt="" />
              </div>
              <div class="container-full relative">
                <div class="content po-content-two">
                  <div class="heading">
                    <h1 class="text-color-1 fade-item fade-item-1">
                      Find and sell your greatest car without a hitch
                    </h1>
                    <p class="fs-18 text-color-1 fade-item fade-item-1 mb-40">
                      We have thousands of car listings, along with the
                      most reputable partners.
                    </p>
                    <ul class="ul flex flex-wrap category-list-car fade-item fade-item-2">
                      <li>
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-suv"></i>
                        </div>
                        <div class="font text-color-1">SUV</div>
                        </a>
                      </li>
                      <li >
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-coupe"></i>
                        </div>
                        <div class="font text-color-1">Coupe</div>
                        </a>
                      </li>
                      <li >
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-hatchback"></i>
                        </div>
                        <div class="font text-color-1">Hatchback</div>
                        </a>
                      </li>
                      <li >
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-hybrid"></i>
                        </div>
                        <div class="font text-color-1">Hybrid</div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-item">
              <div class="img-slider">
                <img class="img-item lazyload" data-src="assets/images/slider/slider1.2.webp"
                  src="assets/images/slider/slider1.2.webp" alt="" />
              </div>
              <div class="container-full relative">
                <div class="content po-content-two">
                  <div class="heading">
                    <h1 class="text-color-1 fade-item fade-item-1">
                      Find your dream car with EV PLUS
                    </h1>
                    <p class="fs-18 text-color-1 fade-item fade-item-1 mb-40">
                      We have thousands of car listings, along with the
                      most reputable partners.
                    </p>
                    <ul class="ul flex flex-wrap category-list-car">
                      <li>
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-suv"></i>
                        </div>
                        <div class="font text-color-1">SUV</div>
                        </a>
                      </li>
                      <li >
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-coupe"></i>
                        </div>
                        <div class="font text-color-1">Coupe</div>
                        </a>
                      </li>
                      <li >
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-hatchback"></i>
                        </div>
                        <div class="font text-color-1">Hatchback</div>
                        </a>
                      </li>
                      <li >
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-hybrid"></i>
                        </div>
                        <div class="font text-color-1">Hybrid</div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-item">
              <div class="img-slider">
                <img class="img-item lazyload" data-src="assets/images/slider/slider1.1.webp"
                  src="assets/images/slider/slider1.1.webp" alt="" />
              </div>
              <div class="container-full relative">
                <div class="content po-content-two">
                  <div class="heading">
                    <h1 class="text-color-1 fade-item fade-item-1">
                      Trusted car buying and selling platform
                    </h1>
                    <p class="fs-18 text-color-1 fade-item fade-item-1 mb-40">
                      We have thousands of car listings, along with the
                      most reputable partners.
                    </p>
                    <ul class="ul flex flex-wrap category-list-car">
                      <li>
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-suv"></i>
                        </div>
                        <div class="font text-color-1">SUV</div>
                        </a>
                      </li>
                      <li >
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-coupe"></i>
                        </div>
                        <div class="font text-color-1">Coupe</div>
                        </a>
                      </li>
                      <li >
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-hatchback"></i>
                        </div>
                        <div class="font text-color-1">Hatchback</div>
                        </a>
                      </li>
                      <li >
                        <a href="listing-grid.html" class="flex-three">
                        <div class="icon">
                          <i class="icon-carus-hybrid"></i>
                        </div>
                        <div class="font text-color-1">Hybrid</div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button-swiper">
          <div class="swiper-button-prev style-1"></div>
          <div class="swiper-button-next style-1"></div>
        </div>
      </div>
      <!-- filter -->
      <div class="flat-filter-search home wow fadeInUp">
        <div class="container2">
          <div class="flat-tabs">
            <div class="box-tab">
              <ul class="menu-tab tab-title flex">
                <li class="item-title active">
                  <span class="inner fs-18 fw-6">All categories</span>
                </li>
                <li class="item-title">
                  <span class="inner fs-18 fw-6">New cars</span>
                </li>
                <li class="item-title">
                  <span class="inner fs-18 fw-6">Used cars</span>
                </li>
              </ul>
            </div>
            <div class="content-tab">
              <div class="content-inner tab-content">
                <div class="form-sl">
                  <form id="carSearchForm">
                    <div class="wd-find-select flex align-end">
                      <div class="inner-group">
                        <div class="form-group-1">
                          <div class="group-select">
                            <label>Brand Name</label>
                            <input type="hidden" name="brand" value="">
                            <div class="nice-select" tabindex="0">
                                <span class="current">Any Brand</span>
                                <ul class="list">
                                    <li data-value="" class="option selected">Any Brand</li>
                                    <li data-value="Mercedes-Benz" class="option">Mercedes-Benz</li>
                                    <li data-value="Land Rover" class="option">Land Rover</li>
                                    <li data-value="KIA" class="option">KIA</li>
                                    <li data-value="Renault" class="option">Renault</li>
                                    <li data-value="Nissan" class="option">Nissan</li>
                                    <li data-value="Ford" class="option">Ford</li>
                                    <li data-value="BMW" class="option">BMW</li>
                                    <li data-value="NIO" class="option">NIO</li>
                                    <li data-value="Mini" class="option">Mini</li>
                                    <li data-value="Jeep" class="option">Jeep</li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-1">
                          <div class="group-select">
                            <label>Type</label>
                            <input type="hidden" name="body_type" value="">
                            <div class="nice-select" tabindex="0">
                                <span class="current">Any Type</span>
                                <ul class="list">
                                    <li data-value="" class="option selected">Any Type</li>
                                    <li data-value="SUV" class="option">SUV</li>
                                    <li data-value="Coupe" class="option">Coupe</li>
                                    <li data-value="Hatchback" class="option">Hatchback</li>
                                    <li data-value="Hybrid" class="option">Hybrid</li>
                                    <li data-value="Sedan" class="option">Sedan</li>
                                    <li data-value="Crossover" class="option">Crossover</li>
                                    <li data-value="Minivan" class="option">Minivan</li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="form-group-1">
                          <div class="group-select">
                            <label>Model</label>
                            <input type="hidden" name="model" value="">
<div class="nice-select" tabindex="0">
    <span class="current">Any Model</span>
    <ul class="list">
        <li data-value="" class="option selected">Any Model</li>
        <li data-value="Old Classic" class="option">Old Classic</li>
        <li data-value="Modern Supercar" class="option">Modern Supercar</li>
        <li data-value="Muscle Car" class="option">Muscle Car</li>
        <li data-value="JDM" class="option">JDM</li>
        <li data-value="Off-Road/Truck" class="option">Off-Road/Truck</li>
        <li data-value="Rally/F1 Race Car" class="option">Rally/F1 Race Car</li>
    </ul>
</div>
                          </div>
                        </div>
                        <div class="form-group-1">
                          <div class="group-select">
                            <label>Price</label>
                            <input type="hidden" name="price_limit" value="">
<div class="nice-select" tabindex="0">
    <span class="current">Any Price</span>
    <ul class="list">
        <li data-value="" class="option selected">Any Price</li>
        <li data-value="1000" class="option">$1,000</li>
        <li data-value="2000" class="option">$2,000</li>
        <li data-value="3000" class="option">$3,000</li>
        <li data-value="5000" class="option">$5,000</li>
        <li data-value="10000" class="option">$10,000</li>
        <li data-value="20000" class="option">$20,000</li>
        <li data-value="30000" class="option">$30,000</li>
        <li data-value="50000" class="option">$50,000</li>
        <li data-value="100000" class="option">$100,000</li>
    </ul>
</div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group-2 form-style">
                        <a class="icon-filter pull-right">
                          <i class="icon-carus-sliders"></i>
                          <i class="icon-carus-search search-icon"></i>
                        </a>
                      </div>
                      <div class="button-search sc-btn-top">
    <button type="submit" class="sc-button">
        <i class="icon-carus-search text-color-1"></i>
        <span>Search</span>
    </button>
</div>
                    </div>
                    <div class="wd-find-select wd-search-form">
                      <div class="box1 grid-4 align-center">

                        <!-- Fuel Type -->
                        <div class="form-group wg-box3">
                          <div class="group-select">
                            <label>Fuel Type</label>
                            <div class="nice-select" tabindex="0">
                              <span class="current">Select Fuel Type</span>
                              <ul class="list">
                                <li data-value="" class="option selected">Select Fuel Type</li>
                                <li data-value="petrol" class="option">Petrol</li>
                                <li data-value="diesel" class="option">Diesel</li>
                                <li data-value="electric" class="option">Electric</li>
                                <li data-value="hybrid" class="option">Hybrid</li>
                                <li data-value="cng" class="option">CNG</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!-- Transmission -->
                        <div class="form-group wg-box3">
                          <div class="group-select">
                            <label>Transmission</label>
                            <div class="nice-select" tabindex="0">
                              <span class="current">Select Transmission</span>
                              <ul class="list">
                                <li data-value="" class="option selected">Select Transmission</li>
                                <li data-value="manual" class="option">Manual</li>
                                <li data-value="automatic" class="option">Automatic</li>
                                <li data-value="cvt" class="option">CVT</li>
                                <li data-value="semi_automatic" class="option">Semi-Automatic</li>
                                <li data-value="dual_clutch" class="option">Dual-Clutch</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!-- Driver Type -->
                        <div class="form-group wg-box3">
                          <div class="group-select">
                            <label>Driver Type</label>
                            <div class="nice-select" tabindex="0">
                              <span class="current">Select Driver Type</span>
                              <ul class="list">
                                <li data-value="" class="option selected">Select Driver Type</li>
                                <li data-value="fwd" class="option">FWD (Front-Wheel Drive)</li>
                                <li data-value="rwd" class="option">RWD (Rear-Wheel Drive)</li>
                                <li data-value="awd" class="option">AWD (All-Wheel Drive)</li>
                                <li data-value="4wd" class="option">4WD (4-Wheel Drive)</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!-- Cylinder -->
                        <div class="form-group wg-box3">
                          <div class="group-select">
                            <label>Cylinder</label>
                            <div class="nice-select" tabindex="0">
                              <span class="current">Select Cylinder</span>
                              <ul class="list">
                                <li data-value="" class="option selected">Select Cylinder</li>
                                <li data-value="3" class="option">3 Cylinders</li>
                                <li data-value="4" class="option">4 Cylinders</li>
                                <li data-value="6" class="option">6 Cylinders</li>
                                <li data-value="8" class="option">8 Cylinders</li>
                                <li data-value="12" class="option">12 Cylinders</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="box1 grid-4 align-center">

                        <!-- Color -->
                        <div class="form-group wg-box3">
                          <div class="group-select">
                            <label>Color</label>
                            <div class="nice-select" tabindex="0">
                              <span class="current">Select Color</span>
                              <ul class="list">
                                <li data-value="" class="option selected">Select Color</li>
                                <li data-value="white" class="option">White</li>
                                <li data-value="black" class="option">Black</li>
                                <li data-value="silver" class="option">Silver</li>
                                <li data-value="gray" class="option">Gray</li>
                                <li data-value="blue" class="option">Blue</li>
                                <li data-value="red" class="option">Red</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!-- Price Slider -->
                        <div class="form-group wg-box3">
                          <div class="widget widget-price range-slider-wrapper" data-min="0" data-max="800000"
                            data-start="[0, 800000]" data-step="10000" data-suffix=" km" data-thousand=".">


                            <div class="caption flex-two">
                              <div>
                                <span class="slider-range-value"></span>
                                <span class="delimiter"> - </span>
                                <span class="slider-range-value"></span>
                              </div>
                            </div>

                            <div class="slider-target"></div>

                            <div class="slider-labels">
                              <div>
                                <input type="hidden" class="min-input" name="min-value" value="" />
                                <input type="hidden" class="max-input" name="max-value" value="" />
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Price -->
                        <div class="form-group wg-box3">
                          <div class="widget widget-price range-slider-wrapper" data-label="Price: " data-min="0"
                            data-max="500000" data-start="[0, 500000]" data-step="1" data-suffix="$" data-thousand=",">
                            <div class="caption flex-two">
                              <div>
                                <span class="slider-range-value"></span>
                                <span class="delimiter"> - </span>
                                <span class="slider-range-value"></span>
                              </div>
                            </div>

                            <div class="slider-target"></div>

                            <div class="slider-labels">
                              <div>
                                <input type="hidden" class="min-input" name="min-value" value="" />
                                <input type="hidden" class="max-input" name="max-value" value="" />
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Year -->
                        <div class="form-group wg-box3">
                          <div class="widget widget-price range-slider-wrapper" data-label="Year: " data-min="2000"
                            data-max="2026" data-start="[2000, 2026]" data-step="1" data-thousand="">
                            <div class="caption flex-two">
                              <div>
                                <span class="slider-range-value"></span>
                                <span class="delimiter"> - </span>
                                <span class="slider-range-value"></span>
                              </div>
                            </div>

                            <div class="slider-target"></div>

                            <div class="slider-labels">
                              <input type="hidden" class="min-input" name="min-year" value="" />
                              <input type="hidden" class="max-input" name="max-year" value="" />
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="box1 grid-4 align-center">

                        <!-- Door -->
                        <div class="form-group wg-box3">
                          <div class="group-select">
                            <label>Door</label>
                            <div class="nice-select" tabindex="0">
                              <span class="current">Select Door</span>
                              <ul class="list">
                                <li data-value="" class="option selected">Select Door</li>
                                <li data-value="2" class="option">2 Doors</li>
                                <li data-value="3" class="option">3 Doors</li>
                                <li data-value="4" class="option">4 Doors</li>
                                <li data-value="5" class="option">5 Doors</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!-- Seat -->
                        <div class="form-group wg-box3">
                          <div class="group-select">
                            <label>Seat</label>
                            <div class="nice-select" tabindex="0">
                              <span class="current">Select Seat</span>
                              <ul class="list">
                                <li data-value="" class="option selected">Select Seat</li>
                                <li data-value="2" class="option">2 Seats</li>
                                <li data-value="4" class="option">4 Seats</li>
                                <li data-value="5" class="option">5 Seats</li>
                                <li data-value="7" class="option">7 Seats</li>
                                <li data-value="8" class="option">8+ Seats</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!-- Ownership -->
                        <div class="form-group wg-box3">
                          <div class="group-select">
                            <label>Ownership</label>
                            <div class="nice-select" tabindex="0">
                              <span class="current">Select Ownership</span>
                              <ul class="list">
                                <li data-value="" class="option selected">Select Ownership</li>
                                <li data-value="new" class="option">New</li>
                                <li data-value="used" class="option">Used</li>
                                <li data-value="preowned" class="option">Certified Pre-Owned</li>
                                <li data-value="lease_return" class="option">Lease Return</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="form-group wg-box3">
                          <div class="group-select">
                            <label>Cylinder</label>
                            <div class="nice-select" tabindex="0">
                              <span class="current">Select Cylinder</span>
                              <ul class="list">
                                <li data-value="" class="option selected">Select Cylinder</li>
                                <li data-value="3" class="option">3 Cylinders</li>
                                <li data-value="4" class="option">4 Cylinders</li>
                                <li data-value="6" class="option">6 Cylinders</li>
                                <li data-value="8" class="option">8 Cylinders</li>
                                <li data-value="12" class="option">12 Cylinders</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="features-wrap">
                        <h2>Features</h2>
                        <div class="box2 grid-5">
                          <div class="form-group wg-box4">
                            <div class="title fs-18 fw-5 lh-20 text-color-2">
                              Request Price Label
                            </div>
                            <div class="tf-amenities bg-white">
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">A/C: Front</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Backup Camera</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Cruise Control</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Navigation</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Power Locks</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group wg-box4">
                            <div class="title fs-18 fw-5 lh-20 text-color-2">
                              Entertainment
                            </div>
                            <div class="tf-amenities bg-white">
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Audio system</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Touchscreen display</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">GPS navigation</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Phone connectivity</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">In-car Wi-Fi</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group wg-box4">
                            <div class="title fs-18 fw-5 lh-20 text-color-2">
                              Safety
                            </div>
                            <div class="tf-amenities bg-white">
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Chrome-plated grill</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Smart headlight cluster</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Premium wheels</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Body character lines</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">High-quality paint</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group wg-box4">
                            <div class="title fs-18 fw-5 lh-20 text-color-2">
                              Interior
                            </div>
                            <div class="tf-amenities bg-white">
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Premium leather seats</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Wood trim</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Mini bar</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Tachometer</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Glove Compartment</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group wg-box4">
                            <div class="title fs-16 fw-5 lh-20 text-color-2">
                              Exterior
                            </div>
                            <div class="tf-amenities bg-white">
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Chrome-plated grill</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Smart headlight cluster</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Premium wheels</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">Body character lines</span>
                              </label>
                              <label class="flex-three">
                                <input name="newsletter" type="checkbox" />
                                <span class="btn-checkbox"></span>
                                <span class="text-color-2">High-quality paint</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- End Job  Search Form-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- widegt categori -->
      <section class="tf-section2">
        <div class="container">
          <div class="heading-section flex align-center justify-space flex-wrap gap-20 wow fadeInUp">
            <h2 class="heading-tittle">
              Popular Brands
            </h2>
            <a href="listing-grid.html" class="tf-btn-arrow">See all<i class="icon-carus-arrowcircleright"></i></a>
          </div>
          <div class="swiper tf-swiper wow fadeInUp" data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 12,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 1,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-categories",
                            "prevEl": ".nav-prev-categories"
                        },
                        "pagination": { "el": ".sw-pagination-categories", "clickable": true },
                        "breakpoints": {
                        "575": { "slidesPerView": 4, "spaceBetween": 12 ,"slidesPerGroup": 2 },    
                        "768": { "slidesPerView": 6, "spaceBetween": 12, "slidesPerGroup": 3 },
                        "1200": { "slidesPerView": 9, "spaceBetween": 44, "slidesPerGroup": 3}
                        }
                    }'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="Land Rover">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner1.webp"
                      src="assets/images/partner/partner1.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      Land Rover
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="KIA">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner2.webp"
                      src="assets/images/partner/partner2.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      KIA
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="Renault">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner3.webp"
                      src="assets/images/partner/partner3.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      Renault
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="Nissan">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner4.webp"
                      src="assets/images/partner/partner4.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      Nissan
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="Ford">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner5.webp"
                      src="assets/images/partner/partner5.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      Ford
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="BMW">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner6.webp"
                      src="assets/images/partner/partner6.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      BMW
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="NIO">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner7.webp"
                      src="assets/images/partner/partner7.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      NIO
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="Mini">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner8.webp"
                      src="assets/images/partner/partner8.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      Mini
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="Mercedes-Benz">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner9.webp"
                      src="assets/images/partner/partner9.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      Mercedes
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="partner-item style-3 popular-brand-link" data-brand="Jeep">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner10.webp"
                      src="assets/images/partner/partner10.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      Jeep
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
               <a href="#" class="partner-item style-3 popular-brand-link" data-brand="Hyundai">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/partner/partner11.webp"
                      src="assets/images/partner/partner11.webp" alt="images" />
                  </div>
                  <div class="content center">
                    <div class="fs-14 fw-5 title text-color-2 font-2">
                      Hyundai
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <span class="d-flex d-xl-none sw-dot-default sw-pagination-categories justify-content-center"></span>
          </div>
        </div>
      </section>

      <!-- widegt banner -->
      <!-- <section class="tf-section-banner tf-section2">
        <div class="container">
          <div class="tf-grid-layout md-col-2 gap-48">
            <div class="tf-image-box bg-one flex-one align-end wow fadeInUp">
              <div class="content">
                <h3 class="title">Are you looking to buy a car?</h3>
                <p class="sub">
                  If you're looking for a reliable car at a reasonable
                  price, let us help make your choice easier!
                </p>
                <a href="dealer-listing.html" class="find-cars">
                  <span>Find cars</span>
                  <i class="icon-carus-arright"></i>
                </a>
              </div>
              <div class="image">
                <img class="ls-is-cached lazyloaded" data-src="assets/images/img-box/find-car-3.webp"
                  src="assets/images/img-box/find-car-3.webp" alt="images" />
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <!-- widegt List car -->
      <section class="tf-section">
        <div class="container">
          <div class="heading-section flex align-center justify-space flex-wrap gap-20 wow fadeInUp">
            <h2 class="heading-tittle">
              New Cars By Body Type
            </h2>
            <a href="listing-grid.html" class="tf-btn-arrow">See all<i class="icon-carus-arrowcircleright"></i></a>
          </div>
          <div class="flat-tabs themesflat-tabs wow fadeInUp"
     id="body-type-filter"
     data-wow-delay="0.2s">
            <div class="box-tab center">
              <ul class="menu-tab tab-title style flex">
                  <li class="item-title active" data-type="Hatchback">
                      <span class="inner">Hatchback</span>
                  </li>
                  <li class="item-title" data-type="Sedan">
                      <span class="inner">Sedan</span>
                  </li>
                  <li class="item-title" data-type="SUV">
                      <span class="inner">SUV</span>
                  </li>
                  <li class="item-title" data-type="Crossover">
                      <span class="inner">Crossover</span>
                  </li>
                  <li class="item-title" data-type="Minivan">
                      <span class="inner">Minivan</span>
                  </li>
              </ul>
            </div>
            <div class="content-tab">
              <div class="content-inner tab-content">
                <div class="swiper-container tf-swiper" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 15,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 1,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-categories",
                            "prevEl": ".nav-prev-categories"
                        },
                        "pagination": { "el": ".sw-pagination-categories", "clickable": true },
                        "breakpoints": {
                        "575": { "slidesPerView": 2, "spaceBetween": 15 ,"slidesPerGroup": 1 },    
                        "768": { "slidesPerView": 3, "spaceBetween": 15, "slidesPerGroup": 1 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 30, "slidesPerGroup": 1}
                        }
                    }'>
                  <div class="swiper-wrapper">
                    @foreach($cars as $car)
                    <div class="swiper-slide"
                        data-body-type="{{ strtolower(trim($car->body_type ?? '')) }}"
                        data-brand="{{ strtolower(trim($car->brand ?? '')) }}"
                        data-model="{{ strtolower(trim($car->model ?? '')) }}"
                        data-price="{{ (float) ($car->price ?? 0) }}">
                        <div class="box-car-list hv-one">
                            <div class="image-group relative">
                                <div class="top">
                                    <ul class="d-flex gap-8">
                                        <li class="flag-tag success">New</li>
                                    </ul>
                                </div>

                                <ul class="change-heart flex">
                                    <li class="box-icon w-32">
                                        <a data-bs-toggle="offcanvas"
                                          data-bs-target="#offcanvasBottom"
                                          aria-controls="offcanvasBottom"
                                          class="icon">
                                            <i class="icon-carus-arrowsleftright"></i>
                                        </a>
                                    </li>
                                    <li class="box-icon w-32">
                                        <a href="{{ url('/cars') }}" class="icon">
                                            <i class="icon-carus-heart"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="img-style">
                                    <img
                                        class="lazyload"
                                        data-src="{{ $car->image_path ? asset('storage/' . $car->image_path) : asset('assets/images/car-list/car4.webp') }}"
                                        src="{{ asset($car->image_path) }}"
                                        alt="{{ $car->brand }} {{ $car->model }}"
                                    />
                                </div>
                            </div>

                            <div class="content">
                                <h3 class="link-style-1">
                                    <a href="{{ route('cars.show', $car->id) }}">
                                        {{ $car->brand }} {{ $car->model }}
                                    </a>
                                </h3>

                                <div class="icon-box flex flex-wrap">
                                    <div class="icons flex-three">
                                        {{-- Keep your original mileage SVG --}}
                                        <span>{{ $car->body_type ?? 'N/A' }}</span>
                                    </div>

                                    <div class="icons flex-three">
                                        <i class="icon-carus-icon12"></i>
                                        <span>{{ $car->year ?? 'N/A' }}</span>
                                    </div>

                                    <!-- <div class="icons flex-three">
                                        <i class="icon-carus-icon9"></i>
                                        <span>Petrol</span>
                                    </div> -->
                                </div>

                                <div class="days-box flex justify-space align-center">
                                    <div class="money fs-24 fw-7 lh-30 text-color-2">
                                        ${{ number_format((float) $car->price) }}
                                    </div>

                                    <a href="{{ route('cars.show', $car->id) }}" class="view-car">
                                        View <i class="icon-carus-arright"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
                  </div>
                  <span class="d-flex d-xl-none sw-dot-default sw-pagination-categories justify-content-center"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- widegt list car -->
      <section class="tf-section3">
        <div class="container">
          <div class="heading-section flex align-center justify-space flex-wrap gap-20 wow fadeInUp">
            <h2 class="heading-tittle">
              Popular listings
            </h2>
            <a href="listing-grid.html" class="tf-btn-arrow">See all<i class="icon-carus-arrowcircleright"></i></a>
          </div>
          <div class="flat-tabs themesflat-tabs wow fadeInUp" data-wow-delay="0.2s">
            <div class="box-tab center">
              <ul class="menu-tab tab-title style flex">
                <li class="item-title active">
                  <span class="inner">New car</span>
                </li>
                <li class="item-title">
                  <span class="inner">Used car</span>
                </li>
              </ul>
            </div>
            <div class="content-tab">
              <div class="content-inner tab-content">
                <div class="swiper-container tf-swiper" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 15,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 1,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-categories",
                            "prevEl": ".nav-prev-categories"
                        },
                        "pagination": { "el": ".sw-pagination-categories", "clickable": true },
                        "breakpoints": {
                        "575": { "slidesPerView": 2, "spaceBetween": 15 ,"slidesPerGroup": 1 },    
                        "768": { "slidesPerView": 2, "spaceBetween": 15, "slidesPerGroup": 1 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 30, "slidesPerGroup": 1}
                        }
                    }'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="box-car-list hv-one">
                        <div class="image-group relative">
                          <div class="top">
                            <ul class="d-flex gap-8">
                              <li class="flag-tag success">New</li>
                              <li class="flag-tag style-1">
                                <div class="icon">
                                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                      stroke="white" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </svg>
                                </div>
                                6
                              </li>
                            </ul>

                          </div>
                          <ul class="change-heart flex">
                            <li class="box-icon w-32">
                              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                aria-controls="offcanvasBottom" class="icon">
                                <i class="icon-carus-arrowsleftright"></i>
                              </a>
                            </li>
                            <li class="box-icon w-32">
                              <a href="my-favorite.html" class="icon">
                                <i class="icon-carus-heart"></i>
                              </a>
                            </li>
                          </ul>
                          <div class="img-style">
                            <img class="lazyload" data-src="assets/images/car-list/car5.webp"
                              src="assets/images/car-list/car5.webp" alt="image" />
                          </div>
                        </div>
                        <div class="content">

                          <h3 class="link-style-1">
                            <a href="/details">Peugeot 508 Sedan 2.0 GT Line (A)</a>
                          </h3>
                          <div class="icon-box flex flex-wrap">
                            <div class="icons flex-three">
                              <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z"
                                  fill="black" />
                              </svg>

                              <span>1032 Km</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon12"></i>
                              <span>Manual</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon9"></i>
                              <span>Petrol</span>
                            </div>
                          </div>

                          <div class="days-box flex justify-space align-center">

                            <div class="money fs-24 fw-7 lh-30 text-color-2">
                              $78,500
                            </div>

                            <a href="/details" class="view-car">View <i
                                class="icon-carus-arright"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="box-car-list hv-one">
                        <div class="image-group relative">
                          <div class="top">
                            <ul class="d-flex gap-8">
                              <li class="flag-tag success">New</li>
                              <li class="flag-tag style-1">
                                <div class="icon">
                                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                      stroke="white" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </svg>
                                </div>
                                6
                              </li>
                            </ul>

                          </div>
                          <ul class="change-heart flex">
                            <li class="box-icon w-32">
                              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                aria-controls="offcanvasBottom" class="icon">
                                <i class="icon-carus-arrowsleftright"></i>
                              </a>
                            </li>
                            <li class="box-icon w-32">
                              <a href="my-favorite.html" class="icon">
                                <i class="icon-carus-heart"></i>
                              </a>
                            </li>
                          </ul>
                          <div class="img-style">
                            <img class="lazyload" data-src="assets/images/car-list/car6.webp"
                              src="assets/images/car-list/car6.webp" alt="image" />
                          </div>
                        </div>
                        <div class="content">
                          <h3 class="link-style-1">
                            <a href="/details">Nissan Altima Sedan 2.5 Platinum (A)</a>
                          </h3>
                          <div class="icon-box flex flex-wrap">
                            <div class="icons flex-three">
                              <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z"
                                  fill="black" />
                              </svg>

                              <span>1032 Km</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon12"></i>
                              <span>Manual</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon9"></i>
                              <span>Petrol</span>
                            </div>
                          </div>

                          <div class="days-box flex justify-space align-center">

                            <div class="money fs-24 fw-7 lh-30 text-color-2">
                              $76,600
                            </div>

                            <a href="/details" class="view-car">View <i
                                class="icon-carus-arright"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="box-car-list hv-one">
                        <div class="image-group relative">
                          <div class="top">
                            <ul class="d-flex gap-8">
                              <li class="flag-tag success">New</li>
                              <li class="flag-tag style-1">
                                <div class="icon">
                                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                      stroke="white" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </svg>
                                </div>
                                6
                              </li>
                            </ul>

                          </div>
                          <ul class="change-heart flex">
                            <li class="box-icon w-32">
                              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                aria-controls="offcanvasBottom" class="icon">
                                <i class="icon-carus-arrowsleftright"></i>
                              </a>
                            </li>
                            <li class="box-icon w-32">
                              <a href="my-favorite.html" class="icon">
                                <i class="icon-carus-heart"></i>
                              </a>
                            </li>
                          </ul>
                          <div class="img-style">
                            <img class="lazyload" data-src="assets/images/car-list/car7.webp"
                              src="assets/images/car-list/car7.webp" alt="image" />
                          </div>
                        </div>
                        <div class="content">
                          <h3 class="link-style-1">
                            <a href="/details">Skoda Superb Sedan 2.0 Laurin (A)</a>
                          </h3>
                          <div class="icon-box flex flex-wrap">
                            <div class="icons flex-three">
                              <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z"
                                  fill="black" />
                              </svg>

                              <span>1032 Km</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon12"></i>
                              <span>Manual</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon9"></i>
                              <span>Petrol</span>
                            </div>
                          </div>

                          <div class="days-box flex justify-space align-center">

                            <div class="money fs-24 fw-7 lh-30 text-color-2">
                              $75,500
                            </div>

                            <a href="/details" class="view-car">View <i
                                class="icon-carus-arright"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="box-car-list hv-one">
                        <div class="image-group relative">
                          <div class="top">
                            <ul class="d-flex gap-8">
                              <li class="flag-tag success">New</li>
                              <li class="flag-tag style-1">
                                <div class="icon">
                                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                      stroke="white" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </svg>
                                </div>
                                6
                              </li>
                            </ul>

                          </div>
                          <ul class="change-heart flex">
                            <li class="box-icon w-32">
                              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                aria-controls="offcanvasBottom" class="icon">
                                <i class="icon-carus-arrowsleftright"></i>
                              </a>
                            </li>
                            <li class="box-icon w-32">
                              <a href="my-favorite.html" class="icon">
                                <i class="icon-carus-heart"></i>
                              </a>
                            </li>
                          </ul>
                          <div class="img-style">
                            <img class="lazyload" data-src="assets/images/car-list/car8.webp"
                              src="assets/images/car-list/car8.webp" alt="image" />
                          </div>
                        </div>
                        <div class="content">
                          <h3 class="link-style-1">
                            <a href="/details">BMW 320i Sedan 2.0 Sport Line (A)</a>
                          </h3>
                          <div class="icon-box flex flex-wrap">
                            <div class="icons flex-three">
                              <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z"
                                  fill="black" />
                              </svg>

                              <span>1032 Km</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon12"></i>
                              <span>Manual</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon9"></i>
                              <span>Petrol</span>
                            </div>
                          </div>

                          <div class="days-box flex justify-space align-center">

                            <div class="money fs-24 fw-7 lh-30 text-color-2">
                              $79,500
                            </div>

                            <a href="/details" class="view-car">View <i
                                class="icon-carus-arright"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <span class="d-flex d-xl-none sw-dot-default sw-pagination-categories justify-content-center"></span>
                </div>
              </div>
              <div class="content-inner tab-content">
                <div class="swiper-container tf-swiper" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 15,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 1,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-categories",
                            "prevEl": ".nav-prev-categories"
                        },
                        "pagination": { "el": ".sw-pagination-categories", "clickable": true },
                        "breakpoints": {
                        "575": { "slidesPerView": 2, "spaceBetween": 15 ,"slidesPerGroup": 1 },    
                        "768": { "slidesPerView": 2, "spaceBetween": 15, "slidesPerGroup": 1 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 30, "slidesPerGroup": 1}
                        }
                    }'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="box-car-list hv-one">
                        <div class="image-group relative">
                          <div class="top">
                            <ul class="d-flex gap-8">
                              <li class="flag-tag success">New</li>
                              <li class="flag-tag style-1">
                                <div class="icon">
                                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                      stroke="white" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </svg>
                                </div>
                                6
                              </li>
                            </ul>

                          </div>
                          <ul class="change-heart flex">
                            <li class="box-icon w-32">
                              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                aria-controls="offcanvasBottom" class="icon">
                                <i class="icon-carus-arrowsleftright"></i>
                              </a>
                            </li>
                            <li class="box-icon w-32">
                              <a href="my-favorite.html" class="icon">
                                <i class="icon-carus-heart"></i>
                              </a>
                            </li>
                          </ul>
                          <div class="img-style">
                            <img class="lazyload" data-src="assets/images/car-list/car5.webp"
                              src="assets/images/car-list/car5.webp" alt="image" />
                          </div>
                        </div>
                        <div class="content">

                          <h3 class="link-style-1">
                            <a href="/details">Peugeot 508 Sedan 2.0 GT Line (A)</a>
                          </h3>
                          <div class="icon-box flex flex-wrap">
                            <div class="icons flex-three">
                              <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z"
                                  fill="black" />
                              </svg>

                              <span>1032 Km</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon12"></i>
                              <span>Manual</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon9"></i>
                              <span>Petrol</span>
                            </div>
                          </div>

                          <div class="days-box flex justify-space align-center">

                            <div class="money fs-24 fw-7 lh-30 text-color-2">
                              $76,600
                            </div>

                            <a href="/details" class="view-car">View <i
                                class="icon-carus-arright"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="box-car-list hv-one">
                        <div class="image-group relative">
                          <div class="top">
                            <ul class="d-flex gap-8">
                              <li class="flag-tag success">New</li>
                              <li class="flag-tag style-1">
                                <div class="icon">
                                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                      stroke="white" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </svg>
                                </div>
                                6
                              </li>
                            </ul>

                          </div>
                          <ul class="change-heart flex">
                            <li class="box-icon w-32">
                              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                aria-controls="offcanvasBottom" class="icon">
                                <i class="icon-carus-arrowsleftright"></i>
                              </a>
                            </li>
                            <li class="box-icon w-32">
                              <a href="my-favorite.html" class="icon">
                                <i class="icon-carus-heart"></i>
                              </a>
                            </li>
                          </ul>
                          <div class="img-style">
                            <img class="lazyload" data-src="assets/images/car-list/car6.webp"
                              src="assets/images/car-list/car6.webp" alt="image" />
                          </div>
                        </div>
                        <div class="content">
                          <h3 class="link-style-1">
                            <a href="/details">Nissan Altima Sedan 2.5 Platinum (A)</a>
                          </h3>
                          <div class="icon-box flex flex-wrap">
                            <div class="icons flex-three">
                              <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z"
                                  fill="black" />
                              </svg>

                              <span>1032 Km</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon12"></i>
                              <span>Manual</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon9"></i>
                              <span>Petrol</span>
                            </div>
                          </div>

                          <div class="days-box flex justify-space align-center">

                            <div class="money fs-24 fw-7 lh-30 text-color-2">
                              $72,500
                            </div>

                            <a href="/details" class="view-car">View <i
                                class="icon-carus-arright"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="box-car-list hv-one">
                        <div class="image-group relative">
                          <div class="top">
                            <ul class="d-flex gap-8">
                              <li class="flag-tag success">New</li>
                              <li class="flag-tag style-1">
                                <div class="icon">
                                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                      stroke="white" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </svg>
                                </div>
                                6
                              </li>
                            </ul>

                          </div>
                          <ul class="change-heart flex">
                            <li class="box-icon w-32">
                              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                aria-controls="offcanvasBottom" class="icon">
                                <i class="icon-carus-arrowsleftright"></i>
                              </a>
                            </li>
                            <li class="box-icon w-32">
                              <a href="my-favorite.html" class="icon">
                                <i class="icon-carus-heart"></i>
                              </a>
                            </li>
                          </ul>
                          <div class="img-style">
                            <img class="lazyload" data-src="assets/images/car-list/car7.webp"
                              src="assets/images/car-list/car7.webp" alt="image" />
                          </div>
                        </div>
                        <div class="content">
                          <h3 class="link-style-1">
                            <a href="/details">Skoda Superb Sedan 2.0 Laurin (A)</a>
                          </h3>
                          <div class="icon-box flex flex-wrap">
                            <div class="icons flex-three">
                              <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z"
                                  fill="black" />
                              </svg>

                              <span>1032 Km</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon12"></i>
                              <span>Manual</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon9"></i>
                              <span>Petrol</span>
                            </div>
                          </div>

                          <div class="days-box flex justify-space align-center">

                            <div class="money fs-24 fw-7 lh-30 text-color-2">
                              $73,500
                            </div>

                            <a href="/details" class="view-car">View <i
                                class="icon-carus-arright"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="box-car-list hv-one">
                        <div class="image-group relative">
                          <div class="top">
                            <ul class="d-flex gap-8">
                              <li class="flag-tag success">New</li>
                              <li class="flag-tag style-1">
                                <div class="icon">
                                  <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                      stroke="white" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round" />
                                  </svg>
                                </div>
                                6
                              </li>
                            </ul>

                          </div>
                          <ul class="change-heart flex">
                            <li class="box-icon w-32">
                              <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                                aria-controls="offcanvasBottom" class="icon">
                                <i class="icon-carus-arrowsleftright"></i>
                              </a>
                            </li>
                            <li class="box-icon w-32">
                              <a href="my-favorite.html" class="icon">
                                <i class="icon-carus-heart"></i>
                              </a>
                            </li>
                          </ul>
                          <div class="img-style">
                            <img class="lazyload" data-src="assets/images/car-list/car8.webp"
                              src="assets/images/car-list/car8.webp" alt="image" />
                          </div>
                        </div>
                        <div class="content">
                          <h3 class="link-style-1">
                            <a href="/details">BMW 320i Sedan 2.0 Sport Line (A)</a>
                          </h3>
                          <div class="icon-box flex flex-wrap">
                            <div class="icons flex-three">
                              <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z"
                                  fill="black" />
                              </svg>

                              <span>1032 Km</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon12"></i>
                              <span>Manual</span>
                            </div>
                            <div class="icons flex-three">
                              <i class="icon-carus-icon9"></i>
                              <span>Petrol</span>
                            </div>
                          </div>

                          <div class="days-box flex justify-space align-center">

                            <div class="money fs-24 fw-7 lh-30 text-color-2">
                              $66,500
                            </div>

                            <a href="/details" class="view-car">View <i
                                class="icon-carus-arright"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <span class="d-flex d-xl-none sw-dot-default sw-pagination-categories justify-content-center"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- widegt loan-calculator -->
      <!-- <section class="loan-calculator inner-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="loan-calculator-form w-560 fl-right wow fadeInRight">
                <div class="box-title">
                  <h2 class="heading-tittle title-ct">Auto Loan Calculator</h2>
                  <p class="fs-14 text-color-2">
                    Use our calculator to estimate your monthly car payments.
                  </p>
                </div>

                <div id="comments" class="comments">
                  <div class="respond-comment">
                    <form id="loan-calculator" class="comment-form form-submit" action="#">

                      <fieldset class="name-wrap">
                        <label class="font-1 fs-14 fw-7">Total Price</label>
                        <input type="text" id="total_price" class="tb-my-input format-currency" name="total_price"
                          placeholder="$" required="" />
                      </fieldset>

                      <div class="grid-sw-2">
                        <fieldset class="email-wrap style-text">
                          <label class="font-1 fs-14 fw-7">Down payment</label>
                          <input type="text" id="down_payment" class="tb-my-input format-percent" name="down_payment"
                            placeholder="0%" required="" />
                        </fieldset>

                        <fieldset class="phone-wrap style-text">
                          <label class="font-1 fs-14 fw-7">Terms</label>
                          <div class="nice-select relative" id="terms-select" tabindex="0">
                            <span class="current">1 Monthly</span>
                            <ul class="list style">
                              <li data-value="1" class="option selected">1 Monthly</li>
                              <li data-value="3" class="option">3 Monthly</li>
                              <li data-value="6" class="option">6 Monthly</li>
                              <li data-value="12" class="option">12 Monthly</li>
                            </ul>
                          </div>
                        </fieldset>
                      </div>

                      <div class="grid-sw-2">
                        <fieldset class="email-wrap style-text">
                          <label class="font-1 fs-14 fw-7">Interest rate</label>
                          <input type="text" id="interest_rate" class="tb-my-input format-percent" name="interest_rate"
                            placeholder="0%" required="" />
                        </fieldset>

                        <fieldset class="phone-wrap style-text">
                          <label class="font-1 fs-14 fw-7">Terms (Months)</label>
                          <div class="nice-select relative" id="period-select" tabindex="0">
                            <span class="current">1 months</span>
                            <ul class="list style">
                              <li data-value="1" class="option selected">1 months</li>
                              <li data-value="3" class="option">3 months</li>
                              <li data-value="6" class="option">6 months</li>
                              <li data-value="12" class="option">12 months</li>
                            </ul>
                          </div>
                        </fieldset>
                      </div>

                      <div class="list-total">
                        <ul>
                          <li class="flex-three">
                            <div class="title-total fs-16 fw-7 lh-20 text-color-2 font">Down payment amount</div>
                            <div id="res_down_payment" class="fs-16 fw-5 lh-20 text-color-2 font">$0</div>
                          </li>
                          <li class="flex-three">
                            <div class="title-total fs-16 fw-7 lh-20 text-color-2 font">Amount financed</div>
                            <div id="res_amount_financed" class="fs-16 fw-5 lh-20 text-color-2 font">$0.00</div>
                          </li>
                          <li class="flex-three">
                            <div class="title-total fs-16 fw-7 lh-20 text-color-3 font">Monthly payment</div>
                            <div id="res_monthly_payment" class="fs-16 fw-5 lh-20 text-color-3 font">$0.00</div>
                          </li>
                        </ul>
                      </div>

                      <div class="button-boxs">
                        <button class="sc-button" id="submit-loan" name="submit" type="submit">
                          <span>Apply for a loan</span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </section> -->

      <!-- widegt list car -->
      <section class="tf-section">
        <div class="container">
          <div class="heading-section flex align-center justify-space flex-wrap gap-20 wow fadeInUp">
            <h2 class="heading-tittle">
              Recommended Cars For You
            </h2>
            <a href="listing-grid.html" class="tf-btn-arrow">See all<i class="icon-carus-arrowcircleright"></i></a>
          </div>
          <div class="swiper-container tf-swiper wow fadeInUp" data-wow-delay="0.2s" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 15,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 1,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-categories",
                            "prevEl": ".nav-prev-categories"
                        },
                        "pagination": { "el": ".sw-pagination-categories", "clickable": true },
                        "breakpoints": {
                        "575": { "slidesPerView": 2, "spaceBetween": 15 ,"slidesPerGroup": 1 },    
                        "768": { "slidesPerView": 2, "spaceBetween": 15, "slidesPerGroup": 1 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 30, "slidesPerGroup": 1}
                        }
                    }'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="box-car-list hv-one">
                  <div class="image-group relative">
                    <div class="top">
                      <ul class="d-flex gap-8">
                        <li class="flag-tag success">New</li>
                        <li class="flag-tag style-1">
                          <div class="icon">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          6
                        </li>
                      </ul>
                    </div>
                    <ul class="change-heart flex">
                      <li class="box-icon w-32">
                        <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"
                          class="icon">
                          <i class="icon-carus-arrowsleftright"></i>
                        </a>
                      </li>
                      <li class="box-icon w-32">
                        <a href="my-favorite.html" class="icon">
                          <i class="icon-carus-heart"></i>
                        </a>
                      </li>
                    </ul>
                    <div class="img-style">
                      <img class="lazyload" data-src="assets/images/car-list/car9.webp"
                        src="assets/images/car-list/car9.webp" alt="image" />
                    </div>
                  </div>
                  <div class="content">

                    <h3 class="link-style-1">
                      <a href="/details">Jaguar XE Sedan 2.0 Prestige (A)</a>
                    </h3>
                    <div class="icon-box flex flex-wrap">
                      <div class="icons flex-three">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z" fill="black"/>
</svg>
                        <span>1032 Km</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon12"></i>
                        <span>Manual</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon9"></i>
                        <span>Petrol</span>
                      </div>
                    </div>

                    <div class="days-box flex justify-space align-center">
                      <div class="money fs-24 fw-7 lh-30 text-color-2">
                        $60,500
                      </div>
                      <a href="/details" class="view-car">View <i class="icon-carus-arright"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="box-car-list hv-one">
                  <div class="image-group relative">
                    <div class="top">
                      <ul class="d-flex gap-8">
                        <li class="flag-tag success">New</li>
                        <li class="flag-tag style-1">
                          <div class="icon">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          6
                        </li>
                      </ul>

                    </div>
                    <ul class="change-heart flex">
                      <li class="box-icon w-32">
                        <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"
                          class="icon">
                          <i class="icon-carus-arrowsleftright"></i>
                        </a>
                      </li>
                      <li class="box-icon w-32">
                        <a href="my-favorite.html" class="icon">
                          <i class="icon-carus-heart"></i>
                        </a>
                      </li>
                    </ul>
                    <div class="img-style">
                      <img class="lazyload" data-src="assets/images/car-list/car10.webp"
                        src="assets/images/car-list/car10.webp" alt="image" />
                    </div>
                  </div>
                  <div class="content">
                    <h3 class="link-style-1">
                      <a href="/details">Audi A4 Sedan 2.0 Technology Pack</a>
                    </h3>
                    <div class="icon-box flex flex-wrap">
                      <div class="icons flex-three">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z" fill="black"/>
</svg>
                        <span>1032 Km</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon12"></i>
                        <span>Manual</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon9"></i>
                        <span>Petrol</span>
                      </div>
                    </div>

                    <div class="days-box flex justify-space align-center">
                      <div class="money fs-24 fw-7 lh-30 text-color-2">
                        $76,000
                      </div>
                      <a href="/details" class="view-car">View <i class="icon-carus-arright"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="box-car-list hv-one">
                  <div class="image-group relative">
                    <div class="top">
                      <ul class="d-flex gap-8">
                        <li class="flag-tag success">New</li>
                        <li class="flag-tag style-1">
                          <div class="icon">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          6
                        </li>
                      </ul>

                    </div>
                    <ul class="change-heart flex">
                      <li class="box-icon w-32">
                        <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"
                          class="icon">
                          <i class="icon-carus-arrowsleftright"></i>
                        </a>
                      </li>
                      <li class="box-icon w-32">
                        <a href="my-favorite.html" class="icon">
                          <i class="icon-carus-heart"></i>
                        </a>
                      </li>
                    </ul>
                    <div class="img-style">
                      <img class="lazyload" data-src="assets/images/car-list/car11.webp"
                        src="assets/images/car-list/car11.webp" alt="image" />
                    </div>
                  </div>
                  <div class="content">
                    <h3 class="link-style-1">
                      <a href="/details">Jaguar XE Sedan 2.0 Prestige (A)</a>
                    </h3>
                    <div class="icon-box flex flex-wrap">
                      <div class="icons flex-three">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z" fill="black"/>
</svg>
                        <span>1032 Km</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon12"></i>
                        <span>Manual</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon9"></i>
                        <span>Petrol</span>
                      </div>
                    </div>

                    <div class="days-box flex justify-space align-center">
                      <div class="money fs-24 fw-7 lh-30 text-color-2">
                        $76,000
                      </div>
                      <a href="/details" class="view-car">View <i class="icon-carus-arright"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="box-car-list hv-one">
                  <div class="image-group relative">
                    <div class="top">
                      <ul class="d-flex gap-8">
                        <li class="flag-tag success">New</li>
                        <li class="flag-tag style-1">
                          <div class="icon">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M1.5 9L4.93933 5.56067C5.07862 5.42138 5.24398 5.31089 5.42597 5.2355C5.60796 5.16012 5.80302 5.12132 6 5.12132C6.19698 5.12132 6.39204 5.16012 6.57403 5.2355C6.75602 5.31089 6.92138 5.42138 7.06067 5.56067L10.5 9M9.5 8L10.4393 7.06067C10.5786 6.92138 10.744 6.81089 10.926 6.7355C11.108 6.66012 11.303 6.62132 11.5 6.62132C11.697 6.62132 11.892 6.66012 12.074 6.7355C12.256 6.81089 12.4214 6.92138 12.5607 7.06067L14.5 9M2.5 11.5H13.5C13.7652 11.5 14.0196 11.3946 14.2071 11.2071C14.3946 11.0196 14.5 10.7652 14.5 10.5V2.5C14.5 2.23478 14.3946 1.98043 14.2071 1.79289C14.0196 1.60536 13.7652 1.5 13.5 1.5H2.5C2.23478 1.5 1.98043 1.60536 1.79289 1.79289C1.60536 1.98043 1.5 2.23478 1.5 2.5V10.5C1.5 10.7652 1.60536 11.0196 1.79289 11.2071C1.98043 11.3946 2.23478 11.5 2.5 11.5ZM9.5 4H9.50533V4.00533H9.5V4ZM9.75 4C9.75 4.0663 9.72366 4.12989 9.67678 4.17678C9.62989 4.22366 9.5663 4.25 9.5 4.25C9.4337 4.25 9.37011 4.22366 9.32322 4.17678C9.27634 4.12989 9.25 4.0663 9.25 4C9.25 3.9337 9.27634 3.87011 9.32322 3.82322C9.37011 3.77634 9.4337 3.75 9.5 3.75C9.5663 3.75 9.62989 3.77634 9.67678 3.82322C9.72366 3.87011 9.75 3.9337 9.75 4Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          6
                        </li>
                      </ul>

                    </div>
                    <ul class="change-heart flex">
                      <li class="box-icon w-32">
                        <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"
                          class="icon">
                          <i class="icon-carus-arrowsleftright"></i>
                        </a>
                      </li>
                      <li class="box-icon w-32">
                        <a href="my-favorite.html" class="icon">
                          <i class="icon-carus-heart"></i>
                        </a>
                      </li>
                    </ul>
                    <div class="img-style">
                      <img class="lazyload" data-src="assets/images/car-list/car12.webp"
                        src="assets/images/car-list/car12.webp" alt="image" />
                    </div>
                  </div>
                  <div class="content">
                    <h3 class="link-style-1">
                      <a href="/details">Genesis G70 Sedan 2.0 Premium (A)</a>
                    </h3>
                    <div class="icon-box flex flex-wrap">
                      <div class="icons flex-three">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z" fill="black"/>
</svg>
                        <span>1032 Km</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon12"></i>
                        <span>Manual</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon9"></i>
                        <span>Petrol</span>
                      </div>
                    </div>

                    <div class="days-box flex justify-space align-center">
                      <div class="money fs-24 fw-7 lh-30 text-color-2">
                        $78,500
                      </div>
                      <a href="/details" class="view-car">View <i class="icon-carus-arright"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <span class="d-flex d-xl-none sw-dot-default sw-pagination-categories justify-content-center"></span>
          </div>
        </div>
      </section>

      <!-- widegt feature-specs -->
      <section class="section-feature-specs">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="image-feature-specs relative">
                <div class="specs-title">
                  <div class="text-specs wow fadeInRight">2026</div>
                  <div class="text-specs wow fadeInLeft" data-wow-delay="0.2s">SKODA</div>
                </div>
                <div class="image-inner wow fadeInLeft" data-wow-delay="0.4s">
                  <img class="lazyload" data-src="assets/images/section/specs1.webp"
                    src="assets/images/section/specs1.webp" alt="images" />
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="content-feature-specs">
                <div class="heading-section wow fadeInUp">
                  <h2 class="heading-tittle">
                    Featured Car
                  </h2>
                  <p class="fs-18 fw-4 text-color-2">Check out or book a test drive of the latest car with EV PLUS</p>
                </div>
                <div class="feature-specs-box wow fadeInUp" data-wow-delay="0.2s">
                  <div class="content">

                    <div class="top-box flex-two gap-20">
                      <div class="money fs-24 fw-7 text-color-2">
                        $72,500
                      </div>
                      <ul class="change-heart style-2 flex">
                        <li class="box-icon">
                          <a href="my-favorite.html" class="icon">
                            <i class="icon-carus-heart"></i>
                          </a>
                        </li>
                        <li class="box-icon">
                          <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                            aria-controls="offcanvasBottom" class="icon">
                            <i class="icon-carus-arrowsleftright"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <h3 class="link-style-1">
                      <a href="listing-detail-v4.html">Infiniti Q50 Sedan 2.0 Luxe (A)</a>
                    </h3>
                    <div class="icon-box flex flex-wrap">
                      <div class="icons flex-three">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M7.63794 8.8875L15.1379 1.3875C15.2268 1.3047 15.3443 1.25962 15.4658 1.26177C15.5872 1.26391 15.7031 1.3131 15.789 1.39899C15.8748 1.48487 15.924 1.60074 15.9262 1.72217C15.9283 1.84361 15.8832 1.96114 15.8004 2.05L8.30044 9.55C8.21158 9.6328 8.09406 9.67788 7.97262 9.67573C7.85118 9.67359 7.73531 9.6244 7.64943 9.53851C7.56355 9.45263 7.51435 9.33676 7.51221 9.21533C7.51007 9.09389 7.55514 8.97636 7.63794 8.8875ZM8.59419 3.4375C9.15411 3.43693 9.71038 3.52771 10.2411 3.70625C10.359 3.74593 10.4878 3.73715 10.5992 3.68184C10.7106 3.62653 10.7955 3.52923 10.8352 3.41133C10.8749 3.29343 10.8661 3.1646 10.8108 3.05318C10.7555 2.94175 10.6582 2.85687 10.5403 2.81719C9.56915 2.48983 8.53114 2.41269 7.52229 2.59289C6.51343 2.77309 5.56631 3.20482 4.76856 3.84813C3.9708 4.49144 3.34818 5.32556 2.95828 6.27332C2.56839 7.22108 2.42382 8.25186 2.53794 9.27031C2.55069 9.38549 2.60565 9.49187 2.69221 9.56891C2.77878 9.64596 2.89081 9.6882 3.00669 9.6875C3.02412 9.68864 3.04161 9.68864 3.05904 9.6875C3.1825 9.67375 3.29545 9.61156 3.37309 9.51459C3.45073 9.41762 3.4867 9.29379 3.4731 9.17031C3.45109 8.97889 3.43935 8.78643 3.43794 8.59375C3.4396 7.22674 3.98337 5.91618 4.95 4.94956C5.91663 3.98293 7.22718 3.43915 8.59419 3.4375ZM16.2504 4.67969C16.2223 4.6249 16.1837 4.57619 16.1368 4.53633C16.0898 4.49647 16.0355 4.46625 15.9769 4.44739C15.9183 4.42853 15.8565 4.42139 15.7951 4.4264C15.7338 4.43141 15.674 4.44845 15.6192 4.47656C15.5644 4.50467 15.5157 4.5433 15.4758 4.59024C15.436 4.63717 15.4058 4.6915 15.3869 4.75012C15.368 4.80874 15.3609 4.87049 15.3659 4.93187C15.3709 4.99324 15.388 5.05303 15.4161 5.10781C15.8881 6.03417 16.1672 7.04669 16.2365 8.08405C16.3058 9.12142 16.1638 10.1621 15.8192 11.143C15.8088 11.1743 15.7888 11.2015 15.762 11.2207C15.7352 11.2399 15.703 11.2502 15.67 11.25H1.52076C1.48759 11.2492 1.45548 11.2381 1.42879 11.2184C1.40209 11.1987 1.38211 11.1713 1.37154 11.1398C0.968609 9.98503 0.847536 8.75064 1.01841 7.53955C1.18928 6.32845 1.64715 5.17574 2.35386 4.17749C3.06056 3.17924 3.99563 2.36435 5.08113 1.80076C6.16663 1.23717 7.37111 0.941193 8.59419 0.9375H8.66451C9.8527 0.945088 11.0225 1.23198 12.0793 1.775C12.1343 1.80316 12.1943 1.82022 12.2559 1.82519C12.3175 1.83017 12.3795 1.82296 12.4383 1.80399C12.4971 1.78502 12.5515 1.75466 12.5986 1.71463C12.6457 1.6746 12.6844 1.62569 12.7126 1.5707C12.7407 1.51571 12.7578 1.45571 12.7627 1.39413C12.7677 1.33255 12.7605 1.27059 12.7415 1.21179C12.7226 1.15299 12.6922 1.09851 12.6522 1.05144C12.6122 1.00438 12.5632 0.965662 12.5083 0.9375C11.3208 0.328536 10.0068 0.00738987 8.67232 0H8.59419C7.22014 0.000678333 5.86625 0.330649 4.64597 0.962266C3.42568 1.59388 2.37454 2.50875 1.58061 3.63022C0.786669 4.7517 0.273063 6.04711 0.0828165 7.40793C-0.10743 8.76875 0.0312243 10.1554 0.487163 11.4516C0.562354 11.666 0.702084 11.8518 0.887157 11.9836C1.07223 12.1154 1.29357 12.1866 1.52076 12.1875H15.6668C15.8935 12.1869 16.1144 12.1163 16.2993 11.9852C16.4842 11.8542 16.6241 11.6691 16.6997 11.4555C17.0874 10.3545 17.2476 9.18621 17.1704 8.02148C17.0931 6.85676 16.7802 5.71985 16.2504 4.67969Z"
                            fill="black" />
                        </svg>

                        <span>1032 Km</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon12"></i>
                        <span>Manual</span>
                      </div>
                      <div class="icons flex-three">
                        <i class="icon-carus-icon9"></i>
                        <span>Petrol</span>
                      </div>
                    </div>
                    <div class="days-box flex justify-space align-center">
                      <div class="img-author flex-three">
                        <img class="lazyload" data-src="assets/images/author/avt-list1.webp"
                          src="assets/images/author/avt-list1.webp" alt="image">
                        <div class="content-infor">
                          <span class="fs-14 text-color-2 fw-7">EV PLUS auto</span>
                          <p class="fs-12 fw-4">44 minutes ago</p>
                        </div>
                      </div>
                      <a href="/details" class="view-car">View <i class="icon-carus-arright"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- widegt categori -->
      <section class="tf-section">
        <div class="container">
          <div class="heading-section flex align-center justify-space flex-wrap gap-20 wow fadeInUp">
            <h2 class="heading-tittle">Search your car by body</h2>
            <a href="/listing" class="tf-btn-arrow">See all<i class="icon-carus-arrowcircleright"></i></a>
          </div>
          <div class="swiper tf-swiper wow fadeInUp" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 15,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 1,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-categories",
                            "prevEl": ".nav-prev-categories"
                        },
                        "pagination": { "el": ".sw-pagination-categories", "clickable": true },
                        "breakpoints": {
                        "575": { "slidesPerView": 2, "spaceBetween": 15 ,"slidesPerGroup": 1 },    
                        "768": { "slidesPerView": 4, "spaceBetween": 15, "slidesPerGroup": 1 },
                        "1200": { "slidesPerView": 6, "spaceBetween": 48, "slidesPerGroup": 1}
                        }
                    }'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="/listing" class="partner-item style-2">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/icon-box/car-list1.webp"
                      src="assets/images/icon-box/car-list1.webp" alt="images">
                  </div>
                  <div class="content center">
                    <div class="fs-18 fw-6 title text-color-2">Sedan</div>
                    <p class="sub-title fs-12 fw-4">271 Car Listing</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="/listing" class="partner-item style-2">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/icon-box/car-list2.webp"
                      src="assets/images/icon-box/car-list2.webp" alt="images">
                  </div>
                  <div class="content center">
                    <div class="fs-18 fw-6 title text-color-2">Station Wagon</div>
                    <p class="sub-title fs-12 fw-4">271 Car Listing</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="/listing" class="partner-item style-2">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/icon-box/car-list3.webp"
                      src="assets/images/icon-box/car-list3.webp" alt="images">
                  </div>
                  <div class="content center">
                    <div class="fs-18 fw-6 title text-color-2">Hatchback</div>
                    <p class="sub-title fs-12 fw-4">271 Car Listing</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="/listing" class="partner-item style-2">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/icon-box/car-list4.webp"
                      src="assets/images/icon-box/car-list4.webp" alt="images">
                  </div>
                  <div class="content center">
                    <div class="fs-18 fw-6 title text-color-2">Pickup Truck</div>
                    <p class="sub-title fs-12 fw-4">271 Car Listing</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="/listing" class="partner-item style-2">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/icon-box/car-list5.webp"
                      src="assets/images/icon-box/car-list5.webp" alt="images">
                  </div>
                  <div class="content center">
                    <div class="fs-18 fw-6 title text-color-2">SUV</div>
                    <p class="sub-title fs-12 fw-4">271 Car Listing</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="/listing" class="partner-item style-2">
                  <div class="image">
                    <img class="lazyload" data-src="assets/images/icon-box/car-list6.webp"
                      src="assets/images/icon-box/car-list6.webp" alt="images">
                  </div>
                  <div class="content center">
                    <div class="fs-18 fw-6 title text-color-2">Crossover</div>
                    <p class="sub-title fs-12 fw-4">271 Car</p>
                  </div>
                </a>
              </div>

            </div>
            <span class="d-flex d-xl-none sw-dot-default sw-pagination-categories justify-content-center"></span>
          </div>
        </div>
      </section>

      <section class="section-testimonial">
        <div class="container full">
          <div class="row">
            <div class="col-md-6 pd-0">
              <div class="image-wcs">
                <div class="bg-image-1"></div>
              </div>
            </div>
            <div class="col-md-6 pd-0 ">
              <div class="bg-2">
                <div class="content-wcs">
                  <div class="heading-section wow fadeInUp">
                    <h2 class="heading-tittle text-color-1">What our customers say</h2>
                  </div>
                  <div class="swiper tf-swiper" data-swiper='{
    "slidesPerView": 1,
    "spaceBetween": 30,
    "speed": 800,
    "observer": true,
    "observeParents": true,
    "navigation": {
      "nextEl": ".nav-next-categories",
      "prevEl": ".nav-prev-categories"
    },
    "pagination": {
      "el": ".sw-pagination-categories",
      "clickable": true
    }
  }'>
                    <div class="swiper-wrapper ">
                      <div class="swiper-slide">
                        <div class="tf-testimonial style-1">
                          <div class="inner-top flex-three">
                            <div class="star-wrap flex-three">
                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                            </div>
                            <p class="fs-14 fw-4">4.9 rating of 5.609 reviews</p>

                          </div>
                          <p class="description">"My experience at EV PLUS Car Dealer was excellent. The team explained everything clearly, making the process smooth. The car was delivered on time, and I am very satisfied with their professionalism and honesty. ”</p>
                          <div class="author-box">

                            <div class="content">
                              <h3>Brooklyn Simmons</h3>
                              <p class="fs-12 lh-16">CEO Themesflat</p>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="tf-testimonial style-1">
                          <div class="inner-top flex-three">
                            <div class="star-wrap flex-three">
                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
                              </svg>

                                                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
                              </svg>

                                                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
                              </svg>

                                                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
                              </svg>

                                                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
                              </svg>

                            </div>
                            <p class="fs-14 fw-4">4.9 rating of 5.609 reviews</p>

                          </div>
                          <p class="description">"My experience at EV PLUS Car Dealer was excellent. The team explained everything clearly, making the process smooth. The car was delivered on time, and I am very satisfied with their professionalism and honesty. ”</p>
                          <div class="author-box">

                            <div class="content">
                              <h3>Brooklyn Simmons</h3>
                              <p class="fs-12 lh-16">CEO Themesflat</p>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="tf-testimonial style-1">
                          <div class="inner-top flex-three">
                            <div class="star-wrap flex-three">
                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.77535 6.8442L0.261091 4.9776C-0.213455 4.63726 -0.00532068 3.95284 0.59688 3.87568L4.16291 3.7332L5.68575 0.309233C5.7919 0.119462 6.00767 0 6.24425 0C6.48083 0 6.69659 0.120085 6.80274 0.309233L8.32559 3.7332L11.8916 3.87568C12.4938 3.95284 12.7019 4.63726 12.2274 4.9776L9.71315 6.8442L10.3993 10.4884C10.4784 10.9856 9.90255 11.3576 9.40233 11.133L6.24425 9.333L3.08616 11.1324C2.58525 11.357 2.01011 10.9849 2.0892 10.4878L2.77535 6.8442Z" fill="#FFD023"/>
</svg>

                            </div>
                            <p class="fs-14 fw-4">4.9 rating of 5.609 reviews</p>

                          </div>
                          <p class="description">"My experience at EV PLUS Car Dealer was excellent. The team explained everything clearly, making the process smooth. The car was delivered on time, and I am very satisfied with their professionalism and honesty. ”</p>
                          <div class="author-box">

                            <div class="content">
                              <h3>Brooklyn Simmons</h3>
                              <p class="fs-12 lh-16">CEO Themesflat</p>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>
                    <span class="d-flex d-xl-none sw-dot-default sw-pagination-categories "></span>

                    <!-- navigation -->
                    <div class="button-swiper style1">
                      <div class="swiper-button-prev style-4 nav-prev-categories"></div>
                      <div class="swiper-button-next style-4 nav-next-categories"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- widegt blog -->
      <section class="section-blog tf-section">
        <div class="container">
          <div class="heading-section flex align-center justify-space flex-wrap gap-20 wow fadeInUp">
            <h2 class="heading-tittle">
              The Latest News Car
            </h2>
            <a href="blog.html" class="tf-btn-arrow">See all<i class="icon-carus-arrowcircleright"></i></a>
          </div>
          <div class="swiper tf-swiper wow fadeInUp" data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 15,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 1,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-categories",
                            "prevEl": ".nav-prev-categories"
                        },
                        "pagination": { "el": ".sw-pagination-categories", "clickable": true },
                        "breakpoints": {
                        "575": { "slidesPerView": 2, "spaceBetween": 15 ,"slidesPerGroup": 1 },    
                        "768": { "slidesPerView": 2, "spaceBetween": 15, "slidesPerGroup": 1 },
                        "1200": { "slidesPerView": 3, "spaceBetween": 30, "slidesPerGroup": 1}
                        }
                    }'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="blog-article-item style1 hover-img">
                  <div class="images img-style relative flex-none">
                    <img class="lazyload" data-src="assets/images/blog/blog5.webp" src="assets/images/blog/blog5.webp"
                      alt="images" />
                    <div class="date">January 28, 2026</div>
                  </div>
                  <div class="content">

                    <h3>
                      <a href="blog-detail.html">Electric Cars Are Transforming Daily Life. A Look at Modern Driving</a>
                    </h3>
                    <div class="sub-box flex align-center fs-14 fw-7 flex-wrap">
                      <div class="meta title-1 text-color-2">By Jenny Wilson</div>
                      <a href="#" class="meta text-color-3">Used car</a>
                      <div class="meta title-2 fw-7 flex-three text-color-2">8</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="blog-article-item style1 hover-img">
                  <div class="images img-style relative flex-none">
                    <img class="lazyload" data-src="assets/images/blog/blog6.webp" src="assets/images/blog/blog6.webp"
                      alt="images" />
                    <div class="date">January 28, 2026</div>
                  </div>
                  <div class="content">

                    <h3>
                      <a href="blog-detail.html">A New Hyundai Tucson Is Coming for 2027. Here's Everything We
                        Know</a>
                    </h3>
                    <div class="sub-box flex align-center fs-14 fw-7 flex-wrap">
                      <div class="meta title-1 text-color-2">By Jenny Wilson</div>
                      <a href="#" class="meta text-color-3">Used car</a>
                      <div class="meta title-2 fw-7 flex-three text-color-2">8</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="blog-article-item style1 hover-img">
                  <div class="images img-style relative flex-none">
                    <img class="lazyload" data-src="assets/images/blog/blog7.webp" src="assets/images/blog/blog7.webp"
                      alt="images" />
                    <div class="date">January 28, 2026</div>
                  </div>
                  <div class="content">

                    <h3>
                      <a href="blog-detail.html">Luxury Sedans Are Redefining Comfort. Exploring Style and Innovation</a>
                    </h3>
                    <div class="sub-box flex align-center fs-14 fw-7 flex-wrap">
                      <div class="meta title-1 text-color-2">By Jenny Wilson</div>
                      <a href="#" class="meta text-color-3">Used car</a>
                      <div class="meta title-2 fw-7 flex-three text-color-2">8</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <span class="d-flex d-xl-none sw-dot-default sw-pagination-categories justify-content-center"></span>
          </div>
        </div>
      </section>

        <section class="tf-section3">
        <div class="container">
          <div class="line"></div>
          </div>
          </section>

      <!-- logo -->
      <section class="flat-brand tf-section3">
        <div class="container">
          <div class="heading-section wow fadeInUp">
            <h2 class="heading-tittle">
              Our partners
            </h2>
          </div>
          <div class="fade-edge">
            <div class="infiniteslide tf-brand " data-clone="2" data-style="left" data-speed="80">
              <div class="slogan-logo">

                <img class="lazyload" data-src="assets/images/partner/par1.webp" src="assets/images/partner/par1.webp"
                  alt="images" />
              </div>
              <div class="slogan-logo">

                <img class="lazyload" data-src="assets/images/partner/par2.webp" src="assets/images/partner/par2.webp"
                  alt="images" />

              </div>
              <div class="slogan-logo">

                <img class="lazyload" data-src="assets/images/partner/par3.webp" src="assets/images/partner/par3.webp"
                  alt="images" />

              </div>
              <div class="slogan-logo">

                <img class="lazyload" data-src="assets/images/partner/par4.webp" src="assets/images/partner/par4.webp"
                  alt="images" />

              </div>
              <div class="slogan-logo">

                <img class="lazyload" data-src="assets/images/partner/par5.webp" src="assets/images/partner/par5.webp"
                  alt="images" />

              </div>
              <div class="slogan-logo">

                <img class="lazyload" data-src="assets/images/partner/par6.webp" src="assets/images/partner/par6.webp"
                  alt="images" />

              </div>
            </div>

          </div>

        </div>
      </section>
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const section = document.getElementById('body-type-filter');

    if (!section) {
        console.error('Body type filter section not found.');
        return;
    }

    const tabs = section.querySelector('.menu-tab');
    const carousel = section.querySelector(
        '.content-tab .content-inner:first-child .swiper-container'
    );

    if (!tabs || !carousel) {
        console.error('Body type tabs or carousel not found.');
        return;
    }

    const slides = carousel.querySelectorAll(
        '.swiper-wrapper > .swiper-slide[data-body-type]'
    );

    function filterCars(type) {
        const selectedType = type.toLowerCase();

        tabs.querySelectorAll('.item-title').forEach(function (tab) {
            tab.classList.toggle(
                'active',
                tab.dataset.type === type
            );
        });

        slides.forEach(function (slide) {
            slide.style.display =
                slide.dataset.bodyType === selectedType ? '' : 'none';
        });

        if (carousel.swiper) {
            carousel.swiper.update();
            carousel.swiper.slideTo(0, 0);
        }
    }

    // Capture the click before the theme's built-in tab handler.
    tabs.addEventListener('click', function (event) {
        const tab = event.target.closest('.item-title[data-type]');

        if (!tab || !tabs.contains(tab)) return;

        event.preventDefault();
        event.stopPropagation();

        filterCars(tab.dataset.type);
    }, true);

    const initialTab = tabs.querySelector(
        '.item-title.active[data-type]'
    );

    filterCars(initialTab ? initialTab.dataset.type : 'Hatchback');
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('carSearchForm');
    const resultsSection = document.getElementById('carResults');
    const resultsWrapper = document.getElementById('carResultsWrapper');
    const resultsCount = document.getElementById('carResultsCount');
    const noResults = document.getElementById('noCarResults');
    const clearButton = document.getElementById('clearCarSearch');

    if (!form || !resultsSection || !resultsWrapper) {
        console.error('Car search form or results section not found.');
        return;
    }

    // The original cards are the source for the search results.
    const sourceSlides = Array.from(
        document.querySelectorAll(
            '#body-type-filter .swiper-wrapper > .swiper-slide[data-brand]'
        )
    );

    // Sync the custom dropdown with its hidden input.
    form.addEventListener('click', function (event) {
        const option = event.target.closest('.nice-select .option');

        if (!option || !form.contains(option)) return;

        const dropdown = option.closest('.nice-select');
        const group = option.closest('.group-select');

        if (!dropdown || !group) return;

        const hiddenInput = group.querySelector(
            'input[type="hidden"][name]'
        );

        if (hiddenInput) {
            hiddenInput.value = option.getAttribute('data-value') || '';
        }

        const current = dropdown.querySelector('.current');

        if (current) {
            current.textContent = option.textContent.trim();
        }

        dropdown.querySelectorAll('.option').forEach(function (item) {
            item.classList.toggle('selected', item === option);
        });
    }, true);

    function getFilter(name) {
        const input = form.querySelector('[name="' + name + '"]');

        return input ? input.value.trim().toLowerCase() : '';
    }

    
function showResults() {
    const brand = getFilter('brand').trim().toLowerCase();
    const bodyType = getFilter('body_type').trim().toLowerCase();
    const model = getFilter('model').trim().toLowerCase();
    const priceValue = getFilter('price_limit').trim();
    const priceLimit = parseFloat(priceValue);

    resultsWrapper.innerHTML = '';

    const matchingSlides = sourceSlides.filter(function (slide) {
        const carBrand = (slide.dataset.brand || '').trim().toLowerCase();
        const carType = (slide.dataset.bodyType || '').trim().toLowerCase();
        const carModel = (slide.dataset.model || '').trim().toLowerCase();
        const carPrice = parseFloat(slide.dataset.price || '0');

        if (brand && carBrand !== brand) return false;
        if (bodyType && carType !== bodyType) return false;
        if (model && carModel !== model) return false;

        if (priceValue !== '' && Number.isFinite(priceLimit)) {
            if (carPrice > priceLimit) return false;
        }

        return true;
    });

    matchingSlides.forEach(function (slide) {
        const originalCard = slide.querySelector('.box-car-list');

        if (!originalCard) return;

        const card = originalCard.cloneNode(true);
      card.querySelectorAll('img').forEach(function (img) {
          console.log('Original src:', img.getAttribute('src'));
          console.log('Incorrect data-src:', img.getAttribute('data-src'));

          // Keep the correct URL already generated by Blade.
          const correctUrl = img.getAttribute('src');

          if (correctUrl) {
              img.src = correctUrl;
          }

          // Prevent lazy loading from replacing it with the incorrect URL.
          img.removeAttribute('data-src');
          img.classList.remove('lazyload');

          console.log('Final image URL:', img.src);
      });



        const column = document.createElement('div');
        column.className = 'col-xl-3 col-lg-4 col-md-6 col-12 mb-4';
        column.appendChild(card);

        resultsWrapper.appendChild(column);
    });

    const count = resultsWrapper.children.length;

    if (resultsCount) {
        resultsCount.textContent = ' (' + count + ')';
    }

    if (noResults) {
        noResults.style.display = count === 0 ? 'block' : 'none';
    }

    if (resultsSection) {
        resultsSection.style.display = 'block';
        resultsSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}


    // Search without submitting to the server or reloading the page.
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        showResults();
    });

    // Clear the main filters and hide the results section.
    if (clearButton) {
        clearButton.addEventListener('click', function (event) {
            event.preventDefault();

            ['brand', 'body_type', 'model', 'price_limit'].forEach(
                function (name) {
                    const input = form.querySelector('[name="' + name + '"]');

                    if (!input) return;

                    input.value = '';

                    const group = input.closest('.group-select');
                    const dropdown = group
                        ? group.querySelector('.nice-select')
                        : null;

                    if (!dropdown) return;

                    const current = dropdown.querySelector('.current');
                    const firstOption = dropdown.querySelector(
                        '.option[data-value=""]'
                    );

                    if (current && firstOption) {
                        current.textContent = firstOption.textContent.trim();
                    }

                    dropdown.querySelectorAll('.option').forEach(function (item) {
                        item.classList.toggle(
                            'selected',
                            item === firstOption
                        );
                    });
                }
            );

            resultsWrapper.innerHTML = '';
            resultsSection.style.display = 'none';
            resultsCount.textContent = '';
            noResults.style.display = 'none';

            form.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        });
    }
    
document.querySelectorAll('.popular-brand-link').forEach(function (link) {
    link.addEventListener('click', function (event) {
        event.preventDefault();

        const selectedBrand = this.dataset.brand;

        console.log('Popular brand clicked:', selectedBrand);

        // Find the existing brand filter.
        const brandInput = document.querySelector(
            '[name="brand"]'
        );

        if (!brandInput) {
            console.error('Brand filter input was not found.');
            return;
        }

        // Set the selected brand.
        brandInput.value = selectedBrand;

        // Update the custom dropdown UI if applicable.
        const brandDropdown = brandInput
            .closest('.nice-select');

        if (brandDropdown) {
            const selectedOption = Array.from(
                brandDropdown.querySelectorAll('.option')
            ).find(function (option) {
                return option.textContent.trim().toLowerCase() ===
                    selectedBrand.trim().toLowerCase();
            });

            if (selectedOption) {
                brandDropdown.querySelectorAll('.option')
                    .forEach(function (option) {
                        option.classList.remove('selected');
                    });

                selectedOption.classList.add('selected');

                const current = brandDropdown.querySelector('.current');

                if (current) {
                    current.textContent = selectedOption.textContent.trim();
                }
            }
        }

        // Keep the other filters unchanged and show matching cars.
        if (typeof showResults === 'function') {
            showResults();
        } else {
            console.error('showResults() is not accessible here.');
        }
    });
});

document.getElementById('quickCarSearchForm')
    ?.addEventListener('submit', function (event) {
        event.preventDefault();

        const input = document.getElementById('quickCarSearchInput');
        const keyword = input.value.trim().toLowerCase();

        console.log('Car search keyword:', keyword);

        resultsWrapper.innerHTML = '';

        if (!keyword) {
            if (resultsSection) {
                resultsSection.style.display = 'none';
            }
            return;
        }

        // Normalize text for easier matching.
        function normalize(value) {
            return String(value || '')
                .toLowerCase()
                .replace(/[-_]/g, ' ')
                .replace(/[^\w\s.]/g, ' ')
                .replace(/\s+/g, ' ')
                .trim();
        }

        // Convert amounts such as 50k to 50000.
        function parseAmount(value) {
            if (!value) return null;

            const cleaned = String(value)
                .replace(/,/g, '')
                .trim()
                .toLowerCase();

            const match = cleaned.match(/^(\d+(?:\.\d+)?)\s*(k|m)?$/);
            if (!match) return null;

            const number = Number(match[1]);

            if (match[2] === 'k') return number * 1000;
            if (match[2] === 'm') return number * 1000000;

            return number;
        }

        // Parse natural-language search conditions.
        function parseQuery(query) {
            let remaining = normalize(query);

            const filters = {
                minPrice: null,
                maxPrice: null,
                bodyTypes: [],
                keywords: []
            };

            const amount = '(\\d[\\d,]*(?:\\.\\d+)?\\s*[km]?)';

            // Price range: between 10k and 30k.
            let match = remaining.match(
                new RegExp('\\bbetween\\s+' + amount + '\\s+and\\s+' + amount + '\\b', 'i')
            );

            if (match) {
                filters.minPrice = parseAmount(match[1]);
                filters.maxPrice = parseAmount(match[2]);
                remaining = remaining.replace(match[0], ' ');
            } else {
                // Maximum price: under 30k, below 30000, max 30k.
                match = remaining.match(
                    new RegExp('\\b(?:under|below|less than|maximum|max|up to)\\s*' + amount, 'i')
                );

                if (match) {
                    filters.maxPrice = parseAmount(match[1]);
                    remaining = remaining.replace(match[0], ' ');
                }

                // Minimum price: over 10k, above 10000.
                match = remaining.match(
                    new RegExp('\\b(?:over|above|more than|minimum|min|at least)\\s*' + amount, 'i')
                );

                if (match) {
                    filters.minPrice = parseAmount(match[1]);
                    remaining = remaining.replace(match[0], ' ');
                }
            }

            // Body styles and common aliases.
            const bodyAliases = {
                suv: ['suv', 'sport utility'],
                sedan: ['sedan', 'saloon'],
                hatchback: ['hatchback', 'hatch'],
                coupe: ['coupe', 'coupé'],
                convertible: ['convertible', 'cabriolet'],
                pickup: ['pickup', 'pick up', 'truck'],
                van: ['van', 'minivan', 'minivan'],
                wagon: ['wagon', 'estate'],
                electric: ['electric', 'ev', 'electric vehicle'],
                hybrid: ['hybrid', 'phev']
            };

            Object.keys(bodyAliases).forEach(function (type) {
                for (const alias of bodyAliases[type]) {
                    const aliasText = normalize(alias);
                    const regex = new RegExp(
                        '\\b' + aliasText.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') + '\\b',
                        'i'
                    );

                    if (regex.test(remaining)) {
                        filters.bodyTypes.push(type);
                        remaining = remaining.replace(regex, ' ');
                        break;
                    }
                }
            });

            // Ignore conversational filler, but keep brand/model words.
            filters.keywords = normalize(remaining)
                .split(' ')
                .filter(function (word) {
                    return word && ![
                        'car', 'cars', 'vehicle', 'vehicles',
                        'find', 'show', 'me', 'please', 'want',
                        'looking', 'for', 'with', 'and', 'the',
                        'a', 'an', 'of', 'price', 'cheap',
                        'available'
                    ].includes(word);
                });

            return filters;
        }

        const filters = parseQuery(keyword);
        console.log('Parsed search:', filters);

        // Avoid searching duplicated slides created by Swiper.
        const seenCards = new Set();

        const searchableSlides = sourceSlides.filter(function (slide) {
            const card = slide.querySelector('.box-car-list');

            if (!card || seenCards.has(card)) return false;
            seenCards.add(card);

            return true;
        });

        function getPrice(slide, card) {
            // Prefer a numeric price attribute if one already exists.
            const rawAttribute = slide.dataset.price ||
                card.dataset.price ||
                card.querySelector('[data-price]')?.dataset.price;

            if (rawAttribute) {
                const parsed = parseAmount(rawAttribute);
                if (parsed !== null) return parsed;
            }

            // Try to identify the displayed price in the card.
            const priceElement = card.querySelector(
                '.price, .car-price, .tf-car-price, [class*="price"]'
            );

            if (priceElement) {
                const priceText = normalize(priceElement.textContent);
                const priceMatch = priceText.match(
                    /(?:usd|mmk|\$|€|£)\s*([\d,]+(?:\.\d+)?\s*[km]?)|([\d,]+(?:\.\d+)?\s*[km]?)\s*(?:usd|mmk|dollars?)/i
                );

                if (priceMatch) {
                    return parseAmount(priceMatch[1] || priceMatch[2]);
                }
            }

            return null;
        }

        const matches = [];

        searchableSlides.forEach(function (slide) {
            const card = slide.querySelector('.box-car-list');

            const brand = normalize(slide.dataset.brand || '');
            const model = normalize(slide.dataset.model || '');
            const bodyType = normalize(slide.dataset.bodyType || '');
            const cardText = normalize(card.textContent || '');

            // Include visible card text as a fallback for missing attributes.
            const searchableText = normalize(
                brand + ' ' + model + ' ' + bodyType + ' ' + cardText
            );

            // Match body types against both attributes and visible card text.
            for (const type of filters.bodyTypes) {
                const aliases = {
                    suv: ['suv', 'sport utility'],
                    sedan: ['sedan', 'saloon'],
                    hatchback: ['hatchback', 'hatch'],
                    coupe: ['coupe', 'coupé'],
                    convertible: ['convertible', 'cabriolet'],
                    pickup: ['pickup', 'pick up', 'truck'],
                    van: ['van', 'minivan'],
                    wagon: ['wagon', 'estate'],
                    electric: ['electric', ' ev ', 'electric vehicle'],
                    hybrid: ['hybrid', 'phev']
                };

                const found = aliases[type].some(function (alias) {
                    return searchableText.includes(normalize(alias));
                });

                if (!found) return;
            }

            // Enforce price filters when a price can be identified.
            if (filters.minPrice !== null || filters.maxPrice !== null) {
                const price = getPrice(slide, card);

                // Do not return false matches if the price is unknown.
                if (price === null) return;
                if (filters.minPrice !== null && price < filters.minPrice) return;
                if (filters.maxPrice !== null && price > filters.maxPrice) return;
            }

            let score = 0;
            let matchedKeywords = 0;

            filters.keywords.forEach(function (word) {
                if (brand && brand.includes(word)) {
                    score += 10;
                    matchedKeywords++;
                } else if (model && model.includes(word)) {
                    score += 8;
                    matchedKeywords++;
                } else if (searchableText.includes(word)) {
                    score += 4;
                    matchedKeywords++;
                }
            });

            // Require every remaining keyword to match.
            if (matchedKeywords !== filters.keywords.length) return;

            if (filters.bodyTypes.length) score += 5;
            if (filters.minPrice !== null || filters.maxPrice !== null) score += 3;

            matches.push({
                slide: slide,
                score: score
            });
        });

        // Most relevant cars first.
        matches.sort(function (a, b) {
            return b.score - a.score;
        });

        matches.forEach(function (item) {
            const originalCard = item.slide.querySelector('.box-car-list');
            if (!originalCard) return;

            const card = originalCard.cloneNode(true);

            // Preserve the correct image URL from the original src.
            card.querySelectorAll('img').forEach(function (img) {
                const src = img.getAttribute('src');

                if (src) img.src = src;

                img.removeAttribute('data-src');
                img.classList.remove('lazyload');
            });

            const column = document.createElement('div');
            column.className = 'col-xl-3 col-lg-4 col-md-6 col-12 mb-4';
            column.appendChild(card);
            resultsWrapper.appendChild(column);
        });

        const count = resultsWrapper.children.length;

        if (resultsCount) {
            resultsCount.textContent = ' (' + count + ')';
        }

        if (noResults) {
            noResults.style.display = count === 0 ? 'block' : 'none';
        }

        if (resultsSection) {
            resultsSection.style.display = 'block';
            resultsSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        console.log('Searchable slides:', searchableSlides.length);
        console.log('Matching cars:', count);
    });

});

</script>
@endpush
@endsection