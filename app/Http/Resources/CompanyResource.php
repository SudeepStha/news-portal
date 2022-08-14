<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => asset($this->image),
            'district' => $this->district,
            'city' => $this->city,
            'contact' => $this->contact,
            'email' => $this->email,
            'reg_no' => $this->reg_no,
            'pan_no' => $this->pan_no,
            'ads_email' => $this->ads_email,
            'ads_contact' => $this->ads_contact,
        ];
    }
}
