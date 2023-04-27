<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Cell
    {
        public $x;
        public $y;
        public $dist;
        public $prev;

        public function __construct($x, $y, $dist, $prev)
        {
            $this->x = $x;
            $this->y = $y;
            $this->dist = $dist;
            $this->prev = $prev;
        }

        public function __toString()
        {
            return "(" . $this->x . "," . $this->y . ")";
        }
    }

    function shortestPath($matrix, $start, $end)
    {
        $sx = $start[0];
        $sy = $start[1];
        $dx = $end[0];
        $dy = $end[1];

        if ($matrix[$sx][$sy] == 0 || $matrix[$dx][$dy] == 0) {
            echo "There is no path.";
            return;
        }

        $m = count($matrix);
        $n = count($matrix[0]);
        $cells = array();
        for ($i = 0; $i < $m; $i++) {
            $cells[$i] = [];
            for ($j = 0; $j < $n; $j++) {
                if ($matrix[$i][$j] != 0) {
                    $cells[$i][$j] = new Cell($i, $j, PHP_INT_MAX, null);
                } else {
                    $cells[$i][$j] = [];
                }
            }
        }

        $queue = array();
        $src = $cells[$sx][$sy];
        $src->dist = 0;

        array_push($queue, $src);
        $dest = null;
        $p = null;

        while (($p = array_shift($queue)) != null) {

            if ($p->x == $dx && $p->y == $dy) {
                $dest = $p;
                break;
            }


            visit($cells, $queue, $p->x - 1, $p->y, $p);

            visit($cells, $queue, $p->x + 1, $p->y, $p);

            visit($cells, $queue, $p->x, $p->y - 1, $p);

            visit($cells, $queue, $p->x, $p->y + 1, $p);
        }

        if ($dest == null) {
            echo "There is no path.";
            return;
        } else {
            $path = array();
            $p = $dest;
            do {
                array_unshift($path, $p);
            } while (($p = $p->prev) != null);

            $resultsOfattempts  = [];
            for ($i = 0; $i < count($path); $i++) {
                $resultsOfattempts[$i][0] = $path[$i]->x;
                $resultsOfattempts[$i][1] = $path[$i]->y;
            }
            $filename = 'result.txt';
            $text = serialize($resultsOfattempts);
            file_put_contents($filename, $text);

            echo "Path: " . implode(", ", $path);
        }
    }

    function visit(&$cells, &$queue, $x, $y, $parent)
    {
        if ($x < 0 ||  $x >= count($cells) ||  $y < 0 || $y >= count($cells[0])   || $cells[$x][$y] == null) {
            return;
        }

        $dist = $parent->dist + 1;
        $p = $cells[$x][$y];

        if ($dist < $p->dist) {
            $p->dist = $dist;
            $p->prev = $parent;
            array_push($queue, $p);
        }
    }

    $matrix = [
        [0, 1, 0, 1, 1, 1, 1, 0, 1, 1],
        [1, 1, 1, 1, 1, 0, 1, 1, 0, 1],
        [0, 1, 1, 1, 0, 1, 0, 1, 1, 1],
        [1, 0, 1, 1, 1, 1, 1, 1, 1, 0],
        [1, 1, 1, 1, 1, 0, 1, 0, 1, 1],
        [1, 0, 1, 1, 0, 1, 1, 1, 1, 0],
        [1, 1, 1, 0, 1, 1, 1, 1, 0, 1],
        [0, 1, 1, 1, 0, 1, 0, 1, 0, 1],
        [0, 1, 1, 0, 1, 1, 1, 0, 1, 1],
        [1, 0, 1, 1, 1, 0, 1, 1, 1, 1]
    ];
    $start = [1, 7];
    $end = [9, 2];
    shortestPath($matrix, $start, $end);
    ?>
</body>

</html>