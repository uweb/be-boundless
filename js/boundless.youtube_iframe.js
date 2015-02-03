function onYouTubeIframeAPIReady(){
  BOUNDLESS.youtubeIframe = function (view){
    var player_vars = {};
    // if the collection desires no youtube branding, set these parameters
    if (view.model.get('modest')) {
      player_vars = {
        'rel'           : 0,
        'controls'      : 0,
        'modestbranding': 1,
      }
    }
    // if (collection.resolution !== 'undefined'){
    //     player_vars.VQ = collection.resolution;
    // }
    //attach the YT.player to the relevant view, each view gets one
    view.uwplayer = new YT.Player(collection.$el.attr('id'), {
      videoId: view.model.get('videoId'),
      playerVars: player_vars,
      events: {
        //these events will call functions in the view
       'onReady': view.onReady,
       'onStateChange': view.onStateChange
      }
    });
  }
}
