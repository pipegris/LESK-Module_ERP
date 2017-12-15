<?php namespace App\Modules\Erp\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AuditRepository as Audit;
use Auth;
use Illuminate\Contracts\Foundation\Application;

class ProductsController extends Controller
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
        session(['crumbtrail.leaf' => 'erp.products']);
    }


    public function home()
    {
        Audit::log(Auth::user()->id, trans('erp::general.audit-log.category'), trans('erp::general.audit-log.msg-products'));

        $page_title = trans('erp::general.page.products.index.title');
        $page_description = trans('erp::general.page.products.index.description');

        return view('erp::products.index', compact('page_title', 'page_description'));
    }



}
