@extends('layouts.header')


@section ('contain1')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Selamat Datang di Toko Buku</h1>
      <h2>Selamat Berbelanja Online</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->
  
  <main id="main"> 
              <!-- ======= Tentang Buku Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Tentang Buku</h2>
          <p>Berikut terdapat beberapa kategori buku</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">IT / TEKNOLOGI</a></h4>
              <p class="description">Teknologi Informasi, atau dalam bahasa Inggris dikenal dengan istilah Information technology adalah istilah umum untuk teknologi apa pun yang membantu manusia dalam membuat, mengubah, menyimpan, mengomunikasikan dan/atau menyebarkan informasi.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">PERTANIAN</a></h4>
              <p class="description">Pertanian adalah kegiatan pemanfaatan sumber daya hayati yang dilakukan manusia untuk menghasilkan bahan pangan, bahan baku industri, atau sumber energi, serta untuk mengelola lingkungan hidupnya.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">BISNIS</a></h4>
              <p class="description">Bisnis atau niaga adalah kegiatan memperjualbelikan barang atau jasa dengan tujuan memperoleh laba. Dalam ilmu ekonomi, bisnis adalah suatu organisasi yang menjual barang atau jasa kepada konsumen atau bisnis lainnya, untuk mendapatkan laba.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">EKONOMI</a></h4>
              <p class="description">Ekonomi adalah ilmu sosial yang mempelajari perilaku manusia dalam mengelola sumber daya yang terbatas dan menyalurkannya kedalam berbagai individu atau kelompok yang ada dalam suatu masyarakat.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Tentang Buku Section -->
  
          @section('contain2')
<section class="bg-primary">
    <div class="container" style="padding:10px;">
    <div class="d-flex flex-row justify-content-center">
        @foreach ($barang as $item)
        <div class="p-2">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('assets/img_produk')}}/{{$item->foto}}" alt="Card image cap">
            <div class=card-body>
                <h4 class="card-title">
                    {{$item->kode_barang}}
                    </h4>
                    <h5> {{$item->nama_barang}}</h5>
                 <p>{{$item->deskripsi}}</p><br>
                 <p>Rp.{{$item->harga}},00</p>
                <p>Stock : {{$item->stok}}</p>
                <a href="{{route('view', $item->no)}}" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</section>
@endsection
<?php $barang?>
