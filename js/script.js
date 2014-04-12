 SC.initialize({
   client_id: "50a37fe38db0602a6c8ed0b281d7ecee",
   redirect_uri: "../index.html",
 });

 $(document).ready(function() {
  SC.get('/tracks', { genres: 'house' }, function(tracks) {
    $(tracks).each(function(index, track) {
      $('#results').append($('<li></li>').html(track.title + ' - ' + track.genre));
    });
  });
});