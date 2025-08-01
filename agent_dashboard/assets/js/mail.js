(function () {
  "use strict";

  var myElement11 = document.getElementById("mail-main-nav");
  new SimpleBar(myElement11, { autoHide: true });

  var myElement12 = document.getElementById("mail-messages");
  new SimpleBar(myElement12, { autoHide: true });

  var myElement13 = document.getElementById("mail-info-body");
  new SimpleBar(myElement13, { autoHide: true });

  /* mail editor */
  var toolbarOptions = [
    [{ header: [1, 2, 3, 4, 5, 6, false] }],
    [{ font: [] }],
    ["bold", "italic", "underline", "strike"], // toggled buttons
    ["blockquote", "code-block"],

    [{ header: 1 }, { header: 2 }], // custom button values
    [{ list: "ordered" }, { list: "bullet" }],

    [{ color: [] }, { background: [] }], // dropdown with defaults from theme
    [{ align: [] }],

    ["image", "video"],
    ["clean"], // remove formatting button
  ];
  var quill = new Quill("#mail-reply-editor", {
    modules: {
      toolbar: toolbarOptions,
    },
    theme: "snow",
  });

  var quill1 = new Quill("#mail-compose-editor", {
    modules: {
      toolbar: toolbarOptions,
    },
    theme: "snow",
  });

  /* to choices js */
  const multipleCancelButton = new Choices("#toMail", {
    allowHTML: true,
    removeItemButton: true,
  });

  let mailContainer = document.querySelectorAll(".mail-messages-container >li");

  let i = true;

  let closeButton = document.querySelectorAll(
    ".responsive-mail-action-icons > button"
  )[0];

  if (closeButton) {
    closeButton.onclick = () => {
      document.querySelector(".total-mails").classList.remove("d-none");
      i = true;
    };
  }

  window.addEventListener("resize", () => {
    if (window.innerWidth > 1399) {
      // document.querySelector(".mails-information").style.display = "block";
      document.querySelector(".total-mails").classList.remove("d-none");
    } else {
      if (i) {
        // document.querySelector(".mails-information").style.display = "none";
      }
    }

    if (window.innerWidth < 1399 && i == false) {
      document.querySelector(".total-mails").classList.add("d-none");
    } else {
      // if(document.querySelector(".mail-navigation").style.display != "block"){
      document.querySelector(".total-mails").classList.remove("d-none");
      // }
    }

    if (window.innerWidth > 991) {
      document.querySelector(".mail-navigation").style.display = "block";
      document.querySelector(".total-mails").style.display = "block";
    } else {
      if (
        document.querySelector(".total-mails").style.display == "block" &&
        i == false
      ) {
        document.querySelector(".mail-navigation").style.display = "none";
      }
      if ((document.querySelector(".mail-navigation").style.display = "none")) {
        // document.querySelector(".total-mails").style.display = "none"
      }
    }
  });
  document.addEventListener("DOMContentLoaded", (event) => {
    if (window.innerWidth > 1399) {
        // document.querySelector(".mails-information").style.display = "block";
        document.querySelector(".total-mails").classList.remove("d-none");
      } else {
        if (i) {
          // document.querySelector(".mails-information").style.display = "none";
        }
      }

      if (window.innerWidth < 1399 && i == false) {
        document.querySelector(".total-mails").classList.add("d-none");
      } else {
        // if(document.querySelector(".mail-navigation").style.display != "block"){
        document.querySelector(".total-mails").classList.remove("d-none");
        // }
      }

      console.log(window.innerWidth);
      if (window.innerWidth > 991) {
        document.querySelector(".mail-navigation").style.display = "block";
        document.querySelector(".total-mails").style.display = "block";
      } else {
        if (
          document.querySelector(".total-mails").style.display == "block" && i == false) {
          document.querySelector(".mail-navigation").style.display = "none";
        }
        if ((document.querySelector(".mail-navigation").style.display = "none")) {
          // document.querySelector(".total-mails").style.display = "none"
        }
      }
  });

  document.querySelectorAll(".mail-type").forEach((element) => {
    element.onclick = () => {
      if (window.innerWidth <= 991) {
        document.querySelector(".total-mails").style.display = "block";
        document.querySelector(".total-mails").classList.remove("d-none");
        document.querySelector(".mail-navigation").style.display = "none";
        i = true;
      }
    };
  });

  document.querySelector(".total-mails-close").onclick = () => {
    if (window.innerWidth < 992) {
      document.querySelector(".mail-navigation").style.display = "block";
      document.querySelector(".total-mails").classList.add("d-none");
      i = true;
    }
  };
})();
let checkAll = document.querySelector('.check-all');
  checkAll.addEventListener('click', checkAllFn)

function checkAllFn() {
  if (checkAll.checked) {
      document.querySelectorAll('.mail-messages-container input').forEach(function (e) {
          e.closest('.mail-messages').classList.add('selected');
          e.checked = true;
      });
  }
  else {
      document.querySelectorAll('.mail-messages-container input').forEach(function (e) {
          e.closest('.mail-messages').classList.remove('selected');
          e.checked = false;
      });
  }
}