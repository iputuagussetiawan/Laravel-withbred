import './bootstrap';
// import '../sass/app.scss'
// import * as bootstrap from 'bootstrap'
import Search from "./live-search";

if (document.querySelector(".header-search-icon")) {
    new Search();
}
