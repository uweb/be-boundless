BOUNDLESS.youtube_api_ready = false;
BOUNDLESS.YouTubeAPIReady = new Event('youtube_api_ready');

function onYouTubeIframeAPIReady(){
  BOUNDLESS.youtube_api_ready = true;
  jQuery(window).dispatch(BOUNDLESS.YouTubeAPIReady);
}
