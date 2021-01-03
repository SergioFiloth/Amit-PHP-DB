// Fonts of Google

let fontsG = document.getElementById("fontsGoogle");

fontsG.href =
    "https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap";

// Links Menu and more
// They are the rutes in the links
let index = "/",
    sgp = "/pages/sgp/",
    mp = "/pages/mp/",
    gps = "/pages/gps/",
    daDr = "/pages/da-dr/",
    login = "/pages/login/",
    b = "/pages/blog/",
    c = "/pages/contact/",
    cart = "/pages/cart/",
    faqs = "/pages/faqs/",
    term = "/pages/term/",
    privacy = "/pages/privacy/",
    refunds = "/pages/refunds/",
    // The l in the variables does references to the links of the website.
    lindex = document.getElementById("lindex"),
    lsgp = document.getElementById("lsgp"),
    lmp = document.getElementById("lmp"),
    lgps = document.getElementById("lgps"),
    ldaDr = document.getElementById("ldaDr"),
    llogin = document.getElementById("llogin"),
    lcart = document.getElementById("lcart"),
    linkM = document.getElementById("linkM"),
    // The "f" in the variables does references to links in the footer
    fbgp = document.getElementById("fbgp"),
    fsgp = document.getElementById("fsgp"),
    fmp = document.getElementById("fmp"),
    fb = document.getElementById("fb"),
    fc = document.getElementById("fc"),
    ff = document.getElementById("ff"),
    ft = document.getElementById("ft"),
    fp = document.getElementById("fp"),
    fr = document.getElementById("fr");

lindex.href = index;
(lsgp.href = sgp), (fsgp.href = sgp);

(lmp.href = mp), (fbgp.href = mp), (fmp.href = mp);
lgps.href = gps;
ldaDr.href = daDr;
fc.href = c;
ff.href = faqs;
ft.href = term;
fp.href = privacy;
fr.href = refunds;

if (fb) {
    let father = fb.parentNode
    father.removeChild(fb)
}

if (llogin) {
    llogin.href = login;
}

if (linkM) {
    linkM.href = mp
}

lcart.href = cart;

// End function menu nav

// Hide Navbar

let principalUbication = window.pageYOffset,
    navbar = document.getElementById("nav"),
    hNavbar = navbar.offsetHeight,
    fean = document.getElementById("fean");
window.onscroll = () => {
    let actualMove = window.pageYOffset;
    if (principalUbication >= actualMove) {
        navbar.style.top = "0";
    } else {
        navbar.style.top = "-100px";
    }
    principalUbication = actualMove;
};

let nL = document.getElementById("nL"),
    btnL = document.getElementById("btnL");
if (btnL || nL) {
    btnL.addEventListener("click", () => {
        nL.classList.toggle("show");
    })
}

if (fean) {
    fean.style.marginTop = `calc(${hNavbar}px + .6rem)`;
}
if (nL) {
    nL.style.top = `calc(${hNavbar}px + .6rem)`;
}


// FAQs Card

let btnItems = document.querySelectorAll(".btnItem");
if (btnItems) {
    for (let i = 0; i < btnItems.length; i++) {
        btnItems[i].addEventListener("click", (e) => {
            let et = e.target;
            if (et.className == "btnItem active") {
                removeClass();
            } else {
                removeClass();
                btnItems[i].classList.add("active");
            }
        });
    }
    let removeClass = () => {
        for (let i = 0; i < btnItems.length; i++) {
            btnItems[i].classList.remove("active");
        }
    };
}

// Menu Functionality

let btnM = document.getElementById("menuT"),
    contN = document.getElementById("contNav")

btnM.addEventListener("click", () => {
    contN.classList.toggle("desactive")
})