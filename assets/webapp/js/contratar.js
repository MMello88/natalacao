"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// Class Projects
// =============================================================
var projects =
/*#__PURE__*/
function () {
    function projects() {
      _classCallCheck(this, projects)
  
      this.init()
    }

    _createClass(projects, [{
      key: "init",
      value: function init() {
        // event handler init
				this.createContrato()
        this.handleValidations()
        this.hasContrato()
      }
    },{
			key: "descontratarProjeto",
			value: function descontratarProjeto(event){
				var idProjeto = event.target.dataset.idProjeto
				var descricao = event.target.dataset.descricao

				document.getElementById("tituloProjetoDes").innerHTML = 'Deseja contratar o serviço de ' + descricao
				document.getElementById("id-projeto-des").value = idProjeto
			}
		},{
			key: "contratarProjeto",
			value: function contratarProjeto(event){
				var idProjeto = event.target.dataset.idProjeto
				var descricao = event.target.dataset.descricao

				document.getElementById("tituloProjeto").innerHTML = 'Deseja contratar o serviço de ' + descricao
				document.getElementById("id-projeto").value = idProjeto
			}
		},{
			key: "createContrato",
      value: function createContrato(){
				var me = this
				var request = new XMLHttpRequest()
				request.open('GET', base_url + 'projects/getContract')
				request.send()
				request.addEventListener('load', function(event) {
					if (request.readyState == 4 && request.status == 200) {
						var dataJson = JSON.parse(request.responseText)
						if (dataJson.status === '1'){
							dataJson.objetos.forEach(function(item, index, objetos){
                
                let col = document.createElement('div')
                col.className = 'col-12 col-lg-6'
                col.id = 'itemProjeto'
                
                let card = document.createElement('div')
                card.className = 'card'

                let cardHeader = document.createElement('div')
                cardHeader.className = 'card-header text-center text-success'

                let cardBody = document.createElement('div')
                cardBody.className = 'card-body'
                
                let cardFooter = document.createElement('div')
                cardFooter.className = 'card-footer'
                
                let cardFigure = document.createElement('figure')
                cardFigure.className = 'embed-responsive embed-responsive-4by3 m-auto'
                cardFigure.style.width = '50%'
                
                let FigureImg = document.createElement('img')
                FigureImg.className = 'embed-responsive-item'
                FigureImg.src = base_url + 'assets/uploads/files/' + item.imagem
                
                let CardText = document.createElement('p')
                CardText.className = 'card-text ml-3'
                CardText.innerHTML = item.descricao
								
								let textH5 = document.createElement('h5')
								textH5.innerHTML = item.projeto

								let span = document.createElement('span')
								span.innerHTML = item.detalhes

                let linkContrata = document.createElement('a')
                var yesnoNone = item.hasContrato == 'false' ? '' : 'd-none'
                linkContrata.className = 'card-footer-item card-footer-item-bordered ' + yesnoNone
                linkContrata.id = 'contratarProjeto'
								linkContrata.innerHTML = 'Contratar agora'
								linkContrata.onclick = me.contratarProjeto
                linkContrata.setAttribute('data-toggle', 'modal')
                linkContrata.setAttribute('data-target', '#contratarProjetoModal')
                linkContrata.setAttribute('data-descricao', item.descricao)
                linkContrata.setAttribute('data-id-projeto', item.id_projeto)
								linkContrata.setAttribute('href', '#')
								
                let linkDescontrata = document.createElement('a')
                yesnoNone = item.hasContrato == 'false' ? 'd-none' : ''
                linkDescontrata.className = 'card-footer-item card-footer-item-bordered ' + yesnoNone
                linkDescontrata.id = 'descontratarProjeto'
								linkDescontrata.innerHTML = 'Cancelar contrato'
								linkDescontrata.onclick = me.descontratarProjeto
                linkDescontrata.setAttribute('data-toggle', 'modal')
                linkDescontrata.setAttribute('data-target', '#descontratarProjetoModal')
                linkDescontrata.setAttribute('data-descricao', item.descricao)
								linkDescontrata.setAttribute('data-id-projeto', item.id_projeto)
								linkDescontrata.setAttribute('href', '#')
								
								cardHeader.appendChild(textH5)

								cardFigure.appendChild(FigureImg)
								cardBody.appendChild(cardFigure)
								cardBody.appendChild(span)

								cardFooter.appendChild(linkContrata)
								cardFooter.appendChild(linkDescontrata)

								card.appendChild(cardHeader)
								card.appendChild(cardBody)
								card.appendChild(CardText)
								card.appendChild(cardFooter)
								
								col.appendChild(card)

                let app = document.getElementById('app-projects')

								let btnProject = document.getElementById('btn-continue-select-project')

								app.insertBefore(col, btnProject)
              })
						} else {
							//mensagem de erro
							//document.getElementById('btn-continue-select-project').classList.add('disabled')
						}
					}
				})
				request.addEventListener('error', function(event) {
					me.showMessage("Desculpe nos pelo transtorno. Tente novamente em breve!", 'danger')
				})
			}
		},{
      key: "showMessage",
      value: function showMessage(message, cssClass){
        var alert = document.createElement("div")
        alert.className =  `alert alert-${cssClass} mt-2`
        alert.appendChild(document.createTextNode(message))
        var section = document.getElementById("section-project")
        section.insertBefore(alert, document.getElementById("app-projects"))
        setTimeout(() => {
          document.querySelector(".alert").remove()
        }, 5000)
      }
    },{
      key: "hasContrato",
      value: function hasContrato(){
				var request = new XMLHttpRequest()
				request.open('GET', base_url + 'projects/hasContract')
				request.send()
				request.addEventListener('load', function(event) {
					if (request.readyState == 4 && request.status == 200) {
						var dataJson = JSON.parse(request.responseText)
						if (dataJson.status === '1'){
							document.getElementById('btn-continue-select-project').classList.remove('disabled')
						} else {
							document.getElementById('btn-continue-select-project').classList.add('disabled')
						}
					}
				})
				request.addEventListener('error', function(event) {
					me.showMessage("Desculpe nos pelo transtorno. Tente novamente em breve!", 'danger')
				})
      }
    },{
        key: "handleValidations",
        value: function handleValidations() {
          var me = this
          document.getElementById("formProjectsHire")
					.addEventListener('submit', function(event){
						event.preventDefault()
						var data = new FormData(this)
						var request = new XMLHttpRequest()
						request.open('POST', event.srcElement.action)
						request.send(data)
						request.addEventListener('load', function(event) {
							document.getElementById("close-modal").click()
							if (request.readyState == 4 && request.status == 200) {
								var dataJson = JSON.parse(request.responseText)
								me.showMessage(dataJson.mensagem, dataJson.cssClass)
								if (dataJson.status === '1'){
									document.getElementById('contratarProjeto').classList.add('d-none')
									document.getElementById('descontratarProjeto').classList.remove('d-none')
									me.hasContrato()
								}
							} else {
								me.showMessage("Desculpe nos pelo transtorno. Tente novamente em breve!", 'danger')
							}
						})
						request.addEventListener('error', function(event) {
							me.showMessage("Desculpe nos pelo transtorno. Tente novamente em breve!", 'danger')
						})
					})
					
					document.getElementById("formProjectsNoHire")
					.addEventListener('submit', function(event){
						event.preventDefault()
						var data = new FormData(this)
						var request = new XMLHttpRequest()
						request.open('POST', event.srcElement.action)
						request.send(data)
						request.addEventListener('load', function(event) {
							document.getElementById("close-modal-desc").click()
							if (request.readyState == 4 && request.status == 200) {
								var dataJson = JSON.parse(request.responseText)
								me.showMessage(dataJson.mensagem, dataJson.cssClass)
								if (dataJson.status === '1'){ 
									document.getElementById('descontratarProjeto').classList.add('d-none')
									document.getElementById('contratarProjeto').classList.remove('d-none')
									me.hasContrato()
								}
							} else {
								me.showMessage("Desculpe nos pelo transtorno. Tente novamente em breve!", 'danger')
							}
						})
						request.addEventListener('error', function(event) {
							me.showMessage("Desculpe nos pelo transtorno. Tente novamente em breve!", 'danger')
						})
					})
        }
      }])
    
      return projects;
    }();
/**
 * Keep in mind that your scripts may not always be executed after the theme is completely ready,
 * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
 */


$(document).on('theme:init', function () {
  new projects();
});