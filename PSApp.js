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
        model.setAttribute("id", `modelViewer${index + 1}`);
        model.addEventListener("load", () => { 
            requestData(model); 
        });
    })
}
function requestData(modelViewer) {
    console.log(modelColor,modelID,modelVersion);
    modelViewer.src = `https://soer145a.github.io/PurpleScout_Demo/models/${modelID}/${modelID}_GLTF/${modelID}_${modelVersion}/${modelID}_${modelVersion}.gltf`;
    modelViewer.setAttribute("ios-src",`https://soer145a.github.io/PurpleScout_Demo/models/${modelID}/${modelID}_USDZ/${modelID}_${modelVersion}.usdz`);
    modelViewer.addEventListener("load",()=>{
      modelViewer.model.materials[0].pbrMetallicRoughness.baseColorTexture.texture.source.setURI(`https://soer145a.github.io/PurpleScout_Demo/models/${modelID}/${modelID}_GLTF/${modelID}_${modelVersion}/${modelID}_baseColor_${modelColor}.png`);
    }); 
}
