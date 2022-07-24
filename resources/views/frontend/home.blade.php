
<x-app-layout>

  <!-- ***** Header Start ***** -->
  <x-slot name="header">
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="caption">
                <h6>Assalamualaikum Wr Wb</h6>
                <h2>Marhaban bikum</h2>
                <p>Les Privat untuk preschool, TK / PAUD, SD / MI, SMP / MTs, SMA, DEWASA, DAN ORANG TUA. <a href="#">Kualitas pengajar terjamin, profesional, dan berpengalaman di bidangnya.</a> Kamu juga bisa atur kebutuhan belajarmu.</p>
                <div class="main-button-red">
                    <div class="scroll-to-section"><a href="#contact">Ayo Daftar Sekarang !</a></div>
                </div>
            </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
  </x-slot>
  <!-- ***** Header End ***** -->
  

  <!-- ***** Kelebihan Start ***** -->
  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>privat door to door</h4>
                <p>Kamu tidak perlu keluar rumah karena kami yang akan datang ke rumah kamu. </p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Pengajar Terbaik</h4>
                <p>Kualitas pengajar terjamin, profesional, dan berpengalaman di bidangnya.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Hemat Waktu & Tenaga</h4>
                <p>Kamu juga bisa atur kebutuhan belajarmu dan cukup menunggu tim pengajar di rumah.
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Kelebihan end ***** -->

  <!-- ***** Kursus Start ***** -->
  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Jenis Kursus</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          @foreach($course as $c)
          <div class="col-lg-4">
            <div class="meeting-item">
              <div class="thumb">
                <div class="price">
                  <span>{{ $c->value }}</span>
                </div>
                <a href="/courses/{{ $c->slug }}"><img src="assets/images/{{ $c->img }}" alt="New Lecturer Meeting"></a>
              </div>
              <div class="down-content">
                <a href="/courses/{{ $c->slug }}"><h4>{{ $c->title }}</h4></a>
                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Kursus end ***** -->

  <!-- ***** QNA Start ***** -->
  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>Private Learning</h3>
                <p>kamu bisa mengatur Pengajar bisa datang ke rumahmu</p>
                <div class="main-button-red">
                  <a href="/contact">Join Us Now!</a>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>Les Private</h3>
                <p>kamu bisa memilih belajar di markaz kami</p>
                <div class="main-button-yellow">
                  <a href="/contact">Join Us Now!</a>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>About Edu Meeting HTML Template</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>If you want to get the latest collection of HTML CSS templates for your websites, you may visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">Too CSS website</a>. If you need a working contact form script, please visit <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more info.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>HTML CSS Bootstrap Layout</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                        Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Please tell your friends</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                        Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                    </div>
                </div>
            </article>
            <article class="accordion last-accordion">
                <div class="accordion-head">
                    <span>Share this to your colleagues</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                        Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                    </div>
                </div>
            </article>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** QNA end ***** -->

  <!-- ***** info Start ***** -->
  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Informasi</h2>
          </div>
        </div>
         <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="Course One">
              <div class="down-content">
                <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
                <div class="info">
                  <div class="row">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium explicabo vero natus nam ducimus voluptatem eius voluptatum quibusdam sunt! Quae nobis optio consequatur vel iste accusantium velit numquam commodi beatae.</p>
                    <a href="">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="Course Two">
              <div class="down-content">
                <h4>Curabitur molestie dignissim purus vel</h4>
                <div class="info">
                  <div class="row">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium explicabo vero natus nam ducimus voluptatem eius voluptatum quibusdam sunt! Quae nobis optio consequatur vel iste accusantium velit numquam commodi beatae.</p>
                    <a href="">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Nulla at ipsum a mauris egestas tempor</h4>
                <div class="info">
                  <div class="row">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium explicabo vero natus nam ducimus voluptatem eius voluptatum quibusdam sunt! Quae nobis optio consequatur vel iste accusantium velit numquam commodi beatae.</p>
                    <a href="">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Aenean molestie quis libero gravida</h4>
                <div class="info">
                  <div class="row">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium explicabo vero natus nam ducimus voluptatem eius voluptatum quibusdam sunt! Quae nobis optio consequatur vel iste accusantium velit numquam commodi beatae.</p>
                    <a href="">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
      </div>
    </div>
  </section>
  <!-- ***** info End ***** -->

  <!-- ***** Fact Start ***** -->
  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our University</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">126</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">New Students</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Fact End ***** -->

  <!-- ***** Testimoni Start ***** -->
  <section class="our-testimonial" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Testimoni</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonial-item owl-carousel">
            <div class="item">
             <div class="card rounded">
                <div class="card-body">
                  <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aperiam rerum, facere dolores vel recusandae a consequuntur? Aut quam error, at, asperiores expedita voluptatibus commodi minima ipsam corrupti, earum dignissimos dicta? Illum tempora veritatis, dolores dolorum voluptates voluptatum blanditiis corporis laborum quos quae sed, facilis architecto nam exercitationem expedita repellendus!"</p>
                </div>
                <div class="card-footer">
                  <img src="assets/images/course-01.jpg" class="img-testimoni" alt="">
                   <p>Nama - Jabatan</p>
                </div>
             </div>
            </div>
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
  <!-- ***** Testimoni End ***** -->

</x-app-layout>