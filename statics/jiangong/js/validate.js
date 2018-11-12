

function vCheck_isNull(vstr){
	if(vstr==''||vstr==null){
		return false;
	}else{
		return true;
	}
}

function vCheck_isZero(vstr){
	if(vstr==0){
		return false;
	}else{
		return true;
	}
}

function vCheck_Length(vstr,vmin,vmax){
	vstr=vstr.trim();
	var vlen=vstr.length;
	if(vmin>0&&vmax>0&&vmin!=vmax){
		if(vlen<vmin||vlen>vmax){
			return false;
		}
	}else if(vmin>0){
		if(vlen<vmin){
			return false;
		}
	}else if(vmax>0){
		if(vlen>vmax){
			return false
		}
	}
	return true;
}

function vCheck_MobilePhone(str){
	if (str.match(/^(1[0-9][0-9]|15[0|3|6|7|8|9]|18[6|8|9])\d{8}$/) == null) {
		return false;
	}
	else {
		return true;
	}
}

function vCheck_Number(str){
	 if (str.match(/^[0-9]*$/) == null) {
		return false;
	}
	else {
		return true;
	}
}

function vCheck_numberid(str){
	if (str.match(/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/) == null) {
		return false;
	}
	else {
		return true;
	}
}

function vCheck_email(str){
	if (str.match(/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/) == null) {
		return false;
	}
	else {
		return true;
	}
}

function vCheck_code(str){
	if (str.match(/^[0-9]\d{5}$/) == null) {
		return false;
	}
	else {
		return true;
	}
}

function vCheck_Password(str){
	if (str.match(/^\w{6,32}$/) == null) {
		return false;
	}
	else {
		return true;
	}
}

String.prototype.trim=function(){
	return this.replace(/(^\s*)|(\s*$)/g, "");
}
String.prototype.ltrim=function(){
	return this.replace(/(^\s*)/g,"");
}
String.prototype.rtrim=function(){
	return this.replace(/(\s*$)/g,"");
}