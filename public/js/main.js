$(function() {

});

function level(id){
	window.location.search += '&levelID=' + id;
};

// function levelName(word){
// 	document.getElementById("dropdownLevel").innerHTML = word + ' <span class="caret"></span>';
// }

function size(id, word){
	window.location.search += '&sizeID=' + id;
};

function field(id, word){
	window.location.search += '&fieldID=' + id;
};

function page(id){
	window.location.search += '&page=' + id;
};

function clearSearch(){
	window.location.search = '';
}