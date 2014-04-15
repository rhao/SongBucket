SC.initialize({
  client_id: '50a37fe38db0602a6c8ed0b281d7ecee'
});

var songLinks = new Array();

$().ready(function() {
	
	$("#search-button").click(function(){
		console.log($('#search-field').val());
	    SC.get('/tracks', { q: $('#search-field').val() },
		  function(tracks) {
		    // console.log(tracks);
		      var list = $("#results ul");
		      for(var index = 0; index < 10; index++){
		      	var item = $("<li>").addClass("item_" + index);
		      	var share = $("<button class='btn btn-default share-button' onclick='return sendSong(" + index + ")'>Send to a Friend</button>").addClass("share-button_" + index);
		      	//var share = $("<form method='LINK' action='../php/send-music.php' class='btn btn-default share-button'><INPUT TYPE='submit' VALUE='Send to a Friend'></FORM>").addClass("share-button_" + index);
		      	list.append(share);
		      	list.append("<br>");
		      	list.append(item);
		      	list.append("<hr style='height:1px; background-color:black'>");
		      	songLinks[index] = tracks[index].permalink_url;
			    SC.oEmbed(tracks[index].permalink_url, {
			     	auto_play: false, 
			     	color: "ff0066"
			     },
		        		item.get(0));
			  };

		    }
		)
		return false;
	})

})

function sendSong(i){
	var link = songLinks[i];
	document.location.href = '../php/send-music.php?link='+link;
}