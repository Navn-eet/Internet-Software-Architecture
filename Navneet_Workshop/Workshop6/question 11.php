<!-- Navneet Verma -->

<?php
$json = '[
    {
        "name": "John Garg",
        "age": "15",
        "school": "Ahlcon Public school"
    },
    {
        "name": "Smith Soy",
        "age": "16",
        "school": "St. Marie school"
    },
    {
        "name": "Charle Rena",
        "age": "16",
        "school": "St. Columba School"
    }
]';

$data = json_decode($json, true);

echo '<table>';
echo '<tr><th>Name</th><th>Age</th><th>School</th></tr>';

foreach ($data as $item) {
    echo '<tr>';
    echo '<td>' . $item['name'] . '</td>';
    echo '<td>' . $item['age'] . '</td>';
    echo '<td>' . $item['school'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
