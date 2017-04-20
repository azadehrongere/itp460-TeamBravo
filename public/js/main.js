$(function() {

});

function level(id){
	window.location.search += '&levelID=' + id;
};

function size(id){
	window.location.search += '&sizeID=' + id;
};

function field(id){
	window.location.search += '&fieldID=' + id;
};

function clearSearch(){
	window.location.search = '';
}