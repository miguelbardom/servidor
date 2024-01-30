<?

$uri = 'http://dataservice.accuweather.com/forecasts/v1/daily/5day/303121?apikey=zdoiFZiDaxZb9RHnsrC1W1GKkEMIoHEd&language=es-es';

$contenido = file_get_contents($uri);

echo '<pre>';
if($contenido){
    $jsonContenido = json_decode($contenido, true);
    // print_r($jsonContenido);
    $fMin = (int)$jsonContenido['DailyForecasts'][0]['Temperature']['Minimum']['Value'];
    $fMax = (int)$jsonContenido['DailyForecasts'][0]['Temperature']['Maximum']['Value'];
    $gradosMin = ($fMin - 32) * 5 / 9;
    $gradosMax = ($fMax - 32) * 5 / 9;
    echo "En Zamora, la temperatura mínima hoy han sido ".$gradosMin." ºC";
    echo "<br>";
    echo "En Zamora, la temperatura máxima hoy han sido ".$gradosMax." ºC";
}