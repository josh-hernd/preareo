function glovalPaths() {

    // Create Menu Hashmap
    var urls = {
        "Home": "//preareo.com/",
        "About": "//preareo.com/public/about.php",
        "Learn More": "//preareo.com/public/learn-more.php",
        "Contact Us": "//preareo.com/public/contact.php"
    }

    // Get hearder 
    var header = document.getElementById("header_Nav");
    // Get Menu to inject
    var mainMenu = document.getElementById("main_menu");
    // Get mobile Ijection
    var mobileMenu = document.getElementById("mobile_menu");
    // Get Footer to inject
    var footMenu = document.getElementById("footer_menu");

    // Iterate Thourgh URLs Hashmap
    function myUrls() {

        var uls = "";

        for (const [key, value] of Object.entries(urls)) {
            uls += '<li><a href="' + value + '">' + key + '</a></li>';
        }
        mainMenu.innerHTML += '<ul>' + uls + '</ul>';
        mobileMenu.innerHTML += '<ul>' + uls + '</ul>';
        footMenu.innerHTML += '<ul>' + uls + '</ul>';
    }
    myUrls();

}
glovalPaths();