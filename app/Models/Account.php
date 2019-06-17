<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Account
 * @package App\Models
 * @version June 17, 2019, 2:19 pm UTC
 *
 * @property integer user_id
 * @property float balance
 * @property float total_balance
 * @property float total_debit
 * @property string withdrawal_method
 * @property string email
 * @property string bank_name
 * @property string bank_branch
 * @property string bank_account
 * @property string other_details
 */
class Account extends Model
{
    use SoftDeletes;

    public $table = 'accounts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'balance',
        'total_balance',
        'total_debit',
        'withdrawal_method',
        'email',
        'bank_name',
        'bank_branch',
        'bank_account',
        'other_details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'balance' => 'float',
        'total_balance' => 'float',
        'total_debit' => 'float',
        'withdrawal_method' => 'string',
        'email' => 'string',
        'bank_name' => 'string',
        'bank_branch' => 'string',
        'bank_account' => 'string',
        'other_details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'balance' => 'required',
        'total_balance' => 'required',
        'total_debit' => 'required',
        'withdrawal_method' => 'required'
    ];

    
}
