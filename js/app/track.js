/* Отслеживание груза */
(function(win, doc,$){
	var track = (function (){
      function goTracking(className) {
        alert('go tracking');
      }

			// href="/отследить-груз"
			function searchPost() {
				// save number to cookie #numberPost
				// $.cookie('numberPost') = $('#numberPost').val();
				var numberPost = $('#numberPost').val();
				numberPost = encodeURIComponent(numberPost);
				// save last location
				if(numberPost=="")
				{
					location.replace('/отследить-груз')
				}
				else
				{
					location.replace('/отследить-груз?postment=' + numberPost)
				}

			};

  		return {
					goTracking: goTracking,
					searchPost: searchPost
  		};
	})();

	$(doc).ready(function(){
	console.log('Init track.js')
	});
	if(!win.track) win.track = track;
})(window, document,jQuery);
