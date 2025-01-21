<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Lista delle ricette</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($recipes as $recipe)
                <div class="col-12 col-md-3">
                    <x-card :recipe="$recipe" />
                </div>
            @empty
                <p>non ci sono ancora ricette <a class="text-dark" href="{{route('recipe.create')}}">Inseriscine una</a></p>
            @endforelse
        </div>
    </div>
</x-layout>
