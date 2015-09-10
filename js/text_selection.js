$(document).ready(function () {

function getSelected() {
    if (window.getSelection) {
        return window.getSelection();
    }
    else if (document.getSelection) {
        return document.getSelection();
    }
    else {
        var selection = document.selection && document.selection.createRange();
        if (selection.text) {
            return selection.text;
        }
        return false;
    }
    return false;
}

var open = false;

  $('#select').mouseup(function() {
      var selection = getSelected();
      if (selection != "" && open === false) {
        $('.dropdown').slideDown();;
        document.getElementById("dt").innerHTML = selection;
          //alert(selection);
      }
  });

  $("button").click(function(){
    $(".dropdown").slideUp();
});

});
