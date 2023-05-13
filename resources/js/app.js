import './bootstrap';
// import '../sass/app.scss'
// import * as bootstrap from 'bootstrap'
import Search from "./live-search";

if (document.querySelector(".header-search-icon")) {
    new Search();
}

document.addEventListener("DOMContentLoaded", function(){
	document.querySelectorAll('.dropdown-menu').forEach(function(element){
		element.addEventListener('click', function (e) {
		    e.stopPropagation();
		});
	})
}); 

document.addEventListener("DOMContentLoaded", function(){
	/////// Prevent closing from click inside dropdown
	document.querySelectorAll('.dropdown-menu').forEach(function(element){
		element.addEventListener('click', function (e) {
		  e.stopPropagation();
		});
	})
}); 
