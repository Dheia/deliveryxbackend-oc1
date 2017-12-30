<?php namespace Aero\Pd\Models;

use Model;

/**
 * Model
 */
class Schedule extends Model
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
    public $table = 'aero_pd_schedule';
    
    public $belongsTo =[
        
        'branch' => ['Aero\Pd\Models\Branches']
    ];     
    
    protected $jsonable = ['delivery_options'];
}