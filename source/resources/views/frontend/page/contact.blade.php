<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@100..900&family=Siemreap&display=swap" rel="stylesheet">
@include('frontend.head')
@include('frontend.nav')

<style>
    .siemreap-regular {
        font-family: "Siemreap", sans-serif, bold;
        font-weight: 500;
        font-style: normal;
    }

    .siemreap-regular.bold {
        font-family: "Siemreap", sans-serif, bold;
        font-weight: 1000;
        font-style: normal;
    }
</style>

<body>

    <section class="contact-section py-5 bg-red siemreap-regular" style="padding-top: 150px;">
        <h1 class="text-center mb-5 siemreap-regular bold">{{ __('Contact Us') }}</h1>
        <div class="container py-5">

            <h2 class="text-center mb-5 siemreap-regular bold">{{ __('Get In Touch') }}</h2>

            <div class="row g-4">
                <!-- Contact Form Card -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('Full Name') }}</label>
                                    <input type="text" class="form-control" id="name" placeholder="{{ __('Your Name') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input type="email" class="form-control" id="email" placeholder="{{ __('Your Email') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">{{ __('Subject') }}</label>
                                    <input type="text" class="form-control" id="subject" placeholder="{{ __('Message Subject') }}">
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label">{{ __('Message') }}</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="{{ __('How can we help you?') }}" required></textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-lg w-100 siemreap-regular">{{ __('Submit Message') }}</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Information Card -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-4 siemreap-regular bold">{{ __('Contact Information') }}</h3>

                            <div class="d-flex mb-4">
                                <div class="contact-icon text-primary me-3">
                                    <i class="bi bi-geo-alt-fill fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="siemreap-regular bold">{{ __('Address1') }}</h5>
                                    <p class="mb-0">{{ __('Tropang Kraper Village, Krang Mkak Commune, Angk Snuol district, Kandal Province') }}</p>
                                </div>
                                <div>
                                    <h5 class="siemreap-regular bold">{{ __('Address2') }}</h5>
                                    <p class="mb-0">{{ __('Roka Thum Village, Baek Chan Commune, Angk Snuol district, Kandal Province') }}</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="contact-icon text-primary me-3">
                                    <i class="bi bi-telephone-fill fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="siemreap-regular bold">{{ __('Phone') }}</h5>
                                    <p class="mb-0">Call: 012 78 99 57 / 097 577 9 577 / 098 59 52 01</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="contact-icon text-primary me-3">
                                    <i class="bi bi-envelope-fill fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="siemreap-regular bold">{{ __('Email') }}</h5>
                                    <p class="mb-0"><a href="mailto:info@sbku.edu.kh" class="text-decoration-none">info@sbku.edu.kh</a></p>
                                </div>
                            </div>

                            <div class="social-links mt-5">
                                <h5 class="siemreap-regular">{{ __('Connect With Us') }}</h5>
                                <div class="d-flex gap-3 mt-3">
                                    <a href="https://web.facebook.com/sbkuuniversity" class="btn btn-outline-primary rounded-circle">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="https://t.me/SBKUtelegram" class="btn btn-outline-primary rounded-circle">
                                        <i class="bi bi-telegram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="card shadow-sm border-0">
                        <div class="card-header text-black py-3">
                            <h3 class="mb-0 text-center siemreap-regular bold">{{ __('Find Our Campus') }}</h3>
                        </div>
                        <div class="card-body p-10" style="flex: auto; max-width: 100%; width: 100%; padding: 20px;">
                            <div class="ratio ratio-17x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!4v1743797920369!6m8!1m7!1sSDIiPMkL83e--gVrstvGcg!2m2!1d11.4950986854781!2d104.7470557613159!3f244.5126725773414!4f13.007707862799876!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="card-footer bg-white p-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-info-circle text-primary me-2"></i>
                                <p class="mb-0 bold">{{ __('Click on the map to get directions to our campus') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

{{-- FOOTER & EXTRAS --}}
@include('frontend.footer')