<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;


class PageStoreRequest extends Request {


	/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
    	// var_dump(Auth::check());
    	// $postId = $this->route('create');
    	// var_dump($postId);
    	if(session('statut') == 'admin')
    		return true;
    	else
    		return false;

    	// return Gate::allows('update', Post::findOrFail($postId));
    }


	public function rules(){
		// return [
		// 	'title'		=> 'required|max:255',
		// 	'slug'		=> 'required|unique|max:255',
		// 	'summary'	=> 'required|65000',
		// 	'content'	=> 'required|65000'
		// ];
		switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
                break;
            case 'POST':
                return [
                    'title'=> ['required','max:255'],
                    'slug' => ['required', 'unique:site_pages'],
                    'name' => ['unique:pages'],
                    'summary' => ['required'],
                    'content' => ['required']
                ];
                break;
            case 'PUT':
            case 'PATCH':
                $slug = $this->input('slug');
                return [
                    'title'=> ['required','max:255'],
                    // 'slug' => ['required', 'unique:site_pages,slug,'.$slug],
                    'summary' => ['required'],
                    'content' => ['required']
                ];
                break;
            default:
                # code...
                break;
        }
	}
}