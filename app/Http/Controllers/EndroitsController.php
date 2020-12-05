<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endroits;
use App\Category;
use App\Http\Requests\EndroitsRequest;
use Illuminate\Support\Facades\Auth;

class EndroitsController extends Controller
{
   public function index(){
    	$endroits = Endroits::where('deleted',0)->paginate(15);
    	return view('admin.endroit.index',compact('endroits'));
    }
    
    public function search_endroits_admin(Request $request){
    	$endroit = $request->get('endroit');
    	$endroits = Endroits::where('deleted',0)->where('name','Like','%'.$endroit.'%')->paginate(15);
    	return view('admin.endroit.index',compact('endroits'));
    }

    public function create(){
    	$categories = Category::where('deleted',0)->active()->get();
    	return view('admin.endroit.add',compact('categories'));
    }

    public function store(EndroitsRequest $request,Endroits $endroit){
		
		if($request->hasFile('photo'))
       {
       $endroit->photo = $request->file('photo');
       $new_name = rand(). '.' . $endroit->photo->getClientOriginalExtension();
        $endroit->photo->move('endroits/',$new_name);
        $endroit->photo = $new_name;
        }
			
           $endroit->create([
		      'name'	 => $request->name,
		      'wilaya' 	 => $request->wilaya,
		      'commune'  => $request->commune,
		      'adress'   => $request->adress,
		      'description'   => $request->description,
		      'active'   => $request->active,
		      'id_category' => $request->id_category,
		      'photo'	 => $new_name,
  			]);

          Session()->flash('l\'endroit a étè ajouter avec succée');
          return redirect('admin/endroits');

    }

     public function edit($id){
     	$categories = Category::where('deleted',0)->active()->get();
    	$endroit = Endroits::where('deleted',0)->where('id',$id)->first();
    	if($endroit === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.endroit.edit',compact('endroit','categories'));
    	}
    	
    }

     public function update(EndroitsRequest $request,$id){
          
          $endroit = Endroits::where('deleted',0)->where('id',$id)->first();
          if(!$request->has('active')){
            $request->request->add(['active' => 0]);
          }
          else{
           $request->request->add(['active' => 1]);

          }
         if($request->has('photo'))
	       {
	       $endroit->photo = $request->file('photo');
	       $new_name = rand(). '.' . $endroit->photo->getClientOriginalExtension();
	        $endroit->photo->move('endroits/',$new_name);
	        $endroit->photo = $new_name;
	        $endroit->update(
            [
             
		      'photo' => $new_name,

            ]);
	        }

           $endroit->update(
            [
              'name'	 => $request->name,
		      'wilaya' 	 => $request->wilaya,
		      'commune'  => $request->commune,
		      'adress'   => $request->adress,
		      'description'   => $request->description,
		      'active'   => $request->active,
		      'id_category' => $request->id_category,

            ]);
           //$category->save();
           
          Session()->flash('la modification de l\'endroit a étè faite avec succée');
          return redirect('admin/endroits');

    }
    public function destroy($id){
           $endroit = Endroits::find($id);
           $endroit->deleted = 1;
           $endroit->save();
           Session()->flash('la Supression de categorie a étè faite avec succée');
          return redirect('admin/endroit');
    }
    public function show($id)
    {
    	$endroit = Endroits::where('deleted',0)->active()->where('id',$id)->first();
    	if($endroit === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.endroit.show',compact('endroit'));
    	}

    }

    public function all_endroits(){
      $endroits = Endroits::where('deleted',0)->active()->paginate(15);
      return view('user.all-endroits',compact('endroits'));
    }

    public function get_endroits_by_category(Request $request){
      $endroits = Endroits::where('deleted',0)->active()->where('id',$request->category)->paginate(15);
      return view('user.all-endroits',compact('endroits'));
    }

    public function show_endroit($id,$name){
      $endroit = Endroits::where('deleted',0)->active()->where('id',$id)->where('name','Like','%'.$name.'%')->first();
        if($endroit === null){
         return view('layouts.error_404');
      }else{
          return view('user.show-endroit',compact('endroit'));
      }
    }
}












