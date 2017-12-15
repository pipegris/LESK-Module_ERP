(function ($) {
    'use strict';

    var smallHeight = 60,
        largeHeight = 90;

    $(function () {
        $('#eltexto').change(function () {
            var self = $(this),
                container = self.parent(),
                level = parseInt(self.val());
            if (level > 100) {
                self.val(level = 100);
            }
            var newHeight = smallHeight*level/100,
                newTop = 8 + smallHeight-newHeight;
            container.find('.fluid-level')
                .css('top', newTop)
                .css('height', newHeight);
        });

/*
        chartObj = new FusionCharts({
            width: "100%",
            height: "300",
            id: 'sampleChart',
            dataSource: dataSrc,
            dataFormat: dataFrmt,
            renderAt: 'chart1div'
        }).render();
*/

        var charta = tank('supply-a', "#FFFF00", 0);
        var chartb = tank('supply-b', "#008000", 0);
        var chartc = tank('supply-c', "#A52A2A", 0);
        var chartpre = tank('premix', "#FFA500", 1);
        var chartreact = tank('react', "#FF0000", 1);
        var chartproda = tank('product-a', "#0000FF", 0);
        var chartprodb = tank('product-b', "#4B0082", 0);
        var chartprodc = tank('product-c', "#00FFFF", 0);

    });

    function tank(container, color, big) {
        return new FusionCharts ({
            "theme": "fint",
            swfUrl: "cylinder",
            "width": "80%",
            "height": big ? "190" : "170",
            "dataFormat": "json",
            "dataSource": {
                "chart": {
                    "bgColor":"#FFFFFF",
                    "bgAlpha": "0",
                    "canvasBgAlpha": "0",
                    "legendBgAlpha": "0",
                    "manageresize": "1",
                    "upperlimit": "100",
                    "lowerlimit": "0",
                    "showTickMarks": "0",
                    "numbersuffix": "%",
                    "refreshinterval": "3",
                    "showborder": "0",
                    "showValue": "0",
                    "cylFillColor": color
                },
                "value": 100*Math.random()
            }
        }).render(container)
            .setTransparent(true);
    }
})(jQuery);