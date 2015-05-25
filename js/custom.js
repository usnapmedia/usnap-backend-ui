$( document ).ready(function() {
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    Materialize.fadeInImage('#data');
    // CHARTS
    // Chart 1 - Weekly
    var data = {
    // A labels array that can contain any sort of values
    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
    // Our series array that contains series objects or in this case series data arrays
    series: [
    [502, 520, 575, 540, 543,536,530]
    ]
    };

    // Create a new line chart object where as first parameter we pass in a selector
    // that is resolving to our chart container element. The Second parameter
    // is the actual data object.
    new Chartist.Line('.media-shared', data);

    // Chart 2 - Gender
    var data = {
    labels: ['Female','Male'],
    series: [20, 15]
    };

    var options = {
    labelInterpolationFnc: function(value) {
    return value[0]
    }
    };

    var responsiveOptions = [
    ['screen and (min-width: 640px)', {
    chartPadding: 30,
    labelOffset: 100,
    labelDirection: 'explode',
    labelInterpolationFnc: function(value) {
    return value;
    }
    }],
    ['screen and (min-width: 1024px)', {
    labelOffset: 80,
    chartPadding: 20
    }]
    ];

    new Chartist.Pie('.gender', data, options, responsiveOptions);

    // Chart 3 - Video vs Photo
    new Chartist.Bar('.media-distribution', {
    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
      series: [
      [5, 4, 3, 7, 5, 10, 3],
      [3, 2, 9, 5, 4, 6, 4]
      ]
    }, {
    seriesBarDistance: 10,
    reverseData: true,
    horizontalBars: true,
    axisY: {
    offset: 70
    }
    });
});

// Templates
var bestPicture = {'name':'Best Picture Wins','description':'Snap the best picture to win!','rules':'It has to happen today!','prize':'Two tickets for the next game','banner':'http://adbeus.com/wp-content/uploads/2015/03/cafe-replika-montreal-plateau-coffee.jpg'};
$('#template-best-picture').click(function(){
    campaignTemplate(bestPicture);
})

function campaignTemplate(campaign) {
    $('#campaign_name').val(campaign.name).focus();
    $('#campaign_description').val(campaign.description).focus();
    $('#campaign_prize').val(campaign.prize).focus();
    $('#campaign_rules').val(campaign.rules).focus();
    $('#campaign_banner_img').val(campaign.banner).focus();
    Materialize.toast('Campaign "'+campaign.name+'" Added', 2000)
}


$('#saveSettings').click(function(){
	
    var api_key = 'joey1234';
    var watermark = $('.watermarkUrl').val();
    var name = $('.companyName').val();
    
    postUrl = "http://d.tanios.ca/usnap/api/v1/admin/settings/"+api_key;
    console.log(watermark,api_key,postUrl);
    var sendIt = $.post( postUrl, {'watermark':watermark,'name':name});

        sendIt.done(function( data ) {
            Materialize.toast('Settings Saved', 2000);
            console.log(data); 
        });

});

$('#sendCampaign').click(function(event){
		event.preventDefault();
		var name =  $('#campaign_name').val();
        var description = $('#campaign_description').val();
        var banner = $('#campaign_banner_img').val();
        var start = $('#campaign_start').val();
        var end = $('#campaign_end').val();
        var prize = $('#campaign_prize').val();
        var rules = $('#campaign_rules').val();
   
        postUrl = "http://d.tanios.ca/usnap/api/v1/admin/campaigns/";
        var sendIt = $.post( postUrl, {'name':name,'description':description,'banner_img_url':banner,'start_date':start,'end_date':end,'prize':prize,'rules':rules});

    	

      	sendIt.done(function( data ) {
          Materialize.toast('Campaign Created', 2000)
          console.log(data); 
    	});
})


var pusher = new Pusher('3cb56cac36379ca8723b');
var channel = pusher.subscribe('live-feed');

channel.bind('new-image', function(data) {
  $('.live-table').prepend('<tr><td><img  class="materialboxed" width="200" src="'+data.image+'"></td><td>'+data.email+'</td><td></td></tr>');
  var currentMedia = $('.currentMedia').text();
  currentMedia = parseInt(currentMedia);
  $('.currentMedia').html(currentMedia+1);
});

channel.bind('new-user', function(data) {
  var currentUsers = $('.currentUsers').text();
  currentUsers = parseInt(currentUsers);
  $('.currentUsers').html(currentUsers+1);
});

channel.bind('update-social', function(data) {
  $('.currentAnalytics').html(data.sum);
});


channel.bind('new-campaign', function(data) {
  $('.campaign-table').prepend('<tr><td>'+data.name+'</td><td>'+data.desc+'</td><td>5</td></tr>');
});

$('.moderate').click(function(){
        var now = $(this);
        console.log( $(this).data('status'), $(this).data('id') );
        var status = $(this).data('status');
        var image = $(this).data('id');
        postUrl = "http://d.tanios.ca/usnap/api/v1/admin/moderate/update/"+image;
        var sendIt = $.post( postUrl, {'status':status});

        sendIt.done(function( data ) {
            now.parent().parent().parent().hide();
            var count = $('.count').text();
            count = parseInt(count);
            $('.count').html(count-1);
            console.log(data); 
        });
});


