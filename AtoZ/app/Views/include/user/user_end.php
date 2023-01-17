<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
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

    <!-- add to cart -->
    <script>    
    $(".addtocart").on("click", function () {
    var id = $(this).attr("id"); 
    console.log(id);
    $.post(
      '<?=base_url()?>/addtocart',
        // DATA TO PASS
        {
          id: id
        },
        function (data, status, xhr) {
          console.log(data);
          // $("#cartadd").modal();
          Toastify({
            text: "\u2713 Product added to cart!  ",
            duration: 3000,
            // destination: "https://github.com/apvarun/toastify-js",
            // newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
              height: 23,
              background: "linear-gradient(to right, #00c851, #00c851)",
            },
            onClick: function(){} // Callback after click
          }).showToast();
          // document.getElementById("cartcount1").innerHTML = data["total_row"];
          // document.getElementById("cartcount2").innerHTML = data["total_row"];
        }
      )
        .done(function () {

        })

        // TO DO ON FAIL
        .fail(function (jqxhr, settings, ex) {
          console.log(jqxhr);
          alert("failed, " + ex);
        });
      });
      </script>