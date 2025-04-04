<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Khmer+OS+Siemreap&display=swap" rel="stylesheet">
</head>

<body>

    <section class="contact-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">{{ __('Get In Touch') }}</h2>

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
                                <button type="submit" class="btn btn-primary btn-lg w-10 ">{{ __('Submit Message') }}</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Information Card -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-4">{{ __('Contact Information') }}</h3>

                            <div class="d-flex mb-4">
                                <div class="contact-icon text-primary me-3">
                                    <i class="bi bi-geo-alt-fill fs-4"></i>
                                </div>
                                <div>
                                    <h5>{{ __('Main Campus') }}</h5>
                                    <p class="mb-0">{{ __('15, Jalan Sri Semantan 1, Off Jalan Semantan, Bukit Damansara, 50490, Kuala Lumpur, Malaysia') }}</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="contact-icon text-primary me-3">
                                    <i class="bi bi-telephone-fill fs-4"></i>
                                </div>
                                <div>
                                    <h5>{{ __('Phone') }}</h5>
                                    <p class="mb-0">+603 2711 2000</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="contact-icon text-primary me-3">
                                    <i class="bi bi-envelope-fill fs-4"></i>
                                </div>
                                <div>
                                    <h5>{{ __('Email') }}</h5>
                                    <p class="mb-0"><a href="mailto:info@sbku.edu.kh" class="text-decoration-none">info@sbku.edu.kh</a></p>
                                </div>
                            </div>

                            <div class="social-links mt-5">
                                <h5>{{ __('Connect With Us') }}</h5>
                                <div class="d-flex gap-3 mt-3">
                                    <a href="#" class="btn btn-outline-primary rounded-circle">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary rounded-circle">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary rounded-circle">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary rounded-circle">
                                        <i class="bi bi-linkedin"></i>
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
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-primary text-white py-3">
                            <h3 class="mb-0 text-center">{{ __('Find Our Campus') }}</h3>
                        </div>
                        <div class="card-body p-10 ">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.221992154698!2d101.66746802499678!3d3.145574636655252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49c5bff28281%3A0xa731d078cc5c6a5c!2sHELP%20University!5e0!3m2!1sen!2smy!4v1710123456789" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="card-footer bg-white p-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-info-circle text-primary me-2"></i>
                                <p class="mb-0">{{ __('Click on the map to get directions to our campus') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<!-- Contact Section -->


<!-- Bootstrap & Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>