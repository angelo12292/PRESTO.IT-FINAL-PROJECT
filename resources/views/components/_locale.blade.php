<form action="{{route('setLocale', $lang)}}" method="POST">
  @csrf
  <button type="submit" class="btn">
    <img src="{{asset('vendor/blade-flags/language-' .$lang . '.svg')}}" width="30" height="30">

  </button>
</form>