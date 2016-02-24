
var matrix = (function() {
  function init() {
      var isSharePopup = (window.location.href.indexOf('share.php') > -1);
        if(isSharePopup){
            return;
        }      
    function reloadPage(mark) {
    if(location.hash.indexOf(mark) == -1) {
          top.location.reload();
          top.location.hash = mark;
        } else {
          return;
        }
    }
    //reloadPage("matrix");
    var ORBITUM = 'orbitum',
    canvas,
    add_class = 'matrix',
    bg_id = ORBITUM + '_background',
    orbitum_background = document.getElementById(bg_id) || document.createElement('div');
    orbitum_background.id = bg_id;
    var cls = orbitum_background.classList.length;
    if(cls > 0) {
      for(var i = 0; i < cls; i++) {
           orbitum_background.classList.remove(orbitum_background.classList.item(i));
      } 
    }
    orbitum_background.classList.add(add_class);
    orbitum_background.innerHTML = '';
      var canvases = document.querySelectorAll("canvas");
      for(var i = 0; i < canvases.length; i++) {
        canvases[i].parentNode.removeChild(canvases[i]);
      }
    //document.body.appendChild(orbitum_background); uzliek automatiku novietoshanu html

    function createLayers(num) {
		
      for(var i = 1; i <= num; i++) {
        canvas = document.createElement("canvas");
        canvas.id = "q";
      orbitum_background.appendChild(canvas);
      }
    }
	  function DeleteLayers(num) {
		for(var i = 1; i <= num; i++) {
		canvas = document.clearElement("canvas");
	  }}
    createLayers(1);
	
	if (createLayers>1){DeleteLayers(1);}
	
	createLayers>1;
    /*-----------------------------------------------------------------------*/
var s = window.screen;
var width = canvas.width = s.width;
var height = canvas.height = s.height;
var yPositions = Array(300).join(0).split('');
var ctx = canvas.getContext('2d');
 
var draw = function () {
  ctx.fillStyle='rgba(0, 0, 0, .05)';//melnas fons krāsa
  ctx.fillRect(0, 0 , width, height);//kur atradīsies fons melns
  ctx.fillStyle='#0F0';//krāsa
  ctx.font = '16px moonbeamskatakanaregular, Arial'; // fonta stils
  yPositions.map(function(y, index){
    text = String.fromCharCode(1e2+Math.random()*33);// cik randomu simbolu tiks izvadits 33
    x = (index * 10) + 10;
    canvas.getContext('2d').fillText(text, x, y);
 if(y > 100 + Math.random()*1e4)
 {
   yPositions[index]=0;
 }
 else
 {
      yPositions[index] = y + 10; //starp simbolime atstarpes kad krīt 10
 }
  });
};
RunMatrix();
function RunMatrix()
{
if(typeof Game_Interval != "undefined") clearInterval(Game_Interval);
 Game_Interval = setInterval(draw, 33); //ātrums simbolu izvadishana
}
function StopMatrix()
{
clearInterval(Game_Interval);
}

  }
  return {
      init:init
  }

}());
setTimeout(matrix.init.bind(matrix),1000);// pec cik ilga laika sāksies matrix theme