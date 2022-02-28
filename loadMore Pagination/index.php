<!doctype html>
<html lang="en">
  <head>
      <title>Lood More Pagination</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>

  <div class="container">
      <div class="row p-4">
          <div class="col-md-10 mx-auto text-center">
                <table id="loadTable" class="table table-striped">
                    <tr>
                        <th>SI</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>
                   <!-- <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                   </tbody>
                   <tbody id="pagination">
                       <tr>
                           <td colspan="3">
                               <button id="ajaxbtn" class="btn btn-md btn-info" data-id="">Load More</button>
                           </td>
                       </tr>
                   </tbody> -->
                </table>
        </div>
      </div>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            function loadTable(page){

                $.ajax({
                    url : "pagination.php",
                    type : "POST",
                    data: {
                        page_no : page,
                    },
                    success : function(data){
                        if(data){
                            $("#pagination").remove();
                            $("#loadTable").append(data);
                        }else{
                            $("#ajaxbtn").html("Finished");
                            $("#ajaxbtn").prop("disabled",true);
                        }
                    }
                })
            }
            loadTable();

            $(document).on("click","#ajaxbtn",function(){
                $("#ajaxbtn").html("Loading...");
                var pid = $(this).data("id");
                loadTable(pid);
                pid+=5;
            })

        })


    </script>
  </body>
</html>