/*
     Copyright (c) 2010, Yahoo! Inc. All rights reserved.
     Code licensed under the BSD License:
     http://developer.yahoo.com/yui/license.html
     version: 3.3.0
     build: 3167
     */
YUI.add('transition-timer',function(Y){var Transition=Y.Transition;Y.mix(Transition.prototype,{_start:function(){if(Transition.useNative){this._runNative();}else{this._runTimer();}},_runTimer:function(){var anim=this;anim._initAttrs();Transition._running[Y.stamp(anim)]=anim;anim._startTime=new Date();Transition._startTimer();},_endTimer:function(){var anim=this;delete Transition._running[Y.stamp(anim)];anim._startTime=null;},_runFrame:function(){var t=new Date()-this._startTime;this._runAttrs(t);},_runAttrs:function(time){var anim=this,node=anim._node,config=anim._config,uid=Y.stamp(node),attrs=Transition._nodeAttrs[uid],customAttr=Transition.behaviors,done=false,allDone=false,data,name,attribute,setter,elapsed,delay,d,t,i;for(name in attrs){attribute=attrs[name];if((attribute&&attribute.transition===anim)){d=attribute.duration;delay=attribute.delay;elapsed=(time-delay)/ 1000;t=time;data={type:'propertyEnd',propertyName:name,config:config,elapsedTime:elapsed};setter=(i in customAttr&&'set'in customAttr[i])?customAttr[i].set:Transition.DEFAULT_SETTER;done=(t>=d);if(t>d){t=d;}
if(!delay||time>=delay){setter(anim,name,attribute.from,attribute.to,t-delay,d-delay,attribute.easing,attribute.unit);if(done){delete attrs[name];anim._count--;if(config[name]&&config[name].on&&config[name].on.end){config[name].on.end.call(Y.one(node),data);}
if(!allDone&&anim._count<=0){allDone=true;anim._end(elapsed);anim._endTimer();}}}}}},_initAttrs:function(){var anim=this,customAttr=Transition.behaviors,uid=Y.stamp(anim._node),attrs=Transition._nodeAttrs[uid],attribute,duration,delay,easing,val,name,mTo,mFrom,unit,begin,end;for(name in attrs){attribute=attrs[name];if(attrs.hasOwnProperty(name)&&(attribute&&attribute.transition===anim)){duration=attribute.duration*1000;delay=attribute.delay*1000;easing=attribute.easing;val=attribute.value;if(name in anim._node.style||name in Y.DOM.CUSTOM_STYLES){begin=(name in customAttr&&'get'in customAttr[name])?customAttr[name].get(anim,name):Transition.DEFAULT_GETTER(anim,name);mFrom=Transition.RE_UNITS.exec(begin);mTo=Transition.RE_UNITS.exec(val);begin=mFrom?mFrom[1]:begin;end=mTo?mTo[1]:val;unit=mTo?mTo[2]:mFrom?mFrom[2]:'';if(!unit&&Transition.RE_DEFAULT_UNIT.test(name)){unit=Transition.DEFAULT_UNIT;}
if(typeof easing==='string'){if(easing.indexOf('cubic-bezier')>-1){easing=easing.substring(13,easing.length-1).split(',');}else if(Transition.easings[easing]){easing=Transition.easings[easing];}}
attribute.from=Number(begin);attribute.to=Number(end);attribute.unit=unit;attribute.easing=easing;attribute.duration=duration+delay;attribute.delay=delay;}else{delete attrs[name];anim._count--;}}}},destroy:function(){this.detachAll();this._node=null;}},true);Y.mix(Y.Transition,{_runtimeAttrs:{},RE_DEFAULT_UNIT:/^width|height|top|right|bottom|left|margin.*|padding.*|border.*$/i,DEFAULT_UNIT:'px',intervalTime:20,behaviors:{left:{get:function(anim,attr){return Y.DOM._getAttrOffset(anim._node,attr);}}},DEFAULT_SETTER:function(anim,att,from,to,elapsed,duration,fn,unit){from=Number(from);to=Number(to);var node=anim._node,val=Transition.cubicBezier(fn,elapsed / duration);val=from+val[0]*(to-from);if(node){if(att in node.style||att in Y.DOM.CUSTOM_STYLES){unit=unit||'';Y.DOM.setStyle(node,att,val+unit);}}else{anim._end();}},DEFAULT_GETTER:function(anim,att){var node=anim._node,val='';if(att in node.style||att in Y.DOM.CUSTOM_STYLES){val=Y.DOM.getComputedStyle(node,att);}
return val;},_startTimer:function(){if(!Transition._timer){Transition._timer=setInterval(Transition._runFrame,Transition.intervalTime);}},_stopTimer:function(){clearInterval(Transition._timer);Transition._timer=null;},_runFrame:function(){var done=true,anim;for(anim in Transition._running){if(Transition._running[anim]._runFrame){done=false;Transition._running[anim]._runFrame();}}
if(done){Transition._stopTimer();}},cubicBezier:function(p,t){var x0=0,y0=0,x1=p[0],y1=p[1],x2=p[2],y2=p[3],x3=1,y3=0,A=x3-3*x2+3*x1-x0,B=3*x2-6*x1+3*x0,C=3*x1-3*x0,D=x0,E=y3-3*y2+3*y1-y0,F=3*y2-6*y1+3*y0,G=3*y1-3*y0,H=y0,x=(((A*t)+B)*t+C)*t+D,y=(((E*t)+F)*t+G)*t+H;return[x,y];},easings:{ease:[0.25,0,1,0.25],linear:[0,0,1,1],'ease-in':[0.42,0,1,1],'ease-out':[0,0,0.58,1],'ease-in-out':[0.42,0,0.58,1]},_running:{},_timer:null,RE_UNITS:/^(-?\d*\.?\d*){1}(em|ex|px|in|cm|mm|pt|pc|%)*$/},true);Transition.behaviors.top=Transition.behaviors.bottom=Transition.behaviors.right=Transition.behaviors.left;Y.Transition=Transition;},'3.3.0',{requires:['transition-native','node-style']});