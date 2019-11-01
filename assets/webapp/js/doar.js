$('#modalDoador').on('show.bs.modal', function (event) {
  //varifica se o carrinho tem item se tiver abre o formulário senão apresenta uma mensagem de aviso
  var button = $(event.relatedTarget)
  var recipient = button.data('myform') 
  $('#recipient-name').val(recipient)
})

$('#overCart').on('mouseover', function(e){
  $('#overCart').dropdown('show')
})

$("#overCart").mouseout(function(e){
  $('#overCart').dropdown('hide')
});

$(".chkBtn").click(function(event){
  var chk = event.target.dataset
  if (event.target.checked == false){
    $.ajax({
      type: "POST",
      url: base_url + "api/deleteCart",
      data: {'id_tipo_doacao': chk.id_tipo_doacao, 'id_movimento': chk.id_movimento},
      success: function(data){
        var respJson = JSON.parse(data);
        $('#countCart').text(respJson.cart.total);
      },
      error: function(data) {
      }
    });
  } else {
    $.ajax({
      type: "POST",
      url: base_url + "api/createCart",
      data: {'id_tipo_doacao': chk.id_tipo_doacao, 'id_movimento': chk.id_movimento},
      success: function(data){
        var respJson = JSON.parse(data);
        $('#countCart').text(respJson.cart.total);
      },
      error: function(data) {
      }
    });
  }
});

$("#nr_rg_cpf").blur(function(){
  
    console.log("O input perdeu o foco.");
});