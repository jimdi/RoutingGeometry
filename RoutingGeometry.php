<?php
class RoutingGeometry {
    //decode compressed route geometry
    function _decode($encoded, $precision = 6) {
        $precision = pow(10, -$precision);
        $len = strlen($encoded);
        $index = 0;
        $lat = 0;
        $lng = 0;
        $resultarr = array();
        while ($index<$len) {
            $b = 0;
            $shift = 0;
            $result = 0;
            do {
                $b = ord($encoded[$index++])-63;
                $result = $result|(($b&0x1f)<<$shift);
                $shift += 5;
            } while ($b >= 0x20);
            $dlat = (($result&1)?~($result>>1):($result>>1));
            $lat += $dlat;
            $shift = 0;
            $result = 0;
            do {
                $b = ord($encoded[$index++])-63;
                $result = $result|(($b&0x1f)<<$shift);
                $shift += 5;
            } while ($b >= 0x20);
            $dlng = (($result&1)?~($result>>1):($result>>1));
            $lng += $dlng;
            $resultarr[] = ([
            $lat*$precision,
            $lng*$precision]);
        }
        return $resultarr;
    }
}
?>