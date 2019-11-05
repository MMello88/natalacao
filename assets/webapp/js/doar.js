$(document).ready(function(){
  $('.rg').mask('00.000.000-0', {reverse: true});
})

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
      $('input[type=checkbox]').each(function () {
        $(this).prop('checked', false);
      });
      
      $('#id_doador').val("");
      $('#nome_doador').val("");
      $('#email').val("");
      $('#telefone').val("");
      $('#nr_rg_cpf').val("");
    },
    error: function(data) {
      console.log(data);
    }
  });
})

$("#btnConsultar").on('click', function(event){
  var rg = $("#rgConsulta").val()
  $("#msgErro").text("")
  $("#tabelaDoacao").html("");
  if(rg == ''){
    $("#msgErro").text("Informe o RG para a Consulta.")
  } else if(rg.length < 12){
    $("#msgErro").text("Tamanho do RG está errado.")
  } else {
    $.ajax({
      url: base_url + 'api/getDoacao/'+rg,
      success: function(data){
        console.log(data);
        if(data.status == 'warning'){
          $("#msgErro").text(data.menssage)
        } else {
          $("#tabelaDoacao").html(data.grid)
        }
      },
      error: function(data) {
        console.log(data);
      },
      dataType: 'json'
    });
  }
})

 $(document).on("click","#chkCancelar",function(event) {

  console.log(event)
  var ds = event.target.dataset
  var situacao
  if (event.target.checked == false) situacao = 'Aberto'
  else situacao = 'Cancelado'
  
  $.ajax({
    type: "POST",
    url: base_url + "api/alteraSituacao",
    data: {'id_movimento_item': ds.id_movimento_item, 'situacao': situacao},
    success: function(data){
      console.log(data);
    },
    error: function(data){
      console.log(data);
    }
  });

})