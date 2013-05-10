jQuery(document).ready(function () {
	var tURL = jQuery("#tURL").focus().bind('keypress', handleKeypress);
	var tTag = jQuery("#tTag").bind('keypress', handleKeypress);

	jQuery("body").bind('keypress', handleKeypress);

	function handleKeypress (event) {
		if (event.keyCode === 13){
			var tag = "";
			if (tTag.val().trim() != "") {
				tag = "tag=" + tTag.val();
				tag += "&";
			}
			jQuery.ajax({
				url: "t1.php?" + tag + "link=" + encodeURIComponent(tURL.val()),
				success: function(dat) {
					if (typeof dat != 'undefined' && dat.trim() != "") {
						jQuery("#result").val(dat).focus();
					}
				},
				error: function(dat, err, st) {
					jQuery("#result").val(st);
				}
			});
		}
	}

});
