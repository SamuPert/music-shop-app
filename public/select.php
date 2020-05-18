<?php
$elenco_sub_cateogory = array();
$elenco_sub_cateogory['Chitarre'] = array('Chitarre Elettriche'=>'Chitarre Elettriche','Chitarre Classiche'=>'Chitarre Classiche','Chitarre Acustiche'=>'Chitarre Acustiche','Chitarre SemiAcustiche'=>'Chitarre SemiAcusithce');
$elenco_sub_cateogory['Bassi'] = array('Bassi Elettrici'=>'Bassi Elettrici', 'Bassi Acustici'=>'Bassi Acustici', 'Bassi Contrabassi'=>'Bassi Contrabassi');
$elenco_sub_cateogory['Tastiere'] = array('Tastiere WorkStation'=>'Tastiere WorkStation','Tastiere Fisarmoniche'=>'Tastiere Fisarmoniche','Tastiere pianoforti digitali'=>'Tastiere pianoforti digitali');
$elenco_sub_cateogory['Batterie'] = array('Batterie Acustiche'=>'Batterie Acustiche','Batterie Elettroniche'=>'Batterie Elettroniche', 'Batterie Percusioni' => 'Batterie Percusioni');
$elenco_sub_cateogory['Fiati'] = array('Sax'=> 'Sax','Trombe'=>'Trombe', 'Flauti' => 'Flauti', 'Clarinetto' => 'Clarinetto', 'Altri Strumenti a fiato' => 'Altri stumenti a fiato' );
$elenco_sub_cateogory['Attrezzature'] = array('Amplificatori' => 'Amplificatori', 'Cavi e Connettori' => 'Cavi e Connettori', 'Supporti'=>'Supporti');

echo json_encode($elenco_sub_cateogory[$_GET['root_category']]);
?>
