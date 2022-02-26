<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script> -->
</head>

<body>

    <div class="container">
        
        <div class="row">
            <div class="col-md-10 mx-auto text-center" style="background-color:rgb(39, 38, 38)">
                <!-- <form aid="add_student"> -->
                    First Name: <input class="form-control" type="text" name="first_name" id="first_name" placeholder="give a valid first_name"><br>
                    Last Name : <input class="form-control" type="text" name="last_name" id="last_name" placeholder="give a valid last_name"><br>
                    <input type="submit" onclick="saveStudentData(this);"  id="submit" value="submit" class="btn btn-md btn-primary">
                <!-- </form> -->
                <div class="text-danger text-center" id="error"></div>
                <div class="text-success text-center" id="success"></div>
                    
            </div>
        </div>
        <br>
        <div class="row  bg-danger">
            <div class="col-md-10 mx-auto text-center">
                    <button type="button" class="btn btn-md" style="background-color: lime;" name="load_data" id="load_data" onclick="loadtable();" value="load_data">
                        load_data
                    </button>
            </div>
        </div>
        <br>
        <div class="d-flex flex-row">
            <div class="col-md-1"></div>
            <div id="data_table" class="col-md-10 mx-auto text-right p-2" style="background-color: rgb(209, 218, 215);">
                &nbsp;
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
            function loadtable(){
                $.ajax({
                    type: "GET",
                    url: "all_students.php",
                    success: function (response) {
                        document.getElementById("data_table").innerHTML = response;
                    }
                });
            }
            // loadtable();

            function saveStudentData(){
                // e.preventDefault();

                var first_name = $("#first_name").val();
                var last_name = $("#last_name").val();
                console.log(first_name,last_name);
                // return ;
                if (first_name == '' || last_name == '') {

                    $("#error").text("Please fill up all the field").slideDown();
                    $("#success").slideUp();

                }else{

                    $.ajax({
                        url: "save_student.php",
                        type: "POST",
                        data: {
                            first_name: first_name,
                            last_name:last_name,
                        },
                        success: function(response){
                            console.log(response);

                            if(response == 1){

                                loadtable();
                                $("#success").text("Data Inserted Properly");
                                // $("#add_student").trigger("reset");
                                $("#last_name").val('');
                                $("#first_name").val('');
                            }else{
                                $("#error").text("Data Not Inserted");
                            }
                        }
                    })
                }

            }            
    
    </script>
</body>

</html>