// fontions convertion
function isHex(n){
	if(n.match(/[0-9A-Fa-f]/g) != null)
		return true;
	else
		return false;
}

function isBin(n){
	if(n.match(/[0-1]/g) != null)
		return true;
	else
		return false;
}

function isDec(n){
	if(n.match(/[0-9]/g) != null)
		return true;
	else
		return false;
}

function emptyAll(){
	Array.from(document.convform).forEach(function(e){e.value = ""})
}

function convertASCII(){
	var input = Array.from(document.convform.txt.value);
	if(input.length < 1){
		emptyAll(); 
		return;
	}
	
	var ascii = [];
	input.forEach(function(e){
		ascii.push(e.charCodeAt(0));
	});
	
	updateData(ascii,1);
}

function convertHex(){
	var input = document.convform.hex.value;
	
	// Vérifie que input ne contient pas d'espaces
	if(!/\s/.test(input)){
		input = input.match(/.{1,2}/g).join(" ");
	}
	
	if(input.length < 1){ 
		emptyAll(); 
		return;
	}
	input = input.split(" ");
	if(isHex(input.toString()))
		updateData(input,2);
	else
		console.log("Not an hexa value");
}

function convertBinary(){
	var input = document.convform.bin.value;
	if(input.length < 1){ 
		emptyAll(); 
		return;
	}
	input = input.split(" ");
	if(isBin(input.toString()))
		updateData(input,3);
	else
		console.log("Not an binary value");
}

function convertDecimal(){
	var input = document.convform.dec.value;
	if(input.length < 1){ 
		emptyAll(); 
		return;
	}
	input = input.split(" ");
	if(isDec(input.toString()))
		updateData(input,4);
	else
		console.log("Not an decimal value");
}

function convertBase64(){
	var input = Array.from(document.convform.base64.value);
	if(input.length < 1) return;
	
	
}

function updateChecksum(){
	
}

function updateChecksum(){
	
}

function updateData(n,type){
	var inputs = Array.from(document.convform.getElementsByClassName("input"));
	var ascii=h=b=d=b64=[];
	
	switch(type){
		case 1:
			ascii = n;
			h=[];
			b=[];
			d=[];
			b64=[];
			ascii.forEach(function(e){
				h.push(e.toString(16));
				b.push(e.toString(2));
				d.push(e.toString(10));
	// 			b64.push(e.toString(64));
			});
			inputs[1].value = h.toString().replace(/,/g," ");
			inputs[2].value = b.toString().replace(/,/g," ");
			inputs[3].value = d.toString().replace(/,/g," ");
	// 		inputs[4].value = b64.toString().replace(/,/g," ");
			break;
		case 2:
			ascii=[];
			h = n;
			b=[];
			d=[];
			b64=[];
			
			h.forEach(function(e){
				ascii.push(String.fromCharCode(parseInt(e,16)));
				b.push(parseInt(e,16).toString(2));
				d.push(parseInt(e,16));
				// 			b64.push(e.toString(64));
			});
			
			inputs[0].value = ascii.toString().replace(/,/g,"");
			inputs[2].value = b.toString().replace(/,/g," ");
			inputs[3].value = d.toString().replace(/,/g," ");
	// 		inputs[4].value = b64.toString().replace(/,/g," ");
			break;
		case 3:
			ascii=[];
			h=[];
			b = n;
			d=[];
			b64=[];
			b.forEach(function(e){
				ascii.push(String.fromCharCode(parseInt(e,2)));
				h.push(parseInt(e,2).toString(16));
				d.push(parseInt(e,2));
			});
			inputs[0].value = ascii.toString().replace(/,/g,"");
			inputs[1].value = h.toString().replace(/,/g," ");
			inputs[3].value = d.toString().replace(/,/g," ");
			break;
		case 4:
			ascii=[];
			h=[];
			b=[];
			d = n;
			b64=[];
			d.forEach(function(e){
				console.log(e);
				ascii.push(String.fromCharCode(parseInt(e,10)));
				b.push(parseInt(e,10).toString(2));
				h.push(parseInt(e,10).toString(16));
			});
			inputs[0].value = ascii.toString().replace(/,/g,"");
			inputs[1].value = h.toString().replace(/,/g," ");
			inputs[2].value = b.toString().replace(/,/g," ");
			break;
		default:
			break;
	}

}