<script src="assets/js/jquery.min.js"></script>    
<script src="assets/js/bootstrap5.bundle.min.js"></script>    
<script src="assets/js/scripts.js"></script>    
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
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
  });

</script>
</body>
</html>