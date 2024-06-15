<?php

namespace App\Http\Controllers;

use Throwable;
use Validator;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function list()
	{
		$articles = Article::all();
        $menuActive = 'ARTICLES';
        return view('articles.list', compact('articles', 'menuActive'));
	}

    public function create()
	{
        $users = User::select('id', 'name')->get();
        $menuActive = 'ARTICLES';
        return view('articles.create', compact('menuActive', 'users'));
	}

    public function edit($id)
	{
        $users = User::select('id', 'name')->get();
		$article =  Article::find($id);
        $menuActive = 'ARTICLES';
        return view('articles.edit', compact('article', 'menuActive', 'users'));
	}

    public function store(Request $request)
    {
        $messages = [
            'title.required' => 'El titulo es obligatorio',
            'content.required' => 'El contenido es obligatorio',
            'user_id.required' => 'El usuario es obligatorio',
            'user_id.exists' => 'El usuario es invalido',
        ];

        $validate = Validator::make( $request->all(), [
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
        ], $messages );

        if( $validate->fails() ){

            $errors = $validate->errors()->all();

            return redirect()->route('articles.create')->withInput()
            ->withErrors( $errors );
        }
        else{
            try{

                DB::beginTransaction();

                $articleNew = new Article;

                if( $articleNew->create( $request->all() ) ){

                    DB::commit();

                    return redirect()->route('articles.list')->with( 'success', 'Se creó el articulo correctamente' );
                }
                else{
                    DB::rollback();

                    $validate->errors()->add( 'Ocurrio un error', "Dato incorrecto" );
                    $errors = $validate->errors()->all();

                    return redirect()->route('articles.create')
                    ->withInput()
                    ->withErrors( $errors );
                }
            }
            catch( Throwable $e ){

                DB::rollback();

                $validate->errors()->add( 'Ocurrio un error', "Vuelve a intentarlo" );
                $errors = $validate->errors()->all();

                return redirect()->route('articles.create')
                ->withInput()
                ->withErrors( $errors );
            }
        }
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'title.required' => 'El titulo es obligatorio',
            'content.required' => 'El contenido es obligatorio',
            'user_id.required' => 'El usuario es obligatorio',
            'user_id.exists' => 'El usuario es invalido',
        ];

        $validate = Validator::make( $request->all(), [
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
        ], $messages );

        if( $validate->fails() ){

            $errors = $validate->errors()->all();


            return redirect()->route('articles.edit', $id)->withInput()
            ->withErrors( $errors );
        }
        else{
            try{

                DB::beginTransaction();

                $articleUpdate = Article::find($id);

                if( $articleUpdate->update( $request->all() ) ){

                    DB::commit();

                    return redirect()->route('articles.list')->with( 'success', 'Se actualizó el articulo correctamente' );
                }
                else{
                    DB::rollback();

                    $validate->errors()->add( 'Ocurrio un error', "Dato incorrecto" );
                    $errors = $validate->errors()->all();

                    return redirect()->route('articles.edit', $id)
                    ->withInput()
                    ->withErrors( $errors );
                }
            }
            catch( Throwable $e ){

                DB::rollback();

                $validate->errors()->add( 'Ocurrio un error', "Vuelve a intentarlo" );
                $errors = $validate->errors()->all();

                return redirect()->route('articles.edit', $id)
                ->withInput()
                ->withErrors( $errors );
            }
        }
    }

    public function delete(Request $request,$id)
    {
        try{
            DB::beginTransaction();

            $articleDelete = Article::find($id);

            if( $articleDelete->delete() ){

                DB::commit();

                return redirect()->route('articles.list')->with( 'success', 'Se eliminó el articulo correctamente' );
            }
            else{
                 DB::rollback();

                return redirect()->route('articles.list')->with( 'success', 'No se pudo eliminar el articulo' );
            }
        }
        catch( Throwable $e ){

            DB::rollback();

            return redirect()->route('articles.list')->with( 'success', 'No se pudo eliminar el articulo' );
        }
    }
}
