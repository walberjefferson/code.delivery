<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class OauthClients extends Model
{
    protected $table = 'oauth_clients';


    protected $fillable = [
        'id',
        'secret',
        'name'
    ];
}
