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

        <style>
            #modal{
                background: rgba(0, 0, 0, 0.7);
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                z-index: 100;
                display: none;
            }
            #modal-form{
                background: #fff;
                width: 30%;
                position: relative;
                top: 20%;
                left: calc(50% - 15%);;
                padding: 15px;
                border-radius: 4px;
            }
            #modal-form h2{
                margin: 0  0 15px;
                padding-bottom: 10px;
                border-bottom: 10px solid #000;
            }
            #close-btn{
                background: red;
                color: white;
                width: 30px;
                height: 30px;
                text-align: center;
                border-radius: 50%;
                position: absolute;
                top: -15px;
                right: -15px;
                cursor: pointer;
            }
        </style>
</head>

<body>

    <div class="container">
        
        <!-- <div class="row">
            <div class="col-md-10 mx-auto text-center">
                <input type="text" name="search" id="search" placeholder="give your first search">
            </div>
        </div>
        <br> -->
        <!-- <div class="row  bg-danger">
            <div class="col-md-10 mx-auto text-center">
                    <button type="button" class="btn btn-md" style="background-color: lime;" name="load_data" id="load_data" onclick="loadtable();" value="load_data">
                        load_data
                    </button>
            </div>
        </div>
        <br> -->
        <div class="d-flex flex-row">
            <div class="col-md-1"></div>
            <div id="data_table" class="col-md-10 mx-auto text-right p-2" style="background-color: rgb(209, 218, 215);">

                <!-- <div id="pagination" style="margin: 5px 480px">
                    <a  id="1" class="btn btn-info active" href="">1</a>
                    <a  id="2" class="btn btn-info" href="">2</a>
                    <a  id="3" class="btn btn-info" href="">3</a>
                </div> -->
            </div>
        </div>
        

        <div id="modal">
            <div id="modal-form">
                <table cellpadding="10px" width="100%">
                    
                </table>
                <div id="close-btn">X</div>
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
        function loadPage(page){
                $.ajax({
                    url: "ajax_pagination.php",
                    type: "POST",
                    data: {
                        page_no : page,
                    },
                    success : function(data){
                        $("#data_table").html(data);
                    }
                })
            }
            loadPage();
         $(document).on("click","#pagination a",function(e){
                e.preventDefault();
                var page_id = $(this).attr("id");
                loadPage(page_id);
            })

            

            // function loadtable(){
            //     $.ajax({
            //         type: "GET",
            //         url: "all_students.php",
            //         success: function (response) {
            //             document.getElementById("data_table").innerHTML = response;
            //         }
            //     });
            // }
            // loadtable();

            // function saveStudentData(){
            //     // e.preventDefault();

            //     var first_name = $("#first_name").val();
            //     var last_name = $("#last_name").val();
            //     console.log(first_name,last_name);
            //     // return ;
            //     if (first_name == '' || last_name == '') {

            //         $("#error").text("Please fill up all the field").slideDown();
            //         $("#success").slideUp();

            //     }else{

            //         $.ajax({
            //             url: "save_student.php",
            //             type: "POST",
            //             data: {
            //                 first_name: first_name,
            //                 last_name:last_name,
            //             },
            //             success: function(response){
            //                 console.log(response);

            //                 if(response == 1){

            //                     loadtable();
            //                     $("#success").text("Data Inserted Properly");
            //                     // $("#add_student").trigger("reset");
            //                     $("#last_name").val('');
            //                     $("#first_name").val('');
            //                 }else{
            //                     $("#error").text("Data Not Inserted");
            //                 }
            //             }
            //         })
            //     }

            // };         

            

            // $(document).on("click","#delete_student",function(){
            //     if(confirm("Do you really want to delete this record ?")){
            //         var studentId = $(this).data("id");
            //         var element = this;
            //         // alert(studentId);
            //         $.ajax({
            //             url : "student_delete.php",
            //             type : "POST",
            //             data : {
            //                 id : studentId,
            //             },
            //             success : function(data){
            //                 if(data == 1){
            //                     $(element).closest("tr").fadeOut();
            //                 }else{
            //                     $("#error").text("can't delete records").slideDown();
            //                     $("#success").slideUp();
            //                 }
            //             }
            //         })
            //     }
            // });

            // $(document).on("click","#edit_student",function(){
            //     $("#modal").show();
            //     var studentId = $(this).data("id");
            //     console.log(studentId);

            //     $("#stu_id").val();
            //     $("#first_name").val();
            //     $("#last_name").val();

            //     $.ajax({
            //         url : "edit_student.php",
            //         type : "post",
            //         data : {
            //             id : studentId,
            //         },
            //         success:function(data){
            //             // console.log(data);
            //             // alert(data);
            //             $("#modal-form table").html(data);
            //         }
            //     })

            // });

            // $("#close-btn").on("click",function(){
            //     $("#modal").hide();
            // })

            // $(document).on("click","#edit-submit",function(){
            //     var stuId = $("#edit_id").val();
            //     var fname = $("#edit_fname").val();
            //     var lname = $("#edit_lname").val();

            //     $.ajax({
            //         url : "student_update.php",
            //         type : "POST",
            //         data : {
            //             stuId : stuId,
            //             fname : fname,
            //             lname : lname
            //         },
            //         success : function(response){
            //             if(response == 1){
            //                 loadtable();
            //                 $("#success").text("Data Updated Successfully");
            //                 // $("#add_student").trigger("reset");
            //                 $("#fname").val('');
            //                 $("#lname").val('');
            //                 $("#modal").hide();
            //             }else{
            //                 $("#error").text("Data Not Updated");
            //             }
            //         }
            //     })
            // })

           
            // $("#search").on("keyup",function(){
            //     var serchResult = $(this).val();

            //     $.ajax({
            //         url : "ajax_live_search.php",
            //         type : "POST",
            //         data : {
            //             search : serchResult, 
            //         },
            //         success : function(data){
            //             console.log(data);
            //             $("#data_table").html(data);
            //         }
            //     })
            // })

           
    </script>
</body>

</html>