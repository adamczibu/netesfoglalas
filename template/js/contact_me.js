$(function() {
lehet = false;
  $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var nev = $("input#nev").val();
      var szemelyek = $("input#szemelyek").val();
      var erkezes = $("input#erkezes").val();
      var tavozas = $("input#tavozas").val();
      var asztalszam = $("input#asztalszam").val();
      var message = $("textarea#message").val();
      $.ajax({
        url: "././control/lehet-e.php",
        type: "POST",
        data: {
          szemelyek: szemelyek,
          asztalszam: asztalszam,
          erkezes: erkezes,
          tavozas: tavozas
        },
        cache: false,
        success: function(msg) {
          $('#success').html("<div class='alert alert-danger'>");
          $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-danger').append($("<strong>").text("Ez a foglalas nem lehetseges "+ msg));
          $('#success > .alert-danger').append('</div>');
          lehet = msg;

        },
        error: function(msg) {
          //lehet = true;
          // Fail message

        },
        complete: function() {
          if(!lehet){
          $this = $("#sendMessageButton");
          $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
          $.ajax({
            url: "././control/foglalas.php",
            type: "POST",
            data: {
              nev: nev,
              szemelyek: szemelyek,
              erkezes: erkezes,
              tavozas: tavozas,
              asztalszam: asztalszam,
              message: message
            },
            cache: false,
            success: function() {
              // Success message
              $('#success').html("<div class='alert alert-success'>");
              $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                .append("</button>");
              $('#success > .alert-success')
                .append("<strong>Your message has been sent. </strong>");
              $('#success > .alert-success')
                .append('</div>');
              //clear all fields
              $('#contactForm').trigger("reset");
            },
            error: function() {
              // Fail message
              $('#success').html("<div class='alert alert-danger'>");
              $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                .append("</button>");
              $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
              $('#success > .alert-danger').append('</div>');
              //clear all fields
              $('#contactForm').trigger("reset");
            },
            complete: function() {
              setTimeout(function() {
                $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
              }, 1000);
            }
          });
        }
        }
      });

    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
  $('#success').html('');
});
