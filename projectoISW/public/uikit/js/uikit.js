// UTILITY FUNCTIONS
// ========================================================================
// Console fix
// -------------------------------------------------------------------
(function() {
  if (!window.console) {
    window.console = {};
  }
  // union of Chrome, FF, IE, and Safari console methods
  var m = [
    "log", "info", "warn", "error", "debug", "trace", "dir", "group",
    "groupCollapsed", "groupEnd", "time", "timeEnd", "profile", "profileEnd",
    "dirxml", "assert", "count", "markTimeline", "timeStamp", "clear"
  ];
  // define undefined methods as noops to prevent errors
  for (var i = 0; i < m.length; i++) {
    if (!window.console[m[i]]) {
      window.console[m[i]] = function() {};
    }    
  } 
})();

// Script Loader (previously minified)
// ---------------------------------------------------------------------
function getScripts(o, t) {
  for (var i = 0; i < o.length; ++i) {
    var r = path + o[i];
    $.importJS(r, {
        cache: t
    }).done(function() {
        console.log("ÉXITO al cargar el script >> " + r)
    }).fail(function(o) {
        console.log("ERROR: no se puede cargar el script >> " + r + " << " + o.statusText)
    })
  }
}
jQuery.importJS = function(o, t) {
  return t = $.extend(t || {}, {
    dataType: "script",
    url: o,
    async: !1
  }), jQuery.ajax(t)
};

// Scripts for loading
// =========================================================================
var path = "http://fernandomfdz.ddns.net/proyectos/store/uikit/"; // Paths are relative to the page loading this script!
var scripts = [
  "js/innova.js",
  "js/list.js",
  "js/product-carrousel.js",
  "js/uikit-utils.js",
  "js/jquery.bxslider-rahisified.js",
  "js/jquery-ui.min.js",
  "js/highlight.pack.js",
  "bootstrap/js/bootstrap.min.js",
  "js/jquery-scrollto.js",
  "js/jquery.prettyPhoto.js",
  "js/amcharts/amcharts.js",
  "js/amcharts/serial.js",
  "js/amcharts/pie.js",
  "js/summernote.js",
  "js/summernote-es-ES.js",
  "js/jquery.bxslider.js",
  "js/progressbar.js",
  "js/wow.min.js",
  "js/theme.js",
];

// IMPORTANT: To force caching change false to true
// ==========================================================================
getScripts(scripts, true);