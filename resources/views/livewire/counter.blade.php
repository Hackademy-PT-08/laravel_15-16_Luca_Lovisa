<div class="container">
    <div class="row justify-content-center text-center">
        <div class="card col-4 shadow-lg py-5">
            <div class="card-body">
                <button wire:click='decrement' type="button" class=" mx-2 btn btn-primary">-</button>
                <span class="h3">{{$count}}</span>
                <button wire:click='increment' type="button" class="mx-2 btn btn-primary">+</button>
            </div>
        </div>
    </div>
</div>



