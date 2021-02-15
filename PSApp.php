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
let modelID = "<?=$modelID?>";
let modelColor = "<?=$color?>";
let modelVersion = "<?=$version?>";
window.onload = function() {
  requestData();
};
async function requestData() {
    let modelViewer = document.querySelector("#modelViewer");
    modelViewer.src = "https://soer145a.github.io/PurpleScout_Demo/models/4011/4011_GLTF/4011_Closed/4011_Closed.gltf";
    //modelViewer.setAttribute("ios-src",sData.usdz[0]); 
}
</script>