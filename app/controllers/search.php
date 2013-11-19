<?php

use Apricot\Apricot as App;

$sphinx = App::get('sphinx');

$query = App::parameter('q'); // get the query from the URI

$sphinxResult = $sphinx->Query($query, 'notices');

$ids = array_keys($sphinxResult['matches']);

$result = App::get('pdo')->query("SELECT n.*, i.relative_url AS \"image_url\" FROM core_notice n
                                  INNER JOIN core_noticeimage i ON i.notice_id = n.id
                                  WHERE n.id IN (".implode(',', $ids).")" );

$docs = $result->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($docs);