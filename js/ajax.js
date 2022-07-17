//Import some files
import {clickFunc} from 'functions.js';

//Get the elements
var buttonName = document.getElementById('send-btn');
var data = document.getElementById('data');
var form = document.querySelector('div').getElementsByClassName('.form');
var msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ valueData +'</p></div></div>';

document.addEventListener("DOMContentLoaded", function(){
    buttonName.document.addEventListener("click", clickFunc(data, form, msg));
})
    

 