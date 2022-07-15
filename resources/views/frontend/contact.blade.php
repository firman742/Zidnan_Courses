<x-app-layout>
    <x-slot name="header">
        @include('frontend.page.header')
    </x-slot>

    <!-- ***** Fact Start ***** -->
    <section class="upcoming-meetings">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h2>Maps</h2>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="maps text-center">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0237374389117!2d112.68168681513538!3d-7.5723906619646835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb460b1451209e5c!2zN8KwMzQnMjAuNiJTIDExMsKwNDEnMDkuMyJF!5e0!3m2!1sid!2sid!4v1657890497345!5m2!1sid!2sid" width="auto" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Fact End ***** -->

    <section class="contact-us" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 align-self-center">
              <div class="row">
                <div class="col-lg-12">
                  <form id="contact" action="" method="post">
                    <div class="row">
                      <div class="col-lg-12">
                        <h2>Let's get in touch</h2>
                      </div>
                      <div class="col-lg-4">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-4">
                        <fieldset>
                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                      </fieldset>
                      </div>
                      <div class="col-lg-4">
                        <fieldset>
                          <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="right-info">
                <ul>
                  <li>
                    <h6>Phone Number</h6>
                    <span>083846095174</span>
                  </li>
                  <li>
                    <h6>Email Address</h6>
                    <span>nikorivaldi89@gmail.com</span>
                  </li>
                  <li>
                    <h6>Street Address</h6>
                    <span>Dsn Pandean RT 2 RW 14 DS kejapanan Kec. Gempol Kab. Pasuruan</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer">
          <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
              <br>
              Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
              <br>
              Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
            </p>
        </div>
      </section>
</x-app-layout>