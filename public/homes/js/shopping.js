 $(function(){
    adddel();
  //数量减
    // $(".minus").click(function() {
    //   var t = $(this).parent().find('.num');
    //   t.text(parseInt(t.text()) - 1);
    //   if (t.text() <= 1) {
    //     t.text(1);
    //   }
    //   TotalPrice();
    // });
    // //数量加
    // $(".plus").click(function() {
    //   var t = $(this).parent().find('.num');
    //   t.text(parseInt(t.text()) + 1);
    //   if (t.text() <= 1) {
    //     t.text(1);
    //   }
    //   TotalPrice();
    // });

    $('.del').click(function(){ 
      //获取相关信息
        var cid = $(this).attr('cid');
        var dd = $(this).parents('.content2');
        //发送请求
        $.ajax({
            type:'get',
            url: '/cart/delete',
            data: {'cid':cid},
            success: function(data){
                if(data == '1') {
                    dd.fadeOut(1000,function(){
                        alert('移出成功!!!');
                    });
                }
            }
        })

    });

        

})
 