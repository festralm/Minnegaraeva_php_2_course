
$(document).ready(function() {
    $("#file_logger").click(function () {
        var browserLogger = $("." + "browser_logger");
        var fileLogger = $("." + "file_logger");
        $(browserLogger).hide();
        $(fileLogger).show();
    })
    $("#browser_logger").click(function () {
        var browserLogger = $("." + "browser_logger");
        var fileLogger = $("." + "file_logger");
        $(browserLogger).show();
        $(fileLogger).hide();
    })
})