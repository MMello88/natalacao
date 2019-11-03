$("#btnFinalizaDoacao").on('click', function(event){
  $.ajax({
    url: base_url + 'api/hasCarts',
    success: function(data){
      console.log(data);
      if (data.cart.total > 0) {
        $('#modalDoador').modal('show');
      } else {
        $("#LabelMenssagem").text("Carrinho vazio para realizar doação!");
        $('#modalMensagem').modal('show');
      }
    },
    dataType: 'json'
  });
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
  var rg = $("#nr_rg_cpf").val();
  $.ajax({
    url: base_url + 'api/buscaRG/'+rg,
    success: function(data){
      console.log(data);
      if(data.doador !== null){
        $("#nome_doador").val(data.doador.nome_doador);
        $("#telefone").val(data.doador.telefone);
        $("#email").val(data.doador.email);
        $("#id_doador").val(data.doador.id_doador);
      }
    },
    dataType: 'json'
  });
});

$("#createDoador").on('submit',function (event) {
  event.preventDefault();
  console.log($(event.target).serialize());
  $.ajax({
    type: "POST",
    dataType: 'json',
    url: event.target.action,
    data: $(event.target).serialize(),
    success: function(data){
      console.log(data);
      $('#countCart').text("0");
      $('#modalDoador').modal('hide');
      $("#LabelMenssagem").text(data.menssage);
      $('#modalMensagem').modal('show');
    },
    error: function(data) {
      console.log(data);
    }
  });
})