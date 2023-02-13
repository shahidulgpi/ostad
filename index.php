

<?php

$fee = 5000;

$commission = ($fee>20000)?("The commission is 25%"):(($fee>10000 && $fee<20000)?("The commission is 20%"):(($fee<10000 && $fee>7000)?("The commission is 15%"):("invalid")));


echo $commission;
?>



