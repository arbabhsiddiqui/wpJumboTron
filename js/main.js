jQuery(document).ready(function ($) {
  $(".filter-btn").click(function () {
    var value = $(this).attr("data-filter");

    if (value == "all") {
      $(".ets-col").show("1000");
    } else {
      $(".ets-col")
        .not("." + value)
        .hide("3000");
      $(".ets-col")
        .filter("." + value)
        .show("3000");
    }
    if ($(".filter-btn").removeClass("active")) {
      $(this).removeClass("active");
    }
    $(this).addClass("active");
  });
});
