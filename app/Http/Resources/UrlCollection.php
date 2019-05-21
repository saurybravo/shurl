<?php

namespace App\Http\Resources;

use App\Url;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UrlCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function (Url $url) {
                $url->shortened_url = $url->shortened_url;
                return $url;
            }),
        ];
    }
}
