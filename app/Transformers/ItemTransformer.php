<?php

namespace CodeDelivery\Transformers;

use League\Fractal\TransformerAbstract;
use CodeDelivery\Models\Item;

/**
 * Class ItemTransformer
 * @package namespace CodeDelivery\Transformers;
 */
class ItemTransformer extends TransformerAbstract
{

    /**
     * Transform the \Item entity
     * @param \Item $model
     *
     * @return array
     */
    public function transform(Item $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
