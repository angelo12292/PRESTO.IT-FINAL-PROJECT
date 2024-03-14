<x-layout>
  <x-nav />
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5">Annunci</h1>
                <table class="table">
                    <thead>
                      <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Titolo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Prezzo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>                           
                        @foreach ($announcements as $announcement)                           
                          {{-- <th scope="row">{{ $announcement->id }}</th> --}}
                          <th scope="row"><a class="primary-color-text" href="{{ route('announce.View', $announcement)}}">{{ $announcement->title }}</a></th>
                          <td class="fw-norma"><a class="text-black" href="{{ route('announce.View', $announcement)}}">{{ $announcement->category->name }}</a></td>
                          <td class="fw-normal"><a class="text-black" href="{{ route('announce.View', $announcement)}}">{{ $announcement->description }}</a></td>
                          <td class="fw-semibold "><a class="text-black" href="{{ route('announce.View', $announcement)}}">{{ Number::currency($announcement->price, in: 'EUR', locale: 'it') }}</a></td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>