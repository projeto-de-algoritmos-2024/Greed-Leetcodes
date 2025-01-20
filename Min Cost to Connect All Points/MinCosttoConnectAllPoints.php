<?php

class Solution {

    private $pai;
    private $nivel;

    function minCostConnectPoints($points) {
        $n = count($points);
        $arestas = [];

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                $distancia = abs($points[$i][0] - $points[$j][0]) + abs($points[$i][1] - $points[$j][1]);
                $arestas[] = [$distancia, $i, $j];
            }
        }

        usort($arestas, function ($a, $b) {
            return $a[0] - $b[0];
        });

        $this->pai = range(0, $n - 1);
        $this->nivel = array_fill(0, $n, 0);

        $cost = 0;
        $arestasUsadas = 0;

        foreach ($arestas as [$distancia, $i, $j]) {
            if ($this->union($i, $j)) {
                $cost += $distancia;
                $arestasUsadas++;
                if ($arestasUsadas === $n - 1) {
                    break;
                }
            }
        }

        return $cost;
    }

    private function find($no) {
        if ($this->pai[$no] !== $no) {
            $this->pai[$no] = $this->find($this->pai[$no]);
        }
        return $this->pai[$no];
    }

    private function union($no1, $no2) {
        $root1 = $this->find($no1);
        $root2 = $this->find($no2);

        if ($root1 !== $root2) {
            if ($this->nivel[$root1] > $this->nivel[$root2]) {
                $this->pai[$root2] = $root1;
            } elseif ($this->nivel[$root1] < $this->nivel[$root2]) {
                $this->pai[$root1] = $root2;
            } else {
                $this->pai[$root2] = $root1;
                $this->nivel[$root1]++;
            }
            return true;
        }
        return false;
    }
}

$solution = new Solution();

$pontos1 = [[0,0],[2,2],[3,10],[5,2],[7,0]];
echo $solution->minCostConnectPoints($pontos1) . PHP_EOL;

?>
