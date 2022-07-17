<x-app-layout>
    <x-slot name="header">
        @include('frontend.page.header')
    </x-slot>
    <section class="meetings-page" id="meetings">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12">
                  <div class="filters">
                    <ul>
                      <li data-filter="*"  class="active">Seluruh Mapel</li>
                      <li data-filter=".agama">Mapel Agama</li>
                      <li data-filter=".umum">Mapel Umum</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="row grid">
                    @foreach($courses as $c)
                    <div class="col-lg-4 templatemo-item-col all {{  $c['class'] }}">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>{{ $c['value'] }}/bulan</span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/images/{{  $c['img'] }}"></a>
                        </div>
                        <div class="down-content">
                          <a href="/courses/{{ $c['slug'] }}"><h4>{{ $c['title'] }}
                        </h4></a>
                          <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 templatemo-item-col all imp">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>$22.00</span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                          <a href="meeting-details.html"><h4>Bahasa Inggris</h4></a>
                          <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 templatemo-item-col all soon">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>$24.00</span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                          <a href="meeting-details.html"><h4>Bahasa Arab</h4></a>
                          <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 templatemo-item-col all imp">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>$45.00</span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                          <a href="meeting-details.html"><h4>Mapel Umum / Tematik</h4></a>
                          <p>TemplateMo is the best website<br>when it comes to Free CSS.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 templatemo-item-col all imp">
                      <div class="meeting-item">
                        <div class="thumb">
                          <div class="price">
                            <span>$74.00</span>
                          </div>
                          <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                          <a href="meeting-details.html"><h4>Calistung</h4></a>
                          <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="pagination">
                    <ul>
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
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
</x-app-layout>