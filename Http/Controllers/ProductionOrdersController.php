<?php namespace App\Modules\Erp\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AuditRepository as Audit;
use Auth;
use Illuminate\Contracts\Foundation\Application;

class ProductionOrdersController extends Controller
{

    /**
     * Custom constructor to get a handle on the Application instance.
     * @param Application $app
     * @param Audit $audit
     */
    public function __construct(Application $app, Audit $audit)
    {
        parent::__construct($app, $audit, 'erp');
        // Set default crumbtrail for controller.
        session(['crumbtrail.leaf' => 'erp.production_orders']);
    }


    public function home()
    {
        Audit::log(Auth::user()->id, trans('erp::general.audit-log.category'), trans('erp::general.audit-log.msg-production_orders'));

        $page_title = trans('erp::general.page.production_orders.index.title');
        $page_description = trans('erp::general.page.production_orders.index.description');

        return view('erp::production_orders.index', compact('page_title', 'page_description'));
    }



}
