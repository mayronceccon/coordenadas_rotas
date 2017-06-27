<?php

namespace MTC;


class GerarRotas
{
    /**
     * @param $latitudeInicial
     * @param $longitudeInicial
     * @param $latitudeTermino
     * @param $longitudeTermino
     * @return array
     */
    public function coordenadas($latitudeInicial, $longitudeInicial, $latitudeTermino, $longitudeTermino)
    {
        $dados = $this->getDados($latitudeInicial, $longitudeInicial, $latitudeTermino, $longitudeTermino);
        $geometry = $dados->routes[0]->geometry;
        return $this->decodeGeometry($geometry);
    }

    /**
     * @param string $entrada
     * @return mixed
     */
    private function getDados($latitudeInicial = null, $longitudeInicial = null, $latitudeTermino = null, $longitudeTermino = null)
    {
        if (!empty($latitudeInicial) and !empty($longitudeInicial) and !empty($latitudeTermino) and !empty($longitudeTermino)) {
            $url = "http://router.project-osrm.org/route/v1/driving/{$longitudeInicial},{$latitudeInicial};{$longitudeTermino},{$latitudeTermino}";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, True);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1');
            $return = curl_exec($curl);
            curl_close($curl);
            return json_decode($return);
        }
    }

    /**
     * @param $geometry
     * @return array
     */
    private function decodeGeometry($geometry)
    {
        $len = strlen($geometry) -1;
        $path = [];
        $index = 0;
        $lat = 0;
        $lng = 0;
        while ($index < $len) {
            $result = 1;
            $shift = 0;
            do {
                $b = ord($geometry{$index++}) - 63 - 1;
                $result += $b << $shift;
                $shift += 5;
            } while ($b >= hexdec("0x1f"));

            $lat += ($result & 1) != 0 ? ~($result >> 1) : ($result >> 1);
            $result = 1;
            $shift = 0;
            do {
                $b = ord($geometry{$index++}) - 63 - 1;
                $result += $b << $shift;
                $shift += 5;
            } while ($b >= hexdec("0x1f"));
            $lng += ($result & 1) != 0 ? ~($result >> 1) : ($result >> 1);

            array_push($path, ['latitude' => $lat * 1e-5, 'longitude' => $lng * 1e-5]);
        }
        return $path;
    }
}