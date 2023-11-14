<?

cambioDisponible(1);

function cambioDisponible($id){

    if (file_exists('juegos.xml')) {
        $xml = simplexml_load_file('juegos.xml');
        foreach ($xml as $juego) {
            if ($juego[0]['id'] == $id) {
                if ($juego[0]['disponible'] == 'si') {
                    $juego[0]['disponible'] = 'no';
                } else {
                    $juego[0]['disponible'] = 'no';
                }
                break;
            }
        }
        $xml->asXML('juegos.xml');
    } else {
        exit('Error abriendo juegos.xml.');
    }
}