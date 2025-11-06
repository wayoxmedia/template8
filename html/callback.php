<!-- CallBack One -->
<section class="callback-one">
  <div class="callback-side_color-layer" style="background-image:url(images/background/pattern-21.jpg)"></div>
  <div class="auto-container">
    <div class="callback-side-image">
      <img src="images/resource/callback.jpg" alt="" />
    </div>
    <div class="row clearfix">
      <!-- Title Column -->
      <div class="callback-title_column col-lg-6 col-md-12 col-sm-12">
        <div class="callback-title_inner">
          <div class="sec-title-three">
            <div class="sec-title-three_title style-two"><?= TXT_CB_TITLE01 ?></div>
            <h2 class="sec-title-three_heading"><?= TXT_CB_TITLE02 ?></h2>
            <div class="sec-title-three_text"><?= TXT_CB_TITLE03 ?></div>
          </div>
          <!-- Button Box -->
          <div class="button-box">
            <a class="btn-style-eight theme-btn btn-item" href="#">
              <div class="btn-wrap">
                <span class="text-one"><?= TXT_CB_LINK1 ?></span>
                <span class="text-two"><?= TXT_CB_LINK2 ?></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- Title Column -->
      <div class="callback-form_column col-lg-6 col-md-12 col-sm-12">
        <div class="callback-form_inner">
          <div class="sec-title-three light">
            <div class="sec-title-three_title style-two"><?= TXT_CB_FORM_MINITITLE ?></div>
            <h2 class="sec-title-three_heading"><?= TXT_CB_FORM_TITLE ?></h2>
          </div>

          <!-- Default Form -->
          <div class="default-form style-two">
            <form method="post" id="contactForm">
              <div class="form-group">
                <span class="field-icon fa-solid fa-user fa-fw"></span>
                <input type="text"
                       id="iptName"
                       name="iptName"
                       placeholder="Your Name">
              </div>
              <div class="form-group">
                <span class="field-icon fa-solid fa-envelope fa-fw"></span>
                <input type="text"
                       id="iptEmail"
                       name="iptEmail"
                       placeholder="Your Email">
              </div>
              <div class="form-group">
                <span class="field-icon fa-solid fa-file fa-fw"></span>
                <textarea class=""
                          id="iptMessage"
                          name="iptMessage"
                          placeholder="Your message"></textarea>
              </div>
              <div class="form-group">
                <button id="btnSubmitContact"
                        type="button"
                        class="request-btn theme-btn">
                  send request
                </button>
              </div>

            </form>
            <br>
            <div class="message-contact pb-3">
              <div class="row">
                <div class="col"></div>
                <div class="col-auto">
                  <div class="d-none alert text-center" role="alert" id="contactFormResponse">
                    <p class="mt-4 d-none" id="pMessageContact"></p>
                    <ul class="mt-3 list-unstyled d-none" id="ulErrorsContact"></ul>
                  </div>
                </div>
                <div class="col"></div>
              </div>
            </div>
          </div>
          <!-- End Default Form -->

        </div>
      </div>
    </div>
  </div>
</section>
<!-- End CallBack One -->
