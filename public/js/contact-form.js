const changePage = (event) => {
    let anchor = window.location.hash;

    if(!anchor) anchor = "#step1";

    // Hide all pages
    let pages = document.querySelectorAll(".page");
    for (let page of pages) page.classList.add('d-none');
    // Show the selected one
    let currentPage = document.querySelector(anchor);
    currentPage.classList.remove('d-none');

    switch (anchor) {
        case "#step2":
            let name = document.getElementById('name').value;
            let name_error = document.getElementById('name-error');
            if(name == "") {
                window.location.hash = "#step1";
                name_error.classList.remove('d-none');
            } else {
                // Replacing the name in step 2
                document.getElementById('greetings').innerHTML = name;
                name_error.classList.add('d-none');
            }
            break;

        case "#step3":
            let mail = document.getElementById('mail').value;
            let mail_error = document.getElementById('mail-error');
            if(mail == "") {
                window.location.hash = "#step2";
                mail_error.classList.remove('d-none');
            } else {
                mail_error.classList.add('d-none');
            }
            break;

        case "#step4":
            let message = document.getElementById('message').value;
            let message_error = document.getElementById('message-error');
            if(message == "") {
                window.location.hash = "#step3";
                message_error.classList.remove('d-none');
            } else {
                message_error.classList.add('d-none');
                document.getElementById('confirm-name').innerHTML = document.getElementById('name').value;
                document.getElementById('confirm-mail').innerHTML = document.getElementById('mail').value;
                document.getElementById('confirm-message').innerHTML = document.getElementById('message').value;
            }
            break;
    
        default:
            break;
    }

}

const pressEnter = (event) => {
    if(event.key === 'Enter') {
        event.preventDefault();
        //document.getElementById("#step1").click();
    }
}

window.addEventListener("hashchange", changePage);
window.addEventListener("keypress", pressEnter);
changePage();