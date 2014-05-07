
        $.fn.preload = function() {
            this.each(function(){
                $('<img/>')[0].src = this;
            });
        }

        $( document ).ready(function() {

                $('a, li, tr').hover(function () {
                    $(this).toggleClass("active");
                });
            
                var bcg = [
                'http://qa.vinohradska85.cz/images/1.jpg',
                'http://qa.vinohradska85.cz/images/2.jpg',
                'http://qa.vinohradska85.cz/images/3.jpg',
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

                $('.js-section').css("display", "none");
                $('.js-position').css("display", "block");

                $('.js-btn-position').click(function(){
                    $('.js-btn-position').removeClass("selected");
                    $('.js-section').css("display", "none");
                    var section = $(this).attr("href").substring(1);
                    console.log(section);
                    $('.js-'+section).css("display", "block");
                    $(this).addClass("selected");
                });

                //form function
                function validateEmail($email) {
                  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                  if( !emailReg.test( $email ) ) {
                    return false;
                  } else {
                    if ($email.length == 0){
                        return false;
                    }
                    return true;
                  }
                }

                //form
                $('.js-info').css("display", "none");

                $('.js-send').submit(function(e){

                    //sending
                    e.preventDefault();

                    $('.js-hint').removeClass("wrong");

                    var status = true;
                    //validation
                    if ($('.js-form-name').val().length < 3){
                        status = false;
                        $('.js-hint-name').addClass("wrong");
                    }
                    if ($('.js-form-phone').val().length < 9){
                        status = false;
                        $('.js-hint-phone').addClass("wrong");
                    }
                    if (!validateEmail($('.js-form-email').val())){
                        status = false;
                        $('.js-hint-email').addClass("wrong");
                    }
                    if ($('.js-form-text').val().length < 10){
                        status = false;
                        $('.js-hint-text').addClass("wrong");
                    }
                    if ($('.js-form-check').val() !== "nospam"){
                        status = false;
                    }
                    
                    //console.log(status);

                    if (status){
                        var name,
                            phone,
                            email,
                            text;

                        $.ajax({
                            type: "POST",
                            //url: "http://localhost:8080/vinohradska85/pages/function-email_en.php",
                            url: "http://qa.vinohradska85.cz/pages/function-email_en.php",
                            data: $(".js-send").serialize(), // serializes the form's elements.
                            success: function(data)
                            {
                                console.log(data); // show response from the php script.
                                if (data === "true"){
                                    $('.js-send').css("display", "none");
                                    $('.js-sent').css("display", "block");
                                } else {
                                    $('.js-send').css("display", "none");
                                    $('.js-error').css("display", "block");
                                }
                            }
                        });

                        return false; // avoid to execute the actual submit of the form.   
                    }
                });

                $("a.js-onpage").smoothScroll();
                
        });