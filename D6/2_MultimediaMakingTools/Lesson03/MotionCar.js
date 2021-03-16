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
	this.instance.setTransform(-217.9,283.9,0.375,0.375,0,0,0,399.4,119.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({regX:400,regY:132.3,rotation:-0.6052,x:-180.2,y:290.6,startPosition:1},0).wait(1).to({rotation:-1.2089,x:-142.8,y:292.55,startPosition:2},0).wait(1).to({rotation:-1.8096,x:-105.6,y:294.4,startPosition:3},0).wait(1).to({rotation:-2.4088,x:-68.45,y:296.25,startPosition:4},0).wait(1).to({rotation:-3.0049,x:-31.5,y:298.15,startPosition:5},0).wait(1).to({rotation:-3.5995,x:3.3,y:300,startPosition:6},0).wait(1).to({rotation:-4.1911,x:19.8,y:301.9,startPosition:7},0).wait(1).to({rotation:-4.7811,x:36.25,startPosition:8},0).wait(1).to({rotation:-5.3681,x:52.55,startPosition:9},0).wait(1).to({rotation:-5.9537,x:68.85,startPosition:10},0).wait(1).to({rotation:-6.5366,x:85.05,startPosition:11},0).wait(1).to({rotation:-7.1171,x:101.25,y:301.85,startPosition:12},0).wait(1).to({rotation:-7.6955,x:117.35,startPosition:13},0).wait(1).to({rotation:-8.2714,x:133.4,startPosition:14},0).wait(1).to({rotation:-8.8453,x:149.35,startPosition:15},0).wait(1).to({rotation:-9.4166,x:165.15,startPosition:16},0).wait(1).to({rotation:-9.986,x:181,y:301.8,startPosition:17},0).wait(1).to({rotation:-10.5528,x:196.8,startPosition:18},0).wait(1).to({rotation:-11.1175,x:212.55,y:301.85,startPosition:19},0).wait(1).to({rotation:-11.6803,x:228.2,y:301.8,startPosition:20},0).wait(1).to({rotation:-12.24,x:243.75,startPosition:21},0).wait(1).to({rotation:-12.7982,x:259.3,y:301.75,startPosition:22},0).wait(1).to({rotation:-13.3539,x:274.8,y:301.7,startPosition:23},0).wait(1).to({rotation:-13.907,x:290.15,y:301.75,startPosition:24},0).wait(1).to({rotation:-14.4581,x:305.55,startPosition:25},0).wait(1).to({rotation:-15.0067,x:320.8,y:301.7,startPosition:26},0).wait(1).to({rotation:-15.5533,x:336,startPosition:27},0).wait(1).to({rotation:-16.0979,x:351.15,y:301.65,startPosition:28},0).wait(1).to({rotation:-16.6399,x:366.2,y:301.7,startPosition:29},0).wait(1).to({rotation:-17.1794,x:381.25,y:301.65,startPosition:0},0).wait(1).to({rotation:-17.7169,x:396.25,y:301.6,startPosition:1},0).wait(1).to({rotation:-18.2518,x:411.1,startPosition:2},0).wait(1).to({rotation:-18.7847,x:425.9,startPosition:3},0).wait(1).to({rotation:-19.3156,x:446.65,startPosition:4},0).wait(1).to({rotation:-19.844,x:492.2,y:301.55,startPosition:5},0).wait(1).to({rotation:-20.3698,x:537.5,startPosition:6},0).wait(1).to({rotation:-20.8937,x:582.65,y:301.5,startPosition:7},0).wait(1).to({rotation:-21.4155,x:627.6,y:301.55,startPosition:8},0).wait(1).to({rotation:-21.9347,x:672.4,y:283.9,startPosition:9},0).wait(1).to({rotation:-22.4515,x:716.9,y:266.2,startPosition:10},0).wait(1).to({rotation:-22.9662,x:761.2,y:248.5,startPosition:11},0).wait(1).to({rotation:-23.4784,x:805.35,y:230.8,startPosition:12},0).wait(1).to({rotation:-23.9885,x:849.3,y:213.1,startPosition:13},0).wait(1).to({rotation:-24.4967,x:893.1,y:195.35,startPosition:14},0).wait(1).to({rotation:-25.0023,x:936.65,y:177.65,startPosition:15},0).wait(1).to({rotation:-25.5054,x:980,y:159.95,startPosition:16},0).wait(1).to({rotation:-26.0065,x:1023.15,y:142.25,startPosition:17},0).wait(1).to({rotation:-26.5055,x:1066.2,y:124.5,startPosition:18},0).wait(1).to({rotation:-27.002,x:1109,y:106.8,startPosition:19},0).wait(1).to({rotation:-27.4965,x:1151.55,y:89.05,startPosition:20},0).wait(1).to({rotation:-27.9885,x:1193.95,y:71.35,startPosition:21},0).wait(1).to({rotation:-28.4779,x:1236.1,y:53.65,startPosition:22},0).wait(1).to({rotation:-28.9653,x:1278.1,y:35.9,startPosition:23},0).wait(1).to({rotation:-29.4507,x:1319.95,y:18.2,startPosition:24},0).wait(1).to({rotation:-29.9336,x:1361.55,y:0.45,startPosition:25},0).wait(1).to({rotation:-30.4139,x:1402.9,y:-17.25,startPosition:26},0).wait(1).to({rotation:-30.8923,x:1444.1,y:-34.95,startPosition:27},0).wait(1).to({rotation:-31.3685,x:1485.1,y:-52.65,startPosition:28},0).wait(1).to({rotation:-31.8423,x:1525.95,y:-70.35,startPosition:29},0).wait(1).to({rotation:-32.314,x:1566.6,y:-88.05,startPosition:0},0).wait(1).to({rotation:-32.7833,x:1607.05,y:-105.8,startPosition:1},0).wait(1).to({rotation:-33.2499,x:1647.25,y:-123.5,startPosition:2},0).wait(1).to({rotation:-33.7146,x:1687.3,y:-141.25,startPosition:3},0).wait(1).to({rotation:-34.1773,x:1727.15,y:-158.95,startPosition:4},0).wait(1).to({rotation:-34.6374,x:1766.8,y:-176.7,startPosition:5},0).wait(1).to({rotation:-35.0955,x:1806.2,y:-194.4,startPosition:6},0).wait(1).to({rotation:-35.551,x:1845.55,y:-212.15,startPosition:7},0).wait(1).to({rotation:-36.0041,x:1884.55,y:-229.8,startPosition:8},0).wait(1).to({rotation:-36.4556,x:1917.3,y:-247.6,startPosition:9},0).wait(1).to({rotation:-36.9041,x:1901.85,y:-265.3,startPosition:10},0).wait(1).to({rotation:-37.3505,x:1886.5,y:-283,startPosition:11},0).wait(1).to({rotation:-37.7949,x:1871.2,y:-300.75,startPosition:12},0).wait(1).to({rotation:-38.2369,x:1855.95,y:-294.7,startPosition:13},0).wait(1).to({rotation:-38.6767,x:1840.85,y:-288.4,startPosition:14},0).wait(1).to({rotation:-39.1141,x:1825.85,y:-282.1,startPosition:15},0).wait(1).to({rotation:-39.5494,x:1810.85,y:-275.8,startPosition:16},0).wait(1).to({rotation:-39.9823,x:1796,y:-269.6,startPosition:17},0).wait(1).to({rotation:-40.413,x:1781.1,y:-263.3,startPosition:18},0).wait(1).to({rotation:-40.8413,x:1766.4,y:-256.95,startPosition:19},0).wait(1).to({rotation:-41.267,x:1751.7,y:-250.7,startPosition:20},0).wait(1).to({rotation:-41.6912,x:1737.15,y:-244.4,startPosition:21},0).wait(1).to({rotation:-42.1124,x:1722.6,y:-238.15,startPosition:22},0).wait(1).to({rotation:-42.5321,x:1708.25,y:-231.85,startPosition:23},0).wait(1).to({rotation:-42.9487,x:1693.85,y:-225.6,startPosition:24},0).wait(1).to({rotation:-43.3638,x:1679.55,y:-219.35,startPosition:25},0).wait(1).to({rotation:-43.7759,x:1665.35,y:-213,startPosition:26},0).wait(1).to({rotation:-44.1865,x:1651.3,y:-206.75,startPosition:27},0).wait(1).to({rotation:-44.594,x:1637.25,y:-200.45,startPosition:28},0).wait(1).to({rotation:-45,x:1623.3,y:-194.1,startPosition:29},0).wait(1));

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
	this.Car.setTransform(-217.7,283.9,1,1,0,0,0,-217.7,283.9);
	this.Car.depth = 0;
	this.Car.isAttachedToCamera = 0
	this.Car.isAttachedToMask = 0
	this.Car.layerDepth = 0
	this.Car.layerIndex = 0
	this.Car.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Car).wait(1).to({regX:849.8,regY:-14.7,x:849.8,y:-14.7},0).wait(89));

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
p.nominalBounds = new cjs.Rectangle(32.3,-229,2023.5000000000002,629.1);
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