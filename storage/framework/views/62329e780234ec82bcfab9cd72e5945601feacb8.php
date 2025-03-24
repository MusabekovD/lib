<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">

    <title><?php echo e(config('app.name', 'Laravel'), false); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="yandex-verification" content="2c64e64bb2e8b427" />

    <!-- Favicons -->
    <!-- Favicons -->
    <link href="/storage/favicon.ico" rel="icon">
    <link href="/storage/favicon.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css'), false); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/icofont/icofont.min.css'), false); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css'), false); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css'), false); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/venobox/venobox.css'), false); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendor/aos/aos.css'), false); ?>" rel="stylesheet">

    <meta name="yandex-verification" content="2c64e64bb2e8b427" />

    <link href="<?php echo e(asset('assets/css/style.css'), false); ?>" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WBG7PM5');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8BVX44011L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-8BVX44011L');
    </script>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="mailto:jspiarm@jspi.uz">jspiarm@jspi.uz</a>
                <i class="icofont-phone"></i> +998 72 226-37-28
            </div>
            <div class="social-links">
                <a href="https://twitter.com/jdpuuz" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="https://www.facebook.com/jdpuuz/" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com/jdpuuz/" class="instagram"><i class="icofont-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <?php echo $__env->make('widgets.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Header -->



    <main id="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Bizning telegram kanalimizga a'zo bo'ling</h4>
                        <a href="" class="btn btn-primary">A'zo bo'lish</a>
                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make('front.footermenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>JDPU.uz Library</span></strong>. All Rights Reserved</div>
        </div>
    </footer><!-- End Footer -->

    
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('assets/vendor/jquery/jquery.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/jquery.easing/jquery.easing.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/waypoints/jquery.waypoints.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/counterup/counterup.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/owl.carousel/owl.carousel.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/venobox/venobox.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/aos/aos.js'), false); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('assets/js/main.js'), false); ?>"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
                k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(86871262, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/86871262" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</body>

</html>
<?php /**PATH /var/www/resources/views/layouts/single.blade.php ENDPATH**/ ?>