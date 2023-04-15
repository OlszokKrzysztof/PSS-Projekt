$('.ajax').on('change', function () {
    $.ajax({
      url: "/Projekt/public/ajax",
      type: "POST",
      data: {
        input: $(this).val()
      },
       success: function(data) {
        $('.ajaxResult').text(JSON.parse(data).message)
      }
    })
  })