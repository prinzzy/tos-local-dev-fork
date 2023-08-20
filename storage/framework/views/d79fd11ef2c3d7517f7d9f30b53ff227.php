<nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                                
                            </ul>
                            <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"><?php echo e(Auth::user()->name); ?></h6>
                                            <p class="mb-0 text-sm text-gray-600"><?php echo e(Auth::user()->email); ?></p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">                                            
                                            <?php if(Auth::user()->profil): ?>
                                            <div class="round-image-3">
                                        <img class="w-100 active" src="<?php echo e(asset('profil/' .Auth::user()->profil)); ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                        <div class="avatar avatar-md">
                                    <?php else: ?>
                                    <div class="avatar avatar-md">
                                        <img class="w-100 active" src="<?php echo e(asset('dist/assets/images/faces/1.jpg')); ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                        </div>
                                    <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Hello <?php echo e(Auth::user()->name); ?></h6>
                                    </li>
                                    <li><a class="dropdown-item" href="/profile"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                            Settings</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                            Wallet</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> 
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                               </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav><?php /**PATH /var/www/html/tos/resources/views/partial/authheader.blade.php ENDPATH**/ ?>