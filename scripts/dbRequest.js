$(function () {
  $("#email").blur(function () {
    var enteredText = $(this).val();

    $.ajax({
      url: "../pages/getUsers.php",
      type: "GET",
      dataType: "json",
      data: {
        text: enteredText,
      },
      success: function (response) {
        if (response[0] === undefined) {
          document.getElementById("login").disabled = true;
        } else {
          document.getElementById("login").disabled = false;
        }
      },
      error: function (xhr, status, error) {
        console.error("Errore durante la richiesta:", error);
      },
    });
  });
});
