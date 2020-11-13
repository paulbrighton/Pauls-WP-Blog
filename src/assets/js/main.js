import $ from 'jquery'
import './components/navigation/hamburger-nav'
import './components/navigation/navigation'
import 'slick-carousel'
// import webpackStream from 'webpack-stream'

$(document).ready(() => {
  $('.c-post__gallery').slick({
    'arrows': false,
    'adaptiveHeight': true
  })

  $('.most_recent_widget').slick()
  if (wp.customize && wp.customize.selectiveRefresh) {
    wp.customize.selectiveRefresh.bind('partial-content-rendered', (placement) => {
      if (placement.partial.widgetIdParts && placement.partial.widgetIdParts.idBase === '_themename_most_recent_widget') {
        placement.container.find('.most_recent_widget').slick()
      }
    })
  }
})
