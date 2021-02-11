@extends('layouts.default')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <strong>Tambah Kategori</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Kategori</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Kategori</button>
                </div>
            </form>
        </div>
    </div>
@endsection