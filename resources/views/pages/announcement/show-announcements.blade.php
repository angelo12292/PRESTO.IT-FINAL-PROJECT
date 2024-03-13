<x-layout>
  <x-nav />
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5">Annunci</h1>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Prezzo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>                           
                        @foreach ($announcements as $announcement)                           
                          <th scope="row">{{ $announcement->id }}</th>
                          <td>{{ $announcement->title }}</td>
                          <td>{{ $announcement->category->name }}</td>
                          <td>{{ $announcement->description }}</td>
                          <td>{{ $announcement->price }}</td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>