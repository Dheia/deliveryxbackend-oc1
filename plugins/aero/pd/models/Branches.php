<?php namespace Aero\Pd\Models;

use Model;

/**
 * Model
 */
class Branches extends Model
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
    public $table = 'aero_pd_branches';
    
    public $belongsToMany =[
        
        'fleet' => [
            
            'Aero\Pd\Models\Drivers',
            'table' => 'aero_pd_branches_drivers',
            'order' => 'name'
        
        ],
   
    ];  
    
}