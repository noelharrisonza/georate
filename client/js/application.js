/**
 * @file
 * GeoRate (c) 2013
 *
 * Jonathan Wagener <jonathan.wagener@gmail.com>
 * Noel Harrison <noel.harrison2@gmail.com>
 */

// Models
window.GeoRate = Backbone.Model.extend();

// Router
var GeoRateRouter = Backbone.Router.extend({
  routes:{
      "": "index",
      "search/:query": "search"
  },

  // Index page.
  index: function() {
    $("#container").text("Welcome to GeoRate");
  },

  // Search
  search: function(query) {
    $("#container").text("You searched for: " + query);
  }
});

var georate = new GeoRateRouter();
Backbone.history.start();
