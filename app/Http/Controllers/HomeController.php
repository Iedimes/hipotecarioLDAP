<?php

//namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Mh\BulkDestroyMh;
use App\Http\Requests\Admin\Mh\DestroyMh;
use App\Http\Requests\Admin\Mh\IndexMh;
use App\Http\Requests\Admin\Mh\StoreMh;
use App\Http\Requests\Admin\Mh\UpdateMh;
use App\Models\Mh;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param IndexMh $request
     * @return array|Factory|View
     */
    public function index(IndexMh $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Mh::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'codigo', 'proyecto', 'documento', 'adjudicatario', 'fecha_ins', 'institucion_acreedora', 'obs', 'fecha_reins'],

            // set columns to searchIn
            ['codigo', 'proyecto', 'documento', 'adjudicatario', 'fecha_ins', 'institucion_acreedora', 'obs', 'fecha_reins']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('home', ['data' => $data]);
    }

}
