$("#AccesoAdmin").on('submit', function (e) {
    e.preventDefault();

    logAdmin = $("#logAdmin").val();

    claveadmin = $("#claveadmin").val();

    if ($("#logAdmin").val() == "" || $("#claveadmin").val() == "") {

        bootbox.alert("Asegúrate de llenar todo los campos");

    } else {

        $.post("../ajax/usuario.php?op=verificar",

            { "logAdmin": logAdmin, "claveadmin": claveadmin },

            function (data) {
                console.log(data);

                if (data != "null") {

                    $(location).attr("href", "homeAdmin.php");

                }

                else {

                    bootbox.alert("Usuario y/o Password incorrectos");

                }

            });
    }
})