<?php include 'header.php'; ?>
	<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row mt-2">
              <div class="col-12">
                <?php echo form_open('dashboard/new_user'); ?>
                  <div class="error">
                    <?php echo form_error('userid'); ?>
                    <?php echo form_error('pwd'); ?>
					<?php echo form_error('fname'); ?>
					<?php echo form_error('lname'); ?>
					<?php echo form_error('email'); ?>
					<?php echo form_error('phone'); ?>
					<?php echo form_error('country'); ?>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <?= form_input(['name'=>'userid', 'type'=>'text', 'class'=>'form-control', 'id'=>'username', 'value'=>set_value('userid')]); ?>
                  </div>
                  <div class="form-group">
                  	<div class="row">
                  		<div class="col-md-6"><label for="First-name">First Name</label>
                    <?= form_input(['name'=>'fname', 'type'=>'text', 'class'=>'form-control', 'id'=>'fname', 'value'=>set_value('fname')]); ?></div>
                    <div class="col-md-6"><label for="Last-name">Last Name</label>
                    <?= form_input(['name'=>'lname', 'type'=>'text', 'class'=>'form-control', 'id'=>'lname', 'value'=>set_value('lname')]); ?></div>
                  	</div>
                    
                  </div>
                  <div class="form-group">
                  	<div class="row">
                  		<div class="col-md-6"><label for="email">Email</label>
                    <?= form_input(['name'=>'email', 'type'=>'text', 'class'=>'form-control', 'id'=>'email', 'value'=>set_value('email')]); ?></div>
                    <div class="col-md-6"><label for="country">Country</label>
                    <?= form_input(['name'=>'country', 'type'=>'text', 'class'=>'form-control', 'id'=>'country', 'value'=>set_value('country')]); ?></div>
                  	</div>
                    <div class="form-group mt-3">
                    <label for="phoneno">Phone No</label>
                    <?= form_input(['name'=>'tel', 'type'=>'text', 'class'=>'form-control', 'id'=>'tel', 'value'=>set_value('tel')]); ?>
                  </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <?= form_input(['name'=>'pwd', 'type'=>'password', 'class'=>'form-control', 'id'=>'pass', 'value'=>set_value('pwd')]); ?>
                  </div>
                  <div class="form-group mt-4">
                    <button
                      name="save" type="submit"
                      class="btn btn-primary btn-block text-uppercase"
                    >
                      Sign Up
                    </button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<?php include 'footer.php'; ?>