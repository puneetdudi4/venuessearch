jQuery(document).ready(function(a){window.console||(window.console={log:function(a){}});var b=[];a(".wc-bookings-booking-form").on("change","input, select",function(c){var d=a(this).attr("name"),e=a(this).closest("fieldset"),f=e.find(".picker:eq(0)");if(!f.data("is_range_picker_enabled")||"wc_bookings_field_duration"===d){var g=a(".wc-bookings-booking-form").index(this);$form=a(this).closest("form");var h=!$form.find("[name='wc_bookings_field_start_date_day']").val()&&!$form.find("#wc_bookings_field_start_date").val();if(!jQuery(c.target).hasClass("addon")||!h){var i=$form.find("input.required_for_calculation"),j=!0;if(a.each(i,function(b,c){var d=a(c).val();d||(j=!1)}),!j)return void $form.find(".wc-bookings-booking-cost").hide();$form.find(".wc-bookings-booking-cost").block({message:null,overlayCSS:{background:"#fff",backgroundSize:"16px 16px",opacity:.6}}).show(),b[g]=a.ajax({type:"POST",url:booking_form_params.ajax_url,data:{action:"wc_bookings_calculate_costs",form:$form.serialize()},success:function(b){"{"!==b.charAt(0)&&(console.log(b),b="{"+b.split(/\{(.+)?/)[1]),result=a.parseJSON(b),"ERROR"==result.result?($form.find(".wc-bookings-booking-cost").html(result.html),$form.find(".wc-bookings-booking-cost").unblock(),$form.find(".single_add_to_cart_button").addClass("disabled")):"SUCCESS"==result.result?($form.find(".wc-bookings-booking-cost").html(result.html),$form.find(".wc-bookings-booking-cost").unblock(),$form.find(".single_add_to_cart_button").removeClass("disabled")):($form.find(".wc-bookings-booking-cost").hide(),$form.find(".single_add_to_cart_button").addClass("disabled"),console.log(b)),a(document.body).trigger("wc_booking_form_changed")},error:function(){$form.find(".wc-bookings-booking-cost").hide(),$form.find(".single_add_to_cart_button").addClass("disabled")},dataType:"html"})}}}).each(function(){var b=a(this).closest("form").find(".single_add_to_cart_button");b.addClass("disabled")}),a(".single_add_to_cart_button").on("click",function(b){return a(this).hasClass("disabled")?(alert(booking_form_params.i18n_choose_options),b.preventDefault(),!1):void 0}),a(".wc-bookings-booking-form, .wc-bookings-booking-form-button").show().removeAttr("disabled")});