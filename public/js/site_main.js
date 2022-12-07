function showPasswordReset() {
    $("#overlay-bg").show(300).find(">div").hide().end().find("#floatingresetbox").show();
    $("body").css("overflow", "hidden");
}

function showLogin() {
    $("#overlay-bg").show(300).find(">div").hide().end().find("#floatingloginbox").show();
    $("body").css("overflow", "hidden");
}

function hideLogin() {
    $("#overlay-bg").hide(300);
    $("body").css("overflow", "auto");
}

function showPolicy() {
    $("#overlay-bg").show(300).find(">div").hide().end().find("#floatingpolicybox").show();
    $("body").css("overflow", "hidden");
}

function hidePolicy() {
    $("#overlay-bg").hide(300);
    $("body").css("overflow", "auto");
}

$(document).ready(function () {
    $("#overlay-bg").on("click", function(event) {
        if ($(event.target).parents(".mainbox").length === 0) {
            hideLogin();
        }
    });

    $(".slider-controls").on("click", "li", function () {
        var index = $(this).index() + 1;
        var oldIndex = $(".slider-controls .highlighted").index() + 1;

        
        //initInterval();
        
        $(".slider-controls .highlighted").removeClass("highlighted");
        $(this).addClass("highlighted");

        if ($(".slider-material.current").length > 0 && $(".slider-material.current") !== $(this)) {
            $(".slider-" + oldIndex + "-special-background").css("opacity", 0);
            $(".slider-" + index + "-special-background").css("opacity", 1);

            $(".slider-material.current").removeClass("current").fadeOut(300, function () {

                $(".slider-" + index + "-content").addClass("current").fadeIn(300);
            });
        } else {
            $(".slider-" + index + "-special-background").css("opacity", 1);

            $(".slider-" + index + "-content").addClass("current").fadeIn(300);
        }
    });

    $(".steps-menu li").on("click", function () {
        $(".steps-menu .selected").removeClass("selected");
        $(this).addClass("selected");

        $("#how-to-start-section").attr("class", "page-section light-bg selected-slide-" + $(this).index());
    });

    $(".buttons-tabs").on("click", "button", function () {
        $(this).parents(".buttons-tabs").find(".selected").removeClass("selected");
        $(this).parents("li").addClass("selected");

        if ($(this).parents("li").index() === 1) {
            $("#faq-tab").slideUp(300);
            $("#contact-us-tab").slideDown(300);
        } else {
            $("#faq-tab").slideDown(300);
            $("#contact-us-tab").slideUp(300);
        }
    });
});