@extends('landingpage.layouts.app')

@section('main')
    <main id="main">

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="{{ asset('landingpage/img/details-1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Akses Clustering</h3>
                        <p class="fst-italic">

                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Masuk ke halaman login.</li>
                            <li><i class="bi bi-check"></i> Silahkan login dengan memasukkan alamat email Anda dan password
                                email Anda.</li>
                        </ul>
                        <p>
                            Setelah alamat email Anda dan password email Anda dimasukkan, selanjutnya klik tombol
                            <strong>Login</strong>. Jika proses login berhasil, sistem akan mengarahkan ke halaman Dashboard
                            website.
                        </p>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="{{ asset('landingpage/img/details-4.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                        <h3>Masuk ke dashboard K-MEANS</h3>
                        <p class="fst-italic">
                            Anda sudah bisa mengakses berbagai sistem informasi yang ada di K-MEANS
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Nikmati layanan sistem informasi di halaman dashboard</li>
                            <li><i class="bi bi-check"></i> Masing-masing level user memiliki akses yang berbeda</li>
                        </ul>
                        <p>
                            Secara umum fitur yang K-MEANS sediakan adalah untuk pengelolaan sistem akademik mulai dari
                            Pengelolaan Data, Clustering Data, Visualisasi Data.
                        </p>
                    </div>
                </div>


            </div>
        </section><!-- End Details Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row justify-content-center" data-aos="fade-up">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <span class="material-icons">
                                medical_information
                                </span>
                            <span data-purecounter-start="0" data-purecounter-end="2085" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Apotek</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <span class="material-icons">
                                monitor_heart
                                </span>
                            <span data-purecounter-start="0" data-purecounter-end="1772" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Poliklinik</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <span class="material-icons">
                                health_and_safety
                                </span>
                            <span data-purecounter-start="0" data-purecounter-end="1105" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Puskesmas</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">                                
                            <span class="material-icons">
                                local_hospital
                                </span>
                            <span data-purecounter-start="0" data-purecounter-end="1609" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Puskesmas Pembantu</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="count-box">
                            <i class="bi bi-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="312" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Rumah Sakit</p>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-3 col-md-6 mt-5 ">
                        <div class="count-box">
                            <i class="bi bi-hospital-fill"></i>
                            <span data-purecounter-start="0" data-purecounter-end="53" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Rumah Sakit Bersalin</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <p>Our great team</p>
                </div>

                <div class="row" data-aos="fade-left">

                    <div class="col-lg col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('landingpage/img/team/fuad.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Mochammad Fuad Hasan</h4>
                                <span>Programmer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->
@endsection
