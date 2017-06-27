<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use MTC\GerarRotas;

class GerarRotaTest extends TestCase
{
    public function testRetornoRota()
    {
        $latitudeInicio = -25.3771036;
        $longitudeInicio = -49.1327806;
        $latitudeTermino = -25.3655216;
        $longitudeTermino = -49.1842127;

        $retorno = array(
            array('latitude' => -25.37705, 'longitude' => -49.1317),
            array('latitude' => -25.376, 'longitude' => -49.12817),
            array('latitude' => -25.37417, 'longitude' => -49.12884),
            array('latitude' => -25.37212, 'longitude' => -49.12863),
            array('latitude' => -25.37084, 'longitude' => -49.12899),
            array('latitude' => -25.37156, 'longitude' => -49.13214),
            array('latitude' => -25.37321, 'longitude' => -49.14407),
            array('latitude' => -25.38321, 'longitude' => -49.16767),
            array('latitude' => -25.38398, 'longitude' => -49.16987),
            array('latitude' => -25.3842, 'longitude' => -49.17335),
            array('latitude' => -25.38065, 'longitude' => -49.17363),
            array('latitude' => -25.38068, 'longitude' => -49.17579),
            array('latitude' => -25.37951, 'longitude' => -49.17653),
            array('latitude' => -25.37987, 'longitude' => -49.17743),
            array('latitude' => -25.37864, 'longitude' => -49.17834),
            array('latitude' => -25.37709, 'longitude' => -49.17829),
            array('latitude' => -25.3762, 'longitude' => -49.17884),
            array('latitude' => -25.37397, 'longitude' => -49.17848),
            array('latitude' => -25.37179, 'longitude' => -49.17969),
            array('latitude' => -25.36848, 'longitude' => -49.17925),
            array('latitude' => -25.36807, 'longitude' => -49.18119),
            array('latitude' => -25.36497, 'longitude' => -49.18374),
            array('latitude' => -25.36535, 'longitude' => -49.18434),
        );

        $gerarRota = new GerarRotas();
        $this->assertEquals($retorno, $gerarRota->coordenadas($latitudeInicio, $longitudeInicio, $latitudeTermino, $longitudeTermino));

        $latitudeInicio = -25.4027987;
        $longitudeInicio = -49.2800634;
        $latitudeTermino = -24.7362423;
        $longitudeTermino = -48.1120125;

        $retorno = array(
            array('latitude' => -25.40322, 'longitude' => -49.28004),
            array('latitude' => -25.40486, 'longitude' => -49.27118),
            array('latitude' => -25.39754, 'longitude' => -49.2507),
            array('latitude' => -25.40365, 'longitude' => -49.24348),
            array('latitude' => -25.38709, 'longitude' => -49.21931),
            array('latitude' => -25.39108, 'longitude' => -49.20778),
            array('latitude' => -25.38792, 'longitude' => -49.17976),
            array('latitude' => -25.37333, 'longitude' => -49.14402),
            array('latitude' => -25.36436, 'longitude' => -49.08588),
            array('latitude' => -25.34568, 'longitude' => -49.04367),
            array('latitude' => -25.31106, 'longitude' => -49.01433),
            array('latitude' => -25.3029, 'longitude' => -48.94221),
            array('latitude' => -25.24477, 'longitude' => -48.90253),
            array('latitude' => -25.23379, 'longitude' => -48.90783),
            array('latitude' => -25.21694, 'longitude' => -48.90369),
            array('latitude' => -25.18516, 'longitude' => -48.88467),
            array('latitude' => -25.16413, 'longitude' => -48.86185),
            array('latitude' => -25.12646, 'longitude' => -48.85711),
            array('latitude' => -25.11577, 'longitude' => -48.85312),
            array('latitude' => -25.10956, 'longitude' => -48.84347),
            array('latitude' => -25.10759, 'longitude' => -48.82192),
            array('latitude' => -25.11256, 'longitude' => -48.80409),
            array('latitude' => -25.10763, 'longitude' => -48.7885),
            array('latitude' => -25.11396, 'longitude' => -48.7602),
            array('latitude' => -25.10079, 'longitude' => -48.73085),
            array('latitude' => -25.1054, 'longitude' => -48.71631),
            array('latitude' => -25.09805, 'longitude' => -48.65829),
            array('latitude' => -25.08557, 'longitude' => -48.64237),
            array('latitude' => -25.0811, 'longitude' => -48.62339),
            array('latitude' => -25.08772, 'longitude' => -48.60468),
            array('latitude' => -25.06816, 'longitude' => -48.58311),
            array('latitude' => -25.05799, 'longitude' => -48.55577),
            array('latitude' => -25.03092, 'longitude' => -48.53265),
            array('latitude' => -25.01847, 'longitude' => -48.51055),
            array('latitude' => -24.976, 'longitude' => -48.50338),
            array('latitude' => -24.96627, 'longitude' => -48.47551),
            array('latitude' => -24.96876, 'longitude' => -48.44366),
            array('latitude' => -24.96097, 'longitude' => -48.41716),
            array('latitude' => -24.97292, 'longitude' => -48.40259),
            array('latitude' => -24.96765, 'longitude' => -48.38866),
            array('latitude' => -24.97206, 'longitude' => -48.35085),
            array('latitude' => -24.94147, 'longitude' => -48.30744),
            array('latitude' => -24.92384, 'longitude' => -48.26222),
            array('latitude' => -24.89714, 'longitude' => -48.24329),
            array('latitude' => -24.88013, 'longitude' => -48.2215),
            array('latitude' => -24.87997, 'longitude' => -48.20929),
            array('latitude' => -24.8328, 'longitude' => -48.21478),
            array('latitude' => -24.8298, 'longitude' => -48.20904),
            array('latitude' => -24.80763, 'longitude' => -48.21312),
            array('latitude' => -24.78046, 'longitude' => -48.20368),
            array('latitude' => -24.77925, 'longitude' => -48.19605),
            array('latitude' => -24.78791, 'longitude' => -48.17817),
            array('latitude' => -24.75476, 'longitude' => -48.16092),
            array('latitude' => -24.73031, 'longitude' => -48.10756),
            array('latitude' => -24.73623, 'longitude' => -48.11202),
        );
        $gerarRota = new GerarRotas();
        $this->assertEquals($retorno, $gerarRota->coordenadas($latitudeInicio, $longitudeInicio, $latitudeTermino, $longitudeTermino));
    }
}
