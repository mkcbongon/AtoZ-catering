<div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="/img/logofinal.png" alt=""></i>A o Z Catering Services</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="menu.html" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <?php $session = session(); ?>
                    <?php if (session()->get('isLoggedIn')): ?>
                        <div class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <strong><?= session()->get('name') ?></strong>
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