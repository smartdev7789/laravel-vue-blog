<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Gaana Blog Admin Panel</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<?php echo e(asset('admin/bootstrap/css/bootstrap.min.css')); ?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"-->
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/AdminLTE.min.css')); ?>">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/skins/_all-skins.min.css')); ?>">
<!-- iCheck -->
<!--link rel="stylesheet" href="<?php echo e(asset('admin/plugins/iCheck/flat/blue.css')); ?>"-->
<!-- Morris chart -->
<!--link rel="stylesheet" href="<?php echo e(asset('admin/plugins/morris/morris.css')); ?>"-->
<!-- jvectormap -->
<!--link rel="stylesheet" href="<?php echo e(asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')); ?>" -->
<!-- Date Picker -->
<!-- link rel="stylesheet" href="<?php echo e(asset('admin/plugins/datepicker/datepicker3.css')); ?>" -->
<!-- Daterange picker -->
<!--link rel="stylesheet" href="<?php echo e(asset('admin/plugins/daterangepicker/daterangepicker.css')); ?>"-->
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo e(asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.13.5/css/ui.jqgrid.min.css">
<link rel="stylesheet" href="http://trirand.com/blog/jqgrid/themes/redmond/jquery-ui-custom.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
<style>
    .ui-jqgrid-bdiv {
        overflow-x: hidden !important;
    }
</style>
<script>
    var _token = "<?php echo e(csrf_token()); ?>";
</script>
<?php $__env->startSection('headSection'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->