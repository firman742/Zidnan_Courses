<x-app-layout>
    <x-slot name="header">
        @include('frontend.page.header')
    </x-slot>
    <section class="meetings-page apply-now" id="meetings">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Course Categories</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                  <div class="row">
                    @foreach($categories as $category)
                      <div class="col-lg-12">
                        <div class="item">
                          <a href="/course/categories/{{ $category->slug }}">
                            <h3 class="title">{{ $category->name }}</h3>
                          </a>
                          <p>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout.</p>
                          <div class="main-button-red">
                            <a href="/contact">Join Us Now!</a>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
                {{-- <div class="col-lg-12">
                  <div class="pagination">
                    <ul>
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                  </div>
                </div> --}}
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
