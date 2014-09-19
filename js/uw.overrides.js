UW.baseUrl = Backbone.history.location.protocol + '//www.washington.edu/home/'
UW.sources = {
  quicklinks : UW.baseUrl + 'wp-admin/admin-ajax.php?action=quicklinks',
  search     : UW.baseUrl + 'wp-admin/admin-ajax.php'
}