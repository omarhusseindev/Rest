$(document).ready(function() {
	/// get images using ajax
	$.ajax({
			type: 'GET',
			url: 'https://jsonplaceholder.typicode.com/photos',
			dataType: 'json',
		}).success(function(data) {
			console.log(data);
			let image = $('#carousel .carousel-inner .item img');
			let thumbnail = $('#thumbcarousel .carousel-inner .item img');
			let imageTitle = $('#carousel .carousel-inner .item span');
			for(var i = 0; i < image.length; ++i) {
				// set image src
				image.eq(i).attr('src', data[i].url);
				imageTitle.eq(i).text(data[i].title);
				// set thumbnail src
				thumbnail.eq(i).attr('src', data[i].thumbnailUrl);
			}
		})
		/// toggle menu class
	$(document).on('click', '.nav li', function(e) {
			console.log(e);
			$(this).parent().children('li').not(this).removeClass('active');
			$(this).addClass('active');
		})
		// carousel 
		//// event binding issue when duplicated using html();
	$('#thumbcarousel').carousel(0);
	let $thumbItems = $('#thumbcarousel .item');
	$('.slide.top').on('slide.bs.carousel', function(event) {
		let $slide = $(event.relatedTarget);
		let thumbIndex = $slide.data('thumb');
		let curThumbIndex = $thumbItems.index($('.slide.bottom .item.active').get(0));
		if(curThumbIndex > thumbIndex) {
			$('.slide.bottom').one('slid.bs.carousel', function(event) {
				$('.slide.bottom').carousel(thumbIndex);
			});
			if(curThumbIndex === ($thumbItems.length - 1)) {
				$('.slide.bottom').carousel('next');
			} else {
				console.log('numThumbItems!!! ' + numThumbItems)
				$('.slide.bottom').carousel(numThumbItems - 1);
			}
		} else {
			$('.slide.bottom').carousel(thumbIndex);
		}
    });
    
    /// create carousl for each location and add location to title
	const locations = ['Harrington', 'Cornwall', 'Southwell', 'Mews', 'Kensington', 'Tourist', 'Apartments'];
	const html = '<div class="col-sm-6">\n' + '          <div id="carousel" class="carousel slide top" data-ride="carousel">\n' + '          <div class="carousel-title">\n' + '            <h6>Harrington</h6>\n' + '          </div>\n' + '      <div class="carousel-inner">\n' + '          <div class="item active" data-thumb="0">\n' + '              <img src="">\n' + '              <span></span>\n' + '          </div>\n' + '          <div class="item" data-thumb="0">\n' + '              <img src="">\n' + '              <span></span>\n' + '          </div>\n' + '          <div class="item" data-thumb="0">\n' + '              <img src="">\n' + '              <span></span>\n' + '          </div>\n' + '          <div class="item" data-thumb="0">\n' + '              <img src=".">\n' + '              <span></span>\n' + '          </div>\n' + '          <div class="item" data-thumb="1">\n' + '              <img src="">\n' + '              <span></span>\n' + '          </div>\n' + '          <div class="item" data-thumb="1">\n' + '              <img src="">\n' + '              <span></span>\n' + '          </div>\n' + '          <div class="item" data-thumb="1">\n' + '              <img src="">\n' + '              <span></span>\n' + '          </div>\n' + '          <div class="item" data-thumb="1">\n' + '              <img src="">\n' + '              <span></span>\n' + '          </div>\n' + '      </div>\n' + '\n' + '          </div> \n' + '      <div class="clearfix">\n' + '          <div id="thumbcarousel" class="carousel slide bottom" data-interval="false">\n' + '              <div class="carousel-inner">\n' + '                  <div class="item active">\n' + '                      <div data-target="#carousel" data-slide-to="0" class="thumb"><img src=""></div>\n' + '                      <div data-target="#carousel" data-slide-to="1" class="thumb"><img src=""></div>\n' + '                      <div data-target="#carousel" data-slide-to="2" class="thumb"><img src=""></div>\n' + '                      <div data-target="#carousel" data-slide-to="3" class="thumb"><img src=""></div>\n' + '                  </div><!-- /item -->\n' + '                  <div class="item">\n' + '                      <div data-target="#carousel" data-slide-to="4" class="thumb"><img src=""></div>\n' + '                      <div data-target="#carousel" data-slide-to="5" class="thumb"><img src=""></div>\n' + '                      <div data-target="#carousel" data-slide-to="6" class="thumb"><img src=""></div>\n' + '                      <div data-target="#carousel" data-slide-to="7" class="thumb"><img src=""></div>\n' + '                  </div><!-- /item -->\n' + '              </div><!-- /carousel-inner -->\n' + '              <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">\n' + '                  <span class="glyphicon glyphicon-chevron-left"></span>\n' + '              </a>\n' + '              <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">\n' + '                  <span class="glyphicon glyphicon-chevron-right"></span>\n' + '              </a>\n' + '          </div> <!-- /thumbcarousel -->\n' + '      </div><!-- /clearfix -->\n' + '      </div> <!-- /col-sm-6 -->\n';
	let carouselContainer = $('.carousel-container ');
	Object.keys(carouselContainer).forEach(function(entry) {
		console.log(entry);
		console.log(carouselContainer[entry]);
		console.log(locations[entry]);
		carouselContainer.eq(entry).html(html);
		console.log($(carouselContainer[entry]).find('h6'));
		$(carouselContainer[entry]).find('h6').text(locations[entry])
	})
})