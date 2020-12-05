<?php 

function getsetting(){
     return \App\SiteSetting::where('id', 1)->first();
}

function uploadImage($folder, $image){
   $image->store('/',$folder);
   $filename = $image->hashName();
   $path = 'images/'.$folder.'/'.$filename;
   return $path;
}

function Last_endroit(){
	return \App\Endroits::where('deleted',0)->active()->limit(6)->get();
}


function All_category(){
	return \App\Category::where('deleted',0)->active()->get();
}

?>