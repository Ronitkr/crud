<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page - Product Admin Template</title>
    <!-- <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    /> -->
    <?= link_tag('https://fonts.googleapis.com/css?family=Roboto:400,700');?>
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <?= link_tag("assets/css/fontawesome.min.css");?>
    <!-- https://fontawesome.com/ -->
    <?= link_tag("assets/css/bootstrap.min.css");?>
    <!-- https://getbootstrap.com/ -->
    <?= link_tag("assets/css/templatemo-style.css");?>
  
<style>
  .navbar{
    height: 70px;
  }
</style>

  </head>

  <body>
    <div>
      <nav class="navbar navbar-expand-xl">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <h1 class="tm-site-title py-2">Product Admin</h1>
          </a>
        </div>
      </nav>
    </div>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row mt-2">
              <div class="col-12">
                <?php echo form_open('/'); ?>
                  <div class="error">
                    <?php echo form_error('userid'); ?>
                    <?php echo form_error('pwd'); ?>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <?= form_input(['name'=>'userid', 'type'=>'text', 'class'=>'form-control', 'id'=>'username', 'value'=>set_value('userid')]); ?>
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <?= form_input(['name'=>'pwd', 'type'=>'password', 'class'=>'form-control', 'id'=>'pass', 'value'=>set_value('pwd')]); ?>
                  </div>
                  <div class="form-group mt-4">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block text-uppercase"
                    >
                      Login
                    </button>
                  </div>
                  <button class="mt-5 btn btn-primary btn-block text-uppercase">
                    Forgot your password?
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include 'footer.php'; ?>