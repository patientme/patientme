$(function(){
  $("#mainBg, #mainFg, #overlay, #loginFrame").css({height: window.innerHeight});

  //Animations and Toggles
  var doc = $("html");
  var loginFrame = $("#loginFrame");
  var overlay = $("#overlay");

  doc.animate({opacity: "1"}, 2500);
  $("#navLogin").click(function(){
    loginFrame.css({display: "table"});
    overlay.css({display: "block"});
  }
  );

  $(".socialBox").click(function(){
    /*loginFrame.css({display: "none"});
    overlay.css({display: "none"});
    doc.css({opacity: "0"});
    doc.animate({opacity: "1"}, 1500);*/
    window.location.href = "logged.php";
  }
  );
});
