@extends('layouts.default')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <strong>Tambah Artikel</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class="form-control-label">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="categories_id" class="form-control-label">Category</label>
                    <select name="categories_id" id="categories_id" class="form-control  @error('categories_id') is-invalid @enderror">
                        @foreach ($categories as $category)
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('categories_id')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="short_description" class="form-control-label">Short Description</label>
                    <input type="text" name="short_description" value="{{ old('short_description') }}" class="form-control @error('short_description') is-invalid @enderror">
                    @error('short_description')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content" class="form-control-label">Content</label>
                    <textarea name="content" id="content" class="ckeditor form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image" class="form-control-label">Image</label>
                    <input type="file" name="image" value="{{ old('image') }}" accept="image/*" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Artikel</button>
                </div>
            </form>
        </div>
    </div>
@endsection