<?php

namespace App\Repositories;

use App\Models\Account;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AccountRepository
 * @package App\Repositories
 * @version July 15, 2019, 9:02 am UTC
 *
 * @method Account findWithoutFail($id, $columns = ['*'])
 * @method Account find($id, $columns = ['*'])
 * @method Account first($columns = ['*'])
*/
class AccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Account::class;
    }
}
