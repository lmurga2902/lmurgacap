<?php

function saveFile($namefile, $objFile){
    \Storage::disk('public')
    //\Storage::disk('sftp')
        ->put('/photo-articles/'.$namefile,
            \File::get($objFile));
}

function currentUser(){
    return auth()->user();
}
