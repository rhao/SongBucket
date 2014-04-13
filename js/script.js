SC.initialize({
  client_id: '50a37fe38db0602a6c8ed0b281d7ecee'
});

$().ready(function() {
	
	$("#search-button").click(function(){
		console.log($('#search-field').val());
	    SC.get('/tracks', { q: $('#search-field').val() },
		  function(tracks) {
		    // console.log(tracks);
		      var list = $("#results ul");
		      for(var index = 0; index < 10; index++){
		      	var item = $("<li>").addClass("item_" + index);
		      	var share = $("<button class='btn btn-default share-button'>Send to a Friend</button>").addClass("share-button_" + index);
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