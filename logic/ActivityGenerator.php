<?php

class ActivityGenerator {
    function generate ($activities) {
       echo '<table border=1><tr><td>Data</td><td>Temat</td><td>Nazwa Firmy</td><td>Typ</td><td>Status</td><td>Sprzedawca</td></tr>';
        foreach ($activities as $activity) {
            echo "<p>{$activity->asHtmlTableRow()}</p>";  

}

echo '</table>';
    }
}

