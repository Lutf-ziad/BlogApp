@extends('admins.admin.app')
@section('title', 'Details Product')
@section('page', 'Details Product')
<style>
   /* styles.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.product-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

.image {
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.image:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

img {
    max-width: 100%;
    height: auto;
    display: block;
}

/* Optional: Add a hover effect to the image itself */
.image img:hover {
    opacity: 0.8;
}

</style>
@section('content')
<div class="product-gallery">

    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert" >
                        <strong>{{ $message }}</strong>
                    </div>
                    @foreach(\Session::get('image') as $imgs)
                      </form>
                      <div class="image">
                           <img src="{{ asset('images/' . $imgs)}}">
                       </div>
                     @endforeach
                  @endif

                  <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image:</label>
                            <input type="file" name="image[]" class="form-control @error('image.*') is-invalid @enderror" multiple>
                              <input type="hidden" name="producte_id" value="{{$product->id}}">
                            @error('image.*')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>

    <!-- Add more images as needed -->
</div>
@endsection

