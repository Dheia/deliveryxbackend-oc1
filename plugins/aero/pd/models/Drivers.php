<?php namespace Aero\Pd\Models;

use Model;

/**
 * Model
 */
class Drivers extends Model
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
    public $table = 'aero_pd_drivers';
    
    public $attachOne = [
        'photo' => 'System\Models\File',
        'photo_vehicle' => 'System\Models\File'
    ];  
    
    public $belongsTo =[
        
        'vehicle_type' => ['Aero\Pd\Models\Vehicles']
    ];      
    
}