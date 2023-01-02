<?php include('header.php') ?>

<div id="nirdeshika-page">

  <section class="nirdeshika-section">
    <div class="custom-container">
      <div class="text-section">
        <div class="inner">
          <h6>निर्देशिका</h6>
          <p>Please login to add</p>
        </div>
      </div>
      <div class="dropdown-section">
        <form method="POST" action="/admin/login/">
          <input type="hidden" name="" value="">
          <div class="form-row">

            <div class="form-group col-md-12">
              <label for="email" class="form-label visually-hidden">निर्देशिका</label>
              <select id="inputState" class="form-select" placeholder="State">
                <option selected="">निर्देशिका</option>
                <option>...</option>
              </select>
            </div>

            <div class="form-group register-form-group">
              <div class="form-action">
                <button type="submit" class="common-btn check-btn">Check</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </section>

</div>

<?php include('footer.php') ?>