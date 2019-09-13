<?php

namespace AvoRed\RestApi\Cms\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'menu_group_id' => $this->menu_group_id,
            'parent_id' => $this->parent_id,
            'name' => $this->name,
            'url' => $this->url,
            'sort_order' => $this->sort_order,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'submenus' => $this->whenLoaded('submenus')
        ];
    }
}
