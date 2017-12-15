<?php namespace App\Modules\Erp\Models;

use App\Traits\BaseModelTrait;
use Illuminate\Database\Eloquent\Model;

class ProductionOrder extends Model
{
    use BaseModelTrait;

    /**
     * @var string
     */
    protected $table = 'mod_erp_production_orders';

    /**
     * @var array
     */
    protected $fillable = ['code', 'description', 'start_time', 'status', 'scheduled'];

    public function items()
    {
        return $this->hasMany('App\Modules\Erp\Models\ProductionOrderItem', 'production_order_id');
    }
}
