// PAIN MODEL JS
// Getting the elements we need 	
var mainContainer = document.getElementById("mainContainer");
var genderButton = document.getElementById("maleOrFemaleButton");
var frontModel = document.getElementById("frontFacingModel");
var backModel = document.getElementById("backFacingModel");
var painLevelYellow = document.getElementById("painLevelYellow");
var painLevelOrange = document.getElementById("painLevelOrange");
var painLevelRed = document.getElementById("painLevelRed");
var painLevelViolet = document.getElementById("painLevelViolet");
var painModelDiv = document.getElementById("painModel");
// Creating the mouse events for the pain level
painLevelYellow.addEventListener( "mouseover" , function() { var faceYellow = document.getElementById("faceYellow");faceYellow.innerHTML = '<img class = "painImg" src = "painFaceYellow.png">';} , false);
painLevelOrange.addEventListener( "mouseover" , function() {var faceOrange = document.getElementById("faceOrange");faceOrange.innerHTML = '<img class = "painImg" src = "painFaceOrange.png">';} , false);
painLevelRed.addEventListener( "mouseover" , function() {var faceRed = document.getElementById("faceRed");faceRed.innerHTML = '<img class = "painImg" src = "painFaceRed.png">';} , false);
painLevelViolet.addEventListener( "mouseover" , function() {var faceYellow = document.getElementById("faceViolet");faceViolet.innerHTML = '<img class = "painImg" src = "painFaceViolet.png">';} , false);
painLevelYellow.addEventListener( "mouseout" , function() {faceYellow.innerHTML = '';} , false);
painLevelOrange.addEventListener( "mouseout" , function() {faceOrange.innerHTML = '';} , false);
painLevelRed.addEventListener( "mouseout" , function() {faceRed.innerHTML = '';} , false);
painLevelViolet.addEventListener( "mouseout" , function() {faceViolet.innerHTML = '';} , false);
// Creating the global variables uses for the threeJS scene
var scene, renderer, camera;
var controls, box, loader, mtlLoader;
var dirLight, dirLight2, spotlight, spotlight2;
var targetRotation = 0, targetRotationOnMouseDown = 0;
var mouseX = 0, mouseXOnMouseDown = 0; 
var mouseY = 0, mouseYOnMouseDown = 0;
var width= window.innerWidth * .75, height = window.innerHeight;
var maleModel = true;
//detecting if the browser is WebGL compatible
if (Detector.webgl){
	init();
	addMaleModel();
	myRender();
} else {
	nonWebGLInit();
}
// WebGL init
function init(){
	// Removing the image divs used in non-webGL compatabile init
	frontModel.remove();
	backModel.remove();	
	//Setting up Scene
	scene= new THREE.Scene();
	scene.background = new THREE.Color("white"); 
	//setting up camera
	camera= new THREE.PerspectiveCamera(45, width/height, 1, 1000);
	camera.position.y=1.2;
	camera.position.z = 4;
	//Defining variable
	loader = new THREE.OBJLoader();
	renderer = new THREE.WebGLRenderer();
	//adding light
	light = new THREE.AmbientLight(0x404040);
	dirLight = new THREE.DirectionalLight( 0x404040 );
	dirLight2 = new THREE.DirectionalLight( 0x404040 );
	spotLight = new THREE.SpotLight( 0xffffff );
	spotLight2 = new THREE.SpotLight( 0xffffff );
	//adding direction to the light
	dirLight.position.set( 0, 5, 1 ).normalize();
	dirLight2.position.set( 0, 5, -1 ).normalize();
	spotLight.position.set( 100, 0, 500 );
	spotLight2.position.set( 100, 0, -500 );
	//adding object to the scene
	scene.add(light);
	scene.add(dirLight);
	scene.add(dirLight2);
	scene.add(spotLight);
	scene.add(spotLight2);
	//Setting up renderer
	renderer.setSize(width,height);
	painModelDiv.appendChild(renderer.domElement);
	//adding event handler for gender button
	genderButton.addEventListener('click', genderHandler, false);
	//adding event listener for window resize
	window.addEventListener( "resize", onWindowResize, false);
	//Adding event listeners for model Rotation
	painModelDiv.addEventListener( 'mousedown', onDocumentMouseDown, false );
	//Adding code for touch screen functionality
	window.addEventListener( 'touchstart', onDocumentTouchStart, false );
	window.addEventListener( 'touchmove', onDocumentTouchMove, false );
}
function nonWebGLInit() {
	//setting up images to be loaded
	frontModel.innerHTML = '<img src = "maleFront.png">';
	backModel.innerHTML = '<img src = "maleBack.png">';
	//adding event listener for gender button
	genderButton.addEventListener('click', genderImageHandler, false);
	//adding event listener for window resize
	window.addEventListener( "resize", onWindowResize, false);
}
function onDocumentMouseDown() {
	event.preventDefault();
	//calculating placement of mouse when clicked
	mouseVector = new THREE.Vector2();
	mouseVector.x = 2 * (event.clientX / width) - 1;
	mouseVector.y = 1 - 2 * (event.clientY / width);
	mouseXOnMouseDown = event.clientX - (width/2);
	//adding event listeners when mouse is clicked
	document.addEventListener( 'mousemove', onDocumentMouseMove, false);
	document.addEventListener( 'mouseup', onDocumentMouseUp, false);
	document.addEventListener( 'mouseout', onDocumentMouseOut, false);
	targetRotationOnMouseDown = targetRotation;
}
function onDocumentMouseMove() {
	//calculating movement of mouse along x axis
	mouseX = event.clientX - (width/2);
	//figuring out rotation of model
	targetRotation = targetRotationOnMouseDown + (mouseX - mouseXOnMouseDown) * .01;	
}

