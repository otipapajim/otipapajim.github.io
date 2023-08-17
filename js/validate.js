$(document).ready(function () {
  $("#regform").submit(function (event) {
    var formData = {
      fname: $("#fname").val(),
      lname: $("#lname").val(),
      email: $("#email").val(),
      pwd: $("#pwd").val(),
      confpwd: $("#confpwd").val(),
      role: $("#role").val(),
      contact: $("#contact").val(),
    };

    $.ajax({
      type: "POST",
      url: "http://localhost/gigyetu/scripts/register.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
      // ...

      if (!data.success) {
        if (data.errors.name) {
          $("#fname-group").addClass("has-error");
          $("#fname-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }

        if (data.errors.name) {
          $("#lname-group").addClass("has-error");
          $("#lname-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }

        if (data.errors.name) {
          $("#email-group").addClass("has-error");
          $("#email-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }
        if (data.errors.name) {
          $("#pwd-group").addClass("has-error");
          $("#pwd-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }
        if (data.errors.name) {
          $("#confpwd-group").addClass("has-error");
          $("#confpwd-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }
        if (data.errors.name) {
          $("#role-group").addClass("has-error");
          $("#role-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }
        if (data.errors.name) {
          $("#check-group").addClass("has-error");
          $("#check-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }
        if (data.errors.name) {
          $("#contact-group").addClass("has-error");
          $("#contact-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }
      } else {
        $("#regform").html(
          '<div class="alert alert-success">' + data.message + "</div>"
        );
      }

    });

    event.preventDefault();
  });
// ...
    });
