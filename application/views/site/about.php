<h1>Портфолио</h1>
<p>
<table>
My projects
<tr><td>year</td><td>project</td><td>About</td></tr>
<?php

    foreach($data as $row)
    {
        echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
    }
    
?>
</table>
</p>