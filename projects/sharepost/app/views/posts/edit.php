
<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/includes/navbar.php'; ?>
<main>
<section class="section section section-shaped my-0 overflow-hidden">
      <div class="shape shape-style-1 bg-gradient-warning shape-skew">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-0">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-lg-2 ml-lg-auto">
            <div class="position-relative pl-md-5">
              <img src="../assets/img/ill/ill-2.svg" class="img-center img-fluid">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="d-flex px-3">
              <div>
                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                  <i class="ni ni-building text-primary"></i>
                </div>
              </div>
              <div class="pl-4">
                <h4 class="display-3 text-white">Edit View</h4>
                <p class="text-white">Sharepost is a post application designed with a custom PHP mvc framework.</p>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-satisfied"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-success">Share posts with your friends.</h5>
                    <p>Increase your post gravitas.</p>
                    <a href="#" class="text-success">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </section>


<section class="section section-lg pt-lg-0 section-contact-us">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card bg-gradient-secondary shadow">
          <div class="card-body p-lg-5">
            <h4 class="mb-1">Edit</h4>
            <p class="mt-0">Hit the "Post" button when you're done.</p>
            <a href="<?php echo URLROOT;?>/posts" class="btn btn-primary">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
             <form action="" method="post">
            <div class="form-group mt-5">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                  </span>
                </div>
                <input class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" name="title" type="text" value="<?php echo $data['title']; ?>"placeholder="Title">
                <span class="invalid-feedback">
                  <?php echo $data['title_err']; ?>
                </span>
              </div>
            </div>
            <div class="form-group mb-4">
              <textarea class="form-control form-control-alternative <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" name="body" rows="4" cols="80" placeholder="Type a message..."><?php echo $data['body']; ?></textarea>
              <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
            </div>
            <button class="btn btn-primary" name="submit" formaction="<?php echo URLROOT;?>/posts/edit/<?php echo $data['id']; ?>">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
<?php require APPROOT . '/views/includes/footer.php'; ?>
