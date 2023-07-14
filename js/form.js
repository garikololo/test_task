$( document ).ready(function() {
    $(document).on("submit", "#registration-form", function (e) {
        e.preventDefault();
        var action = $(this).attr("action");
        var data = $(this).serialize();
        $.post(action, data, function (resp){
            $("#form-message").text(resp.message);
            $("#form-message").show();
            if(resp.status) {
                $("#registration-form").hide();
            }
        }, "JSON");
    });
});