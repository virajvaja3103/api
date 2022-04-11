<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    public function authorize()
    {
        return true;
    }
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'total_price'=>round((1-($this->discount/100))*$this->discount,2),
            'rating'=> $this->reviews->count()>0? round($this->reviews->sum('star')/$this->reviews->count(),2)
            :'no rating yet',
            'discount'=>$this->discount,
            'href'=>[
                'link'=>route('product.show',$this->id),

            ]
        ];
    }
}
