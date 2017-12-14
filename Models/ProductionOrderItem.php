<?php namespace App\Modules\ERP\Models;

use App\Traits\BaseModelTrait;
use Illuminate\Database\Eloquent\Model;

class ProductionOrderItem extends Model
{
    use BaseModelTrait;

    /**
     * @var string
     */
    protected $table = 'mod_erp_production_order_items';

    /**
     * @var array
     */
    protected $fillable = ['production_order_id', 'recipe_id', 'quantity', 'status', 'start_time'];

}
