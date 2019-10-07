class Projetos {
	constructor(){
		this.respJson = null;
		
		this.load();
	}
	
	load(){
    this.projetos()
    document.getElementById("titulo_tela").innerHTML = 'Selecionar o projeto';
	}
  
  projetos(){
    //$("#wrapper").toggleClass("toggled");
    var request = new XMLHttpRequest()
    request.open('GET', base_url + 'api/getProjetos')
    request.send()
    request.addEventListener('load', function(event) {
      console.log(request);
      if (request.readyState == 4 && request.status == 200) {
        console.log(request.responseText)
        var dataJson = JSON.parse(request.responseText)
        let row = document.createElement('div')
        row.className = 'row my-3'
        
        dataJson.forEach(function(item, index, dataJson){
          let card = document.createElement('div')
          card.className = 'card text-center sombra mt-3'

          let cardHeader = document.createElement('div')
          cardHeader.className = 'card-header text-white bg-info'
          cardHeader.innerHTML = item.projeto

          let cardBody = document.createElement('div')
          cardBody.className = 'card-body'
          
          let linkSelect = document.createElement('a')
          linkSelect.className = 'btn btn-success'
          linkSelect.innerHTML = 'Selecionar'
          linkSelect.setAttribute('href', base_url + 'admin/projetos/'+item.id_projeto)
          cardBody.appendChild(linkSelect)
          
          let cardFooter = document.createElement('div')
          cardFooter.className = 'card-footer text-muted bg-info'
          
          let col = document.createElement('div')
          col.className = 'col-sm-6 col-md-6 col-lg-4 mt-2'
          
          card.appendChild(cardHeader)
          card.appendChild(cardBody)
          //card.appendChild(cardFooter)
          
          col.appendChild(card)

          
          row.appendChild(col)
        })
        
        document.getElementById("dashboard-app").appendChild(row)
        
      } else {
        var error = document.createElement("div")
        error.innerHTML = request.responseText
        document.getElementById("dashboard-app").appendChild(error)
      }
    })
    
    request.addEventListener('error', function(event) {
      var error = document.createElement("div")
      error.innerHTML = request.responseText
      document.getElementById("dashboard-app").appendChild(error)
    })
  }
}

let acc = new Projetos();
