var divNum = document.querySelectorAll(".number");
var count = divNum.length; //всего записей
var cnt = 3; //сколько отображаем сначала
var cntPage = Math.ceil(count / cnt); //кол-во страниц

var paginator = document.querySelector(".paginator");
var page = "";
for (var i = 0; i < cntPage; i++) {
  page += "<span data-page=" + i * cnt + "  id=\"page" + (i + 1) + "\">" + (i + 1) + "</span>";
}
paginator.innerHTML = page;


for (var i = 0; i < divNum.length; i++) {
  var number = 1+i;
    divNum[i].setAttribute('data-num', number);
  if (i < cnt) {
    divNum[i].style.display = "table-row";
  }
}

var mainPage = document.getElementById("page1");
mainPage.classList.add("paginator_active");

function pagination(event) {
  var e = event || window.event;
  var target = e.target;
  var id = target.id;

  if (target.tagName.toLowerCase() != "span") return;

  var num_ = id.substr(4);
  var dataPage = +target.dataset.page;
  mainPage.classList.remove("paginator_active");
  mainPage = document.getElementById(id);
  mainPage.classList.add("paginator_active");

  var j = 0;
  for (var i = 0; i < divNum.length; i++) {
    var data_num = divNum[i].dataset.num;
    if (data_num <= dataPage || data_num >= dataPage)
      divNum[i].style.display = "none";
  }
  for (var i = dataPage; i < divNum.length; i++) {
    if (j >= cnt) break;
    divNum[i].style.display = "table-row";
    j++;
  }
}
