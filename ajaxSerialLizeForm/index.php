<!doctype html>
<html lang="en">
  <head>
    <title>SeriaLize Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
      <div class="row text-center p-3">
            <h1 class="text-center">PHP & AJAX SeriaLize Form</h1>
            <br>
          <div id="table-data" class="col-md-10 mx-auto text-center">
              <form id="submit-form">
                  <table width="100%" cellpadding="10px">
                      <tr>
                          <td width="150px">
                              <label class="input-group-text" for="first_name">First Name</label>
                          </td>
                          <td>
                              <input class="form-control" type="text" name="first_name" id="first_name">
                          </td>
                      </tr>
                      <tr>
                          <td width="150px">
                              <label class="input-group-text" for="last_name">Last Name</label>
                          </td>
                          <td>
                              <input class="form-control" type="text" name="last_name" id="last_name">
                          </td>
                      </tr>
                      <tr>
                          <td width="150px">
                              <label class="input-group-text" for="age">Age</label>
                          </td>
                          <td>
                              <input class="form-control" type="number" name="age" id="age">
                          </td>
                      </tr>
                      <tr>
                          <td width="150px">
                              <label for="gender" class="input-group-text">Gender</label>
                          </td>
                          <td class="form-group">
                              <input type="radio" name="gender" value="male" id="male">Male
                              <input type="radio" name="gender" value="female" id="female">FeMale
                          </td>
                      </tr>
                      <tr>
                          <td width="150px">
                              <label class="input-group-text" for="country">Country</label>
                          </td>
                          <td>
                              <select class="form-control" name="country" id="country">
                                  <option class="input-group-text"  value="">Select Your Country</option>
                                  <option class="input-group-text"  value="Bangladesh">Bangladesh</option>
                                  <option class="input-group-text"  value="Paksitan">Paksitan</option>
                                  <option class="input-group-text"  value="Bhutan">Bhutan</option>
                                  <option class="input-group-text"  value="India">India</option>
                                  <option class="input-group-text"  value="Nepal">Nepal</option>
                              </select>
                          </td>
                      </tr>
                      <tr>
                          <td></td>
                          <td>
                              <input type="button" value="submit" name="submit" id="submit" class="btn btn-md btn-primary">
                          </td>
                      </tr>
                  </table>
              </form>
              <br>
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-6 mx-auto text-center">
                    <div id="response" class="">

                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                var first_name = $("#first_name").val();
                var last_name = $("#last_name").val();
                var age = $("#age").val();

                if(first_name == "" || last_name == "" || age == "" || country == "" || !$('input:radio[name=gender]').is(':checked')){
                    $("#response").fadeIn();
                    $("#response").removeClass('alert alert-success').addClass('alert alert-danger').html("all fields are Required");
                }else{
                    // $("#response").html($("#submit-form").serialize());
                    // $("#response").html($("#submit-form").serializeArray());
                    $.ajax({
                        url : "serialLize.php",
                        type: "POST",
                        data: $("#submit-form").serialize(),
                        success : function(data){
                            $("#submit-form").trigger("reset");
                            $("#response").fadeIn();
                            $("#response").removeClass('alert alert-danger').addClass('alert alert-success').html(data);
                        }
                    });
                }
            });
        });
    </script>
  </body>
</html>