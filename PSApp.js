console.log("Loaded PurpleScout js");
window.addEventListener("load", () => { 
    identifyModelViewers();
});
function identifyModelViewers() {
    let loadedModelViewers = document.querySelectorAll(".modelViewers");
    console.log(loadedModelViewers);
}