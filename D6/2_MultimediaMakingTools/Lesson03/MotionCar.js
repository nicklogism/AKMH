(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"MotionCar_atlas_", frames: [[1607,0,432,432],[0,800,1598,206],[0,0,1605,798],[0,1008,800,213],[1607,434,128,128]]}
];


// symbols:



(lib.CachedTexturedBitmap_1 = function() {
	this.initialize(ss["MotionCar_atlas_"]);
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.CachedTexturedBitmap_2 = function() {
	this.initialize(ss["MotionCar_atlas_"]);
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.CachedTexturedBitmap_3 = function() {
	this.initialize(ss["MotionCar_atlas_"]);
	this.gotoAndStop(2);
}).prototype = p = new cjs.Sprite();



(lib.Layer1 = function() {
	this.initialize(ss["MotionCar_atlas_"]);
	this.gotoAndStop(3);
}).prototype = p = new cjs.Sprite();



(lib.Layer2 = function() {
	this.initialize(ss["MotionCar_atlas_"]);
	this.gotoAndStop(4);
}).prototype = p = new cjs.Sprite();
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Scene_1_Sun = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Sun
	this.instance = new lib.CachedTexturedBitmap_1();
	this.instance.parent = this;
	this.instance.setTransform(14.4,5.85,0.5,0.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(90));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_Sky = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Sky
	this.instance = new lib.CachedTexturedBitmap_3();
	this.instance.parent = this;
	this.instance.setTransform(-0.45,0.85,0.5,0.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(90));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_Road = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Road
	this.instance = new lib.CachedTexturedBitmap_2();
	this.instance.parent = this;
	this.instance.setTransform(1.05,297.05,0.5,0.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(90));

}).prototype = p = new cjs.MovieClip();


(lib.Wheel_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Layer2();
	this.instance.parent = this;
	this.instance.setTransform(-64,-64);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Wheel_Layer_1, null, null);


(lib.Car_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Layer1();
	this.instance.parent = this;
	this.instance.setTransform(0,-106.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Car_Layer_1, null, null);


(lib.Wheel = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.Wheel_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.Wheel, new cjs.Rectangle(-64,-64,128,128), null);


(lib.Car = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.Car_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.setTransform(400,0,1,1,0,0,0,400,0);
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.Car, new cjs.Rectangle(0,-106.5,800,213), null);


(lib.carpsd = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Wheel2
	this.instance = new lib.Wheel();
	this.instance.parent = this;
	this.instance.setTransform(141.8,174);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({rotation:12},0).wait(1).to({rotation:24},0).wait(1).to({rotation:36},0).wait(1).to({rotation:48},0).wait(1).to({rotation:60},0).wait(1).to({rotation:72},0).wait(1).to({rotation:84},0).wait(1).to({rotation:96},0).wait(1).to({rotation:108},0).wait(1).to({rotation:120},0).wait(1).to({rotation:132},0).wait(1).to({rotation:144},0).wait(1).to({rotation:156},0).wait(1).to({rotation:168},0).wait(1).to({rotation:180},0).wait(1).to({rotation:192},0).wait(1).to({rotation:204},0).wait(1).to({rotation:216},0).wait(1).to({rotation:228},0).wait(1).to({rotation:240},0).wait(1).to({rotation:252},0).wait(1).to({rotation:264},0).wait(1).to({rotation:276},0).wait(1).to({rotation:288},0).wait(1).to({rotation:300},0).wait(1).to({rotation:312},0).wait(1).to({rotation:324},0).wait(1).to({rotation:336},0).wait(1).to({rotation:348},0).wait(1));

	// Wheel1
	this.instance_1 = new lib.Wheel();
	this.instance_1.parent = this;
	this.instance_1.setTransform(620,174);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1).to({rotation:12},0).wait(1).to({rotation:24},0).wait(1).to({rotation:36},0).wait(1).to({rotation:48},0).wait(1).to({rotation:60},0).wait(1).to({rotation:72},0).wait(1).to({rotation:84},0).wait(1).to({rotation:96},0).wait(1).to({rotation:108},0).wait(1).to({rotation:120},0).wait(1).to({rotation:132},0).wait(1).to({rotation:144},0).wait(1).to({rotation:156},0).wait(1).to({rotation:168},0).wait(1).to({rotation:180},0).wait(1).to({rotation:192},0).wait(1).to({rotation:204},0).wait(1).to({rotation:216},0).wait(1).to({rotation:228},0).wait(1).to({rotation:240},0).wait(1).to({rotation:252},0).wait(1).to({rotation:264},0).wait(1).to({rotation:276},0).wait(1).to({rotation:288},0).wait(1).to({rotation:300},0).wait(1).to({rotation:312},0).wait(1).to({rotation:324},0).wait(1).to({rotation:336},0).wait(1).to({rotation:348},0).wait(1));

	// CarBody
	this.instance_2 = new lib.Car();
	this.instance_2.parent = this;
	this.instance_2.setTransform(400,106.65,1,1,0,0,0,400,0);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(30));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0.2,800,264.2);


