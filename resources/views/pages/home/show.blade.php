@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-primary">
                <div class="card-body">
                    <h4 class="box-title">{{ $article->title }}</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-lg-6">
                            <img src="{{ asset("image/$article->image") }}" alt="" style="max-width:100%;height:auto;">
                        </div>
                        <div class="col-lg-6 text-left">
                            <h4>{{ $article->short_description }}</h4>
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-primary">
                <div class="card-body text-center">
                    <h4 class="box-title">Category - {{ $categories->name }}</h4>
                </div>

                <div class="owl-carousel owl-theme mt-5">
                    {{-- <div class="form-row justify-content-center"> --}}
                        @forelse ($article_serupa as $item)
                        
                        <div class="form-row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-lg-12">
                                            <img src="{{ asset("image/$item->image") }}" alt="" style="max-width:auto%;height:200px;">
                                        </div>
                                    </div>
                                    <div class="form-row mt-4">
                                        <div class="col-lg-12 text-left">
                                            <h4>{{ $item->title }}</h4>
                                            {{ $item->short_description }}
                                        </div>
                                    </div>
                                    <div class="form-row mt-4">
                                        <a href="{{ route('admin.show', $item->slug) }}" class="btn btn-primary">
                                            Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @empty
        
                        @endforelse
                        {{-- </div> --}}
                </div>

                
                
            </div>
        </div>
    </div>
@endsection

@push('after-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <style>
        .owl-carousel .item {
        height: 10rem;
        background: #4DC7A0;
        padding: 1rem;
        }
        .owl-carousel .item h4 {
        color: #FFF;
        font-weight: 400;
        margin-top: 0rem;
        }
    </style>
@endpush

@push('after-script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        jQuery(document).ready(function($){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
                }
            })
        })
    </script>
@endpush