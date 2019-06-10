<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Models
 * @version May 28, 2019, 10:20 am UTC
 *
 * @property integer user_id
 * @property integer qrcode_id
 * @property integer qrcode_owner_id
 * @property float amount
 * @property string payment_method
 * @property string status
 * @property string message
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'qrcode_id',
        'qrcode_owner_id',
        'amount',
        'payment_method',
        'status',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'qrcode_id' => 'integer',
        'qrcode_owner_id' => 'integer',
        'amount' => 'float',
        'payment_method' => 'string',
        'status' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'qrcode_id' => 'required',
        'amount' => 'required',
        'payment_method' => 'required',
        'status' => 'required'
    ];

    /**
    * Get the qrcode that this transaction belongs to 
    */
    public function qrcode() {
        return $this->belongsTo('App\Models\Qrcode'); 
    }

    /**
    * Get the user that made this transaction 
    */
    public function user() {
        return $this->belongsTo('App\Models\User'); 
    }

    /**
    * Get the owner of the qrcode that this transaction belongs to 
    */
    public function qrcode_owner() {
        return $this->belongsTo('App\Models\User', 'qrcode_owner_id'); 
    }
}
