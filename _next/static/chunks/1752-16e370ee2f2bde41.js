(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[1752],{3443:function(e,t){"use strict";let r;Object.defineProperty(t,"__esModule",{value:!0}),function(e,t){for(var r in t)Object.defineProperty(e,r,{enumerable:!0,get:t[r]})}(t,{DOMAttributeNames:function(){return n},isEqualNode:function(){return isEqualNode},default:function(){return initHeadManager}});let n={acceptCharset:"accept-charset",className:"class",htmlFor:"for",httpEquiv:"http-equiv",noModule:"noModule"};function reactElementToDOM(e){let{type:t,props:r}=e,o=document.createElement(t);for(let e in r){if(!r.hasOwnProperty(e)||"children"===e||"dangerouslySetInnerHTML"===e||void 0===r[e])continue;let a=n[e]||e.toLowerCase();"script"===t&&("async"===a||"defer"===a||"noModule"===a)?o[a]=!!r[e]:o.setAttribute(a,r[e])}let{children:a,dangerouslySetInnerHTML:l}=r;return l?o.innerHTML=l.__html||"":a&&(o.textContent="string"==typeof a?a:Array.isArray(a)?a.join(""):""),o}function isEqualNode(e,t){if(e instanceof HTMLElement&&t instanceof HTMLElement){let r=t.getAttribute("nonce");if(r&&!e.getAttribute("nonce")){let n=t.cloneNode(!0);return n.setAttribute("nonce",""),n.nonce=r,r===e.nonce&&e.isEqualNode(n)}}return e.isEqualNode(t)}function initHeadManager(){return{mountedInstances:new Set,updateHead:e=>{let t={};e.forEach(e=>{if("link"===e.type&&e.props["data-optimized-fonts"]){if(document.querySelector('style[data-href="'+e.props["data-href"]+'"]'))return;e.props.href=e.props["data-href"],e.props["data-href"]=void 0}let r=t[e.type]||[];r.push(e),t[e.type]=r});let n=t.title?t.title[0]:null,o="";if(n){let{children:e}=n.props;o="string"==typeof e?e:Array.isArray(e)?e.join(""):""}o!==document.title&&(document.title=o),["meta","base","link","style","script"].forEach(e=>{r(e,t[e]||[])})}}}r=(e,t)=>{let r=document.getElementsByTagName("head")[0],n=r.querySelector("meta[name=next-head-count]"),o=Number(n.content),a=[];for(let t=0,r=n.previousElementSibling;t<o;t++,r=(null==r?void 0:r.previousElementSibling)||null){var l;(null==r?void 0:null==(l=r.tagName)?void 0:l.toLowerCase())===e&&a.push(r)}let i=t.map(reactElementToDOM).filter(e=>{for(let t=0,r=a.length;t<r;t++){let r=a[t];if(isEqualNode(r,e))return a.splice(t,1),!1}return!0});a.forEach(e=>{var t;return null==(t=e.parentNode)?void 0:t.removeChild(e)}),i.forEach(e=>r.insertBefore(e,n)),n.content=(o-a.length+i.length).toString()},("function"==typeof t.default||"object"==typeof t.default&&null!==t.default)&&void 0===t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},4244:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),function(e,t){for(var r in t)Object.defineProperty(e,r,{enumerable:!0,get:t[r]})}(t,{handleClientScriptLoad:function(){return handleClientScriptLoad},initScriptLoader:function(){return initScriptLoader},default:function(){return p}});let n=r(1024),o=r(8533),a=n._(r(4887)),l=o._(r(2265)),i=r(3305),u=r(3443),c=r(4913),d=new Map,s=new Set,f=["onLoad","onReady","dangerouslySetInnerHTML","children","onError","strategy","stylesheets"],insertStylesheets=e=>{if(a.default.preinit){e.forEach(e=>{a.default.preinit(e,{as:"style"})});return}{let t=document.head;e.forEach(e=>{let r=document.createElement("link");r.type="text/css",r.rel="stylesheet",r.href=e,t.appendChild(r)})}},loadScript=e=>{let{src:t,id:r,onLoad:n=()=>{},onReady:o=null,dangerouslySetInnerHTML:a,children:l="",strategy:i="afterInteractive",onError:c,stylesheets:p}=e,y=r||t;if(y&&s.has(y))return;if(d.has(t)){s.add(y),d.get(t).then(n,c);return}let afterLoad=()=>{o&&o(),s.add(y)},h=document.createElement("script"),_=new Promise((e,t)=>{h.addEventListener("load",function(t){e(),n&&n.call(this,t),afterLoad()}),h.addEventListener("error",function(e){t(e)})}).catch(function(e){c&&c(e)});for(let[r,n]of(a?(h.innerHTML=a.__html||"",afterLoad()):l?(h.textContent="string"==typeof l?l:Array.isArray(l)?l.join(""):"",afterLoad()):t&&(h.src=t,d.set(t,_)),Object.entries(e))){if(void 0===n||f.includes(r))continue;let e=u.DOMAttributeNames[r]||r.toLowerCase();h.setAttribute(e,n)}"worker"===i&&h.setAttribute("type","text/partytown"),h.setAttribute("data-nscript",i),p&&insertStylesheets(p),document.body.appendChild(h)};function handleClientScriptLoad(e){let{strategy:t="afterInteractive"}=e;"lazyOnload"===t?window.addEventListener("load",()=>{(0,c.requestIdleCallback)(()=>loadScript(e))}):loadScript(e)}function initScriptLoader(e){e.forEach(handleClientScriptLoad),function(){let e=[...document.querySelectorAll('[data-nscript="beforeInteractive"]'),...document.querySelectorAll('[data-nscript="beforePageRender"]')];e.forEach(e=>{let t=e.id||e.getAttribute("src");s.add(t)})}()}function Script(e){let{id:t,src:r="",onLoad:n=()=>{},onReady:o=null,strategy:u="afterInteractive",onError:d,stylesheets:f,...p}=e,{updateScripts:y,scripts:h,getIsSsr:_,appDir:m,nonce:S}=(0,l.useContext)(i.HeadManagerContext),E=(0,l.useRef)(!1);(0,l.useEffect)(()=>{let e=t||r;E.current||(o&&e&&s.has(e)&&o(),E.current=!0)},[o,t,r]);let g=(0,l.useRef)(!1);if((0,l.useEffect)(()=>{!g.current&&("afterInteractive"===u?loadScript(e):"lazyOnload"===u&&("complete"===document.readyState?(0,c.requestIdleCallback)(()=>loadScript(e)):window.addEventListener("load",()=>{(0,c.requestIdleCallback)(()=>loadScript(e))})),g.current=!0)},[e,u]),("beforeInteractive"===u||"worker"===u)&&(y?(h[u]=(h[u]||[]).concat([{id:t,src:r,onLoad:n,onReady:o,onError:d,...p}]),y(h)):_&&_()?s.add(t||r):_&&!_()&&loadScript(e)),m){if(f&&f.forEach(e=>{a.default.preinit(e,{as:"style"})}),"beforeInteractive"===u)return r?(a.default.preload(r,p.integrity?{as:"script",integrity:p.integrity}:{as:"script"}),l.default.createElement("script",{nonce:S,dangerouslySetInnerHTML:{__html:"(self.__next_s=self.__next_s||[]).push("+JSON.stringify([r])+")"}})):(p.dangerouslySetInnerHTML&&(p.children=p.dangerouslySetInnerHTML.__html,delete p.dangerouslySetInnerHTML),l.default.createElement("script",{nonce:S,dangerouslySetInnerHTML:{__html:"(self.__next_s=self.__next_s||[]).push("+JSON.stringify([0,{...p}])+")"}}));"afterInteractive"===u&&r&&a.default.preload(r,p.integrity?{as:"script",integrity:p.integrity}:{as:"script"})}return null}Object.defineProperty(Script,"__nextScript",{value:!0});let p=Script;("function"==typeof t.default||"object"==typeof t.default&&null!==t.default)&&void 0===t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},622:function(e,t,r){"use strict";/**
 * @license React
 * react-jsx-runtime.production.min.js
 *
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */var n=r(2265),o=Symbol.for("react.element"),a=Symbol.for("react.fragment"),l=Object.prototype.hasOwnProperty,i=n.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,u={key:!0,ref:!0,__self:!0,__source:!0};function q(e,t,r){var n,a={},c=null,d=null;for(n in void 0!==r&&(c=""+r),void 0!==t.key&&(c=""+t.key),void 0!==t.ref&&(d=t.ref),t)l.call(t,n)&&!u.hasOwnProperty(n)&&(a[n]=t[n]);if(e&&e.defaultProps)for(n in t=e.defaultProps)void 0===a[n]&&(a[n]=t[n]);return{$$typeof:o,type:e,key:c,ref:d,props:a,_owner:i.current}}t.Fragment=a,t.jsx=q,t.jsxs=q},7437:function(e,t,r){"use strict";e.exports=r(622)},1396:function(e,t,r){e.exports=r(4724)},4033:function(e,t,r){e.exports=r(290)}}]);