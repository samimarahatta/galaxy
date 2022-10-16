$(document).ready(function () {
  $(".main-slide").slick({
    arrows: false,
    autoplay: true,
    fade: true,
    speed: 500,
    lazyLoad: "progressive",
    dots: true,
  });
  $(".brands").slick({
    autoplay: true,
    arrows: true,
    speed: 300,
    dots: false,
    slidesToShow: 7,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".product-item-wrap").slick({
    infinite: false,
    autoplay: false,
    arrows: true,
    speed: 300,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 599,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".nav-link").click(function () {
    $(".product").slick("refresh");
  });
  // countdown timer

  function makeTimer() {
    //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
    var endTime = new Date("29 April 2021 9:56:00 GMT+01:00");
    endTime = Date.parse(endTime) / 1000;

    var now = new Date();
    now = Date.parse(now) / 1000;

    var timeLeft = endTime - now;

    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - days * 86400) / 3600);
    var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
    var seconds = Math.floor(
      timeLeft - days * 86400 - hours * 3600 - minutes * 60
    );

    if (hours < "10") {
      hours = "0" + hours;
    }
    if (minutes < "10") {
      minutes = "0" + minutes;
    }
    if (seconds < "10") {
      seconds = "0" + seconds;
    }

    $("#days").html(days + "<span>Days</span>");
    $("#hours").html(hours + "<span>Hrs</span>");
    $("#minutes").html(minutes + "<span>Mins</span>");
    $("#seconds").html(seconds + "<span>Secs</span>");
  }

  setInterval(function () {
    makeTimer();
  }, 1000);
  // var test =  $(".left-content img").outerHeight() - 80;
  // $(".left-menu ul").height(test);
});
