<<<<<<< HEAD

@vite(['resources/css/app.css', 'resources/js/app.js'])

<form method="POST" enctype="multipart/form-data" action="{{ route('create.store') }}" class="flex flex-col">
@csrf
<input type="file"  name="image" id="" placeholder="image">
@error('image')
<div class="alert alert-danger bg-red-500 text-white">{{ $message }}</div>
@enderror
<input type="text" name="title" placeholder="your title">
@error('title')
<div class="alert alert-danger bg-red-500 text-white">{{ $message }}</div>
@enderror

<input type="number" name="price" placeholder="precie">
@error('price')
<div class="alert alert-danger bg-red-500 text-white">{{ $message }}</div>
@enderror
<input type="text" name="description" placeholder="your description">
@error('description')
<div class="alert alert-dangebg-red-500 text-whiter ">{{ $message }}</div>
@enderror
<input type="text" name="size" placeholder="size">
@error('size')
<div class="alert alert-danger bg-red-500 text-white">{{ $message }}</div>
@enderror
<input type="text" name="collection_id"  placeholder="collection_id">
@error('collection_id')
<div class="alert alert-danger bg-red-500 text-white">{{ $message }}</div>
@enderror
<button class="cursor-pointer bg-slate-600"> save data</button>
</form>




{{-- ignorar esto de momento borrenlo --}}


@foreach ($items as $item)
<h1 class="text-sm bg-yellow-400">{{ $item->user->name }}</h1>{{-- usando la relacion traera el nomobre --}} 
  <li href="">{{ $item->description}}</li>
  <li href="">{{ $item->size}}</li>
      <img src="{{ $item->getFirstMediaUrl() }}" alt="img">
@endforeach







<form method="POST" enctype="multipart/form-data" action="{{ route('create.store') }}" class="flex flex-col" >
  @csrf
  <input type="file" name="image" id="" placeholder="image">
  <input type="text" name="title" placeholder="your title">
  <input type="number" name="price" placeholder="precie">
  <input type="text" name="description" placeholder="your description">
  <input type="text" name="size" placeholder="size">
  <input type="text" name="collection_id"  placeholder="collection_id">
  <button class="cursor-pointer"> save data</button>
  </form>




  {{-- ignorar esto de momento borrenlo --}}


{{--   @foreach ($items as $item)

    <li href="">{{ $item->title}}</li>
    <li href="">{{ $item->description}}</li>
    <li href="">{{ $item->size}}</li>
    @foreach ( $item->getMedia() as $media)
        <img src="{{ $media->getFullUrl() }}" alt="img">
  
        @endforeach
 --}}
   

