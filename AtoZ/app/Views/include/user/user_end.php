<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?=base_url();?>/guest/lib/wow/wow.min.js"></script>
    <script src="<?=base_url();?>/guest/lib/easing/easing.min.js"></script>
    <script src="<?=base_url();?>/guest/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url();?>/guest/lib/counterup/counterup.min.js"></script>
    <script src="<?=base_url();?>/guest/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=base_url();?>/guest/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?=base_url();?>/guest/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?=base_url();?>/guest/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url();?>/js/script.js"></script>
    <script src="<?=base_url();?>/guest/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script> 
        $('#exampleSelect2').change(function() {
      var selectedValues = $('#exampleSelect2').val();
      console.log(selectedValues);

      // update pending modal
      
 
    });
    
    <script>
$("#editModal").on("show.bs.modal", function(event) {
  var link = $(event.relatedTarget);
  var name = link.data('name');
  var modal = $(this)
  modal.find("#name").val(name);

});
</script>

   </script>


 
