$(document).ready(function(){
     
     $.ajax ({
          url: "php_includes/maindashboard.php",
          type: "GET",
          success:function(response){
               $("#body-content").html (response);
               

          },
          error: function (xhr, status, error){
               console.error (xhr.responseText);
          }
     });

    

     $("#main-dash").click (function(){
          $.ajax ({
               url: "php_includes/maindashboard.php",
               type: "GET",
               success:function(response){
                    $("#body-content").html (response);
     
               },
               error: function (xhr, status, error){
                    console.error (xhr.responseText);
               }
          });


     });



     $("#student_table").click(function(){

          
          $.ajax ({
               url: "php_source/views/teachers_control.php",
               type: "GET",
               success:function(response){
                    $("#body-content").html (response);
                    
     
               },
               error: function (xhr, status, error){
                    console.error (xhr.responseText);
               }
          });





           /*
          function loadContent(page) {
               $.ajax({
               url: 'php_includes/teachers_control.php?page=' + page,
               type: 'GET',
               success: function(response) {
                    $('#body-content').html(response);
               },
               error: function(xhr, status, error) {
                    console.error(xhr.responseText);
               }
               });
          }

          
          $(document).on('click', '.pagination a', function(e) {
               e.preventDefault();
               Page = $(this).attr('href').split('=')[1];
               console.log (Page);
               loadContent(Page);
               CALLb();

          });

         
          loadContent(1);


          function CALLb (){
               console.log ("From CALLB" + Page);
          }

          $(document).on('click', '.delete-btn', function(){
               console.log ("FROM DELETE BTN");
          });
          */
          

          
     });





     
});