(lib.Scene_1_Car = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Car
	this.instance = new lib.carpsd("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-70.35,279.9,0.375,0.375,0,0,0,399.6,119.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({regX:400,regY:132.3,rotation:-0.4494,x:-16,y:285.2,startPosition:1},0).wait(1).to({rotation:-0.8989,x:38.15,y:285.6,startPosition:2},0).wait(1).to({rotation:-1.3483,x:92.2,y:286,startPosition:3},0).wait(1).to({rotation:-1.7978,x:146.4,y:286.45,startPosition:4},0).wait(1).to({rotation:-2.2472,x:200.55,y:286.75,startPosition:5},0).wait(1).to({rotation:-2.6966,x:254.65,y:287.2,startPosition:6},0).wait(1).to({rotation:-3.1461,x:308.75,y:287.6,startPosition:7},0).wait(1).to({rotation:-3.5955,x:315.2,y:288.05,startPosition:8},0).wait(1).to({rotation:-4.0449,x:321.6,y:288.55,startPosition:9},0).wait(1).to({rotation:-4.4944,x:328.1,y:289,startPosition:10},0).wait(1).to({rotation:-4.9438,x:334.45,y:289.5,startPosition:11},0).wait(1).to({rotation:-5.3933,x:340.9,y:289.9,startPosition:12},0).wait(1).to({rotation:-5.8427,x:347.3,y:290.4,startPosition:13},0).wait(1).to({rotation:-6.2921,x:353.8,y:290.8,startPosition:14},0).wait(1).to({rotation:-6.7416,x:360.15,y:291.25,startPosition:15},0).wait(1).to({rotation:-7.191,x:366.55,y:291.75,startPosition:16},0).wait(1).to({rotation:-7.6404,x:373,y:292.15,startPosition:17},0).wait(1).to({rotation:-8.0899,x:379.45,y:292.65,startPosition:18},0).wait(1).to({rotation:-8.5393,x:385.85,y:293.1,startPosition:19},0).wait(1).to({rotation:-8.9888,x:392.3,y:293.55,startPosition:20},0).wait(1).to({rotation:-9.4382,x:398.7,y:294,startPosition:21},0).wait(1).to({rotation:-9.8876,x:405.1,y:294.45,startPosition:22},0).wait(1).to({rotation:-10.3371,x:411.55,y:294.9,startPosition:23},0).wait(1).to({rotation:-10.7865,x:418,y:295.4,startPosition:24},0).wait(1).to({rotation:-11.236,x:424.35,y:295.85,startPosition:25},0).wait(1).to({rotation:-11.6854,x:430.85,y:296.25,startPosition:26},0).wait(1).to({rotation:-12.1348,x:437.25,y:296.7,startPosition:27},0).wait(1).to({rotation:-12.5843,x:443.65,y:297.15,startPosition:28},0).wait(1).to({rotation:-13.0337,x:450.1,y:297.6,startPosition:29},0).wait(1).to({rotation:-13.4831,x:456.5,y:298.1,startPosition:0},0).wait(1).to({rotation:-13.9326,x:462.95,y:298.55,startPosition:1},0).wait(1).to({rotation:-14.382,x:469.35,y:299,startPosition:2},0).wait(1).to({rotation:-14.8315,x:475.8,y:299.4,startPosition:3},0).wait(1).to({rotation:-15.2809,x:482.25,y:299.85,startPosition:4},0).wait(1).to({rotation:-15.7303,x:488.65,y:300.35,startPosition:5},0).wait(1).to({rotation:-16.1798,x:495,y:300.8,startPosition:6},0).wait(1).to({rotation:-16.6292,x:501.5,y:301.2,startPosition:7},0).wait(1).to({rotation:-17.0787,x:507.9,y:301.65,startPosition:8},0).wait(1).to({rotation:-17.5281,x:550.05,y:282.4,startPosition:9},0).wait(1).to({rotation:-17.9775,x:592.15,y:263.1,startPosition:10},0).wait(1).to({rotation:-18.427,x:634.25,y:243.8,startPosition:11},0).wait(1).to({rotation:-18.8764,x:676.45,y:224.5,startPosition:12},0).wait(1).to({rotation:-19.3258,x:718.55,y:205.2,startPosition:13},0).wait(1).to({rotation:-19.7753,x:760.7,y:185.95,startPosition:14},0).wait(1).to({rotation:-20.2247,x:802.85,y:166.6,startPosition:15},0).wait(1).to({rotation:-20.6742,x:845,y:147.3,startPosition:16},0).wait(1).to({rotation:-21.1236,x:887.15,y:128.05,startPosition:17},0).wait(1).to({rotation:-21.573,x:929.3,y:108.75,startPosition:18},0).wait(1).to({rotation:-22.0225,x:971.4,y:89.4,startPosition:19},0).wait(1).to({rotation:-22.4719,x:1013.45,y:70.15,startPosition:20},0).wait(1).to({rotation:-22.9213,x:1055.65,y:50.85,startPosition:21},0).wait(1).to({rotation:-23.3708,x:1097.85,y:31.55,startPosition:22},0).wait(1).to({rotation:-23.8202,x:1102.05,y:29.05,startPosition:23},0).wait(1).to({rotation:-24.2697,x:1106.35,y:26.65,startPosition:24},0).wait(1).to({rotation:-24.7191,x:1110.6,y:24.2,startPosition:25},0).wait(1).to({rotation:-25.1685,x:1114.85,y:21.7,startPosition:26},0).wait(1).to({rotation:-25.618,x:1119.1,y:19.3,startPosition:27},0).wait(1).to({rotation:-26.0674,x:1123.4,y:16.8,startPosition:28},0).wait(1).to({rotation:-26.5169,x:1127.6,y:14.4,startPosition:29},0).wait(1).to({rotation:-26.9663,x:1131.9,y:11.9,startPosition:0},0).wait(1).to({rotation:-27.4157,x:1136.15,y:9.5,startPosition:1},0).wait(1).to({rotation:-27.8652,x:1140.4,y:7,startPosition:2},0).wait(1).to({rotation:-28.3146,x:1144.7,y:4.55,startPosition:3},0).wait(1).to({rotation:-28.764,x:1148.9,y:2.1,startPosition:4},0).wait(1).to({rotation:-29.2135,x:1153.15,y:-0.35,startPosition:5},0).wait(1).to({rotation:-29.6629,x:1157.45,y:-2.85,startPosition:6},0).wait(1).to({rotation:-30.1124,x:1161.7,y:-5.3,startPosition:7},0).wait(1).to({rotation:-30.5618,x:1165.95,y:-7.7,startPosition:8},0).wait(1).to({rotation:-31.0112,x:1180.85,y:-17.2,startPosition:9},0).wait(1).to({rotation:-31.4607,x:1195.85,y:-26.65,startPosition:10},0).wait(1).to({rotation:-31.9101,x:1210.75,y:-36.05,startPosition:11},0).wait(1).to({rotation:-32.3596,x:1225.7,y:-45.45,startPosition:12},0).wait(1).to({rotation:-32.809,x:1240.65,y:-54.85,startPosition:13},0).wait(1).to({rotation:-33.2584,x:1255.6,y:-64.3,startPosition:14},0).wait(1).to({rotation:-33.7079,x:1270.55,y:-73.8,startPosition:15},0).wait(1).to({rotation:-34.1573,x:1278.45,y:-80.4,startPosition:16},0).wait(1).to({rotation:-34.6067,x:1286.5,y:-87.1,startPosition:17},0).wait(1).to({rotation:-35.0562,x:1294.45,y:-93.75,startPosition:18},0).wait(1).to({rotation:-35.5056,x:1302.4,y:-100.4,startPosition:19},0).wait(1).to({rotation:-35.9551,x:1310.4,y:-107.05,startPosition:20},0).wait(1).to({rotation:-36.4045,x:1318.35,y:-113.7,startPosition:21},0).wait(1).to({rotation:-36.8539,x:1326.3,y:-120.4,startPosition:22},0).wait(1).to({rotation:-37.3034,x:1339.4,y:-127.1,startPosition:23},0).wait(1).to({rotation:-37.7528,x:1352.55,y:-133.7,startPosition:24},0).wait(1).to({rotation:-38.2022,x:1365.65,y:-140.35,startPosition:25},0).wait(1).to({rotation:-38.6517,x:1378.8,y:-147.05,startPosition:26},0).wait(1).to({rotation:-39.1011,x:1391.9,y:-153.75,startPosition:27},0).wait(1).to({rotation:-39.5506,x:1405,y:-160.4,startPosition:28},0).wait(1).to({rotation:-40,x:1418.15,y:-167.05,startPosition:29},0).wait(1));

}).prototype = p = new cjs.MovieClip();


