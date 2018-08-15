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
		              <?php flash('register_success'); ?>
	                  <small>Sign in with</small>
	                </div>
	                <div class="btn-wrapper text-center">
	                  <a href="#" class="btn btn-neutral btn-icon">
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
	                  <small>Or sign in with credentials</small>
	                </div>
	                <form role="form" action="<?php echo APPROOT; ?>/users/login" method="post">
	                	<!-- Email form group -->
	                  <div class="form-group mb-3
						<?php
	                    	echo (!empty($data['email_err'])) ? 'has-danger' : '';
	                    	echo (empty($data['email'])) ? '' : 'has-success';
                  		?>"
	                  ">
	                    <div class="input-group input-group-alternative">
	                      <div class="input-group-prepend">
	                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
	                      </div>
	                      <input class="form-control <?php echo !empty($data['email_err']) ? 'is-invalid' : ''; ?>" placeholder="<?php echo (!empty($data['email_err'])) ? $data['email_err'] : 'Email'; ?>" type="email" name="email" value="<?php echo $data['email']; ?>">
	                    	<span class="invalid-feedback">
                        		<?php echo $data['email_err']; ?>
                      		</span>
	                    </div>
	                  </div>
	                  <!-- Password form group -->
	                  <div class="form-group
	                   <?php
                  			if(empty($_POST['password'])) {
                    			echo '';
                  			} elseif (strlen($_POST['password']) < 8 || !empty($_POST['password_err'])) {
                    				echo ' has-danger';
                  			} else {
			                    echo ' has-success';
			                  }
                  		?>
	                  ">
	                    <div class="input-group input-group-alternative">
	                      <div class="input-group-prepend">
	                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
	                      </div>
	                      <input class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" placeholder="Password" type="password" name="password" value="<?php echo (!empty($data['password'])) ? $data['password'] : '' ; ?>">
	                    </div>
	                  </div>
	                    <?php if(empty($data['password_err']) && !empty($data['password'])) : ?>
                      <div class="text-muted font-italic mb-3">
                        <small>password strength: 
                          <span class="text-success font-weight-700">strong</span>
                        </small>
                      </div>
                  <?php else :?>
                  <div class="text-muted font-italic mb-3">
                        <small> 
                          <span class="text-danger font-weight-700">
                            <?php echo $data['password_err']; ?>
                          </span>
                        </small>
                      </div>
                <?php endif;?>
	                  <div class="custom-control custom-control-alternative custom-checkbox">
	                    <input class="custom-control-input <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" id=" customCheckLogin" type="checkbox" name="terms">
	                    <label class="custom-control-label" for=" customCheckLogin">
	                      <span>Remember me</span>
	                    </label>
	                  </div>
	                  <div class="text-center">
	                    <button formaction="<?php echo URLROOT;?>/users/login" value="Login" type="submit" class="btn btn-primary my-4">Sign in</button>
	                  </div>
	                </form>
	              </div>
	            </div>
	            <div class="row mt-3">
	              <div class="col-6">
	                <a href="#" class="text-light">
	                  <small>Forgot password?</small>
	                </a>
	              </div>
	              <div class="col-6 text-right">
	                <a href="#" class="text-light">
	                  <small>Create new account</small>
	                </a>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
    </section>
</main>
<?php require APPROOT . '/views/includes/footer.php'; ?>
