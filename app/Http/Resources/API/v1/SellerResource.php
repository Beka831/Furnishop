<?php

namespace App\Http\Resources\API\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SellerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'company_name' => $this->seller_name,
            'seller_phone_no' => $this->seller_phone_no,
            'email' => $this->email,
            // 'password' => $this->password,
            'tin_no' => $this->tin_no,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,];
    }
}
