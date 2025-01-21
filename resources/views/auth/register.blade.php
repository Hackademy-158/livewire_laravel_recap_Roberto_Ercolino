<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Registrati</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nickname</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" name="email">
                      @error('email')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <span class="ms-3">Sei gia registrato? <a class="text-dark" href="{{route('login')}}">Accedi</a></span>
                  </form>
            </div>
        </div>
    </div>
</x-layout>
