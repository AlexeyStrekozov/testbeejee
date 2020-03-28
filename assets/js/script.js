window.addEventListener("DOMContentLoaded", function() {
  var status = document.querySelectorAll('.status');
  var element = document.querySelectorAll('.number');

  for (var i = 0; i < status.length; i++) {
    if(status[i].innerText == "Выполнено"){
      status[i].parentNode.classList.add('performed');
    }
  }
});
