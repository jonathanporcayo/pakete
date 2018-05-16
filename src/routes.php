<?php 
Route::get('productos', function(){
    $productos= DB::select("SELECT * FROM prodcutos");
    return  $productos;
});