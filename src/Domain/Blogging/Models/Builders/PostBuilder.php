<?php 


namespace Domain\Blogging\Models\Builders;

use Illuminate\Database\Eloquent\Builder;

class PostBuilder extends Builder{
    public function published(): self{
        return $this->where('published', true);
    }

    public function draf(): self{
        return $this->where('published', false);
    }   
}