<?php

namespace App\Http\Providers;
use Illuminate\Http\Resources\Json\JsonResources;

class ProductResource extends JsonResources
{
	public function toArray($request)
	{

		return parent::toArray($request);
	}
}