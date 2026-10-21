@extends('layouts.master')

@section('title', 'About Us')

@section('content')
            <section class="flat-title style1 bg-3">
                <div class="container">
                    <div class="title-inner">
                        <h1 class="mb-12 font-2">Listings list</h1>
                        <div class="title-group fs-14">
                            <a class="home text-color-3 fw-7" href="index.html">Home</a><span class="fw-4">Used cars for
                                sale</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-section listing-detail pd-t0-mb">
                <div class="container">
                    <div class="listing-grid flex text-start gap-48">
                        <div class="sidebar-right-listing">
                            <div class="sidebar-title flex-two flex-wrap">
                                <h4>Filters and Sort</h4>
                                <a class="fw-7 fs-14 claer text-color-2 flex-three"><i
                                        class="icon-carus-close"></i>Clear</a>
                            </div>
                            <div class="form-filter-siderbar">
                                <form id="filter-form" method="post">
                                    <div class="wd-find-select">
                                        <div class="form-group">
                                            <label class="fs-18 fw-5 text-color-2">Make</label>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Choose</span>
                                                    <ul class="list">
                                                        <li data-value="" class="option selected">
                                                            Choose
                                                        </li>
                                                        <li data-value="toyota" class="option">Toyota</li>
                                                        <li data-value="honda" class="option">Honda</li>
                                                        <li data-value="bmw" class="option">BMW</li>
                                                        <li data-value="mercedes-benz" class="option">
                                                            Mercedes-Benz
                                                        </li>
                                                        <li data-value="ford" class="option">Ford</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="fs-18 fw-5 text-color-2">Model</label>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Choose</span>
                                                    <ul class="list">
                                                        <li data-value="" class="option selected">
                                                            Choose
                                                        </li>
                                                        <li data-value="camry" class="option">Camry</li>
                                                        <li data-value="civic" class="option">Civic</li>
                                                        <li data-value="corolla" class="option">
                                                            Corolla
                                                        </li>
                                                        <li data-value="x5" class="option">BMW X5</li>
                                                        <li data-value="c-class" class="option">
                                                            Mercedes C-Class
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="fs-18 fw-5 text-color-2">Body Type</label>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Choose</span>
                                                    <ul class="list">
                                                        <li data-value="" class="option selected">
                                                            Choose
                                                        </li>
                                                        <li data-value="sedan" class="option">Sedan</li>
                                                        <li data-value="suv" class="option">SUV</li>
                                                        <li data-value="hatchback" class="option">
                                                            Hatchback
                                                        </li>
                                                        <li data-value="coupe" class="option">Coupe</li>
                                                        <li data-value="convertible" class="option">
                                                            Convertible
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="tf-amenities bg-white">
                                                <label class="flex-three">
                                                    <input name="newsletter" type="checkbox" />
                                                    <span class="btn-checkbox"></span>
                                                    <span class="">Featured</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="widget-price range-slider-wrapper" data-label="Price: "
                                                data-min="0" data-max="500000" data-start="[0, 500000]" data-step="1"
                                                data-suffix="$" data-thousand=",">
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
                                                        <input type="hidden" class="min-input" name="min-value"
                                                            value="" />
                                                        <input type="hidden" class="max-input" name="max-value"
                                                            value="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.widget_price -->
                                        </div>

                                        <div class="form-group">
                                            <label class="fs-18 fw-5 text-color-2">Fuel / Electric</label>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Choose</span>
                                                    <ul class="list">
                                                        <li data-value="" class="option selected">
                                                            Choose
                                                        </li>
                                                        <li data-value="petrol" class="option">Petrol</li>
                                                        <li data-value="diesel" class="option">Diesel</li>
                                                        <li data-value="hybrid" class="option">Hybrid</li>
                                                        <li data-value="electric" class="option">
                                                            Electric
                                                        </li>
                                                        <li data-value="plug-in-hybrid" class="option">
                                                            Plug-in Hybrid
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="fs-18 fw-5 text-color-2">Transmission</label>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Choose</span>
                                                    <ul class="list">
                                                        <li data-value="" class="option selected">
                                                            Choose
                                                        </li>
                                                        <li data-value="automatic" class="option">
                                                            Automatic
                                                        </li>
                                                        <li data-value="manual" class="option">Manual</li>
                                                        <li data-value="cvt" class="option">CVT</li>
                                                        <li data-value="dual-clutch" class="option">
                                                            Dual-Clutch
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="fs-18 fw-5 text-color-2">Drive Type</label>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Choose</span>
                                                    <ul class="list">
                                                        <li data-value="" class="option selected">
                                                            Choose
                                                        </li>
                                                        <li data-value="fwd" class="option">
                                                            Front-Wheel Drive (FWD)
                                                        </li>
                                                        <li data-value="rwd" class="option">
                                                            Rear-Wheel Drive (RWD)
                                                        </li>
                                                        <li data-value="awd" class="option">
                                                            All-Wheel Drive (AWD)
                                                        </li>
                                                        <li data-value="4wd" class="option">
                                                            4-Wheel Drive (4WD)
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class=" widget-price range-slider-wrapper" data-min="0"
                                                data-max="800000" data-start="[0, 800000]" data-step="1"
                                                data-suffix=" km" data-thousand=".">


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
                                                        <input type="hidden" class="min-input" name="min-value"
                                                            value="" />
                                                        <input type="hidden" class="max-input" name="max-value"
                                                            value="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.widget_price -->
                                        </div>
                                        <div class="form-group">
                                            <label class="fs-18 fw-5 text-color-2">Doors</label>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Choose</span>
                                                    <ul class="list">
                                                        <li data-value="" class="option selected">
                                                            Choose
                                                        </li>
                                                        <li data-value="2" class="option">2 Doors</li>
                                                        <li data-value="3" class="option">3 Doors</li>
                                                        <li data-value="4" class="option">4 Doors</li>
                                                        <li data-value="5" class="option">5 Doors</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="fs-18 fw-5 text-color-2">Cylinders</label>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Choose</span>
                                                    <ul class="list">
                                                        <li data-value="" class="option selected">
                                                            Choose
                                                        </li>
                                                        <li data-value="3" class="option">3 Cylinders</li>
                                                        <li data-value="4" class="option">4 Cylinders</li>
                                                        <li data-value="6" class="option">6 Cylinders</li>
                                                        <li data-value="8" class="option">8 Cylinders</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="fs-18 fw-5 text-color-2">Color</label>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Choose</span>
                                                    <ul class="list">
                                                        <li data-value="" class="option selected">
                                                            Choose
                                                        </li>
                                                        <li data-value="black" class="option">Black</li>
                                                        <li data-value="white" class="option">White</li>
                                                        <li data-value="silver" class="option">Silver</li>
                                                        <li data-value="blue" class="option">Blue</li>
                                                        <li data-value="red" class="option">Red</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="widget-price range-slider-wrapper" data-label="Year: "
                                                data-min="2000" data-max="2026" data-start="[2000, 2026]" data-step="1"
                                                data-thousand="">
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
                                            <!-- /.widget_price -->
                                        </div>
                                        <div class="features-wrap">
                                            <h4>Featured</h4>
                                            <div class="form-group box2 content-hidden">
                                                <div class="tf-amenities bg-white">
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>A/C: Front</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Backup Camera</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Cruise Control</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Navigation</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Power Locks</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Audio system</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Touchscreen display</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>GPS navigation</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Phone connectivity</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>In-car Wi-Fi</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Chrome-plated grill</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Smart headlight cluster</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Premium wheels</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>Body character lines</span>
                                                    </label>
                                                    <label class="flex-three">
                                                        <input name="newsletter" type="checkbox" />
                                                        <span class="btn-checkbox"></span>
                                                        <span>High-quality paint</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sale-agents-detail">
                            <div class="listing-list-car-wrap">
                                <div class="category-filter flex justify-space align-center mb-40 flex-wrap gap-8">
                                    <h2 class="title">Listing</h2>
                                    <div class="box-2 flex-three flex-wrap gap-8">
                                        <p class="currently">
                                            There Are Currently
                                            <span class="fw-6 text-color-2">17 Results</span>
                                        </p>
                                        <div class="filter-mobie">
                                            <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                aria-controls="offcanvasRight" class="filter">Filter<i
                                                    class="icon-carus-sliders"></i></a>
                                        </div>
                                        <a href="#" class="btn-view grid">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.92035 4.5C6.66735 4.50006 7.29144 5.12244 7.29144 5.90527C7.29134 6.68807 6.66764 7.31049 5.92035 7.31055C5.17301 7.31055 4.54936 6.68811 4.54926 5.90527C4.54926 5.12239 5.17325 4.5 5.92035 4.5Z"
                                                    stroke="CurrentColor" />
                                                <path
                                                    d="M11.9758 4.5C12.7232 4.50006 13.3469 5.12243 13.3469 5.90527C13.3468 6.68795 12.7228 7.31049 11.9758 7.31055C11.2288 7.31055 10.6048 6.68804 10.6047 5.90527C10.6047 5.1224 11.2287 4.5 11.9758 4.5Z"
                                                    stroke="CurrentColor" />
                                                <path
                                                    d="M18.1292 4.5C18.8766 4.50006 19.5002 5.12232 19.5002 5.90527C19.5002 6.688 18.876 7.31049 18.1292 7.31055C17.3823 7.31055 16.7582 6.68804 16.7581 5.90527C16.7581 5.12231 17.3817 4.5 18.1292 4.5Z"
                                                    stroke="CurrentColor" />
                                                <path
                                                    d="M5.87109 10.6035C6.61818 10.6035 7.24219 11.2257 7.24219 12.0088C7.24218 12.7917 6.61825 13.4141 5.87109 13.4141C5.12399 13.4139 4.50001 12.7916 4.5 12.0088C4.5 11.2259 5.12406 10.6036 5.87109 10.6035Z"
                                                    stroke="CurrentColor" />
                                                <path
                                                    d="M11.9268 10.6035C12.6742 10.6036 13.2979 11.2256 13.2979 12.0088C13.2979 12.7917 12.6737 13.414 11.9268 13.4141C11.1797 13.4141 10.5557 12.7918 10.5557 12.0088C10.5557 11.2256 11.1795 10.6035 11.9268 10.6035Z"
                                                    stroke="CurrentColor" />
                                                <path
                                                    d="M18.081 10.6035C18.828 10.6037 19.4511 11.2258 19.4511 12.0088C19.4511 12.7917 18.8281 13.4138 18.081 13.4141C17.3332 13.4141 16.7089 12.7916 16.7089 12.0088C16.7089 11.2259 17.3335 10.6035 18.081 10.6035Z"
                                                    stroke="CurrentColor" />
                                                <path
                                                    d="M5.91388 16.6895C6.66095 16.6895 7.28497 17.3116 7.28497 18.0947C7.28487 18.8777 6.66091 19.5 5.91388 19.5C5.16689 19.4999 4.54289 18.8771 4.54279 18.0947C4.54279 17.3119 5.16678 16.6896 5.91388 16.6895Z"
                                                    stroke="CurrentColor" />
                                                <path
                                                    d="M11.9697 16.6895C12.7166 16.6895 13.3408 17.3117 13.3408 18.0947C13.3407 18.8777 12.7165 19.5 11.9697 19.5C11.2224 19.4999 10.5987 18.8772 10.5986 18.0947C10.5986 17.3118 11.2225 16.6896 11.9697 16.6895Z"
                                                    stroke="CurrentColor" />
                                                <path
                                                    d="M18.1232 16.6895C18.8701 16.6895 19.4943 17.3117 19.4943 18.0947C19.4942 18.8777 18.8704 19.4999 18.1232 19.5C17.3764 19.5 16.7522 18.8773 16.7521 18.0947C16.7521 17.3117 17.3763 16.6895 18.1232 16.6895Z"
                                                    stroke="CurrentColor" />
                                            </svg>
                                        </a>
                                        <a href="#" class="btn-view list active">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.2021 17.8311H8.50295C8.06199 17.8311 7.70459 17.4737 7.70459 17.0327C7.70459 16.5918 8.06199 16.2344 8.50295 16.2344H19.2018C19.6428 16.2344 20.0002 16.5918 20.0002 17.0327C20.0002 17.4737 19.6431 17.8311 19.2021 17.8311Z"
                                                    fill="CurrentColor" />
                                                <path
                                                    d="M19.2021 12.8194H8.50295C8.06199 12.8194 7.70459 12.462 7.70459 12.021C7.70459 11.5801 8.06199 11.2227 8.50295 11.2227H19.2018C19.6428 11.2227 20.0002 11.5801 20.0002 12.021C20.0005 12.462 19.6431 12.8194 19.2021 12.8194Z"
                                                    fill="CurrentColor" />
                                                <path
                                                    d="M19.2021 7.80766H8.50295C8.06199 7.80766 7.70459 7.45026 7.70459 7.0093C7.70459 6.56834 8.06199 6.21094 8.50295 6.21094H19.2018C19.6428 6.21094 20.0002 6.56834 20.0002 7.0093C20.0002 7.45026 19.6431 7.80766 19.2021 7.80766Z"
                                                    fill="CurrentColor" />
                                                <path
                                                    d="M5.0722 8.1444C5.66436 8.1444 6.1444 7.66436 6.1444 7.0722C6.1444 6.48004 5.66436 6 5.0722 6C4.48004 6 4 6.48004 4 7.0722C4 7.66436 4.48004 8.1444 5.0722 8.1444Z"
                                                    fill="CurrentColor" />
                                                <path
                                                    d="M5.0722 13.0936C5.66436 13.0936 6.1444 12.6136 6.1444 12.0214C6.1444 11.4293 5.66436 10.9492 5.0722 10.9492C4.48004 10.9492 4 11.4293 4 12.0214C4 12.6136 4.48004 13.0936 5.0722 13.0936Z"
                                                    fill="CurrentColor" />
                                                <path
                                                    d="M5.0722 18.0428C5.66436 18.0428 6.1444 17.5628 6.1444 16.9706C6.1444 16.3785 5.66436 15.8984 5.0722 15.8984C4.48004 15.8984 4 16.3785 4 16.9706C4 17.5628 4.48004 18.0428 5.0722 18.0428Z"
                                                    fill="CurrentColor" />
                                            </svg>
                                        </a>
                                        <div class="wd-find-select flex gap-10">
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Show: 50</span>
                                                    <ul class="list style">
                                                        <li data-value="10" class="option">Show: 10</li>
                                                        <li data-value="30" class="option">Show: 30</li>
                                                        <li data-value="50" class="option selected">
                                                            Show: 50
                                                        </li>
                                                        <li data-value="100" class="option">Show: 100</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Sort by (Defaut)</span>
                                                    <ul class="list style">
                                                        <li data-value="" class="option selected">
                                                            Sort by (Defaut)
                                                        </li>
                                                        <li data-value="by-latest" class="option">All</li>
                                                        <li data-value="low-to-high" class="option">
                                                            Low to high
                                                        </li>
                                                        <li data-value="high-to-low" class="option">
                                                            High to low
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-car-list-1 listing-list-section">
                                    <div class="box-car-list hv-one style-2">
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
                                                                    stroke="white" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
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
                                                <img class="lazyload" data-src="assets/images/car-list/car1.webp"
                                                    src="assets/images/car-list/car1.webp" alt="image" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-wrap">
                                            <h3 class="link-style-1">
                                                <a href="listing-detail-v1.html">Volkswagen Jetta Sedan 2.0 High</a>
                                            </h3>
                                            <p class="des">It was positioned to be the successor to the Citroën Xsara.
                                            </p>
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
                                            </div>

                                            <div class="days-box flex justify-space align-center">
                                                <div class="money fs-24 fw-7 lh-30 text-color-2">
                                                    $76,500
                                                </div>
                                                <a href="listing-detail-v1.html" class="view-car">View <i
                                                        class="icon-carus-arright"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="themesflat-pagination clearfix mt-40">
                                    <ul>
                                        <li>
                                            <a href="#" class="page-numbers style"><i class="far fa-angle-left"></i></a>
                                        </li>
                                        <li><a href="#" class="page-numbers current">1</a></li>
                                        <li><a href="#" class="page-numbers">2</a></li>
                                        <li><a href="#" class="page-numbers">...</a></li>
                                        <li>
                                            <a href="#" class="page-numbers style"><i
                                                    class="far fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- logo -->
            <section class="flat-brand tf-section3">
                <div class="container">
                    <div class="heading-section">
                        <div class="heading-section center">
                            <h2 class="heading-tittle">Our partners</h2>
                            <p class="fs-18 fw-4 text-color-2">
                                Autriva is a platform trusted and chosen by over 2,000
                                partners
                            </p>
                        </div>
                    </div>
                    <div class="fade-edge">
                        <div class="infiniteslide tf-brand " data-clone="2" data-style="left" data-speed="80">
                            <div class="slogan-logo">

                                <img class="lazyload" data-src="assets/images/partner/par1.webp"
                                    src="assets/images/partner/par1.webp" alt="images" />
                            </div>
                            <div class="slogan-logo">

                                <img class="lazyload" data-src="assets/images/partner/par2.webp"
                                    src="assets/images/partner/par2.webp" alt="images" />

                            </div>
                            <div class="slogan-logo">

                                <img class="lazyload" data-src="assets/images/partner/par3.webp"
                                    src="assets/images/partner/par3.webp" alt="images" />

                            </div>
                            <div class="slogan-logo">

                                <img class="lazyload" data-src="assets/images/partner/par4.webp"
                                    src="assets/images/partner/par4.webp" alt="images" />

                            </div>
                            <div class="slogan-logo">

                                <img class="lazyload" data-src="assets/images/partner/par5.webp"
                                    src="assets/images/partner/par5.webp" alt="images" />

                            </div>
                            <div class="slogan-logo">

                                <img class="lazyload" data-src="assets/images/partner/par6.webp"
                                    src="assets/images/partner/par6.webp" alt="images" />

                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection