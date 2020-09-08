/**
Template Name: Ubold Dashboard
Author: CoderThemes
Email: coderthemes@gmail.com
File: Chartjs
*/


!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    var Grafik = null;
                    if(Grafik != null)
                        Grafik.clear();
                    var Grafik = new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {
        var base_url = $('#base_url').val();
        var respChart = this.respChart;

        function createGrafik(kriteria = 'Pendidikan') {
            $.ajax({
                url: base_url + '/warga_manage/warga_chart/'+kriteria.toLowerCase(),
                dataType: 'JSON',
                success: function(d) {
                    //barchart
                    var items  = [];
                    var values = [];
                    $.each(d, function(index, item) {
                        // items.push(item);
                        if(kriteria == 'Pendidikan') {
                            items.push(d[index].criteria);
                            values.push(d[index].total);
                        } else {
                            $.each(item, function(i,e) {
                                items.push(i);
                                values.push(e);
                            })
                        }
                    })
                    var barChart = {
                        labels: items,
                        datasets: [
                            {
                                label: "Jumlah Penduduk Berdasarkan " + kriteria,
                                backgroundColor: "rgba(95, 190, 170, 0.3)",
                                borderColor: "#5fbeaa",
                                hoverBackgroundColor: "rgba(95, 190, 170, 0.6)",
                                hoverBorderColor: "#5fbeaa",
                                data: values
                            }
                        ]
                    };
                    respChart($("#bar"),'Bar',barChart);
                }
            })
        }

        var d = new Date();
        var tahun = d.getFullYear();

        function createGrafikSurat(Tahun) {
            $.ajax({
                url: base_url + '/buat_surat/surat_grafik/'+tahun,
                dataType: 'JSON',
                success: function(d) {
                    //barchart
                    var items  = [];
                    var values = [];
                    $.each(d, function(index, item) {
                        $.each(item, function(i,e) {
                            items.push(i);
                            values.push(e);
                        })
                    })
                    var barChart = {
                        labels: items,
                        datasets: [
                            {
                                label: "Jumlah Surat Per-Bulan Tahun " + Tahun,
                                backgroundColor: "rgba(95, 190, 170, 0.3)",
                                borderColor: "#5fbeaa",
                                hoverBackgroundColor: "rgba(95, 190, 170, 0.6)",
                                hoverBorderColor: "#5fbeaa",
                                data: values
                            }
                        ]
                    };
                    respChart($("#surat"),'Bar',barChart);
                }
            })
        }

        $(document).on('click', '.changeCriteria', function(e){
            e.preventDefault();

            var Criteria = $(this).data('criteria');
            $('.Criteria').html(' Berdasarkan '+ Criteria +' <span class="caret"></span> ');
            createGrafik(Criteria);
        })

        $(document).on('click', '.changeTahun', function(e){
            e.preventDefault();

            var Tahun = $(this).data('criteria');
            $('.Criteria').html(' Tahun '+ Tahun +' Pendidikan <span class="caret"></span> ');
            createGrafikSurat(Tahun);
        })
        
        createGrafik();
        createGrafikSurat(tahun);
        
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init();
}(window.jQuery);

