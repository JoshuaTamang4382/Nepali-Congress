<?php include('header.php') ?>

<div id="nirbachan_adhikrit-page">
  <section class="common-banner-section small-height">
    <div class="custom-container">
      <div class="text-container">
        <div class="inner">
          <h5>पञ्जीकरण</h5>
          <p>गृहपृष्ठ पञ्जीकरण</p>
        </div>
      </div>
    </div>
  </section>

  <section class="nirbachan_adhikrit-section">
    <div class="custom-container">
      <div class="login-section">
        <div class="inner">
          <form method="POST" action="/admin/login/">
            <input type="hidden" name="" value="">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="email" class="form-label visually-hidden">Username Address</label>
                <input type="text" name="username" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Username" required="">
              </div>
              <div class="form-group col-md-12">
                <label for="password" class="form-label visually-hidden">Password</label>
                <input type="password" name="password" class="form-control" id="phoneNumber" placeholder="Password" required="">
              </div>
              <div class="form-group">
                <div class="form-action">
                  <button type="submit" class="common-btn">Login</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</div>

<?php include('footer.php') ?>