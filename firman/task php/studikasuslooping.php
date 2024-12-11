<?php 
for ($i = 1; $i <= 10; $i++) {
    $total = $i * 2;
    echo "2 X $i = $total";
    echo "<br/>";
};
echo "</br></br>";

for ($i = 0; $i <= 10; $i++) {
    for($j = 0; $j < $i; $j++) {
        echo "*";
    }; 
    echo "<br/>";
};

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i adalah bilangan genap";
    } else {
        echo "$i adalah bilangan ganjil";

    };
    echo "<br/>";
};


?>