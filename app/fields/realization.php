<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$Realization = new FieldsBuilder('Realization');

$Realization
    ->setLocation('post_type', '==', 'realizacje');

$Realization
    ->addWysiwyg('Opis', ['wrapper'=>['width'=>'50%']])
    ->addWysiwyg('Zakres', ['wrapper'=>['width'=>'25%']])
    ->addWysiwyg('Produkty', ['wrapper'=>['width'=>'25%']])
    ->addGallery('gallery');
return $Realization;
