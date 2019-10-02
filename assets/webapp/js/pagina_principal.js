class paginaPrincipal {
	constructor(){
		this.respJson = null;
		
		this.load();
	}
	
	load(){
    this.menu()
    this.paginaAtual()
	}
  
  menu(){
    var request = new XMLHttpRequest()
    request.open('GET', base_url + 'api/getPagina')
    request.send()
    request.addEventListener('load', function(event) {
      console.log(request);
      if (request.readyState == 4 && request.status == 200) {
        var dataJson = JSON.parse(request.responseText)
        console.log(dataJson)
      }
    })
    
    request.addEventListener('error', function(event) {
      
    })
  }
  
  paginaAtual(){
    var request = new XMLHttpRequest()
    request.open('GET', base_url + 'api/getPaginaCampos/'+slug)
    request.send()
    request.addEventListener('load', function(event) {
      console.log(request);
      if (request.readyState == 4 && request.status == 200) {
        var dataJson = JSON.parse(request.responseText)
        console.log(dataJson)
      } else {
        console.log(request.responseText)
      }
    })
    
    request.addEventListener('error', function(event) {
      
    })
  }
}

let acc = new paginaPrincipal();
