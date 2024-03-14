$addresses = explode(“\n”, file_get_contents(‘random-sites.txt’));

$size = count($addresses);
$randomIndex = rand(0, $size — 1);
$randomUrl = $addresses[$randomIndex];

header(‘Location: ‘ . urldecode($randomUrl), true, 303)
