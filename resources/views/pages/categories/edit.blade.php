@extends('layouts.default')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <strong>Edit Kategori</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('categories.update', $categories->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Kategori</label>
                    <input type="text" name="name" value="{{ old('name') ? old('name') : $categories->name }}" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block confirmation" id="confirmation" type="submit">Edit Kategori</button>
                </div>
            </form>
        </div>
    </div>
@endsection