@extends('layouts.app')

@section('content')
    <!-- Full page dark luxury purple layout -->
    <div class="wedding-home">

        <!-- HERO -->
        <header class="hero vh-100 d-flex align-items-center">
            <div class="container text-center text-white hero-inner">
                <div class="hero-badges mb-3">
                    <span class="badge badge-gold">You're invited</span>
                </div>

                <div class="row justify-content-center align-items-center gx-4">
                    <div class="col-lg-8">
                        <div class="hero-card p-5 rounded-4">
                            <div class="hero-media row g-3 align-items-center">
                                <div class="col-md-5">
                                    <div class="couple-photo shadow-lg">
                                        <img src="{{ asset('images/WhatsApp Image 2025-11-20 at 21.06.41_c19cedaf.jpg') }}"
                                            alt="Couple" class="img-fluid rounded-3">
                                    </div>
                                </div>

                                <div class="col-md-7 text-start">
                                    <h1 class="display-5 fw-bold hero-title">Ayomide <span class="accent">♥</span> Ajoke
                                    </h1>
                                    <p class="lead hero-sub">Two hearts. One journey. Join us as we celebrate our union.</p>

                                    <div class="d-flex flex-wrap gap-2 my-3">
                                        <a href="#story" class="btn btn-primary btn-lg">Our Story</a>
                                        <a href="#gallery" class="btn btn-outline-light btn-lg">View Photos</a>
                                    </div>

                                    <div class="mt-4 d-flex gap-3 align-items-start">
                                        <div class="countdown text-white" id="countdown">
                                            <div class="count-item"><span id="cd-days">00</span><small>Days</small></div>
                                            <div class="count-item"><span id="cd-hours">00</span><small>Hours</small></div>
                                            <div class="count-item"><span id="cd-mins">00</span><small>Mins</small></div>
                                            <div class="count-item"><span id="cd-secs">00</span><small>Secs</small></div>
                                        </div>

                                        <div id="date" class="ms-1 fs-5">Wedding • <strong>March 28, 2026</strong></div>
                                    </div>
                                </div>
                            </div> <!-- hero-media -->
                        </div> <!-- hero-card -->
                    </div>
                </div>
            </div>
            <div class="hero-decor left-decor"></div>
            <div class="hero-decor right-decor"></div>
        </header>

        <!-- LOVE STORY -->
        <section id="story" class="py-5">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div id="began" class="col-lg-6">
                        <h2 class="section-title">How our story began</h2>
                        <p class="section-lead">We met one bright afternoon and discovered a rhythm we couldn’t ignore. From
                            coffee dates to long road trips, every moment brought us closer.</p>

                        <div class="mt-3">
                            <p class="muted">“We said yes to forever on a quiet evening — it felt like stepping into the
                                next chapter we were always meant to write.”</p>
                        </div>

                        <a href="#details" class="btn btn-outline-light">See Wedding details</a>
                    </div>

                    <div class="col-lg-6">
                        <div class="row g-2">
                            <div class="col-6"><img src="{{ asset('images/WhatsApp Image 2025-11-20 at 21.54.24_25307511.jpg') }}"
                                    class="img-fluid rounded-3 shadow" alt="Couple"></div>
                            {{-- <div class="col-6"><img src="{{ asset('images/WhatsApp Image 2025-11-20 at 21.54.25_832bb349.jpg') }}"
                                    class="img-fluid rounded-3 shadow" alt="Moment"></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WEDDING DETAILS -->
        <section id="details" class="py-5 border-top">
            <div class="container">
                <h3 class="section-title">Wedding details</h3>
                <div class="row mt-4 gy-4">
                    <div class="col-md-4">
                        <div class="info-card p-3 rounded-3">
                            <h5>Venue</h5>
                            <p class="muted">TAFO FRACE EVENTS CENTER</p>
                            <p class="small">FIRST-GATE JUNCTION BESIDE CONOIL FILLING STATION OWODE APATA IBADAN</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info-card p-3 rounded-3">
                            <h5>Date & Time</h5>
                            <p class="muted">November 22, 2025</p>
                            <p class="small ">Ceremony: 12:00PM • Reception: 12:00PM</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info-card p-3 rounded-3">
                            <h5>Dress Code</h5>
                            <p class="muted">LAILAC • Purple accent encouraged</p>
                            <p class="small">Feel free to wear shades of purple</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GALLERY -->
        <section id="gallery" class="py-5">
            <div class="container">
                <h3 class="section-title">Moments & Memories</h3>
                <p class="section-lead">A few captured moments before the big day.</p>

                <div class="row g-3 mt-3">
                    <div class="col-sm-6 col-md-4"><img src="{{ asset('images/WhatsApp Image 2025-11-20 at 21.54.25_832bb349.jpg') }}"
                            class="img-fluid rounded-3 shadow" alt="g1"></div>
                    <div class="col-sm-6 col-md-4"><img src="{{ asset('images/WhatsApp Image 2025-11-20 at 21.54.25_49fea6e6.jpg') }}"
                            class="img-fluid rounded-3 shadow" alt="g2"></div>
                    <div class="col-sm-6 col-md-4"><img src="{{ asset('images/another.jpg') }}"
                            class="img-fluid rounded-3 shadow" alt="g3"></div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('blog.show') }}" class="btn btn-primary btn-lg">Celebration Wall</a>
                </div>
            </div>
        </section>

        <!-- RSVP & Message -->
        {{-- <section id="rsvp" class="py-5 border-top">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6">
                        <h3 class="section-title">Send us a message</h3>
                        <p class="section-lead">Leave a short message or blessing for the couple — we’ll display it on the
                            celebration wall.</p>

                        <form action="{{ url('/post') }}" method="POST" class="mt-3">
                            @csrf
                            <div class="mb-2">
                                <input name="name" class="form-control form-control-dark" placeholder="Your name"
                                    required>
                            </div>
                            <div class="mb-2">
                                <input name="email" class="form-control form-control-dark"
                                    placeholder="Email (optional)">
                            </div>
                            <div class="mb-2">
                                <textarea name="message" class="form-control form-control-dark" rows="4"
                                    placeholder="Your blessing or message" required></textarea>
                            </div>
                            <button class="btn btn-gold" type="submit">Send Message</button>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <div class="rsvp-card p-4 rounded-3 shadow-lg"
                            style="background: linear-gradient(180deg, rgba(34,17,44,0.35), rgba(12,8,25,0.25));">
                            <h5 class="text-white">Will you attend?</h5>
                            <p class="muted">Let us know if you'll celebrate with us.</p>

                            <div class="d-flex gap-2 mt-3">
                                <form action="{{ url('/post') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="attend" value="yes">
                                    <button class="btn btn-outline-light">Yes, I will</button>
                                </form>

                                <form action="{{ url('/post') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="attend" value="no">
                                    <button class="btn btn-outline-muted">No, can't make it</button>
                                </form>
                            </div>

                            <div class="mt-3 small ">You can always update your RSVP later.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- FOOTER -->
   

    </div>

    <!-- Countdown + small interactions -->
    <script>
        // Target wedding date (UTC). change to the wedding actual date/time.
        const weddingDate = new Date('2025-11-22T15:00:00Z').getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const diff = weddingDate - now;
            if (diff <= 0) {
                document.getElementById('countdown').innerHTML = '<div class="text-white">The day is here!</div>';
                clearInterval(cdInterval);
                return;
            }
            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const secs = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById('cd-days').textContent = String(days).padStart(2, '0');
            document.getElementById('cd-hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('cd-mins').textContent = String(mins).padStart(2, '0');
            document.getElementById('cd-secs').textContent = String(secs).padStart(2, '0');
        }

        updateCountdown();
        const cdInterval = setInterval(updateCountdown, 1000);
    </script>
@endsection
