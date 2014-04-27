
        $.fn.preload = function() {
            this.each(function(){
                $('<img/>')[0].src = this;
            });
        }

        $( document ).ready(function() {

                $('a, li').hover(function () {
                    $(this).toggleClass("active");
                });
            
                var bcg = [
                'http://localhost:8080/vinohradska85/images/bcg1.jpg',
                'http://localhost:8080/vinohradska85/images/bcg2.jpg',
                'http://localhost:8080/vinohradska85/images/bcg3.jpg',
                ];   
    
                $(bcg).preload();

                //change background every 10 seconds
                var i = 0,
                    auto = true;

                setInterval(function(){
                        if (auto){
                            var pos = i%3;
                            var posa = pos+1;
                            $(".js-background").css("background-image", "url('" + bcg[pos] + "')");
                            $(".js-bcg").removeClass("active");
                            $(".bcg-buttons ul li:nth-child("+ posa +")").addClass("active");
                            i++;
                        }
                    },3000);

                $(".js-bcg").mouseover(function(){
                    //console.log("animace zastavena");
                    var value = $(this).text();
                    $(".js-background").css("background-image", "url('" + bcg[value] + "')");
                    $(".js-bcg").removeClass("active");
                    $(this).addClass("active");
                    auto=false;
                });
                $(".js-bcg").mouseout(function(){
                    //console.log("animace spustena");
                    auto=true;
                });

                /*
                $(document).ready(function(){
                    $(this).bind('mousewheel', function(e){
                        if(e.originalEvent.wheelDelta /120 > 0) {
                            //console.log('scrolling up !');
                            $('html,body').animate({
                                scrollTop: $(".js-top-anchor").offset().top},
                                'slow');
                        }
                        else{
                            //console.log('scrolling down !');
                             $('html,body').animate({
                                scrollTop: $(".js-bottom-anchor").offset().top},
                                'slow');
                        }
                    });
                });
                */

        });