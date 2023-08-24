<x-layout>
    <x-navbar/>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 display-1 text-center">
                Tutti gli articoli
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            
        @foreach ($articles as $article)

            <div class="col-12 my-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="card-title">
                            Titolo :{{$article->title}}
                        </div>
                        <div class="card-text">
                            Contenuto : {{$article->content}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="{{route('article.edit', $article->id)}}" class="btn btn-primary" type="button">Modifica</a>
                        </div>
                    </div>
                </div>
            </div>    
        @endforeach 
        </div>
    </div>



</x-layout>