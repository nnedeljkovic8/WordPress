(self.webpackChunkcoblocks=self.webpackChunkcoblocks||[]).push([[958],{4896:function(e,t,n){"use strict";var r=n(8824);t.Z=r.Z},8824:function(e,t,n){"use strict";var r=n(9307),i=n(444);const o=(0,r.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,r.createElement)(i.Path,{d:"M20.1 5.1L16.9 2 6.2 12.7l-1.3 4.4 4.5-1.3L20.1 5.1zM4 20.8h8v-1.5H4v1.5z"}));t.Z=o},4184:function(e,t){var n;!function(){"use strict";var r={}.hasOwnProperty;function i(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var o=typeof n;if("string"===o||"number"===o)e.push(n);else if(Array.isArray(n)){if(n.length){var a=i.apply(null,n);a&&e.push(a)}}else if("object"===o)if(n.toString===Object.prototype.toString)for(var s in n)r.call(n,s)&&n[s]&&e.push(s);else e.push(n.toString())}}return e.join(" ")}e.exports?(i.default=i,e.exports=i):void 0===(n=function(){return i}.apply(t,[]))||(e.exports=n)}()},2703:function(e,t,n){"use strict";var r=n(414);function i(){}function o(){}o.resetWarningCache=i,e.exports=function(){function e(e,t,n,i,o,a){if(a!==r){var s=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw s.name="Invariant Violation",s}}function t(){return e}e.isRequired=e;var n={array:e,bigint:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:t,element:e,elementType:e,instanceOf:t,node:e,objectOf:t,oneOf:t,oneOfType:t,shape:t,exact:t,checkPropTypes:o,resetWarningCache:i};return n.PropTypes=n,n}},5697:function(e,t,n){e.exports=n(2703)()},414:function(e){"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"},9334:function(e){e.exports=function(){"use strict";function e(){return(e=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n,r=arguments[t];for(n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e}).apply(this,arguments)}function t(e,t){void 0===t&&(t=[]),Array.isArray(t)||(t=[t]),t.forEach((function(t){return!e.classList.contains(t)&&e.classList.add(t)}))}function n(e,t,n,r){e.addEventListener(t,n,r)}function r(e,t,n){e.removeEventListener(t,n)}function i(e,t,n){return void 0===n&&(n=""),e.setAttribute(t,n),e}function o(e,t,n){return Object.keys(t).forEach((function(n){e.style[n]=t[n]})),n&&getComputedStyle(e),e}var a={direction:"horizontal",touchRatio:1,touchAngle:45,longSwipesRatio:.5,initialSlide:0,loop:!1,freeMode:!1,passiveListeners:!0,resistance:!0,resistanceRatio:.85,speed:300,longSwipesMs:300,spaceBetween:0,slidesPerView:1,centeredSlides:!1,slidePrevClass:"swiper-slide-prev",slideNextClass:"swiper-slide-next",slideActiveClass:"swiper-slide-active",slideClass:"swiper-slide",wrapperClass:"swiper-wrapper",touchStartPreventDefault:!0,touchStartForcePreventDefault:!1,touchMoveStopPropagation:!1,excludeElements:[],injections:{translate:function(e,t,n,r){o(t.element.$wrapper,{transition:e.isStart?"none":"transform ease "+r+"ms",transform:n.isHorizontal?"translate3d("+e.transforms+"px, 0, 0)":"translate3d(0, "+e.transforms+"px, 0)"})}}};var s=180/Math.PI;function l(){var t=[];return{getDuration:function(){var e=t[0],n=t[t.length-1];return e?n.time-e.time:0},getOffset:function(){var e=t[0],n=t[t.length-1];return e?{x:n.x-e.x,y:n.y-e.y}:{x:0,y:0}},getLogs:function(){return t},vector:function(){return r=(n=t).length-1,i=n[r],n=n[r-1]||i,r={x:i.x-n.x,y:i.y-n.y},i=i.time-n.time,n=r.x/i||0,i=r.y/i||0,e({},r,{angle:Math.atan2(Math.abs(r.y),Math.abs(r.x))*s,velocityX:n,velocityY:i});var n,r,i},clear:function(){t=[]},push:function(n){t.push(e({time:Date.now()},n))}}}function c(){return(performance||Date).now()}var u=requestAnimationFrame||webkitRequestAnimationFrame||setTimeout,f=cancelAnimationFrame||webkitCancelAnimationFrame||clearTimeout;function p(){var e=function(){var e,t;return{run:function(n){e=void 0===e?c():e,t=u((function(){var t=c(),r=t-e;e=t,n(r)}))},stop:function(){e=void 0,f(t)}}}();return{run:function t(n){e.run((function(e){t(n),n(e)}))},stop:function(){e.stop()}}}function d(e,t){e=e.tracker,t=t.initStatus,e.clear(),t()}function m(e,t,n,r){var i=r.initLayout,o=r.initStatus,a=r.render,s=r.scrollPixel,l=r.slideTo,c=r.getOffsetSteps,u=p();return{preheat:function(e,t){var r=n.tracker;u.stop(),r.clear(),r.push(e),i(t),o(t),n.isStart=!0,a()},move:function(t){var r,i=n.tracker,o=e.touchRatio,l=e.touchAngle,c=e.isHorizontal;n.isStart&&!n.isScrolling&&(i.push(t),r=i.vector(),((t=i.getOffset()).x||t.y)&&(c&&r.angle<l||!c&&90-r.angle<l||n.isTouching?(o=r[c?"x":"y"]*o,n.isTouching=!0,s(o),a()):(n.isScrolling=!0,i.clear())))},stop:function(){var i,o,f,p=n.index,m=n.tracker,v=t.measure;n.isStart&&(n.isStart=!1,e.freeMode?(i=m.vector()[e.isHorizontal?"velocityX":"velocityY"],u.run((function(e){e*=i,i*=.98,Math.abs(e)<.01?(u.stop(),d(n,r)):(s(e),a(0))}))):(o=m.getDuration(),f=m.getOffset()[e.isHorizontal?"x":"y"],m=Math.ceil(Math.abs(f)/v.boxSize),v=c(f),o>e.longSwipesMs?l(p+v*(0<f?-1:1)):l(0<f?p-m:p+m),d(n,r)))}}}function v(e,t){var n={};return(n.update=function(e){var r,i=function(e,t,n){var r=e.$list,i=t.viewSize,o=t.slideSize,a=t.boxSize,s=-(t=(e=(s=n).loop?Math.ceil(s.slidesPerView):0)*a)+(n.centeredSlides?(i-o)/2:0);return{max:s,min:n.spaceBetween+(n.loop?o:i)+s-a*r.length,base:s,expand:e,buffer:t,minIndex:0,maxIndex:r.length-(n.centeredSlides||n.loop?1:Math.ceil(n.slidesPerView))}}(e,(r=t,o=(i=e).$el,r={boxSize:(o=((i=r.isHorizontal?o.offsetWidth:o.offsetHeight)-Math.ceil(r.slidesPerView-1)*r.spaceBetween)/r.slidesPerView)+r.spaceBetween,viewSize:i,slideSize:o}),t),o=Boolean("ontouchstart"in window||0<navigator.maxTouchPoints||0<navigator.msMaxTouchPoints||window.DocumentTouch&&document instanceof DocumentTouch);Object.assign(n,{touchable:o,element:e,measure:r,limitation:i})})(e),n}var h="data-shallow-slider",x="data-slider";function g(e,n){function r(){e.element.$wrapper.querySelectorAll("["+h+"]").forEach((function(t){return e.element.$wrapper.removeChild(t)}))}function a(){var t=e.element,r=e.measure,i=t.$wrapper,a={display:"flex",willChange:"transform",flexDirection:n.isHorizontal?"row":"column"},s=((t={})[n.isHorizontal?"width":"height"]=r.slideSize+"px",t[n.isHorizontal?"margin-right":"margin-bottom"]=n.spaceBetween+"px",t);o(i,a),i.querySelectorAll("["+x+"]").forEach((function(e){return o(e,s)}))}return{init:function(){(function(){var t,o,a,s,l,c;e.element.$list.forEach((function(e,t){return i(e,x,t)})),r(),n.loop&&(t=e.element,s=e.limitation,o=t.$list,a=t.$wrapper,s=s.expand,l=o.slice(-s).map((function(e){return e.cloneNode(!0)})),c=o.slice(0,s).map((function(e){return e.cloneNode(!0)})),l.forEach((function(e,t){a.appendChild(i(c[t],h)),a.insertBefore(i(l[t],h),o[0])})))})(),a()},render:function(r,i,o,a){var s=e.element.$wrapper;i=void 0===i?n.speed:i,n.injections.translate(r,e,n,i),r.isStart||function(r){var i=e.element.$wrapper,o=r.index;i.querySelectorAll("["+x+"]").forEach((function(e){var r,i,a=~~e.getAttribute(x);r=e,void 0===(i=[n.slidePrevClass,n.slideNextClass,n.slideActiveClass])&&(i=[]),Array.isArray(i)||(i=[i]),i.forEach((function(e){return r.classList.contains(e)&&r.classList.remove(e)})),a===o&&t(e,n.slideActiveClass),a==o-1&&t(e,n.slidePrevClass),a===o+1&&t(e,n.slideNextClass)}))}(r),a&&getComputedStyle(s).transform,o&&setTimeout(o,i)},destroy:function(){var t=e.element,i=t.$list,o=t.$wrapper,a=n.isHorizontal?"margin-right":"margin-bottom";["display","will-change","flex-direction"].forEach((function(e){o.style.removeProperty(e)})),i.forEach((function(e){return e.style.removeProperty(a)})),r()},updateSize:a}}function y(e,t){var n=e-t.max;return t=e-t.min,0<n?n:t<0?t:0}function b(t,n,r,i,o){function a(e){var n=t.measure;return Math.ceil(Math.abs(e)/n.boxSize-r.longSwipesRatio)}function s(e,t,r){i.render(n,e,t,r)}function l(i){var a,s,l=(s=t.limitation).min,c=s.max;l=(s=c-l+(r.loop?t.measure.boxSize:0))+1,n.transforms=i,r.loop?(a=(c-i)%l/s,n.progress=a<0?1+a:1<a?a-1:a):(a=(c-i)/s,n.progress=a<0?0:1<a?1:a),o.emit("scroll",e({},n))}function c(e,i){var c,u,f,p,d,m=t.measure,v=t.limitation,h=v.maxIndex-v.minIndex+1,x=r.loop?(e%h+h)%h:e>v.maxIndex?v.maxIndex:e<v.minIndex?v.minIndex:e,g=-x*m.boxSize+v.base;0!==a(g-n.transforms)&&r.loop&&(c=y(n.transforms,v),u=x-n.index,f=n.index,p=x,d=u,e=(h=v).maxIndex,f=(0<d?1:-1)*(h.minIndex-e-1)+p-f,(d=Math.abs(d)>Math.abs(f)?f:d)===u||c?n.index===x&&l(0<c?v.min-m.boxSize+c:v.max+m.boxSize+c):l(d<0?v.min-m.boxSize:v.max+m.boxSize),s(0,void 0,!0)),o.emit("before-slide",n.index,n,x),n.index=x,l(g),s(i,(function(){o.emit("after-slide",x,n)}))}return{update:function(){c(n.index,0),i.updateSize()},render:s,transform:l,slideTo:c,scrollPixel:function(e){var i,o=n.transforms,a=t.measure,s=t.limitation,c=(i=Number(e.toExponential().split("e")[1]))<=0?Math.pow(10,-(i-1)):1,u=o;r.resistance&&!r.loop&&(0<e&&o>=s.max?e-=Math.pow(e*c,r.resistanceRatio)/c:e<0&&o<=s.min&&(e+=Math.pow(-e*c,r.resistanceRatio)/c)),u+=e,r.loop&&(i=n.tracker.vector(),c=r.isHorizontal?i.velocityX:i.velocityY,(e=y(o,s))&&(i=o,o=s,0<c&&i>o.max||c<0&&i<o.min)&&(u=0<e?s.min-a.boxSize+e:s.max+a.boxSize+e)),l(u)},initStatus:function(e){void 0===e&&(e=0),n.startTransform=e,n.isStart=!1,n.isScrolling=!1,n.isTouching=!1},initLayout:function(e){l(e)},getOffsetSteps:a}}function S(e,t){var n="string"==typeof e?document.body.querySelector(e):e;return e=n.querySelector("."+t.wrapperClass),t=[].slice.call(n.getElementsByClassName(t.slideClass)),{$el:n,$wrapper:e,$list:t=t.filter((function(e){return null===e.getAttribute("data-shallow-slider")}))}}function w(t,i){var o=(f=e({},a,f=i),e({},f,{isHorizontal:"horizontal"===f.direction})),s=function(){var e={};return{on:function(t,n){e[t]?e[t].push(n):e[t]=[n]},off:function(t,n){!e[t]||-1<(n=e[t].indexOf(n))&&e[t].splice(n,1)},emit:function(t){for(var n=arguments.length,r=new Array(1<n?n-1:0),i=1;i<n;i++)r[i-1]=arguments[i];e[t]&&e[t].forEach((function(e){return e.apply(void 0,r)}))},clear:function(){e={}}}}(),c=v(S(t,o),o),u={tracker:l(),index:0,startTransform:0,isStart:!1,isScrolling:!1,isTouching:!1,transforms:0,progress:0},f=(i=s.on,s.off),p=s.emit,d={on:i,off:f,env:c,state:u,options:o};(o.plugins||w.plugins||[]).forEach((function(e){return e(d,o)})),p("before-init",d);var h=g(c,o),x=b(c,u,o,h,s),y=function(e,t,i,o){var a=e.touchable,s=["INPUT","SELECT","OPTION","TEXTAREA","BUTTON","VIDEO"],l=(o=m(i,e,t,o)).preheat,c=o.move,u=o.stop;function f(e){return{x:(e=a?e.changedTouches[0]:e).pageX,y:e.pageY}}function p(t){for(var n=0;n<i.excludeElements.length;n++)if(i.excludeElements[n].contains(t.target))return;var r,o=e.element.$wrapper,c=i.touchStartPreventDefault&&-1===s.indexOf(t.target.nodeName)||i.touchStartForcePreventDefault;!a&&c&&t.preventDefault(),l(f(t),(r=o,c=i.isHorizontal,o=getComputedStyle(r).transform.replace(/[a-z]|\(|\)|\s/g,"").split(",").map(parseFloat),r=[],16===o.length?r=o.slice(12,14):6===o.length&&(r=o.slice(4,6)),r[c?0:1]||0))}function d(e){i.touchMoveStopPropagation&&e.stopPropagation(),c(f(e)),t.isTouching&&!1!==e.cancelable&&e.preventDefault()}function v(){u()}return{attach:function(){var t=e.element.$el;a?(n(t,"touchstart",p,{passive:i.passiveListeners,capture:!1}),n(t,"touchmove",d),n(t,"touchend",v),n(t,"touchcancel",v)):(n(t,"mousedown",p),n(document,"mousemove",d),n(document,"mouseup",v))},detach:function(){var t=e.element.$el;r(t,"touchstart",p),r(t,"touchmove",d),r(t,"touchend",v),r(t,"touchcancel",v),r(t,"mousedown",p),r(document,"mousemove",d),r(document,"mouseup",v)}}}(c,u,o,x);return u=x.slideTo,Object.assign(d,{update:function(){h.destroy(),c.update(S(t,o)),h.init(),x.update()},destroy:function(){p("before-destroy",d),y.detach(),h.destroy(),p("after-destroy",d),s.clear()},slideTo:u,updateSize:function(){c.update(S(t,o)),x.update()}}),h.init(),y.attach(),u(o.initialSlide,0),p("after-init",d),d}return w.use=function(e){w.plugins=e},w}()},8608:function(e){e.exports=function(){"use strict";function e(e,t,n,r){e.addEventListener(t,n,r)}function t(e,t,n){e.removeEventListener(t,n)}return function(n,r){function i(e){c(e.target,"next")}function o(e){c(e.target,"prev")}var a=Boolean(r.navigation),s={nextEl:null,prevEl:null},l=Object.assign({disabledClass:"swiper-button-disabled"},r.navigation),c=function(e,t){u(e)&&!n.options.loop||(e=n.state.index,"next"===t&&n.slideTo(e+1),"prev"===t&&n.slideTo(e-1))},u=function(e){return e.classList.contains(l.disabledClass)};n.on("before-slide",(function(e,t,r){var i,o;n.options.loop||(i=r,r=(o=n.env.limitation).minIndex,o=o.maxIndex,s&&s.prevEl&&s.nextEl&&(s.nextEl.classList.contains(l.disabledClass)&&r<=i&&s.nextEl.classList.remove(l.disabledClass),s.prevEl.classList.contains(l.disabledClass)&&i<=o&&s.prevEl.classList.remove(l.disabledClass),i===r&&s.prevEl.classList.add(l.disabledClass),i===o&&s.nextEl.classList.add(l.disabledClass)))})),n.on("after-init",(function(){var t,r,c;a&&(s.nextEl="string"==typeof l.nextEl?document.body.querySelector(l.nextEl):l.nextEl,s.prevEl="string"==typeof l.prevEl?document.body.querySelector(l.prevEl):l.prevEl,n.options.loop||(t=n.state.index,r=n.env.element.$list,t===(c=n.env.limitation.minIndex)&&s.prevEl&&s.prevEl.classList.add(l.disabledClass),r.length===c&&s.nextEl&&s.nextEl.classList.add(l.disabledClass)),e(s.nextEl,"click",i),e(s.prevEl,"click",o))})),n.on("after-destroy",(function(){s&&s.prevEl&&s.nextEl&&(t(s.nextEl,"click",i),t(s.prevEl,"click",o),delete s.nextEl,delete s.prevEl)}))}}()},8893:function(e,t){"use strict";t.Z=/^(?:[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}|00000000-0000-0000-0000-000000000000)$/i},3653:function(e,t,n){"use strict";var r;n.d(t,{Z:function(){return o}});var i=new Uint8Array(16);function o(){if(!r&&!(r="undefined"!=typeof crypto&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto)||"undefined"!=typeof msCrypto&&"function"==typeof msCrypto.getRandomValues&&msCrypto.getRandomValues.bind(msCrypto)))throw new Error("crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported");return r(i)}},3958:function(e,t,n){"use strict";for(var r=n(7283),i=[],o=0;o<256;++o)i.push((o+256).toString(16).substr(1));t.Z=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,n=(i[e[t+0]]+i[e[t+1]]+i[e[t+2]]+i[e[t+3]]+"-"+i[e[t+4]]+i[e[t+5]]+"-"+i[e[t+6]]+i[e[t+7]]+"-"+i[e[t+8]]+i[e[t+9]]+"-"+i[e[t+10]]+i[e[t+11]]+i[e[t+12]]+i[e[t+13]]+i[e[t+14]]+i[e[t+15]]).toLowerCase();if(!(0,r.Z)(n))throw TypeError("Stringified UUID is invalid");return n}},2045:function(e,t,n){"use strict";var r=n(3653),i=n(3958);t.Z=function(e,t,n){var o=(e=e||{}).random||(e.rng||r.Z)();if(o[6]=15&o[6]|64,o[8]=63&o[8]|128,t){n=n||0;for(var a=0;a<16;++a)t[n+a]=o[a];return t}return(0,i.Z)(o)}},7283:function(e,t,n){"use strict";var r=n(8893);t.Z=function(e){return"string"==typeof e&&r.Z.test(e)}},7462:function(e,t,n){"use strict";function r(){return r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},r.apply(this,arguments)}n.d(t,{Z:function(){return r}})}}]);