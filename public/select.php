<?php
$elenco_sub_cateogory = array();
$elenco_sub_cateogory['Chitarre'] = array('Chitarre Elettriche'=>'Chitarre Elettriche','Chitarre Classiche'=>'Chitarre Classiche','Chitarre Acustiche'=>'Chitarre Acustiche','Chitarre SemiAcustiche'=>'Chitarre SemiAcusithce');
$elenco_sub_cateogory['Bassi'] = array('Bassi Elettrici'=>'Bassi Elettrici', 'Bassi Acustici'=>'Bassi Acustici', 'Bassi Contrabassi'=>'Bassi Contrabassi');
$elenco_sub_cateogory['Tastiere'] = array('Tastiere WorkStation'=>'Tastiere WorkStation','Tastiere Fisarmoniche'=>'Tastiere Fisarmoniche','Tastiere pianoforti digitali'=>'Tastiere pianoforti digitali');
$elenco_sub_cateogory['Batterie'] = array('Batterie Acustiche'=>'Batterie Acustiche','Batterie Elettroniche'=>'Batterie Elettroniche');

echo json_encode($elenco_sub_cateogory[$_GET['root_category']]);
?>
