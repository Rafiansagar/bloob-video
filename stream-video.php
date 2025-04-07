<?php
// stream-video.php
$videoPath = 'video.mp4';

if (file_exists($videoPath)) {
    header('Content-Type: video/mp4');
    header('Content-Disposition: inline; filename="video.mp4"');
    readfile($videoPath);
    exit;
} else {
    http_response_code(404);
    echo 'Video not found';
}
?>