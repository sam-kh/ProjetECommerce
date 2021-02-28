<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 
 * @package App\Models
 * 
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property string $nationality
 * @property string $passport
 * @property boolean $status
 * @property string $dateregistred
 * @property integer $user_id
 * @property string $image
 */
class Product extends Model
{
    use SoftDeletes;
    public $fillable = [
            'name' ,
            'regular_price' ,
            'sale_price' ,
            'description' ,
            'short_description' ,
            'stock_status',
            'manage_stock',
            'stock_quantity',
             
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
          
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
