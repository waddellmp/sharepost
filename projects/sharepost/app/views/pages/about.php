<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/includes/navbar.php'; ?>
<main>
    <div class="position-relative">
      <!-- Hero for FREE version -->
      <section class="section-hero section-shaped my-0">
        <div class="shape shape-style-1 shape-primary">
          <span class="span-150"></span>
          <span class="span-50"></span>
          <span class="span-50"></span>
          <span class="span-75"></span>
          <span class="span-100"></span>
          <span class="span-75"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
        </div>
        <div class="container shape-container d-flex align-items-center pb-4">
          <div class="col px-0">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-7 text-center pt-lg">
                <h1 class="display-1 mb-4 text-white"><?php echo $data['title']; ?></h1>
              </div>
            </div>
            <div class="row align-items-center justify-content-around stars-and-coded">
              <div class="col-sm-4">
                <span class="text-white alpha-7 ml-3">Source code on</span>
                <a href="#" target="_blank" title="Support us on Github">
                  <img src="<?php echo URLROOT; ?>/assets/img/brand/github-white-slim.png" style="height: 22px; margin-top: -3px">
                </a>
              </div>
              <div class="col-sm-4 mt-4 mt-sm-0 text-right">
                <span class="text-white alpha-7">Coded by</span>
                <a href="" target="_blank" title="Creative Tim - Premium Bootstrap Themes and Templates">
                  <img src="<?php echo URLROOT; ?>/assets/img/theme/avatar.jpg" class="ml-3" style="height: 60px; border-radius: 50%">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="section section-lg section-nucleo-icons pb-250">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-3">Development</h2>
            <p class="lead">
              Sharepost is small post application that was built with a custom PHP MVC framework developed by <strong>Matthew Waddell</strong>. It uses <a href="#" class="text-primary">Bootstrap 4</a> for the UI and the <a href="#" class="link">Argon</a> design system.
            </p>
            <div class="btn-wrapper">
              <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/icons.html" class="btn btn-primary">View demo icons</a>
              <a href="https://nucleoapp.com/?ref=1712" target="_blank" class="btn btn-default mt-3 mt-md-0">View all icons</a>
            </div>
          </div>
        </div>
        <div class="blur--hover">
          <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/icons.html">
            <div class="icons-container blur-item mt-5" data-toggle="on-screen">
              <!-- Center -->
              <i class="icon ni ni-diamond"></i>
              <!-- Right 1 -->
              <i class="icon icon-sm ni ni-album-2"></i>
              <i class="icon icon-sm ni ni-app"></i>
              <i class="icon icon-sm ni ni-atom"></i>
              <!-- Right 2 -->
              <i class="icon ni ni-bag-17"></i>
              <i class="icon ni ni-bell-55"></i>
              <i class="icon ni ni-credit-card"></i>
              <!-- Left 1 -->
              <i class="icon icon-sm ni ni-briefcase-24"></i>
              <i class="icon icon-sm ni ni-building"></i>
              <i class="icon icon-sm ni ni-button-play"></i>
              <!-- Left 2 -->
              <i class="icon ni ni-calendar-grid-58"></i>
              <i class="icon ni ni-camera-compact"></i>
              <i class="icon ni ni-chart-bar-32"></i>
            </div>
            <span class="blur-hidden h5 text-success">Eplore all the 21.000+ Nucleo Icons</span>
          </a>
        </div>
      </div>
    </section>
    <section class="section section-lg section-shaped overflow-hidden my-0">
      <div class="shape shape-style-1 shape-default shape-skew">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container shape-container py-0 pb-5">
        <div class="row row-grid justify-content-between align-items-center">
          <div class="col-lg-6">
            <h3 class="display-3 text-white">A beautiful Post App
              <span class="text-white">with examples</span>
            </h3>
            <p class="lead text-white">Login or Register today</p>
            <div class="btn-wrapper">
              <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-success">Login Page</a>
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-white">Register Page</a>
            </div>
          </div>
          <div class="col-lg-5 mb-lg-auto">
            <div class="transform-perspective-right">
              <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-white pb-5">
                  <div class="text-muted text-center mb-3">
                    <small>Sign in with</small>
                  </div>
                  <div class="btn-wrapper text-center">
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon">
                        <img src="<?php echo URLROOT; ?>/assets/img/icons/common/github.svg">
                      </span>
                      <span class="btn-inner--text">Github</span>
                    </a>
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon">
                        <img src="<?php echo URLROOT; ?>/assets/img/icons/common/google.svg">
                      </span>
                      <span class="btn-inner--text">Google</span>
                    </a>
                  </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  <div class="text-center text-muted mb-4">
                    <small>Or sign in with credentials</small>
                  </div>
                  <form role="form">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password">
                      </div>
                    </div>
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id=" customCheckLogin2" type="checkbox">
                      <label class="custom-control-label" for=" customCheckLogin2">
                        <span>Remember me</span>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary my-4">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row row-grid justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-3">Do you love this awesome
              <span class="text-success">UI Built With Argon & Bootstrap 4</span>
            </h2>
            <p class="lead">Below is a nucleo icon example.</p>
          </div>
        </div>
      </div>
    </section>
</main>
<?php require APPROOT . '/views/includes/footer.php'; ?>

