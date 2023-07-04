// JavaScript Document Page scroll

function slowdownScroll() {
   if(navigator.appName == "Microsoft Internet Explorer" && document.compatMode == "CSS1Compat") {
      sctop = document.body.parentNode.scrollTop;
   }
   else if(window.pageYOffset){
      sctop = window.pageYOffset;
   } else {
      sctop = document.body.scrollTop;
   }

   if(sctop){
      scup = Math.ceil(sctop*.05);
      scrollBy(0,-scup);
      if (sctop-scup) setTimeout("slowdownScroll()",10);
   }
}