<?php
    function fact($n, $r = 1, $i = 0) {
        while ($i < $n) {
            $r *= $i + 1;
            $i += 1;
            return $r;
        }
    }

    function factR($nb) {
        $res = $nb * fact($nb-1);
        return $res;
    }

?>