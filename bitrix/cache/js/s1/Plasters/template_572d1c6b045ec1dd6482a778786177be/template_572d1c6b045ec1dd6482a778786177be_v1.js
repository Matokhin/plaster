
; /* Start:"a:4:{s:4:"full";s:54:"/local/templates/Plasters/assets/app.js?16258846955461";s:6:"source";s:39:"/local/templates/Plasters/assets/app.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function() {
	$(function() {
	let slider = $("#slider");
	slider.slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true
});

	$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: true
});

odd = $(".articles__item:nth-child(odd)");
child = odd.children(".articles__img");
child.addClass("img-right");



  
  $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active').siblings().removeClass('active')
      .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
  });
  


    $('#dropdown_title').click(function(event) {
        $(this).children("ul").show();
        event.stopPropagation(); 
        
    });

    $('#features').click(function(event) {
        $(this).children("ul").slideToggle();
        event.stopPropagation();
 }); 

    $('#filter_dropdown-color').click(function(event) {
        $(this).children("ul").slideToggle();
        event.stopPropagation();
 }); 

    $('#filter_dropdown-price').click(function(event) {
        $(this).children("ul").slideToggle();
        event.stopPropagation();
 }); 

    $('#filter_dropdown-offers').click(function(event) {
        $(this).children("ul").slideToggle();
        event.stopPropagation();
 }); 

 var i = $(".counter input").val();
    $(".counter div:first-child").click(function(){
    	if (i <= 1) {return;};
        $(".counter input").val(--i);
            
    });
    $(".counter div:last-child").click(function(){
        $(".counter input").val(++i);
    });

    

    $(document).mouseup(function(e) { 
        let div = $(".request");
        $(".order").click(function() {
        $(".request, .bg").show();
            
        });
          if(!div.is(e.target) && div.has(e.target).length === 0 || $(".close").is(e.target))  {
            $(".request, .bg").hide();
          }
      });





    $(".request form").addClass("ajax_form");
    $("input[name*='form_text_1']").addClass("name");
    $("input[name*='form_text_2']").addClass("number");

    $(".ajax_form").submit(function() {
        var th = $(this);
        var name = $(".name").val();
        var number = $(".number").val();
        if(name == "") {
            $("#errorMess").text("Введите ваше имя!");
            return false;
        } else if(number == "") {
            $("#errorMess").text("Введите номер телефона!");
            return false;
        }
         $("#errorMess").text("");
        $.ajax({
            type: "POST",
            url: this.action,
            data: th.serialize()
        }).done(function() {
            setTimeout(function() {
                th.trigger("reset");
            }, 1000);
        });
         $("#errorMess").text("Наш оператор свяжется с вами в ближайшие 2 минуты!");
        return false;
    });


    $(document).mouseup(function(e) { 
        let div = $(".auth_form");
        $(".authorization").click(function() {
        $(".auth_form, .bg_auth").show();
            
        });
          if(!div.is(e.target) && div.has(e.target).length === 0 || $(".close").is(e.target))  {
            $(".auth_form, .bg_auth").hide();
          }
      });

    
    let login = $('input[name="USER_LOGIN"]');
    let password = $('input[name="USER_PASSWORD"]');
    let confirm = $('button[name="confirm"]');
     
        confirm.click(function(e) {
            if(login.val().length < 3 && password.val().length < 3) {
               login.addClass("required_error"); 
               password.addClass("required_error");
               e.preventDefault();
            }else if (login.val().length < 3) {
             login.addClass("required_error");
             password.removeClass("required_error");
             e.preventDefault();
             
         } else if(password.val().length < 3) {
            password.addClass("required_error");
            login.removeClass("required_error");
            e.preventDefault();
         } else {
            login.removeClass("required_error");
            password.removeClass("required_error");
         }
        
    });

        let reg_confirm = $('input[name="register_submit_button"]');

        let reg_name = $('input[name="REGISTER[NAME]"]');
        let reg_phone = $('input[name="REGISTER[PERSONAL_PHONE]"]');
        let reg_login = $('input[name="REGISTER[LOGIN]"]');
        let reg_email = $('input[name="REGISTER[EMAIL]"]');
        let reg_password = $('input[name="REGISTER[PASSWORD]"]');
        let reg_confirm_password = $('input[name="REGISTER[CONFIRM_PASSWORD]"]');


        reg_confirm.click(function(e) {
            if(!reg_name.val() || !reg_phone.val() || !reg_login.val() || !reg_email.val() || !reg_password.val() || !reg_confirm_password.val()) {
               $(".reg_required").html("Заполните все обязательные поля!"); 
               e.preventDefault();
            }
        
    });

});

})



/* End */
;
; /* Start:"a:4:{s:4:"full";s:85:"/local/templates/Plasters/components/bitrix/menu/top_menu/script.min.js?1623106883407";s:6:"source";s:67:"/local/templates/Plasters/components/bitrix/menu/top_menu/script.js";s:3:"min";s:71:"/local/templates/Plasters/components/bitrix/menu/top_menu/script.min.js";s:3:"map";s:71:"/local/templates/Plasters/components/bitrix/menu/top_menu/script.map.js";}"*/
var jshover=function(){var e=document.getElementById("horizontal-multilevel-menu");if(!e)return;var t=e.getElementsByTagName("li");for(var n=0;n<t.length;n++){t[n].onmouseover=function(){this.className+=" jshover"};t[n].onmouseout=function(){this.className=this.className.replace(new RegExp(" jshover\\b"),"")}}};if(window.attachEvent)window.attachEvent("onload",jshover);
/* End */
;; /* /local/templates/Plasters/assets/app.js?16258846955461*/
; /* /local/templates/Plasters/components/bitrix/menu/top_menu/script.min.js?1623106883407*/

//# sourceMappingURL=template_572d1c6b045ec1dd6482a778786177be.map.js