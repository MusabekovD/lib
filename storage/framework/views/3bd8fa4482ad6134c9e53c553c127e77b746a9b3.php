<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">

<base href="/public">
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
    
    <?php $menus = \App\Models\MenuFrontend::nested()->get(); ?>
    <?php echo $__env->make('widgets.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Jizzax davlat pedagogika universitet</h1>
            <h2>Axborot-resurs markazi rasmiy sahifasi</h2>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <?php echo $__env->make('front.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div style="padding: 50px 0;background: #f1f6fe;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Bizning <b>@jspilibbot</b> telegram botimiz orqali kitobxonga aylaning</h4>
                        <a href="https://t.me/jspilibbot" class="btn btn-primary">A'zo bo'lish</a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('widgets.newslib', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <section id="kitobbuyurtma" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3><span>Kitob buyurtma bering</span></h3>
                    <p>Siz bizning kutubxonamizdan qidirgan kitobingizni topaolamdingizmi marhamat buyurtma bering va
                        biz siz uchun xaridni amalga oshiramiz</p>
                </div>
                <div class="row  justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <form action="<?php echo e(route('kitobbuyurtma'), false); ?>" method="post" role="form" class="php-email-form">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="fio"
                                        class="form-control <?php $__errorArgs = ['fio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="fio"
                                        placeholder="F.I.O" value="<?php echo e(old('fio'), false); ?>" required="">
                                    <?php $__errorArgs = ['fio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message, false); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col form-group">
                                    <input type="textl" class="form-control <?php $__errorArgs = ['tell'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="tell" id="tell" value="<?php echo e(old('tell'), false); ?>"
                                        placeholder="Telefon raqamingiz" required="">
                                    <?php $__errorArgs = ['tell'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message, false); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control <?php $__errorArgs = ['kitobnomi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="kitobnomi" id="kitobnomi" value="<?php echo e(old('kitobnomi'), false); ?>"
                                    placeholder="Kitob nomi" required="">
                                <?php $__errorArgs = ['kitobnomi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message, false); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="muallif"
                                        class="form-control <?php $__errorArgs = ['muallif'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="muallif"
                                        value="<?php echo e(old('muallif'), false); ?>" placeholder="Muallif(lar)" required="">
                                    <?php $__errorArgs = ['muallif'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message, false); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col form-group">
                                    <input type="text" class="form-control <?php $__errorArgs = ['nashryili'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="nashryili" id="nashryili" value="<?php echo e(old('nashryili'), false); ?>"
                                        placeholder="Nashr etilgan yili" required="">
                                    <?php $__errorArgs = ['nashryili'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message, false); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Buyurtmangiz muvoffaqiyatli rasmiylashtirildi. Sizga rahmat!
                                </div>
                            </div>

                            <div class="text-center"><button type="submit">Buyurtma qilish</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Bizning telegram kanalimizga a'zo bo'ling</h4>
                        <a href="https://t.me/jdpiarm" class="btn btn-primary">A'zo bo'lish</a>
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
<?php /**PATH /var/www/resources/views/layouts/main.blade.php ENDPATH**/ ?>