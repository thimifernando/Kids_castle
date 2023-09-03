setTimeout(function () {
    let alert = document.querySelector('.alert');
    alert.setAttribute("style", "height:0px")
    setTimeout(function () {
        alert.setAttribute("style", "display:none")
    }, 500)
}, 5000)