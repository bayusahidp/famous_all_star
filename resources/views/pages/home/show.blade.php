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
@endsection