$(function(){
  //Alignment and Responsive design fixes
  $(".mainView, .sideBar").css({paddingTop: (parseInt($(".topBar").css("height"))-2)+"px"});
  $("#tooth").css({height: $(".fa-medkit").css("height")});
  //!!Animations and Toggles!!
  $("html").animate({opacity: "1"}, 1500);

  //Side Panel
  var sideDocked = true;
  var sideBar = $(".sideBar");
  $(".menuIcon").click(function(){
    if(sideDocked){
      sideDocked = false;
      sideBar.animate({right: "0px"}, 800);
    }
    else {
      sideDocked = true;
      sideBar.animate({right: "-40%"}, 800);
    }
  })

  //Row fading Animation
  $(".mainView").on("click", ".btn", function(){
    var record = $(this).parents(".record");
    record.find("td").css({border: "0px"});
    record.animate({opacity: "0"}, 600, function(){
      $(this).find("img, .btn").css({display: "none"});
      $(this).find("td").animate({padding: "0px"}, 100, function(){
        $(this).find("p").animate({fontSize: "0px", margin: "0px"}, 600, function(){
          record.css({display: "none"});
        })
      });
    });
  });

  //Switching between active areas
  var currentArea = $('');
  $(".fa-stack, #tooth, .fa-map-marker, .fa-calendar").click(function(){
    var id = $(this).attr("con");
    if(currentArea.length > 0)
    {
      currentArea.animate({opacity: "0"}, 600);
      currentArea.css({display: "none"});
    }
    currentArea = $("#"+id);
    currentArea.css({display: "table"});
    currentArea.animate({opacity: "1"}, 600);
  })
  //!!Generating doctor records !!

  var doctorsBody = $("#doctors >tbody");
  for(i = 0; i < doctor.length; i++){
    doctorsBody.append(
      '<tr class="record"><td><img src="assets/images/'+doctor[i]["gender"]+'doctor.jpg"></td><td><div class="container"><div class="row"><div class="col-xs-6"><p>Name: '+doctor[i]["firstName"]+' '+doctor[i]["lastName"]+
      '<br>Address: '+doctor[i]["address"]+'<br>  City: '+doctor[i]["city"]+'<br>Province: '+doctor[i]["province"]+
      '</p></div><div class="col-xs-6"><p>Postal Code: '+doctor[i]["postalCode"]+'<br>Specialty: '+doctor[i]["specialty"]+
      '<br>Alternative Language: '+doctor[i]["alternativeLanguage"]+'<br>Available: '+doctor[i]["available"]+'</p></div></div></div></td><td><div class="btn btn-default">Book Now</div></td></tr>'
    );
  }
  var dentistsBody = $("#dentists >tbody");
  for(i = 0; i < dentist.length; i++){
    dentistsBody.append(
      '<tr class="record"><td><img src="assets/images/'+dentist[i]["gender"]+'doctor.jpg"></td><td><div class="container"><div class="row"><div class="col-xs-6"><p>Name: '+dentist[i]["firstName"]+' '+dentist[i]["lastName"]+
      '<br>Address: '+dentist[i]["address"]+'<br>  City: '+dentist[i]["city"]+'<br>Province: '+dentist[i]["province"]+
      '</p></div><div class="col-xs-6"><p>Postal Code: '+dentist[i]["postalCode"]+'<br>Specialty: '+dentist[i]["specialty"]+
      '<br>Alternative Language: '+dentist[i]["alternativeLanguage"]+'<br>Available: '+dentist[i]["available"]+'</p></div></div></div></td><td><div class="btn btn-default">Book Now</div></td></tr>'
    );
  }

  var optometristsBody = $("#optometrists >tbody");
  for(i = 0; i < optometrist.length; i++){
    optometristsBody.append(
      '<tr class="record"><td><img src="assets/images/'+optometrist[i]["gender"]+'doctor.jpg"></td><td><div class="container"><div class="row"><div class="col-xs-6"><p>Name: '+optometrist[i]["firstName"]+' '+optometrist[i]["lastName"]+
      '<br>Address: '+optometrist[i]["address"]+'<br>  City: '+optometrist[i]["city"]+'<br>Province: '+optometrist[i]["province"]+
      '</p></div><div class="col-xs-6"><p>Postal Code: '+optometrist[i]["postalCode"]+'<br>Specialty: '+optometrist[i]["specialty"]+
      '<br>Alternative Language: '+optometrist[i]["alternativeLanguage"]+'<br>Available: '+optometrist[i]["available"]+'</p></div></div></div></td><td><div class="btn btn-default">Book Now</div></td></tr>'
    );
  }
});
