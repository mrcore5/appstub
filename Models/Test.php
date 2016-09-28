<?php namespace Mrcore\Appstub\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'appstub';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tests';

    /**
     * The database table primary key column.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * This table does not use automatic timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
