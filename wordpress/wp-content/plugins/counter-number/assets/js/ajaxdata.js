jQuery(document).ready(function () {
  jQuery("body").on("click", ".open_in_new_tab_class", function () {
    return (
      "_blank" == jQuery(".open_in_new_tab_class").attr("target")
        ? window.open(jQuery(this).attr("href"), "_blank").focus()
        : window.open(jQuery(this).attr("href"), "_parent").focus(),
      !1
    );
  }),
    jQuery("body").on("click", ".con_6310_number_counter_info", function () {
      jQuery("body").prepend(
        '<div id="mycon_6310_modal" class="con_6310_modal"><div class="con_6310_modal-content"><span class="con-6310-close">&times;</span><div class="con_6310_modal_body_picture"><img src="" id="con_6310_modal_img" /></div><div class="con_6310_modal_body_content"><div id="con_6310_modal_designation"></div><div id="con_6310_modal_name"></div><div id="con_6310_modal_details"></div><br><br><div class="con_6310_modal_social"></div></div><br class="con_6310_clear" /></div><br class="con-6310-clear" /></div>'
      );
      var s = parseInt(jQuery(this).attr("number-counterid"));
      parseInt(jQuery(this).attr("link-id")) > 0
        ? "1" == jQuery(this).attr("target")
          ? window.open(jQuery(this).attr("link-url"), "_blank").focus()
          : window.open(jQuery(this).attr("link-url"), "_parent").focus()
        : s > 0 &&
          (jQuery("#con_6310_loading").show(),
          jQuery("body").css({ overflow: "hidden" }),
          $.ajax({
            type: "GET",
            dataType: "json",
            url: con_6310_ajax_object.con_6310_ajax_url,
            data: { action: "con_6310_number_counter_details", ids: s },
            success: function (s) {
              jQuery("#con_6310_loading").hide(),
                jQuery(".con_6310_modal-content").css({
                  "animation-name": "con-6310-animate" + s.styledata.effect,
                }),
                jQuery("#mycon_6310_modal").show(),
                jQuery("#con_6310_modal_img").attr("src", s.styledata.image),
                jQuery("#con_6310_modal_img").attr(
                  "image_hover",
                  s.styledata.image_hover
                ),
                jQuery("#con_6310_modal_designation").text(
                  s.styledata.designation
                ),
                jQuery("#con_6310_modal_name").text(s.styledata.name),
                jQuery(".con_6310_modal_social").html(""),
                jQuery(".con_6310_modal_social").append(s.link),
                jQuery("#con_6310_modal_details").html(
                  s.styledata.profile_details.replace(/\n/g, "<br>")
                );
            },
          }));
    });
});

jQuery(window).on("load", function () {
  let allCounters = jQuery(".con-6310-visitor-counter");
  if (allCounters.length) {
    allCounters.each(function () {
      let cookieName = jQuery(this).attr("id");
      let status = getCookie(cookieName);
      if (!status) {
        let total = Number(jQuery(this).attr("data-con-6310-end")) + 1;
        setCookie(cookieName, true, 1);
        cookieName = cookieName.split("-").pop();
        let dataObject = {
          action: "con_6310_save_data",
          id: cookieName,
          visitor: total
        };
        jQuery.ajax({
          type: "GET",
          dataType: "json",
          url: con_6310_ajax_object.ajax_url,
          data: dataObject,
          success: function (data) {
            
          },
        });
      }
    });
  }
});

function setCookie(cName, cValue, exdays) {
  let d = new Date();
  d.setTime(d.getTime() + exdays * 60 * 60 * 1000);
  let expires = "expires=" + d.toGMTString();
  document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
}

function getCookie(cName) {
  if (cName == "") {
    return "";
  }
  let name = cName + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
