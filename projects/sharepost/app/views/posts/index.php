<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/includes/navbar.php'; ?>
<main>
	 <section class="section section-shaped my-0 overflow-hidden">
    <div style="margin-top:90px; width: 200px; position:absolute;"><?php flash('post_message'); ?></div>
      <div class="shape shape-style-3 bg-gradient-default shape-skew">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg pb-300">
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <h2 class="display-3 text-white">Post Playground</h2>
            <p class="lead text-white">Welcome <?php echo "Back ". $_SESSION['user_name']?></p>
          </div>
        </div>
        <div class="row row-grid mt-5">
          <div class="col-lg-4">
            <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
              <i class="ni ni-settings text-primary"></i>
            </div>
            <h5 class="text-white mt-3">Trending</h5>
            <p class="text-white mt-3">Check out trending topics that are buzzing on the boards.</p>
          </div>
          <div class="col-lg-4">
            <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
              <i class="ni ni-ruler-pencil text-primary"></i>
            </div>
            <h5 class="text-white mt-3">Earn Badges</h5>
            <p class="text-white mt-3">Get points by posting to </p>
          </div>
          <div class="col-lg-4">
            <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
              <i class="ni ni-atom text-primary"></i>
            </div>
            <h5 class="text-white mt-3">Launch time</h5>
            <p class="text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </section>
	<!-- My section -->
  	<section>
  		<div class="container">
  			<div class="row mb-4">
  				<div class="col-md-6">
  					<h1>Posts</h1>
  				</div>
  				<div class="col-md-6">
  					<a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
  						<i class="fa fa-pencil"></i> Add Post
  					</a>
  				</div>
  			</div>
  			<div class="row row-grid justify-content-between">
          <div class="col-lg-12">
            <ul class="nav nav-pills nav-pills-circle mb-3" id="tabs_2" role="tablist">
              <li class="nav-item">
                <a class="nav-link rounded-circle active" id="home-tab" data-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="home" aria-selected="true">
                    <span class="nav-link-icon d-block">
                    	<i class="fa fa-th-large" aria-hidden="true"></i>
  				          </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="profile" aria-selected="false">
                    <span class="nav-link-icon d-block"><i class="fa fa-bars"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
            <div class="row row-grid">
              <div class="col-md-12">
                <?php foreach($data['posts'] as $post) : ?>
                  <div class="card card-body w-100 mb-3 p-3">
                    <h4><?php echo $post->title ?></h4>
                    <div class="pt-2 mb-3">
                      Written by <?php echo $post->name; ?> on <?php echo $post->postCreated; ?>
                    </div>
                    <p class="card-text"><?php echo $post->body; ?></p>
                    <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark">More</a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
  	    </div>
  	</section>
</main>
<?php require APPROOT . '/views/includes/footer.php'; ?>