// stage content:
(lib.MotionCar = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	this.___GetDepth___ = function(obj) {
		var depth = obj.depth;
		var cameraObj = this.___camera___instance;
		if(cameraObj && cameraObj.depth && obj.isAttachedToCamera)
		{
			depth += depth + cameraObj.depth;
		}
		return depth;
		}
	this.___needSorting___ = function() {
		for (var i = 0; i < this.getNumChildren() - 1; i++)
		{
			var prevDepth = this.___GetDepth___(this.getChildAt(i));
			var nextDepth = this.___GetDepth___(this.getChildAt(i + 1));
			if (prevDepth < nextDepth)
				return true;
		}
		return false;
	}
	this.___sortFunction___ = function(obj1, obj2) {
		return (this.exportRoot.___GetDepth___(obj2) - this.exportRoot.___GetDepth___(obj1));
	}
	this.on('tick', function (event){
		var curTimeline = event.currentTarget;
		if (curTimeline.___needSorting___()){
			this.sortChildren(curTimeline.___sortFunction___);
		}
	});

	// timeline functions:
	this.frame_89 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(89).call(this.frame_89).wait(1));

	// Car_obj_
	this.Car = new lib.Scene_1_Car();
	this.Car.name = "Car";
	this.Car.parent = this;
	this.Car.setTransform(-70.2,279.9,1,1,0,0,0,-70.2,279.9);
	this.Car.depth = 0;
	this.Car.isAttachedToCamera = 0
	this.Car.isAttachedToMask = 0
	this.Car.layerDepth = 0
	this.Car.layerIndex = 0
	this.Car.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Car).wait(1).to({regX:672.4,regY:45.8,x:672.4,y:45.8},0).wait(89));

	// Sun_obj_
	this.Sun = new lib.Scene_1_Sun();
	this.Sun.name = "Sun";
	this.Sun.parent = this;
	this.Sun.setTransform(122.4,113.9,1,1,0,0,0,122.4,113.9);
	this.Sun.depth = 0;
	this.Sun.isAttachedToCamera = 0
	this.Sun.isAttachedToMask = 0
	this.Sun.layerDepth = 0
	this.Sun.layerIndex = 1
	this.Sun.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Sun).wait(90));

	// Road_obj_
	this.Road = new lib.Scene_1_Road();
	this.Road.name = "Road";
	this.Road.parent = this;
	this.Road.setTransform(400.6,348.6,1,1,0,0,0,400.6,348.6);
	this.Road.depth = 0;
	this.Road.isAttachedToCamera = 0
	this.Road.isAttachedToMask = 0
	this.Road.layerDepth = 0
	this.Road.layerIndex = 2
	this.Road.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Road).wait(90));

	// Sky_obj_
	this.Sky = new lib.Scene_1_Sky();
	this.Sky.name = "Sky";
	this.Sky.parent = this;
	this.Sky.setTransform(400.8,200.3,1,1,0,0,0,400.8,200.3);
	this.Sky.depth = 0;
	this.Sky.isAttachedToCamera = 0
	this.Sky.isAttachedToMask = 0
	this.Sky.layerDepth = 0
	this.Sky.layerIndex = 3
	this.Sky.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Sky).wait(90));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(179.8,-101.2,1372.8,501.3);
// library properties:
lib.properties = {
	id: 'CF968C439F7F0041A386274786E924FB',
	width: 800,
	height: 400,
	fps: 30,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/MotionCar_atlas_.png", id:"MotionCar_atlas_"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['CF968C439F7F0041A386274786E924FB'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


// Layer depth API : 

AdobeAn.Layer = new function() {
	this.getLayerZDepth = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth; else 0;";
		return eval(script);
	}
	this.setLayerZDepth = function(timeline, layerName, zDepth)
	{
		const MAX_zDepth = 10000;
		const MIN_zDepth = -5000;
		if(zDepth > MAX_zDepth)
			zDepth = MAX_zDepth;
		else if(zDepth < MIN_zDepth)
			zDepth = MIN_zDepth;
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth = " + zDepth + ";";
		eval(script);
	}
	this.removeLayer = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline.removeChild(timeline." + layerName + ");";
		eval(script);
	}
	this.addNewLayer = function(timeline, layerName, zDepth)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		zDepth = typeof zDepth !== 'undefined' ? zDepth : 0;
		var layer = new createjs.MovieClip();
		layer.name = layerName;
		layer.depth = zDepth;
		layer.layerIndex = 0;
		timeline.addChild(layer);
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;