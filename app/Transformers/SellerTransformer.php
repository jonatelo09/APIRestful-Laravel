<?php

namespace App\Transformers;

use App\Seller;
use League\Fractal\TransformerAbstract;

class SellerTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Seller $seller)
    {
        return [
            'identificador' => (int)$buyer->id,
            'nombre' => (string)$buyer->name,
            'correo' => (string)$buyer->email,
            'esVeridicado' => (int)-$buyer->verified,
            'fechaCreaccion' => (string)$buyer->created_at,
            'fechaActualizacion' => (string)$buyer->updated_at,
            'fechaEliminacion' => isset($buyer->updated_at) ? (string) $buyer->deleted_at : null,
        ];
    }
}
