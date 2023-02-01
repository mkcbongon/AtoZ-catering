<div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="/img/logofinal.png" alt=""></i>A to Z Catering Services</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <?php if (session()->get('isLoggedIn')): ?>
                        <a href="reservation" class="nav-item nav-link">Reservation</a>
                        <?php endif ?>
                        <a href="menu" class="nav-item nav-link">Menu</a>
                        <?php if (session()->get('isLoggedIn')): ?>
                        <a href="cart" class="nav-item nav-link">Cart</a>
                        <?php endif ?>
                    </div>
                    <?php $session = session(); ?>
                    <?php if (session()->get('isLoggedIn')): ?>
                       
                        
                        <div class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <strong><?= session()->get('username') ?></strong>
                            <img src="/img/logofinal.png" alt="" style="height: 40px;"> 
                        </a>

                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <i class="fa-solid fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fa-solid fa-gear"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/logout" class="dropdown-item">
                                <i class="fa-solid fa-right-from-bracket"></i>Log out
                            </a>
                        </div>
                    </div>
                    <?php else: ?>

                    <a href="signin" class="btn btn-primary">Sign IN</a>
                    <?php endif ?>

                    

                   

                </div>
            </nav>

            
        </div>