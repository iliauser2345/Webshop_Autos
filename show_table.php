<?php
require_once __DIR__ . '/db.php';

$table = isset($_GET['table']) ? trim($_GET['table']) : '';

// Eenvoudige validatie: alleen letters, cijfers en underscore toegestaan
if ($table === '' || !preg_match('/^[A-Za-z0-9_]+$/', $table)) {
    echo '<p>Ongeldige of lege tabelnaam. Gebruik <code>?table=je_tabelnaam</code>.</p>';
    exit;
}

try {
    // Let op: tabelnaam kan niet geparametreerd worden in prepared statements.
    // We valideren boven zodat we geen SQL-injectie toestaan.
    $sql = "SELECT * FROM `" . $table . "` LIMIT 1000";
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll();
} catch (Exception $e) {
    echo '<p>Fout bij query: ' . htmlspecialchars($e->getMessage()) . '</p>';
    exit;
}

if (!$rows) {
    echo '<p>Geen rijen gevonden in tabel ' . htmlspecialchars($table) . '.</p>';
    exit;
}

// Bouw HTML-tabel
echo '<!doctype html><html><head><meta charset="utf-8"><title>Table: ' . htmlspecialchars($table) . '</title>';
echo '<style>table{border-collapse:collapse;width:100%;}th,td{border:1px solid #ccc;padding:6px;text-align:left;}th{background:#f4f4f4;}</style>';
echo '</head><body>';
echo '<h1>Tabel: ' . htmlspecialchars($table) . '</h1>';
echo '<p><a href="index.php">Terug</a></p>';

echo '<table><thead><tr>';
$headers = array_keys($rows[0]);
foreach ($headers as $h) {
    echo '<th>' . htmlspecialchars($h) . '</th>';
}
echo '</tr></thead><tbody>';

foreach ($rows as $row) {
    echo '<tr>';
    foreach ($headers as $h) {
        $val = isset($row[$h]) ? $row[$h] : '';
        echo '<td>' . htmlspecialchars((string)$val) . '</td>';
    }
    echo '</tr>';
}

echo '</tbody></table>';
echo '</body></html>';

?>
