<?php namespace Aero\Pd\Models;

use Model;

/**
 * Model
 */
class Coupons extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'aero_pd_coupons';
    
    public $belongsToMany =[
        
        'products' => [
            
            'Aero\Pd\Models\Products',
            'table' => 'aero_pd_products_coupons',
            'order' => 'product'
        
        ],        
    ];      
}