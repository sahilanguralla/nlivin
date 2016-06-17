$(".circular.button").hover(
  function () {
    $(this).find(".heart.icon").addClass("red");
  },
  function () {
    $(this).find(".heart.icon").removeClass("red");
  }
);