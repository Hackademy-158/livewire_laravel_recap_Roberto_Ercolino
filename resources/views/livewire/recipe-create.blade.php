<div>
    <form style="width: 26rem;" wire:submit="store">
        @if (session('message'))
            <div class="alert alert-info">
                {{session('message')}}
            </div>
        @endif
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="text" id="title" class="form-control" wire:model.live="title"/>
          <label class="form-label" for="title">Titolo</label>
          @error('title')
              <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <select class="form-select" aria-label="Default select example" wire:model="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
          <input type="file" id="image" class="form-control" wire:model="image"/>
          <label class="form-label" for="image">Immagine</label>
            @error('image')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        @if ($image)
            <div class="mb-3">
                <label id="image" ></label>
                <img src="{{$image->temporaryUrl()}}" id="image" class="img-fluid" alt="">
            </div>
        @endif

        <!-- Message input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <textarea class="form-control" id="procedure" wire:model="procedure" rows="4"></textarea>
          <label class="form-label" for="procedure">Procedimento</label>
            @error('procedure')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <!-- Submit button -->
        <button data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Send</button>
      </form>
</div>
