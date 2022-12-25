<!-- header section start -->
<div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index">Home</a>
                     </li>
                     <?php $session = session(); ?>
                     <?php if($session->logged=="logged"): ?>
                     <li class="nav-item">
                        <a class="nav-link" href="user_package">Packages</a>
                     </li>
                     <?php else: ?>
                     <li class="nav-item">
                        <a class="nav-link" href="packages">Packages</a>
                     </li>
                     <?php endif ?>
                     <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <h1 class="call_text">Call Us : +63 1234567890</h1>
                  </form>
                  <div class="search_icon">
                  <?php $session = session(); ?>
                  <?php if($session->logged=="logged"): ?>
                     <ul>
                        <li><a href="cart"><img src="images/search-icon.png"></a></li>
                        <li>Hi, <?= ucfirst($session->firstname)?>!</li>
                        <li><a href="<?=base_url()?>/logout">LOGOUT</a></li>
                     </ul>
                  <?php else: ?>
                     <ul>
                        <li><a href="login">LOGIN</a></li>
                     </ul>
                     <ul>
                        <li><a href="register">SIGN UP</a></li>
                     </ul>
                  <?php endif ?>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->