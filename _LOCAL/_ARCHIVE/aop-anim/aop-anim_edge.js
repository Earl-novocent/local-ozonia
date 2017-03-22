/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
var symbols = {
"stage": {
   version: "0.1.3",
   baseState: "Base State",
   initialState: "Base State",
   content: {
      dom: [
        {
            id:'AOP',
            className:'stage_AOP_id',
            type:'image',
            tag:'div',
            rect:[0,0,600,600],
            fill:['rgba(0,0,0,0)','aop-anim/images/AOP.png']
        }],
      symbolInstances: [
      ]
   },
   states: {
      "Base State": {
         "${_stage}": [
            ["color", "background-color", 'rgba(255,255,255,0)'],
            ["style", "height", '281px'],
            ["style", "width", '650px']
         ],
         "${_AOP}": [
            ["transform", "translateX", '25px'],
            ["transform", "rotateZ", '0'],
            ["transform", "scaleX", '0.01'],
            ["transform", "translateY", '-159px'],
            ["transform", "scaleY", '0.01']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 16999,
         labels: {

         },
         timeline: [
            { id: "eid125", tween: [ "transform", "${_AOP}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 4040, duration: 345 },
            { id: "eid131", tween: [ "transform", "${_AOP}", "rotateZ", '0deg', { fromValue: '360deg'}], position: 6930, duration: 480 },
            { id: "eid135", tween: [ "transform", "${_AOP}", "rotateZ", '360deg', { fromValue: '0deg'}], position: 9325, duration: 603 },
            { id: "eid1", tween: [ "style", "${_stage}", "width", '650px', { fromValue: '650px'}], position: 0, duration: 0 },
            { id: "eid47", tween: [ "transform", "${_AOP}", "scaleX", '1.14999', { fromValue: '0.01'}], position: 0, duration: 311, easing: "easeOutSine" },
            { id: "eid49", tween: [ "transform", "${_AOP}", "scaleX", '0.95', { fromValue: '1.14999'}], position: 311, duration: 316, easing: "easeOutSine" },
            { id: "eid51", tween: [ "transform", "${_AOP}", "scaleX", '1', { fromValue: '0.95'}], position: 628, duration: 121, easing: "easeOutSine" },
            { id: "eid53", tween: [ "transform", "${_AOP}", "scaleX", '0.78', { fromValue: '1'}], position: 915, duration: 3125, easing: "easeOutSine" },
            { id: "eid57", tween: [ "transform", "${_AOP}", "scaleX", '0.94753', { fromValue: '0.78'}], position: 4040, duration: 170, easing: "easeOutSine" },
            { id: "eid77", tween: [ "transform", "${_AOP}", "scaleX", '1.12', { fromValue: '0.94753'}], position: 4210, duration: 175, easing: "easeOutSine" },
            { id: "eid59", tween: [ "transform", "${_AOP}", "scaleX", '1.2', { fromValue: '1.12'}], position: 4385, duration: 2545, easing: "easeOutSine" },
            { id: "eid97", tween: [ "transform", "${_AOP}", "scaleX", '1.22786', { fromValue: '1.2'}], position: 6930, duration: 480, easing: "easeOutSine" },
            { id: "eid132", tween: [ "transform", "${_AOP}", "scaleX", '1.29', { fromValue: '1.22786'}], position: 7410, duration: 1915 },
            { id: "eid109", tween: [ "transform", "${_AOP}", "scaleX", '1.13999', { fromValue: '1.29'}], position: 9928, duration: 3071, easing: "easeOutSine" },
            { id: "eid115", tween: [ "transform", "${_AOP}", "scaleX", '0.8', { fromValue: '1.13999'}], position: 13000, duration: 387, easing: "easeOutSine" },
            { id: "eid117", tween: [ "transform", "${_AOP}", "scaleX", '0.51', { fromValue: '0.8'}], position: 13387, duration: 3612, easing: "easeOutSine" },
            { id: "eid2", tween: [ "style", "${_stage}", "height", '281px', { fromValue: '281px'}], position: 0, duration: 0 },
            { id: "eid83", tween: [ "transform", "${_AOP}", "translateX", '25px', { fromValue: '25px'}], position: 0, duration: 0, easing: "easeOutSine" },
            { id: "eid87", tween: [ "transform", "${_AOP}", "translateX", '-179.86109px', { fromValue: '25px'}], position: 4040, duration: 345, easing: "easeOutSine" },
            { id: "eid93", tween: [ "transform", "${_AOP}", "translateX", '25px', { fromValue: '-179.86109px'}], position: 6930, duration: 480, easing: "easeOutSine" },
            { id: "eid99", tween: [ "transform", "${_AOP}", "translateX", '11.80554px', { fromValue: '25px'}], position: 7410, duration: 1915, easing: "easeOutSine" },
            { id: "eid103", tween: [ "transform", "${_AOP}", "translateX", '244.44444px', { fromValue: '11.80554px'}], position: 9325, duration: 603, easing: "easeOutSine" },
            { id: "eid111", tween: [ "transform", "${_AOP}", "translateX", '218.05552px', { fromValue: '244.44444px'}], position: 9928, duration: 3071, easing: "easeOutSine" },
            { id: "eid113", tween: [ "transform", "${_AOP}", "translateX", '24.99699px', { fromValue: '218.05552px'}], position: 13000, duration: 387, easing: "easeOutSine" },
            { id: "eid48", tween: [ "transform", "${_AOP}", "scaleY", '1.14999', { fromValue: '0.01'}], position: 0, duration: 311, easing: "easeOutSine" },
            { id: "eid50", tween: [ "transform", "${_AOP}", "scaleY", '0.95', { fromValue: '1.14999'}], position: 311, duration: 316, easing: "easeOutSine" },
            { id: "eid52", tween: [ "transform", "${_AOP}", "scaleY", '1', { fromValue: '0.95'}], position: 628, duration: 121, easing: "easeOutSine" },
            { id: "eid54", tween: [ "transform", "${_AOP}", "scaleY", '0.78', { fromValue: '1'}], position: 915, duration: 3125, easing: "easeOutSine" },
            { id: "eid58", tween: [ "transform", "${_AOP}", "scaleY", '0.94753', { fromValue: '0.78'}], position: 4040, duration: 170, easing: "easeOutSine" },
            { id: "eid78", tween: [ "transform", "${_AOP}", "scaleY", '1.12', { fromValue: '0.94753'}], position: 4210, duration: 175, easing: "easeOutSine" },
            { id: "eid60", tween: [ "transform", "${_AOP}", "scaleY", '1.2', { fromValue: '1.12'}], position: 4385, duration: 2545, easing: "easeOutSine" },
            { id: "eid98", tween: [ "transform", "${_AOP}", "scaleY", '1.22786', { fromValue: '1.2'}], position: 6930, duration: 480, easing: "easeOutSine" },
            { id: "eid133", tween: [ "transform", "${_AOP}", "scaleY", '1.29', { fromValue: '1.22786'}], position: 7410, duration: 1915 },
            { id: "eid110", tween: [ "transform", "${_AOP}", "scaleY", '1.13999', { fromValue: '1.29'}], position: 9928, duration: 3071, easing: "easeOutSine" },
            { id: "eid116", tween: [ "transform", "${_AOP}", "scaleY", '0.8', { fromValue: '1.13999'}], position: 13000, duration: 387, easing: "easeOutSine" },
            { id: "eid118", tween: [ "transform", "${_AOP}", "scaleY", '0.51', { fromValue: '0.8'}], position: 13387, duration: 3612, easing: "easeOutSine" },
            { id: "eid84", tween: [ "transform", "${_AOP}", "translateY", '-159px', { fromValue: '-159px'}], position: 0, duration: 0, easing: "easeOutSine" },
            { id: "eid88", tween: [ "transform", "${_AOP}", "translateY", '1.41665px', { fromValue: '-159px'}], position: 4040, duration: 345, easing: "easeOutSine" },
            { id: "eid94", tween: [ "transform", "${_AOP}", "translateY", '-379.00002px', { fromValue: '1.41665px'}], position: 6930, duration: 480, easing: "easeOutSine" },
            { id: "eid100", tween: [ "transform", "${_AOP}", "translateY", '-412.3334px', { fromValue: '-379.00002px'}], position: 7410, duration: 1915, easing: "easeOutSine" },
            { id: "eid105", tween: [ "transform", "${_AOP}", "translateY", '24.47208px', { fromValue: '-412.3334px'}], position: 9325, duration: 603, easing: "easeOutSine" },
            { id: "eid112", tween: [ "transform", "${_AOP}", "translateY", '-4.00015px', { fromValue: '24.47208px'}], position: 9928, duration: 3071, easing: "easeOutSine" },
            { id: "eid114", tween: [ "transform", "${_AOP}", "translateY", '-159.00301px', { fromValue: '-4.00015px'}], position: 13000, duration: 387, easing: "easeOutSine" }]
      }
   }
}};

var comp;
Edge.registerCompositionDefn(compId, symbols);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     comp = new Edge.Composition(compId, {stage: "." + compId}, {});
	   /**
 * Adobe Edge Timeline Launch
 */
     comp.ready(function() {
         comp.play();
     });
});
})(jQuery, jQuery.Edge, "EDGE-190466591");
