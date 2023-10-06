<?php
    $nextWeek = time() + (7 * 24 * 60 * 60);
    echo 'Now:        '. date('d-m-Y') ."<br>";
    echo 'Next Week:  '. date('d-m-Y', $nextWeek) ."<br>";
    echo 'Next Week:  '. date('d-m-Y', strtotime('+ week')) ."<br>";
        // Now: 28/09/2023 Data atual
        // Next Week: 04-10-2023 à Uma semana após a data atual
        // Next Week: 04-10-2023 à Uma semana após a data utilizando strtotime
?>       