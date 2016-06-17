$(".circular.button").hover(
  function () {
    $(this).find(".heart.icon").addClass("red");
  },
  function () {
    $(this).find(".heart.icon").removeClass("red");
  }
);

$('.sidebar-toggle').each(function() {
	var sidebar = $($(this).data('target'));
	sidebar.sidebar({
		'dimPage': false
	});
	$("#header-menu").sidebar('attach events', $(this));
})
