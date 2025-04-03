/*!
* Start Bootstrap - Modern Business v5.0.7 (https://startbootstrap.com/template-overviews/modern-business)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-modern-business/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

document.addEventListener("DOMContentLoaded", function () {
    fetch("../templates/header.html")
        .then(response => response.text())
        .then(data => {
            document.querySelector("header").insertAdjacentHTML("afterbegin", data);
        })
        .catch(error => console.error("Erreur lors de l'inclusion du header:", error));

    fetch("../templates/footer.html")
        .then(response => response.text())
        .then(data => {
            document.querySelector("footer").insertAdjacentHTML("afterbegin", data);
        })
        .catch(error => console.error("Erreur lors de l'inclusion du footer:", error));
});
