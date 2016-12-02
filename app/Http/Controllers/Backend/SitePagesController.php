<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use App\Models\SitePages as sitepages;
use App\Models\PagesMeta as pagemeta;

class SitePagesController extends BaseController {

	protected $sitepages;
    protected $pagemeta;
	protected $login;

    public function __construct(sitepages $sitepages, pagemeta $pagemeta){

        $this->sitepages = $sitepages;
    	$this->pagemeta = $pagemeta;

    }

    public function getIndex()
    {
        // $data['title'] = ucfirst($page);
        $sitepages = $this->sitepages->paginate(10);
        return view('backend.pages.index', compact('sitepages'));
    }

    public function create( sitepages $page )
    {	
    	// var_dump(Auth::user()->role->slug);
    	// var_dump(session('statut'));
    	return view('backend.pages.form', compact('page'));
    }

    /**
     * Store a newly created resource in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PageStoreRequest $request)
    {	
    	// var_export($request);exit(0);
    	$createdpage = $this->sitepages->create($request->only( 'title', 'slug', 'summary', 'content', 'user_id'));
        // $page = $this->sitepages->find(4);
        // var_dump($pageid);exit(0);
        $sidebarvalue = $request->only('pagesidebar');
        // var_dump($sidebarvalue['content']);exit(0);
        if(!empty($sidebarvalue['pagesidebar']))
            $createdpage->page_meta()->create(['meta'=> 'pagesidebar', 'value'=> $sidebarvalue['pagesidebar']]);
        // var_dump($request->only('pagesidebar'));exit(0);
    	return redirect(route('admin::pages')) ->with('status', 'Page has been created.');
    }

    public function edit($id)
    {
    	$page = $this->sitepages->findOrFail($id);

        $pagemeata = DB::table('page_metas')
                        ->where('page_id', '=', $id)->get();
        if(!empty($pagemeata)){
            foreach ($pagemeata as $meta) {
                $metakey = $meta->meta;
                $page->{$metakey} = $meta->value;
            }
        }
        // var_dump($page->pagesidebar);

        // $page =  DB::table('site_pages')
        //             // ->join('page_metas', 'site_pages.id', '=', 'page_metas.id')
        //             ->where('id', '=', $id)
        //             ->get();

        // var_dump($page->title);exit(0);

        $page->title = 'Edit Page';

        return view('backend.pages.form', compact('page'));
    }

    public function update($id, Requests\PageStoreRequest $request)
    {

        // var_dump($request->only('pagesidebar'));exit(0);
        $page = $this->sitepages->findOrFail($id);
        $page->save($request->only( 'title', 'slug', 'summary', 'content'));
        $sidebarcontent = $request->only('pagesidebar');
        if($sidebarcontent['pagesidebar']){
            $pagesidebar = $page->page_meta()->where('meta', '=', 'pagesidebar')->first();
            if($pagesidebar){
                // var_dump($pagesidebar);exit(0);
                $pagesidebar->value = $sidebarcontent['pagesidebar'];
                $pagesidebar->save();
            }
            else {
                $page->page_meta()->create(['meta'=> 'pagesidebar', 'value'=> $sidebarcontent['pagesidebar']]);
            }

            return redirect(route('admin::editpage', $id))->with('status', 'Page Updated.');
        }

    }

}