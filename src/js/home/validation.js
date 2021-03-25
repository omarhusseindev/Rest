
  $(document).ready(function () {
    $('#registration').validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 5
        },
        validatePassword: {
          required: true,
          equalTo: "#password"
        }
      },
      messages: {
        name: 'Please enter Name.',
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        },
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 5 characters long.',
        },
        validatePassword: {
          required: 'Please enter Confirm Password.',
          equalTo: 'Confirm Password do not match with Password.',
        }
      },
      // submitHandler: function (form) {
      //   form.submit();
      // }
    });
  

    $("#registration").submit(function (event) {
        var formData = {
          name: $("#name").val(),
          email: $("#email").val(),
          password: $("#password").val(),
        };
        console.log(formData);
    
        $.ajax({
          type: "POST",
          url: "../src/getData.php",
          data: formData,
          encode: true,
        }).success(function (data) {
          console.log("data!!!! "+data);
          $("#registration").html(
            '<div style="color:white"; class="success"></div>'
          );
          $(".success").text(data);

        }).error(function(error){
            console.log(error);
        });
    
        event.preventDefault();
      });
});


  