<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="card col-12">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo articolo</label>
                        <input value="{{$title}}" wire:model="title" type="text" class="form-control" id="titolo" placeholder="scrivi il titolo dell'articolo....">
                    </div>
                    <div class="mb-3">
                        <label for="contenuto" class="form-label">Contenuto articolo</label>
                        <textarea wire:model="content" class="form-control" id="contenuto" rows="10" placeholder="scrivi il contenuto dell'articolo....">{{$content}}</textarea>
                    </div>
                    <div class="col-auto">
                        <button wire:click='store' type="button" class="btn btn-primary mb-3">Aggiungi</button>
                    </div>
                    <p class="{{$color}}">{{$message}}</p>
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
