$(document).ready(function () {
    let len = $("#opis").val().length;
    $("#charNum").text(len);

    $("#opis").on("input", function () {
        let len = $("#opis").val().length;
        if (len >= 500) {
            val.value = val.value.substring(0, 500);
        } else {
            $("#charNum").text(len);
        }
    });
});
