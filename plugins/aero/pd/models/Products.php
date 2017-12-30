<?php namespace Aero\Pd\Models;

use Model;

/**
 * Model
 */
class Products extends Model
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
    public $table = 'aero_pd_products';
    
    protected $jsonable = [
        'time_production',
        'time_delivery'
    ];
    
    public $belongsToMany =[
        
        'branches' => [
            
            'Aero\Pd\Models\Branches',
            'table' => 'aero_pd_products_branches',
            'order' => 'branch'
        
        ],
        
        'extras' => [
            
            'Aero\Pd\Models\Extras',
            'table' => 'aero_pd_products_extras',
            'order' => 'extra'
        
        ],        
    ];  
    
 
    
    public $attachMany = [
        'photos' => 'System\Models\File'
    ];    
    
    
   public function scopeFeaturedProducts($query)
    {
        return $query->where(function ($query) {$query->where('public', '=', '1')->where('featured', '=', '1'); })->take(10)->orderByRaw("RAND()");
    }      
    
    public function scopeProducts($query)
    {
        return $query->where(function ($query) {$query->where('public', '=', '1')->where('featured', '=', '0'); })->orderByRaw("RAND()");
    }       
}