jQuery.fn.extend({
  live: function (event, callback) {
    if (this.selector) {
      jQuery(document).on(event, this.selector, callback);
    }
    return this;
  },
});

jQuery.fn.extend({
  size: function (event, callback) {
    if (this.selector) {
      jQuery(document).on(event, this.selector, callback);
    }
    return this;
  },
});

jQuery(document).ready(function () {
  let id = jQuery(".con-6310-counter-number").attr("con-6310-style-id");
  if (jQuery("#con_6310_fun_template_button").prop("checked") === false) {
    jQuery(".read_more_act_field").hide();
  }

  if (jQuery("#template_details_show_hide").prop("checked") === false) {
    jQuery(".details_act_field").hide();
  }
  
  if (jQuery("#con_6310_prefix_icon_show_hide").prop("checked") === false) {
    jQuery(".prefix-act-field").hide();
    if(id == '02' || id == '11' || id == '20'){
      jQuery(".con_6310_number_prefix_font_color-hide, .con_6310_number_prefix_font_hover_color-hide ").hide();
    }
  }

  if (jQuery("#con_6310_suffix_icon_show_hide").prop("checked") === false) {
    jQuery(".suffix-act-field").hide();
    if(id == '02' || id == '11' || id == '20'){
      jQuery(".con_6310_number_suffix_font_color-hide, .con_6310_number_suffix_font_hover_color-hide").hide();
    }
  }

  if (jQuery(".codemirror-textarea").length) {
    var code = jQuery(".codemirror-textarea")[0];
    var editor = CodeMirror.fromTextArea(code, {
      mode: "text/html",
      tabMode: "indent",
      autoCloseTags: true,
      lineNumbers: true,
      fixedGutter: true,
      lineWrapping: true,
      autoCloseBrackets: true,
    });
  }

  jQuery(
    "#tab-2, #tab-3, #tab-4, #tab-5, #tab-6, #tab-7, #tab-8, #tab-9, #tab-10, #tab-11, #tab-12"
  ).hide();
  jQuery("body").on("click", ".con-6310-mytab", function () {
    jQuery(".con-6310-mytab").removeClass("active");
    jQuery(this).addClass("active");
    var ids = jQuery(this).attr("id");
    ids = parseInt(ids.substring(3));
    jQuery(
      "#tab-1, #tab-2, #tab-3, #tab-4, #tab-5, #tab-6, #tab-7, #tab-8, #tab-9, #tab-10, #tab-11, #tab-12"
    ).hide();
    jQuery("#tab-" + ids).show();
    jQuery("#tab6").click(function (event) {
      jQuery(".codemirror-textarea").focus();
    });
    return false;
  });

  //Color Picker Script
  if (jQuery(".con_6310_color_picker").length) {
    jQuery(".con_6310_color_picker").each(function () {
      jQuery(this).minicolors({
        control: jQuery(this).attr("data-control") || "hue",
        defaultValue: jQuery(this).attr("data-defaultValue") || "",
        format: jQuery(this).attr("data-format") || "hex",
        keywords: jQuery(this).attr("data-keywords") || "",
        inline: jQuery(this).attr("data-inline") === "true",
        letterCase: jQuery(this).attr("data-letterCase") || "lowercase",
        opacity: jQuery(this).attr("data-opacity"),
        position: jQuery(this).attr("data-position") || "bottom left",
        swatches: jQuery(this).attr("data-swatches")
          ? jQuery(this).attr("data-swatches").split("|")
          : [],
        change: function (value, opacity) {
          if (!value) return;
          if (opacity) value += ", " + opacity;
          if (typeof console === "object") {
            console.log(value);
          }
        },
        theme: "bootstrap",
      });
    });
  }

  //Font select script
  jQuery(
    "#con_6310_title_font_family, #con_6310_details_font_family, #con_6310_read_more_font_family, #con_6310_number_font_family, #con_6310_number_prefix_font_family, #con_6310_number_suffix_font_family"
  ).fontselect();

  //Active or inactive read more
  jQuery("body").on("change", "#con_6310_fun_template_button", function () {
    if (jQuery(this).prop("checked") === true) {
      jQuery(`.read_more_act_field, .con-6310-template-${id}-read-more`).show();
    } else {
      jQuery(`.read_more_act_field, .con-6310-template-${id}-read-more`).hide();
    }
  });

  //Active or inactive description
  jQuery("body").on("change", "#template_details_show_hide", function () {
    if (jQuery(this).prop("checked") === true) {
      jQuery(`.details_act_field, .con-6310-template-${id}-description`).show();
    } else {
      jQuery(`.details_act_field, .con-6310-template-${id}-description`).hide();
    }
  });

  //Active or inactive Number Prefix
  jQuery("body").on("change", "#con_6310_prefix_icon_show_hide", function () {
    if (jQuery(this).prop("checked") === true) {
      jQuery(`.prefix-act-field, .con-6310-counter-${id}-count-prefix`).show();
      if(id == '02' || id == '11' || id == '20'){
        jQuery(".con_6310_number_prefix_font_color-hide, .con_6310_number_prefix_font_hover_color-hide").hide();
      } 
    } else {
      jQuery(`.prefix-act-field, .con-6310-counter-${id}-count-prefix`).hide();
    }
  });

  //Active or inactive Number Suffix
  jQuery("body").on("change", "#con_6310_suffix_icon_show_hide", function () {
    if (jQuery(this).prop("checked") === true) {
      jQuery(`.suffix-act-field, .con-6310-counter-${id}-count-suffix`).show();
      if(id == '02' || id == '11' || id == '20'){
        jQuery(".con_6310_number_suffix_font_color-hide, .con_6310_number_suffix_font_hover_color-hide").hide();
      }
    } else {
      jQuery(`.suffix-act-field, .con-6310-counter-${id}-count-suffix`).hide();
    }
  });

  //Choose background type start
  if (jQuery("#background_type").length) {
    jQuery(".background-type-2, .background-type-3, .background-type-4").hide();
    jQuery(".background-type-" + jQuery("#background_type").val()).show();

    jQuery("body").on("change", "#background_type", function () {
      var val = jQuery(this).val();
      jQuery(
        ".background-type-2, .background-type-3, .background-type-4"
      ).hide();
      jQuery(`.background-type-${val}`).show();
    });

    jQuery("body").on(
      "click",
      "#con_6310_box_background_image_button",
      function (e) {
        e.preventDefault();
        var image = wp
          .media({
            title: "Upload Image",
            multiple: false,
          })
          .open()
          .on("select", function (e) {
            var uploaded_image = image.state().get("selection").first();
            var image_url = uploaded_image.toJSON().url;
            jQuery(`#con_6310_box_background_image`).val(image_url);
          });

        jQuery("#wpm_6310_add_new_media").css({
          "overflow-x": "hidden",
          "overflow-y": "auto",
        });
      }
    );
  }
  
  //Manage item page start
  jQuery("#profile_details, #effect-appearance").hide();
  jQuery("body").on("click", "#add-accordion", function () {
    jQuery("#con-6310-modal-add-item").fadeIn(500);
    jQuery("body").css({
      overflow: "hidden",
    });
    return false;
  });
  
  //End Number Type
  jQuery(".review_post_show_hide").hide();
  jQuery("body").on("change", ".end_number_type", function(){
    let val = Number(jQuery(this).val());
    if(val == '2'){
      jQuery(".end_number_show_hide").hide();
      jQuery(".review_post_show_hide").show();
    }else if(val == '1'){
      jQuery(".review_post_show_hide").hide();
      jQuery(".end_number_show_hide").show();
    }
  });
  //custom query section
    jQuery(".post_id_count, .custom_query_show_hide").hide();
    jQuery("body").on("click", "#dynamic_option_type", function(){
      let val = Number(jQuery(this).val());
      if(val == '5' || val =='7'){      
        jQuery(".post_id_count").show();
      }else {
        jQuery(".post_id_count").hide();
      }
      if(val == '8'){      
        jQuery(".custom_query_show_hide").show();
      }else {
        jQuery(".custom_query_show_hide").hide();
      }
    });
      

  //Manage icon Start
  jQuery(".custom-icon-new").hide();
  jQuery("body").on("change", ".icontype_new", function () {
    let val = Number(jQuery(this).val());
    jQuery(".custom-icon-new, .font-awesome-icon-new").hide();
    val
      ? jQuery(".font-awesome-icon-new").show()
      : jQuery(".custom-icon-new").show();
  });
  jQuery("#icon-filter").on("keyup", function () {
    var value = jQuery(this).val().toLowerCase();
    jQuery(".con-6310-choose-icon li").filter(function () {
      jQuery(this).toggle(
        jQuery(this).attr(`data-icon-name`).toLowerCase().indexOf(value) > -1
      );
    });
  });

  jQuery("body").on(
    "click",
    "#con-6310-font-icon-close, .con-6310-font-awesome-close",
    function () {
      jQuery("#con_6310_social_icon").fadeOut(500);
    }
  );

  jQuery("body").on("click", ".con-6310-plus-icons i", function () {
    let selIds = jQuery(this)
      .closest(".con-6310-plus-icons")
      .siblings(".con-6310-form-input")
      .attr("id");
    jQuery("ul.con-6310-choose-icon").attr("data-current-id", selIds);
    if (jQuery("#icon-filter").val()) {
      jQuery("#icon-filter").val("");
      jQuery(".con-6310-choose-icon li").filter(function () {
        jQuery(this).toggle();
      });
    }
    jQuery("#con_6310_social_icon").fadeIn(500);
    jQuery("body").css({
      overflow: "hidden",
    });
    jQuery("#icon-filter").focus();
    return false;
  });

  jQuery("body").on("click", "ul.con-6310-choose-icon li", function () {
    let cls = jQuery(this).find("i").attr("class");
    jQuery(`#` + jQuery("ul.con-6310-choose-icon").attr("data-current-id")).val(
      cls
    );
    jQuery("#con_6310_social_icon").fadeOut(500);
  });
  //Manage icon End

  
    /* ######### Media Start ########### */
    jQuery("body").on("click", ".con-6310-side-image-upload", function(e) {
      e.preventDefault();
      var image = wp.media({
          title: 'Upload Image',
          multiple: false
        }).open()
        .on('select', function(e) {
          var uploaded_image = image.state().get('selection').first();
          var image_url = uploaded_image.toJSON().url;
          jQuery(`#side_image`).val(image_url);
        });

      jQuery("#con_6310_add_new_media").css({
        "overflow-x": "hidden",
        "overflow-y": "auto"
      });
    });
    /* ######### Media End ########### */

  /* ######### Custom Icon Media Start ########### */
  jQuery("body").on("click", ".con-6310-icon-upload", function (e) {
    e.preventDefault();
    let dataId = jQuery(this).attr("data-id");
     var image = wp
      .media({
        title: "Upload Image",
        multiple: false,
      })
      .open()
      .on("select", function (e) {
        var uploaded_image = image.state().get("selection").first();
        var image_url = uploaded_image.toJSON().url;
        jQuery(`#${dataId}`).val(image_url);
      });

    jQuery("#wpm_6310_add_new_media").css({
      "overflow-x": "hidden",
      "overflow-y": "auto",
    });
  });
  /* ######### Custom Icon Media End ########### */

  /* Modal Close Start */
  jQuery("body").on(
    "click",
    ".con-6310-close, #con-6310-from-close",
    function () {
      jQuery(
        "#con-6310-modal-add, #con-6310-modal-edit, #con_6310_social_icon, #con-6310-modal-add-item, #con-6310-modal-edit-item"
      ).fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    }
  );
  jQuery("body").on("click", ".con-6310-close-2", function () {
    jQuery("#con_6310_social_icon").fadeOut(500);
    jQuery("body").css({
      overflow: "initial",
    });
  });
  jQuery(window).click(function (event) {
    if (event.target == document.getElementById("con-6310-modal-edit-item")) {
      jQuery("#con-6310-modal-edit-item").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    } else if (
      event.target == document.getElementById("con-6310-modal-add-item")
    ) {
      jQuery("#con-6310-modal-add-item").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    } else if (event.target == document.getElementById("con-6310-modal-add")) {
      jQuery("#con-6310-modal-add").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    } else if (event.target == document.getElementById("con-6310-modal-edit")) {
      jQuery("#con-6310-modal-edit").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    } else if (
      event.target == document.getElementById("con_6310_social_icon")
    ) {
      jQuery("#con_6310_social_icon").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    }
  });
  /* Modal Close End */

  //Manage item page end
});
