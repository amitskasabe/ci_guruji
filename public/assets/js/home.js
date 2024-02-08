$(document).ready(function() {
    console.log(" document is ready ");
     let slide1 = $("#slide1")
     let slide2 = $("#slide2")
  
     let next = $("#next");
     let prev = $("#prev");
  
    next.click(function(){
      slide1.css("display", "none");
      slide2.css("display", "block");
  
    })
  
    prev.click(function(){
      slide2.css("display", "none");
      slide1.css("display", "block");
    })
  
     
  });