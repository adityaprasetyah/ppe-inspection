<x-layout>
  <div class="container">
    <div class="row my-5">
      <div class="col-12">
        <h1 class="text-center fs-4">Login</h1>
      </div>
    </div>
    <div class="row my-5">
      <div class="col-md-6 mx-auto">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          @if ($errors->has("login"))
            <div class="text-danger mb-3">
              <small>{{ $errors->first("login") }}</small>
            </div>
          @endif
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</x-layout>