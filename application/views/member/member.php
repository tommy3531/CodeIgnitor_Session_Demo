<?php if ($this->session->flashdata('loggin_success')) { ?>
	<div class="alert alert-success"> <?php echo $this->session->flashdata('loggin_success') ?> </div>
<?php } ?>

<div class="jumbotron">
  <h1>Hello, Members</h1>
  <p>Please click on the about links to learn about Codeigniter</p>
</div>