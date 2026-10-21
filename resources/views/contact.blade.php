@extends('layouts.master')

@section('title', 'Contact')

@section('content')
            <section class="flat-title style1 mb-78 bg-3">
                <div class="container">
                    <div class="title-inner">
                        <h1 class="mb-12 font-2">Contact us</h1>
                        <div class="title-group fs-14">
                            <a class="home text-color-3 fw-7" href="index.html">Home</a><span class="fw-4">Used
                                cars for sale</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-section3 flat-property">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-12">
                            <div class="heading-section mb-50">
                                <h2 class="heading-tittle">Please fill out the contact form below and tell us
                                    about your dream car.</h2>
                                <p class="fs-18 fw-4 text-color-2">We will get back to you as soon as we receive your
                                    request.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <form class="form-contact-us" id="contact-form" action="#">
                                <div class="flex-one gap-48">
                                    <div class="form">
                                        <div class="form-group">
                                            <label for="listing_title">Your name</label>
                                            <input type="text" class="form-control" name="user_name"
                                                placeholder="e.g john doe" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="listing_title">Phone number</label>
                                            <input type="tel" class="form-control" name="user_phone"
                                                placeholder="e.g (000) 000-0000" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="listing_title">Email</label>
                                            <input type="email" class="form-control" name="user_email"
                                                placeholder="e.g johndoe@gmail.com" required>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="lazyload" data-src="assets/images/section/contact.jpg"
                                            src="assets/images/section/contact.jpg" alt="images">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="listing_title">Message (Optional)</label>
                                    <input type="text" class="form-control" name="user_message"
                                        placeholder="Your message"></input>
                                </div>
                                <div id="contact-response"></div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="sc-button" id="btn-send-contact">
                                        <span>Send now</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="flat-brand tf-section3">
                <div class="container">
                    <div class="heading-section">
                        <h2 class="heading-tittle">Our partners</h2>
                        <p class="text-color-2">Autriva is a platform trusted and chosen by over 2,000 partners</p>
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

            <section class="tf-section-map">
                <div class="container-fluid">
                    <div class="map">
                        <iframe class="map-content"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

            </section>

            <section class="tf-section">
                <div class="container">
                    <h2 class="mb-50">Frequently Asked Questions</h2>
                    <div class="grid-2 gap-48">
                        <div class="flat-accordion">
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">What is Carus?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">How do I access Carus?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">How is AutoDecar content organized?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">How frequently is AutoDecar updated?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">What kind of topics can be found on Carus?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flat-accordion">
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">How do you calculate fees?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">How do I pay my invoices?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">Are there opportunities for discounts or promotions?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">Are there any hidden fees not displayed in the pricing
                                        table?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">Is there financial or accounting support?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                            <div class="flat-toggle style-1">
                                <div class="toggle-title flex align-center">
                                    <h5 class="fw-6">What is the refund procedure?</h5>
                                    <div class="btn-toggle"></div>
                                </div>
                                <div class="toggle-content section-desc">
                                    <p class="texts">Stay informed about emerging trends in the housing market,
                                        such as the demand for sustainable homes, technological advancements,
                                        and demographic shifts. Companies aligning with these trends may present
                                        attractive investment opportunities.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
@endsection