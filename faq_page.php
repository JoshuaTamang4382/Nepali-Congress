<?php

/**
 * Created by PhpStorm.
 * User: Joshua Tamang,Sanish karki,Shiva Puri
 * Date: 5/9/2020
 * Time: 4:08 PM
 */
include('header.php') ?>

<div id="faq-page">
    <section class="common-banner-section">
        <div class="banner-slider">
            <div class="banner-item">
                <img src="img/background/background_1.jpg">
            </div>
            <div class="banner-item">
                <img src="img/background/background_2.jpg">
            </div>

        </div>
    </section>

    <section>
        <div class="custom-container">
            <div class="section-title">
                <h2>FAQ</h2>
            </div>

            <div class="section-content">
                <div class="common-faq-container">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-inner">
                                <div class="card-header">
                                    <button type="button" data-toggle="collapse" data-target="#collapse1">
                                        <span>1.</span>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ?</span>
                                        <i class="flaticon-down-arrow"></i>
                                    </button>
                                </div>

                                <div id="collapse1" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra nisl eget lacus mollis pulvinar. Mauris porttitor sem eu fermentum aliquet. In mattis fermentum malesuada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-inner">
                                <div class="card-header">
                                    <button type="button" data-toggle="collapse" data-target="#collapse2">
                                        <span>2.</span>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ?</span>
                                        <i class="flaticon-down-arrow"></i>
                                    </button>
                                </div>

                                <div id="collapse2" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra nisl eget lacus mollis pulvinar. Mauris porttitor sem eu fermentum aliquet. In mattis fermentum malesuada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-inner">
                                <div class="card-header">
                                    <button type="button" data-toggle="collapse" data-target="#collapse3">
                                        <span>3.</span>
                                        <span>WLorem ipsum dolor sit amet, consectetur adipiscing elit.?</span>
                                        <i class="flaticon-down-arrow"></i>
                                    </button>
                                </div>

                                <div id="collapse3" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra nisl eget lacus mollis pulvinar. Mauris porttitor sem eu fermentum aliquet. In mattis fermentum malesuada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-inner">
                                <div class="card-header">
                                    <button type="button" data-toggle="collapse" data-target="#collapse4">
                                        <span>4.</span>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ?</span>
                                        <i class="flaticon-down-arrow"></i>
                                    </button>

                                </div>

                                <div id="collapse4" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra nisl eget lacus mollis pulvinar. Mauris porttitor sem eu fermentum aliquet. In mattis fermentum malesuada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
<?php include('footer.php') ?>