
$(document).ready(function() {
  $("input[name='website_type']").change(function() {
      if ($("#e_commerce").is(":checked")) {
          // Show content for E-commerce (Product 1)
          $("#product1Content").show();
          $("#product2Content").hide();
      } else {
          // Show content for other options (Product 2)
          $("#product1Content").hide();
          $("#product2Content").show();
      }
  });
});

$(document).ready(function() {
  // Plus button click event
  $("#plus").click(function() {
      var currentValue = parseInt($("#email_count").val(), 10);
      $("#email_count").val(currentValue + 1);
  });

  // Minus button click event
  $("#minus").click(function() {
      var currentValue = parseInt($("#email_count").val(), 10);
      if (currentValue > 1) {
          $("#email_count").val(currentValue - 1);
      }
  });
});


