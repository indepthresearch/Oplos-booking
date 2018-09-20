
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
require_DIR_."/vendor/autoload.php";
$client = new\AlgoliaSearch\Client('71RF7PMP2B','f04aefdb4b54bc92f268a030ed715480');
$index = $client->InitIndex('bestbuy_index');
$index->setSettings(array(
  "searchableAttributes" => [
    "brand",
    "name",
    "categories",
    "unordered(description)"
  ],
  "customRanking" => [
    "desc(popularity)"
  ]
));

var search = instantsearch({
  // Replace with your own values
  appId: 'latency',
  apiKey: '75caa0412246e67ac1191a8c92530f37', // search only API key, no ADMIN key
  indexName: 'instant_search',
  urlSync: true,
  searchParameters: {
    hitsPerPage: 10
  }
});
search.addWidget(
  instantsearch.widgets.searchBox({
    container: '#search-input'
  })
);
search.addWidget(
  instantsearch.widgets.hits({
    container: '#hits',
    templates: {
      item: document.getElementById('hit-template').innerHTML,
      empty: "We didn't find any results for the search <em>\"{{query}}\"</em>"
    }
  })
);
search.addWidget(
  instantsearch.widgets.pagination({
    container: '#pagination'
  })
);
search.start();