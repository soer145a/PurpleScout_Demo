console.log("Loaded PurpleScout js");
let modelVersion;
let modelID;
let modelColor;
window.addEventListener("load", () => { 
    identifyModelViewers();
});
function identifyModelViewers() {
    let loadedModelViewers = document.querySelectorAll(".modelViewers");
    console.log(loadedModelViewers);
}