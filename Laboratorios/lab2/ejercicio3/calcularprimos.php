<style>
        .numerosprimos {
            border: 2px solid green;
            background-color: yellow;
        }

        .numerosprimos ol {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .numerosprimos li {
            padding: 5px;
            border: 1px dashed gray;
        }
</style>

<?php 
    $numero = $_POST['numero'];

    for ($i = 2; $i <= $numero; $i++) {
        $esPrimo = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $esPrimo = false;
                break;
            }
        }
        if ($esPrimo) {
            $primos[] = $i;
        }
    }


  echo "<div class='numerosprimos'>
            <ol>";
                foreach ($primos as $primo) {
                    echo "<li>" . $primo . "</li>";
                }
        echo "</ol>
        </div>";?>