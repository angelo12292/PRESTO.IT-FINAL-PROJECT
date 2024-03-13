<x-layout>
  <x-nav />
  <div class="container">
    <h1>Ricerca Annunci</h1>

    <div class="row">
      <div class="col-12">
        <div class="row">
          @forelse($announcements as $announcement)
          <div class="col-12 col-md-4 my-4">
            <x-card :user="$announcement->user->name" :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->name" :title="$announcement->title" :root="route('announce.View',$announcement->id)" />
          </div>
          @empty
          <div class="col 12">
            <div class="alert alert-warning py-3 shadow">
              <p class="lead">Non ci sono annunci per questa ricerca.</p>
            </div>
          </div>
          @endforelse
          {{ $announcements->links() }}
        </div>
      </div>
    </div>
  </div>


  <x-footer />
</x-layout>