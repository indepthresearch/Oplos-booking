var search = instantsearch({
  // Replace with your own values
  appId: 'latency',
  apiKey: '75caa0412246e67ac1191a8c92530f37', // search only API key, no ADMIN key
  indexName: 'instant_search',
  urlSync: true,
  searchParameters: {
    hitsPerPage: 10
  }
});// Add here your javascript code
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