function onDocumentMouseUp() {
	//removing event listeners when mouse is no longer pressed down
	document.removeEventListener( 'mousemove', onDocumentMouseMove, false);
	document.removeEventListener( 'mouseup', onDocumentMouseUp, false);
	document.removeEventListener( 'mouseout', onDocumentMouseOut, false);
}

function onDocumentMouseOut() {
	//removing event listeners when mouse is moved out of the window
	document.removeEventListener( 'mousemove', onDocumentMouseMove, false);
	document.removeEventListener( 'mouseup', onDocumentMouseUp, false);
	document.removeEventListener( 'mouseout', onDocumentMouseOut, false);
}
//adding code for touchscreen functionality 
function onDocumentTouchStart() {
	if(event.touches.length == 1){
		console.log(event.touches.length);
		event.preventdefault();
		mouseXOnMouseDown = event.touches[0].pageX - (width/2);
		targetRotation = targetRotationOnMouseDown + (mouseX - mouseXOnMouseDown) * .01;
	}
}
function onDocumentTouchMove() {
	if(event.touches.length == 1){
		event.preventdefault();
		mouseX = event.touches[0].pageX -(width/2);
		targetRotation = targetRotionOnMouseDown + (mouseX - mouseXOnMouseDown) * .01;
	}
}
//adding function for OBJ loaders
var onProgress = function(object){
	if(object.lengthComputable){
		var PercentComplete = object.loaded/ object.total *100;
		//console.log("model "+ Math.round(PercentComplete,2) + "% loaded");
	}
}
var onProgressMtl = function(object){
	if(object.lengthComputable){
		var PercentComplete = object.loaded/ object.total *100;
		//console.log("material " + Math.round(PercentComplete,2) + "% loaded");
	}
}
var onError = function(){
	console.log("error loading model");
}
//adding female model to the scene
function addFemaleModel(){	
	mtlLoader = new THREE.MTLLoader();
	mtlLoader.load("femaleModel.mtl", function(materials) {
		materials.preload(); 
		loader.setMaterials(materials);
		materials.name = "femalePainMaterial";
		loader.load("femaleModel.obj", function(object) {
			object.name = "femaleModel";
			scene.add(object);
		}, onProgress, onError);},onProgressMtl, onError);}		
//adding male model to the scene	
function addMaleModel()
{	
	mtlLoader = new THREE.MTLLoader();
	mtlLoader.load("maleModel.mtl", function(materials) {
		materials.preload(); 
		loader.setMaterials(materials);
		loader.load("maleModel.obj", function(object) {
			object.name = "maleModel";
			scene.add(object);
		}, onProgress, onError);},onProgressMtl, onError);
}
//setting remove object for the Model Event Handler
function removeObject(object){
	var selectedObject = scene.getObjectByName(object);
	scene.remove(selectedObject);
}
//adding images to the divs if WebGL is unavailable
function addMaleImage() {
	frontModel.innerHTML = '<img src = "maleFront.png">';
	backModel.innerHTML = '<img src = "maleBack.png">'
}
function addFemaleImage() {
	frontModel.innerHTML = '<img src = "femaleFront.png">';
	backModel.innerHTML = '<img src = "femaleBack.png">';
}
//adding button handler for gender switch for WebGL capable browsers
function genderHandler() {
	// switching gender for male from true to false and visa versa when button is pushed
	maleModel = !maleModel;
	if (maleModel == false) {
		removeObject("maleModel");
		addFemaleModel();
	} else {	
		removeObject("femaleModel");
		addMaleModel();
	}
}
//adding button handler for gender switch for non-WebGL capable browsers
function genderImageHandler() {
	// switching gender for male from true to false and visa versa when button is pushed
	maleModel = !maleModel;
	if (maleModel == false) {
		frontModel.innerHTML = "";
		backModel.innerHTML = "";
		addFemaleImage();
	} else {
		frontModel.innerHTML = "";
		backModel.innerHTML = "";
		addMaleImage();
	}
}
//window resize function
function onWindowResize() {
	mainContainer.setAttribute("style" , "width: " + window.innerWidth + "px; height: " + window.innerHeight + "px;");
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize(window.innerWidth * .75, window.innerHeight * .75 );
}
//render function	
function myRender(){
	scene.rotation.y += targetRotation * .05;
	renderer.render( scene, camera );
	requestAnimationFrame( myRender );
	targetRotation= 0;
}
