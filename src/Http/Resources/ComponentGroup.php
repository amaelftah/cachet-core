<?php

namespace Cachet\Http\Resources;

use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

class ComponentGroup extends JsonApiResource
{
    public function toAttributes(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'order' => $this->order,
            'visible' => $this->visible,
        ];
    }

    public function toRelationships(Request $request): array
    {
        return [
            'components' => fn () => Component::collection($this->components),
        ];
    }
}
