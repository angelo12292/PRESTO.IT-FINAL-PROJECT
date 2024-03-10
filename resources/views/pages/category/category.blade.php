<x-layout>
  <div class="container mt-5 ">

    <h1 class="text-center mb-5 primary-color-text">{{ $category->name }}</h1>



    <div class="row g-2">
      @foreach($category->announcements as $annoucement)
      <div class="col-4 mb-4 d-flex justify-content-center ">
        <x-card :price="$annoucement->price" :description="$annoucement->description" :category="$annoucement->category->name" :title="$annoucement->title" :root="route('announce.View',$annoucement->id)" />
      </div>
      @endforeach
    </div>

  </div>


</x-layout>