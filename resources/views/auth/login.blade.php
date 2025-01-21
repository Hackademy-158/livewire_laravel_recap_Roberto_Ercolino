<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Accedi</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <span class="ms-3">non sei ancora registrato? <a href="{{route('register')}}" class="text-dark">Registrati</a></span>
                  </form>
            </div>
        </div>
    </div>
</x-layout>
