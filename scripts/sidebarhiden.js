var sideBarIsOpen = true;


toggleBtn.addEventListener('click', (event) => {

    if (sideBarIsOpen) {
        dashboard_sidebar.style.display = 'none';
        dashboard_content_conteiner.style.flexBasis = '100%';
        sideBarIsOpen = false;
    } else {
        dashboard_sidebar.style.display = 'inline-block';
        dashboard_content_conteiner.style.flexBasis = '85%';
        sideBarIsOpen = true;
    }



})
