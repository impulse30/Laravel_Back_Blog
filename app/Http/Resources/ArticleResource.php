<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'id'=>$this->id,
            'title'=>$this->title,
            'slug'=>$this->slug,
            "photo"=>$this->photo,
            "auteur"=>$this->auteur,
            "content"=>$this->content,
            'comment'=>$this->comments,
            'created_at'=>$this->created_at,
           ' updated_at'=>$this->updated_at,

        ];
    }
}
