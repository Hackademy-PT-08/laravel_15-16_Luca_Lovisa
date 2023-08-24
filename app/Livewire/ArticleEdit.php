<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEdit extends Component
{

    public $articleId,$title,$content,$message,$color;

    public function mount () {

        $article = Article::find($this->articleId);
        $this->title= $article->title;
        $this->title= $article->content;

    }

    public function render()
    {
        return view('livewire.article-edit');
    }

       /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $article = Article::find($this->articleId);

        $article->title = $this->title;
        $article->content = $this->content;

        $article->save();

        $this->message ='Articolo modificato con successo';
        $this->color='text-success';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $article = Article::find($this->articleId);

        $article->delete();

        return redirect()->route('index');
    }
}


