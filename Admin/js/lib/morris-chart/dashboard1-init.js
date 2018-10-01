// Dashboard 1 Morris-chart
$( function () {
	"use strict";


	// Extra chart
	Morris.Area( {
		element: 'extra-area-chart',
		data: [ {
				period: 'Minggu ke-1',
				iphone: 0,
				imac: 0,
				ibook: 90,
				samsung: 0,
				android: 0
        }, {
				period: 'Minggu ke-2',
				iphone: 10,
				imac: 60,
				ibook: 40,
				samsung: 80,
				android: 120
        }, {
				period: 'Minggu ke-3',
				iphone: 120,
				imac: 10,
				ibook: 90,
				samsung: 30,
				android: 50
        }, {
				period: 'Minggu ke-4',
				iphone: 0,
				imac: 0,
				ibook: 120,
				samsung: 0,
				android: 0
        }, {
				period: 'Minggu ke-5',
				iphone: 0,
				imac: 0,
				ibook: 0,
				samsung: 150,
				android: 0
        }, {
				period: 'Minggu ke-6',
				iphone: 160,
				imac: 75,
				ibook: 30,
				samsung: 60,
				android: 90
        }, {
				period: 'Minggu ke-7',
				iphone: 10,
				imac: 120,
				ibook: 40,
				samsung: 60,
				android: 30
        }


        ],
		lineColors: [ '#26DAD2', '#fc6180', '#62d1f3', '#ffb64d', '#4680ff' ],
		xkey: 'period',
		ykeys: [ 'iphone', 'imac', 'ibook', 'samsung', 'android' ],
		labels: [ 'iphone', 'imac', 'ibook', 'samsung', 'android' ],
		pointSize: 0,
		lineWidth: 0,
		resize: true,
		fillOpacity: 0.8,
		behaveLikeLine: true,
		gridLineColor: '#e0e0e0',
		hideHover: 'auto'

	} );



} );
