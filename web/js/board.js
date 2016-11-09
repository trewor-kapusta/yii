$(document).ready(function()
{
	var lastId = 0;

	getMessages();
	setInterval(getMessages, 1000);

	$('#board_form').submit(function()
	{
		var data = {msg: $('#board_input_message').val()};
		$.ajax({url: "index.php?r=board/write", type: "POST", data: data, success: function(){
			$('#board_input_message').val("");
		}});
	});

	function getMessages()
	{
	    $.ajax({dataType: "json", url: "index.php?r=board/show&last_msg=" + lastId, success: function(result){
	    	for (var i = 0; i < result.length; ++i)
	    	{
	    		var div = '<div class="board_message">';
	    		div += result[i]['username'] + ': ' + result[i]['entry'];
	    		div += '</div>';

	    		//$("#board_messages").append(html);//.fadeIn('slow');

	    		//var div = '<div>' + result[i]['username'] + ': ' + result[i]['entry'] + '</div>';
	    		$(div).hide().appendTo("#board_messages").show(500);
	    		

	    		lastId = result[i]['id_board_entry'];
	    	}
	    }});
	}
});