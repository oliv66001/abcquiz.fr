var compteur = 0;

$(() => {
    $("#form1").click(function() {
        if ($("#radio2").is(":checked")) {
            compteur++;
            $("#goodResponse1")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form1").remove();
        } else {
            $("#goodResponse1")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form1").remove();
        }
    });
    $("#form2").click(function() {
        if ($("#radio5").is(":checked")) {
            compteur++;
            $("#goodResponse2")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form2").remove();
        } else {
            $("#goodResponse2")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form2").remove();
        }
    });
    $("#form3").click(function() {
        if ($("#radio10").is(":checked")) {
            compteur++;
            $("#goodResponse3")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form3").remove();
        } else {
            $("#goodResponse3")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form3").remove();
        }
    });
    $("#form4").click(function() {
        if ($("#radio15").is(":checked")) {
            compteur++;
            $("#goodResponse4")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form4").remove();
        } else {
            $("#goodResponse4")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form4").remove();
        }
    });
    $("#form5").click(function() {
        if ($("#radio17").is(":checked")) {
            compteur++;
            $("#goodResponse5")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form5").remove();
        } else {
            $("#goodResponse5")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form5").remove();
        }
    });
    $("#form6").click(function() {
        if ($("#radio23").is(":checked")) {
            compteur++;
            $("#goodResponse6")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form6").remove();
        } else {
            $("#goodResponse6")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form6").remove();
        }
    });
    $("#form7").click(function() {
        if ($("#radio27").is(":checked")) {
            compteur++;
            $("#goodResponse7")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form7").remove();
        } else {
            $("#goodResponse7")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form7").remove();
        }
    });
    $("#form8").click(function() {
        if ($("#radio32").is(":checked")) {
            compteur++;
            $("#goodResponse8")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form8").remove();
        } else {
            $("#goodResponse8")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form8").remove();
        }
    });
    $("#form9").click(function() {
        if ($("#radio34").is(":checked")) {
            compteur++;
            $("#goodResponse9")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form9").remove();
        } else {
            $("#goodResponse9")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form9").remove();
        }
    });
    $("#form10").click(function() {
        if ($("#radio40").is(":checked")) {
            compteur++;
            $("#goodResponse10")
                .append("<p>bonne réponse !</p>")
                .css("color", "green");
            $("#form10").remove();
        } else {
            $("#goodResponse10")
                .append("<p>Ceci n'est pas la bonne réponse !</p>")
                .css("color", "red");

            $("#form10").remove();
        }
    });
});
$("#submit").click(function() {
    $("#submit").prop("disabled", true);
    $("strong").html(`Vous avez trouver ${compteur}/10 bonne réponse ! `);
});