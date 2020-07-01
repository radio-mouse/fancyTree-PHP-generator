<?
$struct = listFolders();
echo json_encode($struct);

function listFolders($dir = __DIR__ . '/YOUR_DIR') {
    $dh = scandir($dir);
    $return = [];

    foreach ($dh as $folder) {
        if ($folder != '.' && $folder != '..') {
            if (is_dir($dir . '/' . $folder)) {
                $return[] = array(
                    'title' => $folder,
                    'folder' => true,
                    'children' => listFolders($dir . '/' . $folder, $key)
                );
            } else {
                $return[] = [
                    'title' => $folder,
                ];
            }
        }
    }
    return $return;
}
