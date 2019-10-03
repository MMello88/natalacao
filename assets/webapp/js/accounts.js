"use strict";

class ResponseJson {
	constructor(dataResponse){
		var data = JSON.parse(dataResponse);
		this.allData = data;
		this.code = data.code;
		this.message = data.message
	}
	
	get allData(){
		return this._data;
	}
	
	set allData(value){
		this._data = value;
	}
	
	get code(){
		return this._code;
	}
	
	set code(value){
		this._code = value;
	}
	
	get message(){
		return this._message;
	}
	
	set message(value){
		this._message = value;
	}
	
	get alert(){
		if(this._code == '1')
			return 'alert-success';
		if(this._code == '2')
			return 'alert-info';
		if(this._code == '3')
			return 'alert-warning';
		if(this._code == '4')
			return 'alert-danger';
	}

	get alertMsg(){
		if(this._code == '1')
			return 'Muito bem.';
		if(this._code == '2')
			return 'Informação.';
		if(this._code == '3')
			return 'Cuidado.';
		if(this._code == '4')
			return 'Perigo.';
	}
}

class Acconts {
	constructor(){
		this.respJson = null;
		
		if (document.getElementById('formAccounts')){
			document.getElementById('formAccounts').addEventListener('submit', function(e) {
				this.validate(e.target, "validate_accounts", true);
				e.preventDefault();
			}.bind(this));
		}
		
		if (document.getElementById('formRegisterAccount')){
			document.getElementById('formRegisterAccount').addEventListener('submit', function(e) {
				this.validate(e.target, "register_account", true);
				e.preventDefault();
			}.bind(this));
		}

		if (document.getElementById('formForgot')){
			document.getElementById('formForgot').addEventListener('submit', function(e) {
				this.validate(e.target, "validate_forgot");
				e.preventDefault();
			}.bind(this));
		}

	}
	
	validateSessionAccount(){
		$.ajax({
			url: base_url + "accounts/validate_session_account",
			success: function(data){
				console.log(data);
				this.respJson = new ResponseJson(data);
				if (this.respJson.code == '1' && this.respJson.message == 'true')
					window.location = base_url + "admin/projetos";
			},
			error: function(data) {
				console.log(data);
			}
		});
	}
	
	redirectAccount(){
		if (this.respJson.code == '1' && this.respJson.message == 'true')
			window.location = base_url + "admin/projetos";
	}

	validate(form, funct, redirect = false, time = 0 ){
		var me = this;
		console.log($(form).serialize());
		$.ajax({
			type: "POST",
			url: base_url + "accounts/" + funct,
			data: $(form).serialize(),
			success: function(data){
				console.log(data);
				console.log(data.responseText);
				this.respJson = new ResponseJson(data);
				$(form).prepend("<div class='alert "+this.respJson.alert+" alert-dismissible fade show' id='code'><button type='button' class='close' data-dismiss='alert'>X</button> <strong>"+this.respJson.alertMsg+"</strong> "+this.respJson.message+"</div>");
				if (redirect){
					if (time > 0) {
						setInterval(function(){ me.validateSessionAccount(); }, time);
					} else {
						me.validateSessionAccount();
					}
				}
			},
			error: function(data) {
				console.log(data);
				console.log(data.responseText)
			}
		});
		
		return false;
	}
}

let acc = new Acconts();
