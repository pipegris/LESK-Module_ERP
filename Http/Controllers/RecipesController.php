<?php namespace App\Modules\Erp\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Modules\Erp\Models\Recipe;
use App\Http\Controllers\Controller;
use App\Repositories\AuditRepository as Audit;
use Illuminate\Contracts\Foundation\Application;

class RecipesController extends Controller
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
        session(['crumbtrail.leaf' => 'erp.recipes']);
    }


    public function home()
    {
        Audit::log(Auth::user()->id, trans('erp::general.audit-log.category'), trans('erp::general.audit-log.msg-supplies'));

        $page_title = trans('erp::general.page.recipes.index.title');
        $page_description = trans('erp::general.page.recipes.index.description');

        return view('erp::recipes.index', compact('page_title', 'page_description'));
    }


    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function data() {
        return Datatables::of(Recipe::query())->make(true);
    }
}
