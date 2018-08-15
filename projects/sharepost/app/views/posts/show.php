<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/includes/navbar.php'; ?>
<main>
	<section class="section section-lg section-shaped overflow-hidden my-0">
      <div class="shape shape-style-1 shape-default shape-skew">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-0 pb-lg">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <h1 class="text-white font-weight-light">Post Detail View</h1>
            <p class="lead text-white mt-4">Simply edit or delete the your user post.<span><strong>Only Posts belonging to the logged in user can edited/deleted.</strong></span></p>
            <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-white mt-4">See all components</a>
          </div>
          <div class="col-lg-6 mb-lg-auto">
          </div>
        </div>
      </div>
    </section>
	<section>
	<div class="container mt-5">
		<div class="card px-3">
			<h1>
				<?php echo $data['post']->title; ?>
			</h1>
			<div class="text-dark mb-3">
				<p>Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?></p>
			</div>
			<p>
				<?php echo $data['post']->body;?>
			</p>
			<?php if($data['post']->user_id == $_SESSION['user_id']) :?>
				<hr>
				<div class="d-flex justify-content-end">
					<a class="btn btn-dark mb-3" href="<?php echo URLROOT;?>/posts/edit/<?php echo $data['post']->id; ?>">Edit</a>
					<form class="" method="post" action="<?php echo URLROOT;?>/posts/delete/<?php echo $data['post']->id;?>">
						<input type="submit" value="Delete" class="btn btn-danger w-100">
					</form>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
</main>
<?php require APPROOT . '/views/includes/footer.php'; ?>
