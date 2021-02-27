$(document).ready(function(){
    $('#logout-button').click(function(){
       var result =  "<?php logout();?>";
       console.log("event happened !");
       return false;
    })
})