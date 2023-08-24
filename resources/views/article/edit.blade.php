<x-layout>

    <x-navbar/>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 display-1 text-center">
                Modifica Articolo
            </div>
        </div>
    </div>

    @livewire('article-edit' , ['articleId' => $idArticolo])



</x-layout>