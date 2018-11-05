$(function() {

    var newHash      = "",
        $mainContent = $("#main-buttons"),
        $head        = $("#hea"),
        $main        = $(".buttons"),
        $sub         = $("#sub"),
        $pageWrap    = $("#page-wrap"),
        baseHeight   = 0,
        $el;
    
    $("nav").delegate("a", "click", function() {
  a:      if($(this).attr("onclick")){
            break a;
        }
        else{
        window.location.hash = $(this).attr("href");
        return false;
     }});
    
    $(window).bind('hashchange', function(){
    
        newHash = window.location.hash.substring(1);
        

    
       if (newHash) {
       
            $mainContent
                .find(".buttons")
                .fadeOut(250, function() {
                    $head.load(newHash + " .css");
                    $mainContent.hide().load(newHash + " .buttons", function() {
                        
                        $sub.hide();
                        
                        });
                $mainContent.fadeIn(250);

                
                        $("nav a").removeClass("current");
                        $("nav a[href="+newHash+"]").addClass("current");
               
                    
            });
               
        };
        
    });
    
    $(window).trigger('hashchange');

});