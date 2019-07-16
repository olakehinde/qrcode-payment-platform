<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Account
 * @package App\Models
 * @version July 15, 2019, 9:02 am UTC
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
 * @property string country
 * @property integer applied_for_payout
 * @property integer is_paid
 * @property string last_date_applied
 * @property string last_date_paid
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
        'country',
        'applied_for_payout',
        'is_paid',
        'last_date_applied',
        'last_date_paid',
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
        'country' => 'string',
        'applied_for_payout' => 'integer',
        'is_paid' => 'integer',
        'last_date_applied' => 'date',
        'last_date_paid' => 'date',
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
        'withdrawal_method' => 'required',
        'applied_for_payout' => 'required',
        'is_paid' => 'required'
    ];

    /**
    * This account belongs to one User
    */
    public function user() {
        return $this->belongsTo('App\Models\User'); 
    }

     /**
    * This account hasMany  Histories
    */
    public function account_histories() {
        return $this->hasMany('App\Models\AccountHistory'); 
    }
}
