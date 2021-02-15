console.log("Loaded PurpleScout js");
let modelVersion;
let modelID;
let modelColor;
let modelViewerIdentifier = 1;
window.addEventListener("load", () => { 
    identifyModelViewers();
});
function identifyModelViewers() {
    let loadedModelViewers = document.querySelectorAll(".modelViewer");
    console.log(loadedModelViewers);
    loadedModelViewers.forEach( (model,index) =>{
        model.setAttribute("id",`modelViewer${index}`)
    })
}