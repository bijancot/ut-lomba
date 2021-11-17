// NAVBAR BUTTON
$(document).ready(function () {
    $(".nav-sublink").click(function () {
        $(this).children().toggleClass("active");
    });
});
$(document).mouseup(function (e) {
    var container = $(".nav-sublink");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        $(".sub-nav").removeClass("active");
    }
});

$(document).ready(function () {
    $("#goToStep1").click(function () {
        $("#register-step-2").removeClass("active");
        setTimeout(function () {
            $("#register-step-1").addClass("active");
        }, 700);
    });
    $("#goToStep2").click(function () {
        $("#register-step-1").removeClass("active");
        setTimeout(function () {
            $("#register-step-2").addClass("active");
        }, 700);
    });
});


$(document).ready(function () {
    $("#toggleSee").click(function () {
        $(".desc-text-container").toggleClass("active");
        $(".gradient-decor").toggleClass("inactive");
    });
});

$(document).ready(function () {
    $(".collapse-card").click(function () {
        $(this).toggleClass("active");
        $(this).siblings("div").toggleClass("active");
    });
});

