 $(function(){
  //数量减
  $(".minus").click(function() {
    var t = $(this).parent().find('.num');
    t.text(parseInt(t.text()) - 1);
    if (t.text() <= 1) {
      t.text(1);
    }
    TotalPrice();
  });
  //数量加
  $(".plus").click(function() {
    var t = $(this).parent().find('.num');
    t.text(parseInt(t.text()) + 1);
    if (t.text() <= 1) {
      t.text(1);
    }
    TotalPrice();
  });

 })
 