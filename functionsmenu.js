window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 20) {
      document.getElementById("header").style.height = "95px";
      document.getElementById("Logo").style.height = "91px";
      document.getElementById("topButton1").style.height = "95px";
      document.getElementById("topButton2").style.height = "95px";
      document.getElementById("topButton3").style.height = "95px";
    } else {
      document.getElementById("header").style.height = "200px";
      document.getElementById("Logo").style.height = "195px";
      document.getElementById("topButton1").style.height = "200px";
      document.getElementById("topButton2").style.height = "200px";
      document.getElementById("topButton3").style.height = "200px";
    }

  } 