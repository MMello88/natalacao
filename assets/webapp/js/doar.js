$("#btnFinalizaDoacao").on('click', function(event){
  $.ajax({
    url: base_url + 'api/hasCarts',
    success: function(data){
      console.log(data);
      if (data.cart.total > 0) {
        $('#modalDoador').modal('show');
      } else {
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
      if(data.doador == null){
        $("#nome_doador").val(data.nome_doador);
        $("#telefone").val(data.telefone);
        $("#email").val(data.email);
        $("#id_doador").val(data.id_doador);
      }
    },
    dataType: 'json'
  });
});

$("#createDoador").on('submit',function (event) {
  conosole.log($(event).serialize());
  $.ajax({
    type: "POST",
    dataType: 'json',
    url: base_url + "api/createDoador",
    data: $(event).serialize(),
    success: function(data){
      console.log(data);
    },
    error: function(data) {
    }
  });

  return false;
})