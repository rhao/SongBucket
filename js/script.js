SC.initialize({
  client_id: '50a37fe38db0602a6c8ed0b281d7ecee'
});

$().ready(function() {
	
	$("#search-button").click(function(){
		console.log($('#search-field').val());
	    SC.get('/tracks', { q: $('#search-field').val() },
		  function(tracks) {
		    //FIRST soundcloud sends back an array of 50 objects (0~49)
		    // console.log(tracks);
		      var list = $("#results ul");
		      var sharePanel = $("#sharing ul");
		      //$(tracks).each(function(index, track) {
		      for(var index = 0; index < 10; index++){
		      	var item = $("<li>").addClass("item_" + index);
		      	var share = $("<button class='btn btn-default'>Share/Send</button>").addClass("share-button");
		      	//sharePanel.append(share);
		      	list.append(share);
		      	list.append("<br>");
		      	list.append(item);
		      	list.append("<hr style='height:1px; background-color:black'>");
			    SC.oEmbed(tracks[index].permalink_url, {
			     	auto_play: false, 
			     	color: "ff0066"
			     },
		        		item.get(0));
			    console.log(tracks[index].permalink_url);
			     //console.log(item);
			  };

		    }
		)
		return false;
	})
})