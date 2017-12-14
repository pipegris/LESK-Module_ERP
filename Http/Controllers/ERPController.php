<?php namespace App\Modules\ERP\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AuditRepository as Audit;
use Auth;
use Adldap\Adldap;
use Illuminate\Support\Facades\Log;
use Flash;
use App\Modules\ERP\Utils\Utility;
use Illuminate\Contracts\Foundation\Application;

class ERPController extends Controller
{

    /**
     * The connection options for LDAP.
     *
     * @var Array
     */

    protected $ldapConOp;

    /**
     * Custom constructor to get a handle on the Application instance.
     * @param Application $app
     * @param Audit $audit
     */
    public function __construct(Application $app, Audit $audit)
    {
        parent::__construct($app, $audit, 'erp');
        // Set default crumbtrail for controller.
        session(['crumbtrail.leaf' => 'erp.home']);
    }


    public function home()
    {
        Audit::log(Auth::user()->id, trans('erp::general.audit-log.category'), trans('erp::general.audit-log.msg-home'));

        $page_title = trans('erp::general.page.home.title');
        $page_description = trans('erp::general.page.home.description');

        //Blank query to start.
        $query = '';

        return view('erp::home', compact('page_title', 'page_description', 'query'));
    }



}
