<?php namespace NiaInteractive\Event\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'niainteractive_event_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
