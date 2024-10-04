<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple arrays</title>
</head>
<body>
    <?php
    
$arr1 = [
    array(
        'Nom' => 'Juan',
        'Primer cognom' => 'Casas',
        'Segon cognom' => 'Sánchez',
        'Data naix' => '2005-08-21',
        'DNI' => '35278643R'
    ),
    array(
        'Nom' => 'Maria',
        'Primer cognom' => 'López',
        'Segon cognom' => 'García',
        'Data naix' => '1998-04-15',
        'DNI' => '12345678X'
    ),
    array(
        'Nom' => 'Pedro',
        'Primer cognom' => 'Fernández',
        'Segon cognom' => 'Martínez',
        'Data naix' => '1995-11-30',
        'DNI' => '98765432Y'
    ),
    array(
        'Nom' => 'Ana',
        'Primer cognom' => 'Moreno',
        'Segon cognom' => 'Ruiz',
        'Data naix' => '2000-02-10',
        'DNI' => '45678901Z'
    )
];

echo "<body>";
echo "<table>"; 
echo "<thead>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Primer cognom</th>";
echo "<th>Segon cognom</th>";
echo "<th>Data naix</th>";
echo "<th>DNI</th>"; 
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($arr1 as $element) {
    echo "<tr>";
    echo "<td>{$element['Nom']}</td>";
    echo "<td>{$element['Primer cognom']}</td>";
    echo "<td>{$element['Segon cognom']}</td>";
    echo "<td>{$element['Data naix']}</td>";
    echo "<td>{$element['DNI']}</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
echo "</body>";

?>

</body>
</html>