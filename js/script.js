SC.initialize({
  client_id: '50a37fe38db0602a6c8ed0b281d7ecee'
});

$().ready(function() {
	
	//function playSomeMusic(myGenre) {
	$("#search-button").click(function(){
		console.log($('#search-field').val());
	    SC.get('/tracks', { q: $('#search-field').val() },
		  function(tracks) {
		    //FIRST soundcloud sends back an array of 50 objects (0~49)
		    // console.log(tracks);
		      var list = $("#results ul");
		      //$(tracks).each(function(index, track) {
		      for(var index = 0; index < 10; index++){
		      	var item = $("<li>").addClass("item_" + index);
		      	list.append(item);
			    SC.oEmbed(tracks[index].permalink_url, {
			     	auto_play: false, 
			     	color: "ff0066"
			     },
		        		item.get(0));
			     //console.log(item);
			  };

		    }
		)
		return false;
	})
})