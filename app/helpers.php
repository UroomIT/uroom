<?php

function upload($file, $type){
    // composition du nom de l'image ou du fichier
    $imageName = (time()*rand(0, 1000)).".".$file->getClientOriginalExtension();
    // verification du type de fichier et enregistrement dans le dossier cible
    if ($type == 'image') $file->move(public_path('/uploads/images'), $imageName);
    if ($type == 'doc') $file->move(public_path('/uploads/documents'), $imageName);
    return $imageName;
}