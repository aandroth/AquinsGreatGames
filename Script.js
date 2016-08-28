function mouseUp(new_page) {
    window.location.href = new_page;
}

function determineHeight(objectClass, ratio) {
    var obj = document.getElementsByClassName(objectClass)[0].offsetWidth;
    document.getElementsByClassName(objectClass)[0].style.height = obj * ratio + 'px';
}