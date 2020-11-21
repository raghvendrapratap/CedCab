$(function() {

    $("#pickupMsg1").hide();
    $("#dropMsg1").hide();
    $("#typeMsg").hide();
    $("#luggageMsg").hide();

    $("#type").change(function() {
        var cabType = $("#type").val();
        if (cabType == "CedMicro") {
            $("#luggageMsg").show();
            $("#luggage").attr('disabled', 'disabled');
            $("#luggage").val(null);
        } else {
            $("#luggageMsg").hide();
            $("input").removeAttr('disabled');
        }
    });

    $("#luggage").bind("keypress", function(e) {
        var keyCode = e.which ? e.which : e.keyCode

        if (!(keyCode >= 48 && keyCode <= 57)) {
            $(".error").css("display", "inline");
            return false;
        } else {
            $(".error").css("display", "none");
        }
    });

    $(".options").change(function() {
        $("select option").prop("disabled", false);
        $(".options").not($(this)).find("option[value='" + $(this).val() + "']").prop("disabled", true);
    });
});


$(function() {

    $("#submit").click(function(x) {
        $("#pickupMsg1").hide();
        $("#dropMsg1").hide();
        $("#typeMsg").hide();
        x.preventDefault();

        var pickupLocation = $("#pickup").val();
        var dropLocation = $("#drop").val();
        var cabType = $("#type").val();
        var luggage = $("#luggage").val();

        if (pickupLocation == "" || dropLocation == "" || cabType == "") {

            if (pickupLocation == "") {
                $("#pickupMsg1").show();
            }

            if (cabType == "") {
                $("#typeMsg").show();
            }
            if (dropLocation == "") {
                $("#dropMsg1").show();
            }

        } else {
            $("#submit").attr('data-target', '#exampleModalCenter');
            $.ajax({
                url: 'cab.php',
                type: 'POST',
                data: {
                    pickupLocation: pickupLocation,
                    dropLocation: dropLocation,
                    cabType: cabType,
                    luggage: luggage
                },

                success: function(result) {
                    console.log(result);
                    $("#result").html("Rs. " + result);
                },
                error: function() {
                    $("#result").html("Some Error");
                }
            })
        }
    });
});