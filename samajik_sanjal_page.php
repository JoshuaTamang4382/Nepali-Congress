<?php include('header.php') ?>

<div id="samajik_sanjal-page">
  <section class="common-banner-section small-height">
    <div class="custom-container">
      <div class="text-container">
        <div class="inner">
          <h5>पञ्जीकरण</h5>
          <p>गृहपृष्ठ परिपत्र</p>
        </div>
      </div>
    </div>
  </section>

  <section class="samajik_sanjal-section">
    <div class="custom-container">
      <div class="text-section">
        <div class="inner">
          <h6>नेपाली कांग्रेसका जिल्ला,क्षेत्र,गाउँ/नगर, वार्ड का समितीहरु साथै भातृ तथा शुभेच्छुक संस्थाहरुका विभिन्न तहहरुबाट र जनसम्पर्क समितिहरुको नाममा ज जस्ले facebook, Twitter वा Instagram चलाइरहनु भएको छ, उक्त page वा account को Admin वा Editor हरुले नेपाली कांग्रेस केन्द्र लाई जानकारी दिनु हुन अनुरोध छ। जानकारी दिने form भर्नको लागि पहिले Register गर्नु होला।</h6>
        </div>
      </div>
      <div class="login-section">
        <div class="common-subdomain-wrapper ">
          <nav class="main-nav">
            <div class="nav nav-tabs login-nav-links" id="nav-tab" role="tablist">
              <button class="nav-link  active" id="nav-6-tab" data-bs-toggle="tab" data-bs-target="#nav-6" type="button" role="tab" aria-controls="nav-6" aria-selected="true" tabindex="-1">LOGIN</button>
              <button class="nav-link " id="nav-7-tab" data-bs-toggle="tab" data-bs-target="#nav-7" type="button" role="tab" aria-controls="nav-7" aria-selected="false" tabindex="-1">REGISTER</button>
              <button class="nav-link " id="nav-8-tab" data-bs-toggle="tab" data-bs-target="#nav-8" type="button" role="tab" aria-controls="nav-8" aria-selected="false" tabindex="-1">SUB DOMAIN REGISTER</button>
            </div>
          </nav>
          <div class="tab-content tab-content-shadow" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-6" role="tabpanel" aria-labelledby="nav-6-tab" tabindex="0">
              <div class="inner">
                <form method="POST" action="/admin/login/">
                  <input type="hidden" name="" value="">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="email" class="form-label visually-hidden">Email Address</label>
                      <input type="email" name="username" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email or Phone" required="">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="password" class="form-label visually-hidden">Password</label>
                      <input type="password" name="password" class="form-control" id="phoneNumber" placeholder="Password" required="">
                    </div>
                    <div class="account-reset">
                      <a href="#">
                        <p class="forget-text">Forget Password?</p>
                      </a>
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
            <div class="tab-pane fade" id="nav-7" role="tabpanel" aria-labelledby="nav-7-tab" tabindex="0">

              <div class="inner">
                <form method="POST" action="/admin/login/">
                  <input type="hidden" name="" value="">
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="email" class="form-label visually-hidden">First Name</label>
                      <input type="text" name="username" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="First Name" required="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="form-label visually-hidden">Last Name</label>
                      <input type="text" name="username" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Last Name" required="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="form-label visually-hidden">Email</label>
                      <input type="email" name="username" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required="">
                    </div>


                    <div class="form-group col-md-6">
                      <label for="email" class="form-label visually-hidden">Phone Number</label>
                      <input type="text" name="username" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="Phone Number" required="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email" class="form-label visually-hidden">Gender</label>
                      <select id="inputState" class="form-select" placeholder="State">
                        <option selected>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </select>
                    </div>


                    <div class="form-group col-md-4">
                      <label for="email" class="form-label visually-hidden">Birth Year</label>
                      <select id="inputState" class="form-select" placeholder="State">
                        <option selected>Birth Year</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="form-label visually-hidden">Birth Month</label>
                      <select id="inputState" class="form-select" placeholder="Birth Month">
                        <option selected>Birth Month</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="form-label visually-hidden">Birth Day</label>
                      <select id="inputState" class="form-select" placeholder="State">
                        <option selected>Birth Day</option>
                        <option>...</option>
                      </select>
                    </div>


                    <div class="form-group col-md-6">
                      <label for="password" class="form-label visually-hidden">Password</label>
                      <input type="password" name="username" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Password" required="">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="password" class="form-label visually-hidden">Confirm Password</label>
                      <input type="password" name="username" class="form-control" id="lname" aria-describedby="emailHelp" placeholder="Confirm Password" required="">
                    </div>


                    <div class="form-group col-md-4">
                      <label for="email" class="form-label visually-hidden">Province</label>
                      <select id="inputState" class="form-select" placeholder="Province">
                        <option selected>Province</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="form-label visually-hidden">District</label>
                      <select id="inputState" class="form-select" placeholder="District">
                        <option selected>जिल्ला</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="form-label visually-hidden">Province</label>
                      <select id="inputState" class="form-select" placeholder="Province">
                        <option selected>प्रतिनिधिसभा नि.क्षे.नं.
                        </option>
                        <option>1</option>
                      </select>
                    </div>


                    <div class="form-group register-form-group">
                      <div class="form-action">
                        <button type="submit" class="common-btn">Register</button>
                      </div>
                    </div>




                  </div>
                </form>
              </div>

            </div>
            <div class="tab-pane fade" id="nav-8" role="tabpanel" aria-labelledby="nav-8-tab" tabindex="0">

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
        </div>
      </div>
    </div>
  </section>

</div>

<?php include('footer.php') ?>