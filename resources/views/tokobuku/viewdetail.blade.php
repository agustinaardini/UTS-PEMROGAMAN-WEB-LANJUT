@extends('layouts.header')

@section ('contain1')

<section class="masthead bg-primary text-white text-center">
    <div class="jumbotron jumbotron-fuild">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="{{asset('assets/img_produk/produk1.jpg')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-8">
                    <div class="justify-content-start" style="text-align:start;">
                <h2>Pertanian dan Masa Depan</h2>
                <p>harga : 35000</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repellendus illo. Dolorum nobis ratione aut odit illo modi enim earum quia veritatis nostrum, suscipit corporis magnam nam. Suscipit, numquam nesciunt.</p>
                <div class="button">
                    <a href="">
                        <button type="button" class="btn btn-light">Checkout</button>
                    </a>
                </div>

                </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

@endsection