<!-- Import the component -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
<!-- Actual HTML for print-->
<model-viewer 
style="width:100%;height:100%"
id="modelViewer"
camera-controls
disable-zoom
src=""
ar
camera-orbit="50deg 60deg 40deg"
loading="eager"
ios-src=""
environment-image="https://soer145a.github.io/PurpleScout_Demo/weewee_1.hdr"
shadow-intensity="0"
shadow-softness="0"
exposure="0.8"
>

</model-viewer>
<script>
window.onload = function() {
  requestData();
};
async function requestData() {
  console.log(modelColor,modelID,modelVersion);
  let modelViewer = document.querySelector("#modelViewer");
  modelViewer.src = `https://soer145a.github.io/PurpleScout_Demo/models/${modelID}/${modelID}_GLTF/${modelID}_${modelVersion}/${modelID}_${modelVersion}.gltf`;
  modelViewer.setAttribute("ios-src",`https://soer145a.github.io/PurpleScout_Demo/models/${modelID}/${modelID}_USDZ/${modelID}_${modelVersion}.usdz`);
  modelViewer.addEventListener("load",()=>{
    modelViewer.model.materials[0].pbrMetallicRoughness.baseColorTexture.texture.source.setURI(`https://soer145a.github.io/PurpleScout_Demo/models/${modelID}/${modelID}_GLTF/${modelID}_${modelVersion}/${modelID}_baseColor_${modelColor}.png`);
  });
}

</script>