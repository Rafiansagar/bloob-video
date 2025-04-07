
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blob Video</title>
		<style>
			* {
				box-sizing: border-box;
			}
			html,
			body {
				overflow-x: hidden;
			}
			video {
				width: 600px;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>

		<video id="videoPlayer" controls controlsList="nodownload" oncontextmenu="return false;"></video>
		<button id="playButton">Play Video</button>

		<script>
			document.getElementById('playButton').addEventListener('click', function() {
			    fetch('stream-video.php')
			        .then(response => response.blob()) // Get the Blob response
			        .then(blob => {
			            const videoURL = URL.createObjectURL(blob);
			            const videoPlayer = document.getElementById('videoPlayer');
			            videoPlayer.src = videoURL;
			            videoPlayer.play();
			        })
			        .catch(error => {
			            console.error('Error fetching the video:', error);
			        });
			});
		</script>
	</body>
</html>