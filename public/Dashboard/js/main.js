$(document).ready(function(){
    // Start Datatable ...
    $('#datatable').DataTable();
    $('.datatable2').DataTable();

    // Image Preview
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function(e) {
            $('.image-preview').attr('src', e.target.result);
          }
          
          reader.readAsDataURL(input.files[0]);
        }
      }
      
      $(".image").change(function() {
          readURL(this);
      });

    // Another Image Preview
    function anotherReadURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('.another-image-preview').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
      }
    }
    
    $(".another-image").change(function() {
      anotherReadURL(this);
    });


});