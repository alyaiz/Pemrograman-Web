function appearingTitleAbout(){
    let titleAbout =  document.querySelector(".titleAbout");
    let titleAboutAppear = titleAbout.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.2;

    if (titleAboutAppear < screenPosition){
        titleAbout.classList.add("titleAboutAppear");
    }
    else if (titleAboutAppear > screenPosition){
        titleAbout.classList.remove("titleAboutAppear");
    }
}
function appearingText1(){
    let text1 =  document.querySelector(".text1");
    let text1Appear = text1.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.5;

    if (text1Appear < screenPosition){
        text1.classList.add("text1Appear");
    }
    else if (text1Appear > screenPosition){
        text1.classList.remove("text1Appear");
    }
}
function appearingText2(){
    let text2 =  document.querySelector(".text2");
    let text2Appear = text2.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.5;

    if (text2Appear < screenPosition){
        text2.classList.add("text2Appear");
    }
    else if (text2Appear > screenPosition){
        text2.classList.remove("text2Appear");
    }

}

function appearingTitleSkill(){
    let text2 =  document.querySelector(".titleSkill");
    let text2Appear = text2.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.2;

    if (text2Appear < screenPosition){
        text2.classList.add("titleSkillAppear");
    }
    else if (text2Appear > screenPosition){
        text2.classList.remove("titleSkillAppear");
    }

}

function appearingLine(){
    let text2 =  document.querySelector(".horizontalLine");
    let text2Appear = text2.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.1;

    if (text2Appear < screenPosition){
        text2.classList.add("horizontalLineAppear");
    }
    else if (text2Appear > screenPosition){
        text2.classList.remove("horizontalLineAppear");
    }

}

function appearingSkillTool(){
    let text2 =  document.querySelector(".skillTool");
    let text2Appear = text2.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.3;

    if (text2Appear < screenPosition){
        text2.classList.add("skillToolAppear");
    }
    else if (text2Appear > screenPosition){
        text2.classList.remove("skillToolAppear");
    }

}

function appearingSkillCoding(){
    let text2 =  document.querySelector(".skillCoding");
    let text2Appear = text2.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.5;

    if (text2Appear < screenPosition){
        text2.classList.add("skillCodingAppear");
    }
    else if (text2Appear > screenPosition){
        text2.classList.remove("skillCodingAppear");
    }

}

//===========================================================

function appearingTitleProject(){
    let titleProject =  document.querySelector(".titleProject");
    let titleProjectAppear = titleProject.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.3;

    if (titleProjectAppear < screenPosition){
        titleProject.classList.add("titleProjectAppear");
    }
    else if (titleProjectAppear > screenPosition){
        titleProject.classList.remove("titleProjectAppear");
    }

}
function appearingProjects(){
    let projectsContainer =  document.querySelector(".projectsContainer");
    let projectsContainerAppear = projectsContainer.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.2;

    if (projectsContainerAppear < screenPosition){
        projectsContainer.classList.add("projectsContainerAppear");
    }
    else if (projectsContainerAppear > screenPosition){
        projectsContainer.classList.remove("projectsContainerAppear");
    }

}

function appearingContact(){
    let textContact =  document.querySelector(".contact");
    let textContactAppear = textContact.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.2;

    if (textContactAppear < screenPosition){
        textContact.classList.add("textContactAppear");
    }
    else if (textContactAppear > screenPosition){
        textContact.classList.remove("textContactAppear");
    }

}

//=======================================================================

function appearingTextContact(){
    let Inviting =  document.querySelector(".textProject");
    let InvitingAppear = Inviting.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.5;

    if (InvitingAppear < screenPosition){
        Inviting.classList.add("textProjectAppear");
    }
    else if (InvitingAppear > screenPosition){
        Inviting.classList.remove("textProjectAppear");
    }

}

//adding blur at "Project"
function mauAddBlur(){
    let mau = document.querySelector(".contentProject");

    mau.classList.add("addBlur");
}

window.addEventListener("scroll", appearingTitleAbout);
window.addEventListener("scroll", appearingText1);
window.addEventListener("scroll", appearingText2);
window.addEventListener("scroll", appearingTitleProject);
window.addEventListener("scroll", appearingProjects);
window.addEventListener("scroll", appearingContact);
window.addEventListener("scroll", appearingTextContact);
window.addEventListener("scroll", appearingTitleSkill);
window.addEventListener("scroll", appearingSkillTool);
window.addEventListener("scroll", appearingSkillCoding);
window.addEventListener("scroll", appearingLine);
document.querySelector(".box").addEventListener("mouseenter", mauAddBlur);

// hide-show navbar
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".cont-header").style.top = "0";
  } 
  else if((window.innerHeight + window.scrollY) >= document.body.scrollHeight) {
    document.querySelector(".cont-header").style.top = "0";
  } 
  else {document.querySelector(".cont-header").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}

var element = document.querySelector(".cont-header");
element.addEventListener("mouseover", function() {
    document.querySelector(".cont-header").style.top = "0";
});
element.addEventListener("mouseleave", function() {
    document.querySelector(".cont-header").style.top = "-100px";
    if((window.innerHeight + window.scrollY) >= document.body.scrollHeight) {
        document.querySelector(".cont-header").style.top = "0";
    } 
    else if(document.body.scrollTop = 0 || document.documentElement.scrollTop == 0){
        document.querySelector(".cont-header").style.top = "0";

    }
});

// changing bg-color when its on "about"
let about = document.getElementById("About");
let aboutFromTop = about.offsetTop / 1.6;
let project = document.getElementById("Project");
let projectFromTop = project.offsetTop / 1.4;
let a = document.querySelectorAll("a");
let i;

let line = document.querySelector(".horizontalLine");

window.addEventListener("scroll", function() {
    
    //Changing style on About
    if (window.scrollY >= aboutFromTop && window.scrollY <= projectFromTop){
        document.body.style.backgroundColor = "#e9c600";
        document.body.style.color = "#0f0f0f";
        line.style.backgroundColor = "#0f0f0f"

        for (i = 0 ; i < 4 ; i++){
            a[i].style.color = "#0f0f0f";
        }

    }

    //Changing style to default for before About
    else if (window.scrollY <= aboutFromTop){
        document.body.style.backgroundColor = "#0f0f0f";
        document.body.style.color = "white";
        line.style.backgroundColor = "white"

        for (i = 0 ; i < 4 ; i++){
            a[i].style.color = "white";
        }
    }

    //Changing style to default for after About
    else if (window.scrollY >= projectFromTop){
        document.body.style.backgroundColor = "#0f0f0f";
        document.body.style.color = "white";
        line.style.backgroundColor = "white"

        for (i = 0 ; i < 4; i++){
            a[i].style.color = "white";
        }
    }
});

