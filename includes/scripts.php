<script src="assets/js/jquery.min.js"></script>    
<script src="assets/js/bootstrap5.bundle.min.js"></script>    
<script src="assets/js/scripts.js"></script>    
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function(){
    $('#states').change(function(){
      var state_id = this.value;
      // console.log(state_id);
      $.ajax({
        url:"ajax/city.php",
        method:"POST",
        data:{state_id : state_id},
        success:function(result){
          // console.log(result);
          $('#city').html(result);
        }
      });
    });
    $('#states1').change(function(){
      var state_id = this.value;
      // console.log(state_id);
      $.ajax({
        url:"ajax/city.php",
        method:"POST",
        data:{state_id : state_id},
        success:function(result1){
          // console.log(result1);
          $('#city1').html(result1);
        }
      });
    });

    // Multi Select
    $(document).ready(function () {
            $('.multiple').select2();
        });
  });

</script>
</body>
</html>