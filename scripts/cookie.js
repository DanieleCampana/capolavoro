var fonts = [
  "Times New Roman",
  "Verdana",
  "Tahoma",
  "Trebuchet MS",
  "Arial",
  "Georgia",
  "Courier New",
];

document.addEventListener("DOMContentLoaded", function () {
  var themeToggle = document.getElementById("themeToggle");

  var savedTheme = getCookie("theme");
  if (savedTheme) {
    themeToggle.checked = savedTheme === "dark";
  }

  themeToggle.addEventListener("change", function () {
    var newTheme = themeToggle.checked ? "dark" : "light";
    setCookie("theme", newTheme, 30);
    document.getElementById("container").className = "container " + newTheme;
  });
});

var string = "";
var select = document.getElementById("fontSelector");
for (var i = 0; i < fonts.length; i++) {
  var option = document.createElement("option");
  option.value = option.innerHTML = fonts[i];
  option.style.fontFamily = fonts[i];
  select.add(option);
}

document.addEventListener("DOMContentLoaded", function () {
  var fontSelector = document.getElementById("fontSelector");

  var savedFont = getCookie("font");
  if (savedFont) {
    fontSelector.value = savedFont;
  }

  fontSelector.addEventListener("change", function () {
    var newFont = fontSelector.value;
    setCookie("font", newFont, 30);
    document.getElementById("body").style.fontFamily = newFont;
  });
});

function getCookie(name) {
  //(^| ) cerca un inizio di linea (^) oppure uno spazio ( )
  //([^;]+) corrisponde a qualsiasi carattere diverso da ; una o più volte.
  var match = document.cookie.match(new RegExp("(^| )" + name + "=([^;]+)"));
  if (match) {
    return match[2];
  }
}

function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + value + expires + "; path=/";
}
