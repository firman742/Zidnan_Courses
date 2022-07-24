<x-app-layout>
    <x-slot name="header">
        @include('frontend.page.header')
    </x-slot>
    
  <!-- ***** Testimoni Start ***** -->
  <section class="our-testimonial" id="courses">
   
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

Course::create([
  'title' => 'Bahasa Inggris',
  'category_id' => 2,
  'slug' => 'bahasa-ingrris',
  'class' => 'umum',
  'img' => 'meeting-02.jpg',
  'value' => '80000',
  'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
  'body' => 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'
])