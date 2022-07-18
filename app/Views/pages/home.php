<?= $this->extend('layout/template');  ?>

<?= $this->section('content'); ?>


<!-- ======= Backgorund Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <h1>Monitoring Realtime Scada Jateng-DIY</h1>
        <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
        <a href="<?php echo base_url(); ?>/status/" class="btn-get-started">Klik Di Sini</a>
    </div>
</section><!-- End Backgorund Section -->


<footer class="page-footer font-small bg-dark pt-2">
    <!-- Footer Elements -->
    <div class="container my-1">
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Social media -->
                <section class="mb-1">
                    <a class="btn btn-outline-light btn-floating rounded-circle m-1" href="https://www.facebook.com/ptpln/" role="button"><i class="fa-brands fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-floating rounded-circle m-1" href="https://twitter.com/pln_123" role="button"><i class="fa-brands fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-floating rounded-circle m-1" href="https://www.instagram.com/pln_id/?hl=en" role="button"><i class="fa-brands fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-floating rounded-circle m-1" href="https://id.linkedin.com/company/pt-pln-persero-" role="button"><i class="fa-brands fa-linkedin-in"></i></a>
                </section>
            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center text-light py-1">© 2022 Copyright PT PLN (Persero) All Rights Reserved
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</footer>

<?= $this->endSection();  ?>