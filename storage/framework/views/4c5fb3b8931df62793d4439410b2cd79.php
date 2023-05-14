<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title>Admin Dashboard</title>

<link rel="stylesheet" href="<?php echo e(asset('dist/assets/css/main/app.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('dist/assets/css/main/app-dark.css')); ?>">
<link rel="shortcut icon" href="<?php echo e(asset('dist/assets/images/logo/favicon.svg')); ?>" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo e(asset('dist/assets/images/logo/favicon.png')); ?>" type="image/png">
<link rel="stylesheet" href="<?php echo e(asset('dist/assets/css/shared/iconly.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('fontawesome/css/all.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('dist/assets/css/pages/datatables.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('dist/assets/extensions/simple-datatables/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('dist/assets/css/pages/simple-datatables.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('dist/assets/extensions/sweetalert2/sweetalert2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('select2/dist/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('extensions/choices.js/public/assets/styles/choices.css')); ?>" />
<style>
  .select2-container--default .select2-selection--single {
    border-radius: .3rem;
    font-size: 1.25rem;
    min-height: calc(1.5em + 1rem + 2px);
    padding: .5rem 1rem;
    background-color: #010f1c;
  }

  .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #fff;
  }

  .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: calc(2.5rem + 2px);
    background-color: #010f1c;
  }
</style>
<link rel="stylesheet" href="<?php echo e(asset('query-ui/jquery-ui.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('query-ui/jquery-ui.min.css')); ?>"><?php /**PATH D:\Fdw Files\CTOS\dev\frontend\tos-dev-local\resources\views/partial/head.blade.php ENDPATH**/ ?>