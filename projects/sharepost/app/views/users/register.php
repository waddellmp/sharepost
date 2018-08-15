<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/includes/navbar.php'; ?>
  <main>
  	<section class="section section-shaped section-lg my-0">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                  <small>Sign up with</small>
                </div>
                <div class="text-center">
                  <a href="#" class="btn btn-neutral btn-icon mr-4">
                    <span class="btn-inner--icon">
                      <img src="../assets/img/icons/common/github.svg">
                    </span>
                    <span class="btn-inner--text">Github</span>
                  </a>
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <img src="../assets/img/icons/common/google.svg">
                    </span>
                    <span class="btn-inner--text">Google</span>
                  </a>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Or sign up with credentials</small>
                </div>
                <form action="<?php echo APPROOT; ?>/users/register" method="post" role="form">
                  <!-- Name form group -->
                  <div class="form-group 
                  <?php 
                  echo (!empty($data['name_err'])) ? 'has-danger' : ''; 
                  echo (empty($data['name'])) ? '' : 'has-success';
                  ?>">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" name="name" placeholder="<?php echo (!empty($data['name_err'])) ? $data['name_err'] : 'Name'; ?>" type="text" value="<?php echo $data['name']; ?>">
                    </div>
                  </div>
                  <!-- Email form group -->
                  <div class="form-group 
                  <?php
                    echo (!empty($data['email_err'])) ? 'has-danger' : '';
                    echo (empty($data['email'])) ? '' : 'has-success';
                  ?>">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" name="email" placeholder="<?php echo (!empty($data['email_err'])) ? $data['email_err'] : 'Email'; ?>" type="email" value="<?php echo $data['email']; ?>">
                      <span class="invalid-feedback">
                        <?php echo $data['email_err']; ?>
                     </span>
                    </div>
                  </div>
                  <!-- Password form group -->
                  <div class="form-group 
                  <?php
                  if(empty($data['password'])) {
                    echo '';
                  } elseif (strlen($data['password']) < 8 || !empty($data['password_err'])) {
                    echo ' has-danger';
                  } else {
                    echo ' has-success';
                  }
                  ?>">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password" type="password" value="<?php echo (!empty($data['password'])) ? $data['password'] : '' ; ?>"> 
                    </div>
                  </div>
                  <?php if(empty($data['password_err']) && !empty($data['password'])) : ?>
                      <div class="text-muted font-italic">
                        <small>password strength: 
                          <span class="text-success font-weight-700">strong</span>
                        </small>
                      </div>
                  <?php else :?>
                  <div class="text-muted font-italic">
                        <small> 
                          <span class="text-danger font-weight-700">
                            <?php echo $data['password_err']; ?>
                          </span>
                        </small>
                      </div>
                <?php endif;?>
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input <?php echo (!empty($data['confirm_terms_err'])) ? 'is-invalid' : 'has-success'; ?>"
                        id="customCheckRegister" type="checkbox" name="terms" value="checked">
                         <span class="invalid-feedback">
                            <?php echo $data['confirm_terms_err']; ?>
                         </span>
                        <label class="custom-control-label" for="customCheckRegister">
                          <span>I agree with the
                            <a href="#">Privacy Policy</a>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button formaction="<?php echo URLROOT;?>/users/register" type="submit" value="Register" class="btn btn-primary mt-4">Create account</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php require APPROOT . '/views/includes/footer.php'; ?>
