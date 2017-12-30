<?php namespace Aero\Pd\Models;

use Model;

/**
 * Model
 */
class Themes extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'system_parameters';
    
    public function scopeThemes($query)
    {
        return $query->where(function ($query) {$query->where('group', '=', 'theme')->where('item', '=', 'active'); })->take(1);
    }     
}