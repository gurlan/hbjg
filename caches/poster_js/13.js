function PCMSAD(PID) {
  this.ID        = PID;
  this.PosID  = 0; 
  this.ADID		  = 0;
  this.ADType	  = "";
  this.ADName	  = "";
  this.ADContent = "";
  this.PaddingLeft = 0;
  this.PaddingTop  = 0;
  this.Wspaceidth = 0;
  this.Height = 0;
  this.IsHitCount = "N";
  this.UploadFilePath = "";
  this.URL = "";
  this.SiteID = 0;
  this.ShowAD  = showADContent;
  this.Stat = statAD;
}

function statAD() {
	var new_element = document.createElement("script"); 
	new_element.type = "text/javascript";
	new_element.src="http://jiangong.hexiflower.com/index.php?m=poster&c=index&a=show&siteid="+this.SiteID+"&id="+this.ADID+"&spaceid="+this.PosID; 
	document.body.appendChild(new_element);
}

function showADContent() {
  var content = this.ADContent;
  var str = "";
  var AD = eval('('+content+')');
  if (this.ADType == "images") {
	  if (AD.Images[0].imgADLinkUrl) str += "<a href='"+this.URL+'&a=poster_click&sitespaceid='+this.SiteID+"&id="+this.ADID+"&url="+AD.Images[0].imgADLinkUrl+"' target='_blank'>";
	  str += "<img title='"+AD.Images[0].imgADAlt+"' src='"+this.UploadFilePath+AD.Images[0].ImgPath+"' width='"+this.Width+"' height='"+this.Height+"' style='border:0px;'>";
	  if (AD.Images[0].imgADLinkUrl) str += "</a>";
  }else if(this.ADType == "flash"){
	  str += "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='"+this.Width+"' height='"+this.Height+"' id='FlashAD_"+this.ADID+"' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0'>";
	  str += "<param name='movie' value='"+this.UploadFilePath+AD.Images[0].ImgPath+"' />"; 
      str += "<param name='quality' value='autohigh' />";
      str += "<param name='wmode' value='opaque'/>";
	  str += "<embed src='"+this.UploadFilePath+AD.Images[0].ImgPath+"' quality='autohigh' wmode='opaque' name='flashad' swliveconnect='TRUE' pluginspage='http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' width='"+this.Width+"' height='"+this.Height+"'></embed>";
      str += "</object>";	  
  }
  str += "";
  document.write(str);
}
 
var cmsAD_13 = new PCMSAD('cmsAD_13'); 
cmsAD_13.PosID = 13; 
cmsAD_13.ADID = 15; 
cmsAD_13.ADType = "images"; 
cmsAD_13.ADName = "新闻下条幅"; 
cmsAD_13.ADContent = "{'Images':[{'imgADLinkUrl':'%23','imgADAlt':'','ImgPath':'http://jiangong.hexiflower.com/uploadfile/2018/1113/20181113093030475.jpg'}],'imgADLinkTarget':'New','Count':'1','showAlt':'Y'}"; 
cmsAD_13.URL = "http://jiangong.hexiflower.com/index.php?m=poster&c=index"; 
cmsAD_13.SiteID = 1; 
cmsAD_13.Width = 800; 
cmsAD_13.Height = 50; 
cmsAD_13.UploadFilePath = ''; 
cmsAD_13.ShowAD();

var isIE=!!window.ActiveXObject; 
if (isIE){

	if (document.readyState=="complete"){
		cmsAD_13.Stat();
	} else {
		document.onreadystatechange=function(){
			if(document.readyState=="complete") cmsAD_13.Stat();
		}
	}
} else {
	cmsAD_13.Stat();
}