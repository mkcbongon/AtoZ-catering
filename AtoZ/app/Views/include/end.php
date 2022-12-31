 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    
   
    <script>
        
        var xValues = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        
        var yValues = [25000, 35000, 45000, 60000, 20000,26500, 50, 60, 76, 40, 11, 15];
        var barColors = ["red", "purple","blue","green","brown", "yellow", "pink", "maroon", "navy", "orange", "black", "grey"];

        new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
            text: "A to Z Catering Services Production"
            }
        }
        });
    </script>

<script>
var xValues = ["2018", "2019", "2020","2021","2022","2023"];
var yValues = [200000,350000,150000,20000,450000, 0];

new Chart("myChartLine", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
            title: {
            display: true,
            text: "A to Z Catering Services Production"
            }
  }
});
</script>

<script>
var xValues = ["Catering", "Baking"];
var yValues = [100, 20];
var barColors = [
  "#b91d47",
  "#00aba9"
 
];

new Chart("myChartDoughnut", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "A to Z Catering Services Revenue Sources"
    }
  }
});
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', 'edit', function(){
        var client = $('client').text();

        $('#edit').modal-body('show');
        $('#client').val(client);
    });
  });

</script>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="user/lib/wow/wow.min.js"></script>
    <script src="user/lib/easing/easing.min.js"></script>
    <script src="user/lib/waypoints/waypoints.min.js"></script>
    <script src="user/lib/counterup/counterup.min.js"></script>
    <script src="user/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="user/lib/tempusdominus/js/moment.min.js"></script>
    <script src="user/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="user/js/main.js"></script>

           



    

</body>

</html>