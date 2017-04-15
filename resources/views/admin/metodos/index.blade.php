@extends('layouts/partials/sidebar')

@section('title')
  Indicadores
@endsection
   <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
   <script src="http://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/data.js"></script>
   <script src="http://code.highcharts.com/modules/exporting.js"></script>

   <!-- Additional files for the Highslide popup effect -->
  <script src="https://www.highcharts.com/samples/static/highslide-full.min.js"></script>
  <script src="https://www.highcharts.com/samples/static/highslide.config.js" charset="utf-8"></script>
  <link rel="stylesheet" type="text/css" href="https://www.highcharts.com/samples/static/highslide.css" />
@section('content')

  <div id="grafica" style="min-width: 310px; height: 400px; margin: 0 auto">
    
    @if(Auth::user()->rol=="QUINDIO SOLIDARIO")
        <script type="text/javascript">
          $(function ($) {
            $('#grafica').highcharts({
                title: {
                    text: 'Indice de reuniones mensuales',
                    x: -20 //center
                },
                subtitle: {
                    text: 'Source: WorldClimate.com',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Cantidad de Reuniones'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: ''
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                  series: [{
                      name: 'COODEQ LEYENDA',
                      data: [7, 6, 9, 2, 1, 1, 2, 6, 3, 8, 4, 7]
                  }, {
                      name: 'FEUQ',
                      data: [2, 8, 5, 10, 6, 2, 4, 3, 2, 1, 2, 1]
                  }, {
                      name: 'FEIBG',
                      data: [2, 3, 2, 2, 2, 4, 2, 2, 2, 2, 3, 1]
                  }, {
                      name: 'COFINCAFE',
                      data: [3, 2, 4, 3, 1, 2, 1, 2, 2, 3, 6, 3]
                  }, {
                      name: 'AVANZA',
                      data: [1, 1, 4, 2, 1, 4, 3, 2, 2, 1, 1, 2]
                  }]
            });
          });
        </script>
    @endif

    @if(Auth::user()->rol=="COODEQ")
        <script type="text/javascript">
          $(function ($) {
            $('#grafica').highcharts({
                title: {
                    text: 'Indice de reuniones mensuales',
                    x: -20 //center
                },
                subtitle: {
                    text: 'Source: WorldClimate.com',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Cantidad de Reuniones'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: ''
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                  series: [{
                      name: 'COODEQ LEYENDA',
                      data: [7, 6, 9, 2, 1, 1, 2, 6, 3, 8, 4, 7]
                  }]
            });
          });
        </script>
    @endif

    @if(Auth::user()->rol=="COFINCAFÉ")
        <script type="text/javascript">
          $(function ($) {
            $('#grafica').highcharts({
                title: {
                    text: 'Indice de reuniones mensuales',
                    x: -20 //center
                },
                subtitle: {
                    text: 'Source: WorldClimate.com',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Cantidad de Reuniones'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: ''
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                  series: [{
                      name: 'COFINCAFÉ',
                      data: [3, 2, 4, 3, 1, 2, 1, 2, 2, 3, 6, 3]
                  }]
            });
          });
        </script>
    @endif

    @if(Auth::user()->rol=="FEIBG")
        <script type="text/javascript">
          $(function ($) {
            $('#grafica').highcharts({
                title: {
                    text: 'Indice de reuniones mensuales',
                    x: -20 //center
                },
                subtitle: {
                    text: 'Source: WorldClimate.com',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Cantidad de Reuniones'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: ''
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                  series: [{
                      name: 'FEIBG',
                      data: [2, 3, 2, 2, 2, 4, 2, 2, 2, 2, 3, 1]
                  }]
            });
          });
        </script>
    @endif

    @if(Auth::user()->rol=="FEUQ")
        <script type="text/javascript">
          $(function ($) {
            $('#grafica').highcharts({
                title: {
                    text: 'Indice de reuniones mensuales',
                    x: -20 //center
                },
                subtitle: {
                    text: 'Source: WorldClimate.com',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Cantidad de Reuniones'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: ''
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                  series: [{
                      name: 'FEUQ',
                      data: [2, 8, 5, 10, 6, 2, 4, 3, 2, 1, 2, 1]
                  }]
            });
          });
        </script>
    @endif

    @if(Auth::user()->rol=="AVANZA")
        <script type="text/javascript">
          $(function ($) {
            $('#grafica').highcharts({
                title: {
                    text: 'Indice de reuniones mensuales',
                    x: -20 //center
                },
                subtitle: {
                    text: 'Source: WorldClimate.com',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Cantidad de Reuniones'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: ''
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                  series: [{
                      name: 'AVANZA',
                      data: [1, 1, 4, 2, 1, 4, 3, 2, 2, 1, 1, 2]
                  }]
            });
          });
        </script>
    @endif
  </div> 
  <br>
  <div id="grafica2" style="min-width: 310px; height: 400px; margin: 0 auto">

  @if(Auth::user()->rol=="QUINDIO SOLIDARIO")
    <script type="text/javascript">
      $(function ($) {
        $('#grafica2').highcharts({
            title: {
                text: 'Indice de aumento de comentarios'
            },
            xAxis: {
                categories: ['Nivel 1', 'Nivel 2', 'Nivel 3', 'Nivel 4', 'Nivel 5']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de comentarios'
                }
            },
            labels: {
                items: [{
                    html: 'Clasificación de los comentarios',
                    style: {
                        left: '50px',
                        top: '18px',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                    }
                }]
            },
            series: [{
                type: 'column',
                name: 'FEUQ',
                data: [3, 2, 1, 3, 4]
            }, {
                type: 'column',
                name: 'FEIBG',
                data: [2, 3, 5, 7, 6]
            }, {
                type: 'column',
                name: 'AVANZA',
                data: [4, 3, 3, 9, 0]
            }, {
                type: 'column',
                name: 'COFINCAFE',
                data: [4, 3, 3, 9, 0]
            }, {
                type: 'column',
                name: 'COODEQ',
                data: [4, 3, 3, 9, 0]
            }, {
                type: 'spline',
                name: 'Average',
                data: [3, 2.67, 3, 6.33, 3.33],
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total Clasificación',
                data: [{
                    name: 'FEUQ',
                    y: 13,
                    color: Highcharts.getOptions().colors[0] 
                }, {
                    name: 'FEIBG',
                    y: 23,
                    color: Highcharts.getOptions().colors[1] 
                }, {
                    name: 'AVANZA',
                    y: 23,
                    color: Highcharts.getOptions().colors[1] 
                }, {
                    name: 'COFINCAFE',
                    y: 23,
                    color: Highcharts.getOptions().colors[1] 
                }, {
                    name: 'COODEQ',
                    y: 19,
                    color: Highcharts.getOptions().colors[2]
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }]
        });
      });
    </script>
  @endif

  @if(Auth::user()->rol=="COODEQ")
    <script type="text/javascript">
      $(function ($) {
        $('#grafica2').highcharts({
            title: {
                text: 'Indice de aumento de comentarios'
            },
            xAxis: {
                categories: ['Nivel 1', 'Nivel 2', 'Nivel 3', 'Nivel 4', 'Nivel 5']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de comentarios'
                }
            },
            labels: {
                items: [{
                    html: 'Clasificación de los comentarios',
                    style: {
                        left: '50px',
                        top: '18px',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                    }
                }]
            },
            series: [{
                type: 'column',
                name: 'COODEQ',
                data: [4, 3, 3, 9, 0]
            }, {
                type: 'spline',
                name: 'Average',
                data: [3, 2.67, 3, 6.33, 3.33],
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total Clasificación',
                data: [{
                    name: 'COODEQ',
                    y: 19,
                    color: Highcharts.getOptions().colors[2]
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }]
        });
      });
    </script>
  @endif

    @if(Auth::user()->rol=="COFINCAFÉ")
    <script type="text/javascript">
      $(function ($) {
        $('#grafica2').highcharts({
            title: {
                text: 'Indice de aumento de comentarios'
            },
            xAxis: {
                categories: ['Nivel 1', 'Nivel 2', 'Nivel 3', 'Nivel 4', 'Nivel 5']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de comentarios'
                }
            },
            labels: {
                items: [{
                    html: 'Clasificación de los comentarios',
                    style: {
                        left: '50px',
                        top: '18px',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                    }
                }]
            },
            series: [{
                type: 'column',
                name: 'COFINCAFÉ',
                data: [4, 3, 3, 9, 0]
            }, {
                type: 'spline',
                name: 'Average',
                data: [3, 2.67, 3, 6.33, 3.33],
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total Clasificación',
                data: [{
                    name: 'COFINCAFE',
                    y: 23,
                    color: Highcharts.getOptions().colors[1] 
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }]
        });
      });
    </script>
  @endif

  @if(Auth::user()->rol=="FEIBG")
    <script type="text/javascript">
      $(function ($) {
        $('#grafica2').highcharts({
            title: {
                text: 'Indice de aumento de comentarios'
            },
            xAxis: {
                categories: ['Nivel 1', 'Nivel 2', 'Nivel 3', 'Nivel 4', 'Nivel 5']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de comentarios'
                }
            },
            labels: {
                items: [{
                    html: 'Clasificación de los comentarios',
                    style: {
                        left: '50px',
                        top: '18px',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                    }
                }]
            },
            series: [{
                type: 'column',
                name: 'FEIBG',
                data: [2, 3, 5, 7, 6]
            }, {
                type: 'spline',
                name: 'Average',
                data: [3, 2.67, 3, 6.33, 3.33],
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total Clasificación',
                data: [{
                    name: 'FEIBG',
                    y: 23,
                    color: Highcharts.getOptions().colors[1] 
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }]
        });
      });
    </script>
  @endif

  @if(Auth::user()->rol=="FEUQ")
    <script type="text/javascript">
      $(function ($) {
        $('#grafica2').highcharts({
            title: {
                text: 'Indice de aumento de comentarios'
            },
            xAxis: {
                categories: ['Nivel 1', 'Nivel 2', 'Nivel 3', 'Nivel 4', 'Nivel 5']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de comentarios'
                }
            },
            labels: {
                items: [{
                    html: 'Clasificación de los comentarios',
                    style: {
                        left: '50px',
                        top: '18px',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                    }
                }]
            },
            series: [{
                type: 'column',
                name: 'FEUQ',
                data: [3, 2, 1, 3, 4]
            }, {
                type: 'spline',
                name: 'Average',
                data: [3, 2.67, 3, 6.33, 3.33],
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total Clasificación',
                data: [{
                    name: 'FEUQ',
                    y: 13,
                    color: Highcharts.getOptions().colors[0] 
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }]
        });
      });
    </script>
  @endif

  @if(Auth::user()->rol=="AVANZA")
    <script type="text/javascript">
      $(function ($) {
        $('#grafica2').highcharts({
            title: {
                text: 'Indice de aumento de comentarios'
            },
            xAxis: {
                categories: ['Nivel 1', 'Nivel 2', 'Nivel 3', 'Nivel 4', 'Nivel 5']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de comentarios'
                }
            },
            labels: {
                items: [{
                    html: 'Clasificación de los comentarios',
                    style: {
                        left: '50px',
                        top: '18px',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                    }
                }]
            },
            series: [{
                type: 'column',
                name: 'AVANZA',
                data: [4, 3, 3, 9, 0]
            }, {
                type: 'spline',
                name: 'Average',
                data: [3, 2.67, 3, 6.33, 3.33],
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total Clasificación',
                data: [{
                    name: 'AVANZA',
                    y: 23,
                    color: Highcharts.getOptions().colors[1] 
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }]
        });
      });
    </script>
  @endif

  </div>

  <div id="highslide1" style="min-width: 310px; height: 400px; margin: 0 auto">

    @if(Auth::user()->rol=="QUINDIO SOLIDARIO")
    <script type="text/javascript">
      $(function ($) {

      // Get the CSV and create the chart
      $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=analytics.csv&callback=?', function (csv) {

          $('#highslide1').highcharts({

              data: {
                  csv: csv
              },

              title: {
                  text: 'Diario de visitas a www.softsolidario.com'
              },

              subtitle: {
                  text: 'Source: Google Analytics'
              },

              xAxis: {

                  tickInterval: 7 * 24 * 3600 * 1000, // one week
                  tickWidth: 0,
                  gridLineWidth: 1,
                  labels: {
                      align: 'left',
                      x: 3,
                      y: -3
                  }
              },

              yAxis: [{ // left y axis
                  title: {
                      text: null
                  },
                  labels: {
                      align: 'left',
                      x: 3,
                      y: 16,
                      format: '{value:.,0f}'
                  },
                  showFirstLabel: false
              }, { // right y axis
                  linkedTo: 0,
                  gridLineWidth: 0,
                  opposite: true,
                  title: {
                      text: null
                  },
                  labels: {
                      align: 'right',
                      x: -3,
                      y: 16,
                      format: '{value:.,0f}'
                  },
                  showFirstLabel: false
              }],

              legend: {
                  align: 'left',
                  verticalAlign: 'top',
                  y: 20,
                  floating: true,
                  borderWidth: 0
              },

              tooltip: {
                  shared: true,
                  crosshairs: true
              },

              plotOptions: {
                  series: {
                      cursor: 'pointer',
                      point: {
                          events: {
                              click: function (e) {
                                  hs.htmlExpand(null, {
                                      pageOrigin: {
                                          x: e.pageX || e.clientX,
                                          y: e.pageY || e.clientY
                                      },
                                      headingText: this.series.name,
                                      maincontentText: Highcharts.dateFormat('%A, %b %e, %Y', this.x) + ':<br/> ' +
                                          this.y + ' visitantes',
                                      width: 200
                                  });
                              }
                          }
                      },
                      marker: {
                          lineWidth: 1
                      }
                  }
              },

              series: [{
                  name: 'Todos los visitantes',
                  lineWidth: 4,
                  marker: {
                      radius: 4
                  }
              }, {
                  name: 'Nuevos Visitantes'
              }]
          });
      });
    });
    </script>
  @endif
  </div>

@endsection
