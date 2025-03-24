<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo e(config('app.name', 'Laravel'), false); ?></title>
	<link rel="stylesheet" href="<?php echo e(asset('/newassets/css/bootstrap.css'), false); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('/newassets/css/main.css'), false); ?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>





</head>
<body>
	<header>
		<?php echo $__env->make('widgets.newheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</header>
	<div class="body">

		<section class="main_news" style="padding: 50px 0;" >
			<div class="container">
                <?php echo $__env->yieldContent('newcontent'); ?>
			</div>
		</section>

		<footer>
			<?php echo $__env->make('frontend.footermenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</footer>
		<div class="footer"></div>

	</div><!-- end body  -->
	<div class="footer"></div>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="<?php echo e(asset('newassets/js/bootstrap.bundle.min.js'), false); ?>"></script>

</body>
</html>
<?php /**PATH /var/www/resources/views/layouts/newsingle.blade.php ENDPATH**/ ?>